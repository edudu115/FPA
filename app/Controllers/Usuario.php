<?php

    namespace App\Controllers;

    class Usuario extends BaseController
    {
        private $userModel;

        public function __construct()
        {
            $this->userModel = new \App\Models\UsuarioModel;
        }

        public function logar()
        {

            $prontuario = $this->request->getPost('prontuario');
            $senha = $this->request->getPost('senha');

            $retorno = $this->userModel->verificar_login($prontuario, $senha);

            if($retorno)
            {
                $dados = ["user" => $retorno[0]];
                return view('cadastroView', $dados);
            }
            else
            {
                $this->response->redirect(base_url());
            }
        }

        public function findUsuario()
        {
            return view('cadastroView',[
                'user' => $this->userModel->find(),
              ]);
        }

        public function updateUsuario()
        {
            $dados = [
                "cargo" => $this->request->getPost("cargo"),
                "tempoCampus" => $this->request->getPost("tempoCampus"),
                "tempoExp" => $this->request->getPost("tempoExp"),
                "tempoProfissional" => $this->request->getPost("tempoProfissional"),
                "tempoInstituicao" => $this->request->getPost("tempoInstituicao"),
                "nivelCarreira" => $this->request->getPost("nivelCarreira"),
                "idade" => $this->request->getPost("idade")
            ];

        }
        
    }

?>