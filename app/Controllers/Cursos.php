<?php

    namespace App\Controllers;

    class Cursos extends BaseController{

        private $cursoModel;

        public function __construct()
        {
            $this->cursoModel = new \App\Models\CursosModel();
        }

        public function viewCursos(){
            return view('formComponentesView',  [
                                                    'cursos'=>$this->cursoModel->find()
                                                ]);
        }

        
    }



?>