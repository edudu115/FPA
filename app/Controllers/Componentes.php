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
                'cursos_idCurso'=>$this->request->getPost('curso_idCurso')
            ];
            $this->componenteModel->save($dados);

            $dados2 = [
                'idHorario' => $this->request->getPost('idHorario'),
                'componente_idComponentes'=>$this->request->getPost('idComponente'),
                'diaSemana'=>$this->request->getPost('diaSemana'),
                'horaInicio'=>$this->request->getPost('horaInicio'),
                'horaFim'=>$this->request->getPost('horaFim')
            ];
            $this->horarioModel->save($dados2);

            $this->response->redirect(base_url('Componentes/viewComponente'));
        }

        public function deleteComponente($id){
            $this->horarioModel->deleteHorario($id);
            $this->response->redirect(base_url('Componentes/viewComponente'));
        }

        public function updateComponente($id, $idHorario) {
            $dados = ['cursos' => $this->cursoModel->find(),
                      'componente' => $this->componenteModel->find($id),
                      'horario' => $this->horarioModel->find($idHorario)];

            return view('formComponentesView', $dados);
        }

    }
