<?php

    namespace App\Controllers;

    class Atribuicoes extends BaseController
    {

        private $componenteModel;
        private $preferenciaModel;
        private $usuarioModel;

        public function __construct()
        {
            $this->componenteModel = new \App\Models\ComponentesModel();
            $this->preferenciaModel = new \App\Models\PreferenciaModel();
            $this->usuarioModel = new \App\Models\UsuarioModel();
        }

//=======================================================================
//ATRIBUIR MATERIA PRO USUARIO
        private function atribuidoPara($idComponente, $idUsuario)
        {
            $dados = ['idComponentes' => $idComponente,
                      'usuario_atribuidoPara' => $idUsuario];

            $this->componenteModel->save($dados);
        }
//=======================================================================
 

//=======================================================================
//VERIFICAR SE ALGUÉM MARCOU O COMPONENTE COMO PREFERENCIAL
        private function componentePreferencial($idComponente)
        {
            $preferencias = $this->preferenciaModel->find();
            
            $teste = false;
            $i = 0;
            foreach($preferencias as $preferencia)
            {
                $preferencia = $preferencia->componentes_idComponentes;
                $i++;

                if($preferencia == $idComponente)        
                    $teste = true;
            }
            if($teste)
                return true;
            else
                return false;
        }

//=======================================================================
    

//=======================================================================
//CASO MAIS DE UMA PESSOA MARCOU COMO PRIMÁRIO
        public function preferenciasPrimaria($idComponente)
        {
            $preferencias = $this->preferenciaModel->repeticaoPreferencia($idComponente, 1);

            if(sizeof($preferencias) >= 1)
            {
                if(sizeof($preferencias) == 1) //caso haja apenas um primário
                {
                    $idUsuario = $preferencias[0]->usuario_idUsuario;
                    $this->atribuidoPara($idComponente, $idUsuario);
                }
                
                if(sizeof($preferencias) > 1)//caso haja mais de um primario
                {
                    $auxiliar = ['idUsuario' => 0,'tempoCampus' => -1,
                                 'tempoExp' => -1,'tempoProfissional' => -1,
                                 'tempoInstituicao' => -1, 
                                 'nivelCarreira' => -1 , 'idade' => -1];
                    foreach($preferencias as $preferencia)
                    {
                        $usuario = $preferencia->usuario_idUsuario;
                        $usuarioDados = $this->usuarioModel->desempateUsuario($usuario);

                        if($usuarioDados[0]['tempoCampus'] > $auxiliar['tempoCampus'])//caso o tempoCampus do usuario sejam diferentes 
                        {
                            $auxiliar = $usuarioDados[0];
                        }

                        elseif($usuarioDados[0]['tempoCampus'] == $auxiliar['tempoCampus'])//caso o tempoCampus do usuario sejam iguais
                        {
                            if($usuarioDados[0]['tempoExp'] > $auxiliar['tempoExp'])//caso o tempoExp sejam diferentes
                            {
                                $auxiliar = $usuarioDados[0];
                            }

                            elseif($usuarioDados[0]['tempoExp'] == $auxiliar['tempoExp'])//caso o tempoExp sejam iguais
                            {
                                if($usuarioDados[0]['tempoProfissional'] > $auxiliar['tempoProfissional'])//caso o tempoProfissional sejam diferentes
                                {
                                    $auxiliar = $usuarioDados[0];
                                }
                                
                                elseif($usuarioDados[0]['tempoProfissional'] == $auxiliar['tempoProfissional'])//caso o tempoProfissional sejam iguais
                                {
                                    if($usuarioDados[0]['tempoInstituicao'] > $auxiliar['tempoInstituicao'])//caso o tempoInstituicao sejam diferentes
                                    {
                                        $auxiliar = $usuarioDados[0];
                                    }

                                    elseif($usuarioDados[0]['tempoInstituicao'] == $auxiliar['tempoInstituicao'])//caso o tempoInstituicao sejam iguais
                                    {
                                        if($usuarioDados[0]['nivelCarreira'] > $auxiliar['nivelCarreira'])//caso o nivelCarreira sejam diferentes
                                        {
                                            $auxiliar = $usuarioDados[0];
                                        }
                                        elseif($usuarioDados[0]['nivelCarreira'] == $auxiliar['nivelCarreira'])//caso o nivelCarreira sejam iguais
                                        {
                                            if($usuarioDados[0]['idade'] > $auxiliar['idade'])//caso a idade sejam diferentes
                                            {
                                                $auxiliar = $usuarioDados[0];
                                            }
                                            elseif($usuarioDados[0]['idade'] == $auxiliar['idade'])//caso a idade sejam iguais
                                            {
                                                echo "todos os atributos são iguais";
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                    print_r($auxiliar);
                    echo "<br><br>";
                    //print_r($usuarioDados[0]);
                }
            }
        }
//=======================================================================


//=======================================================================
//CASO MAIS DE UMA PESSOA MARCOU COMO SECUNDÁRIO
public function preferenciasSecundaria($idComponente)
{
    $preferencia = $this->preferenciaModel->repeticaoPreferencia($idComponente, 2);

    if(sizeof($preferencia) > 1)
    {
        echo "Mais de um secundário";
    }
    else
    {
        echo "menos de um secundário";
    }
}
//=======================================================================


//=======================================================================
//COMPARANDO E DECIDINDO QUAL USUARIO FICARÁ COM O COMPONENTE
        // public function comparacoes()
        // {
        //     $componentes = $this->componenteModel->findId();
        //     $preferencias = $this->preferenciaModel->find();
        //     foreach($componentes as $preferencia)//percorrendo a tabela de preferencias
        //     {
        //         $idPreferencia = $preferencia;
        //         //$idUsuario = $preferencia->usuario_idUsuario;
        //         echo $idPreferencia->idComponentes . "<br>";
        //         if($this->componentePreferencial($idPreferencia)) //existe alguem usuario com preferencia nessa materia
        //         {

        //             if(sizeof($this->preferenciaModel->repeticaoPreferencia($idPreferencia)) > 1) //existe mais de um usuario com preferencias na mesma materia
        //             {

        //                 $materias = $this->preferenciaModel->repeticaoPreferencia($idPreferencia);
        //                 print_r($materias);
        //                 // foreach($materias as $materia)
        //                 // {
        //                 //     var_dump($materia);
        //                 //     echo "<br><br>";
        //                 //     // if($materia->prioridade == 1)
        //                 //     // {
        //                 //         echo "$idUsuario marcou a materia $idPreferencia como $materia->prioridade <br><br>";
        //                 //     // }
        //                 // }

        //             }

        //         }
        //     }
        // }
//=======================================================================

    }
?>