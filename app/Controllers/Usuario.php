<?php

namespace App\Controllers;

class Usuario extends BaseController
{
    private $userModel;
    private $session;

    public function __construct()
    {
        $this->userModel = new \App\Models\UsuarioModel;
        $this->session = session();
    }

    public function index()
    {
        return view("login.php");
    }

    public function viewProfessor()
    {
        return view("inserirProfessorViews.php");
    }

    public function viewupdatecadastro()
    {
        return view("cadastroView.php");
    }

    public function logar()
    {
        $prontuario = $this->request->getPost('prontuario');
        $senha = $this->request->getPost('senha');

        $retorno = $this->userModel->verificar_login($prontuario, $senha);

        if ($retorno) {
            $array = [
                'cargoUsuario' => $retorno[0]->cargo,
                'idUsuario' => $retorno[0]->idUsuario,
                'nomeUsuario' => $retorno[0]->nome
            ];
            $this->session->set('usuario', $array);
            //$this->session->get('usuario')['cargoUsuario'];

            $dados = ["user" => $retorno[0]];
            return view('cadastroView', $dados);
        } else {
            $this->session->setFlashdata('loginError',true);
            $this->response->redirect(base_url());
        }
    }

    public function saveUsuario()
    {
        $dados = [
            "idUsuario" => $this->request->getPost('id'),
            "tempoCampus" => $this->request->getPost("tempoCampus"),
            "tempoExp" => $this->request->getPost("tempoExp"),
            "tempoProfissional" => $this->request->getPost("tempoProfissional"),
            "tempoInstituicao" => $this->request->getPost("tempoInstituicao"),
            "nivelCarreira" => $this->request->getPost("nivelCarreira"),
            "idade" => $this->request->getPost("idade")
        ];

        $this->userModel->save($dados);
        $this->response->redirect(base_url('Componentes/viewComponente'));
    }

    public function addUsuario()
    {
        $dados = ['nome' => $this->request->getPost('nome'),
                  'prontuario' => $this->request->getPost('prontuario'),
                  'senha' => $this->request->getPost('senha'),
                  'cpf' => $this->request->getPost('cpf')];

        $this->userModel->insert($dados);
        $this->session->setFlashdata('usuarioAdicionado',true);
        $this->response->redirect(base_url('Usuario/viewProfessor'));
    }

    public function logoutUsuario()
    {
        session_destroy();
        $this->response->redirect(base_url());
    }
}
