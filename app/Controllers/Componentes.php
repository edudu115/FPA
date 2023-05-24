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
            }

        public function deleteComponente($idComponente, $idHorario){
            $this->horarioModel->deleteHorario("IPW");
            //$this->componenteModel->delete($idComponente);

            echo "aa";
        }
    }

?>