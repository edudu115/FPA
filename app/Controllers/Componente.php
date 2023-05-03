<?php

    namespace App\Controllers;

use ReflectionFunctionAbstract;

    class Componente extends BaseController
    {
        private $componenteModel;
        public function __construct(){
            $this->componenteModel = new \App\Models\ComponentesModel();
        }

        public function infoCadastro(){
            return view('componentesView',[
                                            'componetes' => $this->componenteModel->find(),
                                          ]);
        }
    }

?>