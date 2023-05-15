<?php

    namespace App\Controllers;
    class Componentes extends BaseController
    {
        private $componenteModel;
        public $session;
        public function __construct(){
            $this->componenteModel = new \App\Models\ComponentesModel();
            $this->session = \Config\Services::session();
        }

        public function viewComponente(){
            $dados = ['componentes' => $this->componenteModel->find(),
                      'cargo' => $this->session->cargo];

            return view('componentesView',[$dados]);
            }

        public function viewFormComponente(){
            return view('formComponentesView');
        }

        public function saveComponente(){

            $this->componenteModel->save([
                                            'nomeMateria'=>$this->request->getPost('nomeMateria'),
                                            'horario_idHorario'=>$this->request->getPost('horario_idHorario'),
                                            'cursos_idCurso'=>$this->request->getPost('cursos_idCurso'),
                                            'pediodo'=>$this->request->getPost('periodo'),
                                            'horasSemanas'=>$this->request->getPost('horasSemanas')
                                        ]);
            $this->response->redirect(base_url('Componentes/viewComponente'));
            }

        public function deleteComponente($idComponentes){
            $this->componenteModel->delete(($idComponentes));
            $this->response->redirect(base_url('Componentes/viewComponente'));
        }
    }

?>