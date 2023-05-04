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

        // public function salveComponente(){

        //     $this->componenteModel->savw
        // }
    }

?>