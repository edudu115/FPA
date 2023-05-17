<?php

    namespace App\Controllers;

    class Preferencia extends BaseController
    {
        private $preferenciaModel;
        private $session;

        public function __construct(){
            $this->preferenciaModel = new \App\Models\PreferenciaModel();
            $this->session = \Config\Services::session();
        }

        public function savePreferencia()
        {
            $i = 0;
            $retorno = $this->request->getPost("preferencia".$i);
            while(!empty($retorno))
            {
                echo $retorno;
                $i++;
                $retorno = $this->request->getPost("preferencia".$i);
            }

            
        }
    }

?>