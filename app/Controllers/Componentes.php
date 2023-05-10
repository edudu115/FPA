<?php

    namespace App\Controllers;

use ReflectionFunctionAbstract;

    class Componentes extends BaseController
    {
        private $componenteModel;
        public function __construct(){
            $this->componenteModel = new \App\Models\ComponentesModel();
        }

        public function viewComponente(){

            return view('componentesView',[
                                            'componentes' => $this->componenteModel->find(),
                                        ]);
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