<?php

    namespace App\Controllers;

    class Usuario extends BaseController
    {
        private $userModel;
        private $session;

        public function __construct()
        {
            $this->userModel = new \App\Models\UsuarioModel;
            $this->session = \Config\Services::session();
        }

        public function logar()
        {
            $prontuario = $this->request->getPost('prontuario');
            $senha = $this->request->getPost('senha');

            $retorno = $this->userModel->verificar_login($prontuario, $senha);

            // PARA ACESSAR A SESSÃO: $this->session->chave;
            // NESTE CASO: $this->session->cargo;

            if($retorno)
            {
                $array = ['cargo' => $retorno[0]->cargo];
                $this->session->set($array);

                $dados = ["user" => $retorno[0]];
                return view('cadastroView', $dados);
            }
            else
            {
                $this->response->redirect(base_url());
            }
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