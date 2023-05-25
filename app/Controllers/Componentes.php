<?php

    namespace App\Controllers;
    class Componentes extends BaseController
    {
        private $componenteModel;
        private $cursoModel;
        private $horarioModel;
        public $session;

        

        public function __construct(){
            $this->componenteModel = new \App\Models\ComponentesModel();
            $this->cursoModel = new \App\Models\CursosModel();
            $this->horarioModel = new \App\Models\HorarioModel();
            $this->session = \Config\Services::session();
        }
        
        public function viewComponente(){
            $retorna = $this->componenteModel->joinComponente();
            $dados = ['retorna'=> $retorna,
                      'cargoUsuario' => $this->session->cargoUsuario,
                      ];
            return view('componentesView', $dados);
        }

        public function viewFormComponente(){
            return view('formComponentesView', [
                                                    'cursos'=>$this->cursoModel->find()
                                               ]);
        }

        public function saveComponente(){
            $dados = [
                'idComponentes'=>$this->request->getPost('idComponente'),                                      
                'nomeMateria'=>$this->request->getPost('nomeMateria'),
                'periodo'=>$this->request->getPost('periodo'),
                'horasSemanais'=>$this->request->getPost('horasSemanais'),
                'cursos_idCurso'=>$this->request->getPost('curso_idCurso')];

            $this->componenteModel->insert($dados);

            $id = ["idComponente" => $this->request->getPost('idComponente')];
            return view('form2ComponentesView', $id);
            }

        public function saveHorario(){
            $dados2 = [
                'componente_idComponentes'=>$this->request->getPost('id'),
                'diaSemana'=>$this->request->getPost('diaSemana'),
                'horaInicio'=>$this->request->getPost('horaInicio'),
                'horaFim'=>$this->request->getPost('nomeMateria')
            ];
            //var_dump($dados2);
            $this->horarioModel->insert($dados2);
            return view('componentesView');
        }

        public function deleteComponente($id){
            $this->horarioModel->deleteHorario($id);
            //$this->componenteModel->delete($idComponente);
            //echo $id;

            //$this->componenteModel->delete($id);
        }
    }

?>