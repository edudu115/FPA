<?php

    namespace App\Controllers;

    class Atribuido extends BaseController
    {
        private $AtribuidoModel;
        public function __construct(){
            $this->AtribuidoModel = new \App\Models\AtribuidoModel();
        }

        public function atribuidoView(){

            return view('atribuidoView',[
                                            'atribuidos' => $this->AtribuidoModel->find(),
                                        ]);
        }

        // public function salveComponente(){

        //     $this->componenteModel->savw
        // }
    }

?>