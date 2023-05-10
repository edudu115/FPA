<?php

    namespace App\Controllers;

    class Preferencia extends BaseController
    {
        private $preferenciaModel;

        public function __construct(){
            $this->preferenciaModel = new \App\Models\PreferenciaModel();
        }

        public function savePrefencia(){
            $this->preferenciaModel->save([
                                            'professor_idProfessor'=>$this->request->getPost('professor_idProfessor'),
                                            'componentes_idComponentes'=>$this->request->getPost('componentes_idComponentes'),
                                            'prioridade'=>$this->request->getPost('prioridade')
            ]);
        }
        
    }

?>