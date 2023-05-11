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

        public function salveComponente(){
             $this->componenteModel->save([
                                            'nomeMateria'=>$this->request->getPost('nomeMateria'),
                                            'diaHorario'=>$this->request->getPost('diaHorario'),
                                            'curso'=>$this->request->getPost('curso'),
                                            'horasSemanais'=>$this->request->getPost('horasSemanais')
             ]);
             $this->response->redirect('http://localhost/projetoFPA/FPA/public/Componentes/viewComponente');
        }

        public function deleteComponente($idComponentes){
            $this->componenteModel->delete(($idComponentes));
            $this->response->redirect('http://localhost/projetoFPA/FPA/public/Componentes/viewComponente');
        }
    }

?>