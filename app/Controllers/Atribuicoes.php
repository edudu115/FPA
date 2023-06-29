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
        public function componentePreferencial($idComponente, $prioridade)
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
        public function checaHorario($componente, $usuario)
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

            if(sizeof($preferencias) >= 1)
            {
                $auxiliar = ['idUsuario' => null,'tempoCampus' => -1,
                'tempoExp' => -1,'tempoProfissional' => -1,
                'tempoInstituicao' => -1, 
                'nivelCarreira' => -1 , 'idade' => -1];

                foreach($preferencias as $preferencia)
                {
                    $usuario = $preferencia->usuario_idUsuario;
                    $usuarioDados = $this->usuarioModel->atributoUsuario($usuario);

                    if($this->checaHorario($idComponente, $usuario))
                    {
                        if(sizeof($preferencias) == 1) //caso haja apenas um primário
                        {
                            $idUsuario = $preferencias[0]->usuario_idUsuario;
                            $auxiliar['idUsuario'] = $idUsuario;
                        }
                        
                        if(sizeof($preferencias) > 1)//caso haja mais de um primario
                        {

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
                }
                return $auxiliar['idUsuario'];
            }
        }
//=======================================================================



//=======================================================================
//FUNÇÃO PRINCIPAL
        public function atribuicao()
        {
            $componentes = $this->componenteModel->find();
            foreach($componentes as $componente) //limpando a coluna atribuido para
            {
                $dados = ['idComponentes' => $componente->idComponentes,
                          'usuario_atribuidoPara' => null ];
                $this->componenteModel->save($dados);
            }

            foreach($componentes as $componente)
            {
                $componente = $componente->idComponentes;

                if($this->componentePreferencial($componente, 1))
                {
                    $candidato = $this->preferenciasIguais($componente, 1);;
                    $this->atribuidoPara($componente, $candidato);
                    echo "$candidato <br>";
                }
                elseif($this->componentePreferencial($componente, 2))
                {
                    $candidato = $this->preferenciasIguais($componente, 2);
                    $this->atribuidoPara($componente, $candidato);
                }
            }
            return redirect()->back();
        }
//=======================================================================
    }
?>