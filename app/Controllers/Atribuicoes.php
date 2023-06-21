<?php

    namespace App\Controllers;

    class Atribuicoes extends BaseController
    {

        private $componenteModel;
        private $preferenciaModel;
        private $usuarioModel;
        private $horarioModel;

        public function __construct()
        {
            $this->componenteModel = new \App\Models\ComponentesModel();
            $this->preferenciaModel = new \App\Models\PreferenciaModel();
            $this->usuarioModel = new \App\Models\UsuarioModel();
            $this->horarioModel = new \App\Models\HorarioModel();
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
        private function componentePreferencial($idComponente, $prioridade)
        {
            $preferencias = $this->preferenciaModel->find();
            
            $teste = false;
            $i = 0;
            foreach($preferencias as $preferencia)
            {
                $prioridadeFixa = $preferencia->prioridade;
                $preferencia = $preferencia->componentes_idComponentes;
                $i++;

                if($preferencia == $idComponente and $prioridadeFixa == $prioridade)        
                    $teste = true;
            }
            if($teste)
                return true;
            else
                return false;
        }
//=======================================================================
    
//=======================================================================
//verificando se  o preofessor tem o horario livre
        private function checaProfessor($componente, $usuario)
        {
            $user = $this->componenteModel->findId($usuario);

            $horarioFixo = $this->horarioModel->horarioComponente($componente);
            $horarioFixo = ['idComponente' => $horarioFixo[0]->componente_idComponentes,
                           'diaSemana' => $horarioFixo[0]->diaSemana,
                           'horaInicio' => $horarioFixo[0]->horaInicio];

            foreach($user as $horarioUser)
            {
                $horario = $this->horarioModel->horarioComponente($horarioUser->idComponentes);
                $horario = ['idComponente' => $horario[0]->componente_idComponentes,
                            'diaSemana' => $horario[0]->diaSemana,
                            'horaInicio' => $horario[0]->horaInicio];

                if($horarioFixo['diaSemana'] == $horario['diaSemana'] and 
                   $horarioFixo['horaInicio'] == $horario['horaInicio'])
                {
                    return false;//horarios se repetem;
                }
            }
            return true;
        }
//=======================================================================

//=======================================================================
//CASO MAIS DE UMA PESSOA MARCOU COMO PRIMÁRIO OU SECUNDÁRIO
        public function preferenciasIguais($idComponente, $prioridade)
        {
            $preferencias = $this->preferenciaModel->repeticaoPreferencia($idComponente, $prioridade);

            foreach($preferencias as $preferencia)
            {
                $usuario = $preferencia->usuario_idUsuario;
                $usuarioDados = $this->usuarioModel->desempateUsuario($usuario);

                if($this->checaProfessor($idComponente, $usuario))
                {
                    if(sizeof($preferencias) >= 1)
                    {
                        if(sizeof($preferencias) == 1) //caso haja apenas um primário
                        {
                            $idUsuario = $preferencias[0]->usuario_idUsuario;
                            $auxiliar['idUsuario'] = $idUsuario;
                        }
                        
                        if(sizeof($preferencias) > 1)//caso haja mais de um primario
                        {
                            $auxiliar = ['idUsuario' => 0,'tempoCampus' => -1,
                                        'tempoExp' => -1,'tempoProfissional' => -1,
                                        'tempoInstituicao' => -1, 
                                        'nivelCarreira' => -1 , 'idade' => -1];

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
                    }
                    return $auxiliar['idUsuario'];
                }
            }
        }
//=======================================================================


//=======================================================================
//VERIFICAÇÃO DO HORÁRIO
        // public function atribuicaoHorario($idComponente, $prioridade)
        // {
        //     $horarioFixo = $this->horarioModel->horarioComponente($idComponente);
        //     $horarioFixo = ['idComponente' => $horarioFixo[0]->componente_idComponentes,
        //                    'diaSemana' => $horarioFixo[0]->diaSemana,
        //                    'horaInicio' => $horarioFixo[0]->horaInicio];

        //     if($this->componentePreferencial($idComponente, $prioridade) == true)//se alguém marcou o componente como preferencial
        //     {
        //         $auxiliar = $this->preferenciasIguais($idComponente, $prioridade);

        //         if(sizeof($this->componenteModel->findId($auxiliar))>=1)//se o o usuario ja foi atribuido para alguma outra materia
        //         {
        //             $atribuidoPara = $this->componenteModel->findId($auxiliar);
        //             foreach($atribuidoPara as $horarioUser)
        //             {
        //                 $horario = $this->horarioModel->horarioComponente($horarioUser->idComponentes);
        //                 $horario = ['idComponente' => $horario[0]->componente_idComponentes,
        //                             'diaSemana' => $horario[0]->diaSemana,
        //                             'horaInicio' => $horario[0]->horaInicio];

        //                 if($horarioFixo['diaSemana'] == $horario['diaSemana'] and 
        //                    $horarioFixo['horaInicio'] == $horario['horaInicio'])
        //                 {
        //                     $this->preferenciaModel->deletePreferencia($idComponente, $auxiliar);
        //                     return false;//horarios se repetem;
        //                 }
        //             }
        //         }
        //         return $auxiliar;//horario livre
        //     }
        //     else
        //     {
        //         return false;//ninguém marcou o componente como preferencial
        //     }
        // }
//=======================================================================


//=======================================================================
//FUNÇÃO PRINCIPAL
        public function atribuicao()
        {
            $componentes = $this->componenteModel->find();
            foreach($componentes as $componente)
            {
                var_dump($componente->idComponentes);

                // $candidato = $this->preferenciasIguais($componente->idComponentes, 1);
                // echo "$candidato para $componente->idComponentes <br>";
                // $componente = $componente->idComponentes;
                // //var_dump($this->componentePreferencial($componente, 1));

                // if($this->componentePreferencial($componente, 1))
                // {
                //     
                //     $this->atribuidoPara($componente, $candidato);
                // }
                // elseif($this->componentePreferencial($componente, 2))
                // {
                //     $candidato = $this->preferenciasIguais($componente, 2);
                //     $this->atribuidoPara($componente, $candidato);
                // }
                for($i = 1; $i <= 2; $i++)
                {
                    $componente = $componente->idComponentes;
                    if($this->componentePreferencial($componente, $i))
                    {
                        $candidato = $this->preferenciasIguais($componente, 1);
                        $this->atribuidoPara($componente, $candidato);
                    }
                }
            }
        }

//=======================================================================
    }



?>