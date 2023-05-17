<?php

    namespace App\Controllers;

    class Preferencia extends BaseController
    {
        private $preferenciaModel;

        public function __construct(){
            $this->preferenciaModel = new \App\Models\PreferenciaModel();
        }

        public function savePreferencia(){
            // $ret = $this->request->getPost("preferencia0");
            // print_r($ret);
            
            $i=0;
            $retorno = $this->request->getPost("preferencia".$i);
            echo $retorno;

            // $p = false;
            // for($i = 0; $p == true; $i++){
            //     $retorno = $this->request->getPost("preferencia".$i);
            //     echo $retorno;
            //     if($retorno == null){
            //         $p = true;
            //     }
            // }
                // $retorno = $this->request->getPost('preferencia'.$i);
                // print_r($retorno);
                // if(empty($retorno)){
                //     echo "vazio<br>";
                // }else{
                //     echo "cheio<br>";
                // }
            
            // var_dump($retorno);

            // $i = 0;
            // $retorno = $this->request->getPost('preferencia'.$i);
            // while(!empty($retorno))
            // {
            //     print_r($retorno);
            //     $i++;
            //     $retorno = $this->request->getPost('preferencia'.$i);
            // }
        }
    }

?>