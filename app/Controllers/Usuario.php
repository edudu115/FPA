<?php

namespace App\Controllers;

class Usuario extends BaseController
{
    private $userModel;
    private $preferenciaModel;
    private $componenteModel;
    private $session;

    public function __construct()
    {
        $this->userModel = new \App\Models\UsuarioModel;
        $this->preferenciaModel = new \App\Models\PreferenciaModel();
        $this->componenteModel = new \App\Models\ComponentesModel();
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

    public function alterarSenha()
    {
        return view('Alterar_SenhaViews');
    }

    public function logoutUsuario()
    {
        session_destroy();
        $this->response->redirect(base_url());
    }


    public function viewAtribuido()
    {
        $cargoUsuario = $this->session->get('usuario')['cargoUsuario'];
        if($cargoUsuario == 'c')
        {
            $retorna = $this->preferenciaModel->SelectAtribuidoPara();
            $dados = [
                'retorna' => $retorna,
                'cargoUsuario' => $this->session->cargoUsuario,
            ];
            return view('atribuidoView', $dados);
        }
        else
        {
            $idUsuario = $this->session->get('usuario')['idUsuario'];
            $retorna = $this->preferenciaModel->SelectAtribuidoParaProf($idUsuario);
            $dados = [
                'retorna' => $retorna,
                'cargoUsuario' => $this->session->cargoUsuario,
            ];
            return view('atribuidoView', $dados);
        }
    }

    public function formSenha()
    {
        $idUsuario = $this->session->get('usuario')['idUsuario'];
        $senhaAtual = $this->request->getPost("senhaAtual");
        $pass = $this->userModel->find($idUsuario);
        $pass = $pass->senha;

        if($pass == $senhaAtual)
        {
            $senha1 = $this->request->getPost("senha1");
            $senha2 = $this->request->getPost("senha2");
            if($senha1 == $senha2)
            {
                $dados = ["idUsuario" => $idUsuario,
                          "senha" => $senha1];
                $this->userModel->save($dados);
                $this->session->setFlashdata('senhaAlterada', '<h5 class="text-success"> Senha alterada com sucesso! </h5>');
                $this->response->redirect(base_url('Usuario/alterarSenha'));
            }
        }
        else
        {
            $this->session->setFlashdata('senhaAlterada', '<h5 class="text-danger"> Dados incorretos </h5>');
            $this->response->redirect(base_url('Usuario/alterarSenha'));
        }
    }

}
