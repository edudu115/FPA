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
        public function componentePreferencial($idComponente)
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
                echo 'true';
            else
                echo 'false';
        }
//=======================================================================
    

//=======================================================================
//CASO MAIS DE UMA PESSOA MARCOU COMO PRIMÁRIO OU SECUNDÁRIO
        public function preferenciasIguais($idComponente, $prioridade)
        {
            $preferencias = $this->preferenciaModel->repeticaoPreferencia($idComponente, $prioridade);

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
                    $this->atribuidoPara($idComponente, $auxiliar['idUsuario']);
                }
            }
        }
//=======================================================================
    }
?>