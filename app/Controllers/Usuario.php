<?php

    namespace App\Controllers;

    class Usuario extends BaseController
    {
        private $userModel;

        public function __construct()
        {
            $this->userModel = new \App\Models\UsuarioModel;
        }

        public function insercao()
        {
            $dados = [
                "nome" => $this->request->getPost(""),
                "prontuario" => $this->request->getPost(""),
                "senha" => $this->request->getPost(""),
                "cpf" => $this->request->getPost(""),
                "cargo" => $this->request->getPost(""),
                "tempoCampus" => $this->request->getPost(""),
                "tempoExp" => $this->request->getPost(""),
                "tempoProfissional" => $this->request->getPost(""),
                "tempoInstituicao" => $this->request->getPost(""),
                "nivelCarreira" => $this->request->getPost(""),
                "idade" => $this->request->getPost("")
            ];

            $this->userModel->insert($dados);
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