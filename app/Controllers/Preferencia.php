<?php

namespace App\Controllers;

class Preferencia extends BaseController
{
    private $preferenciaModel;
    private $session;

    public function __construct()
    {
        $this->preferenciaModel = new \App\Models\PreferenciaModel();
        $this->session = \Config\Services::session();
    }

    public function viewPreferencia()
    {
        $retorna = $this->preferenciaModel->selecPreferencia();
        $retornaContagem = $this->preferenciaModel->contMateria();
        $dados = [
            'retorna' => $retorna,
            'retornaContagem' => $retornaContagem,
            'cargoUsuario' => $this->session->cargoUsuario,
        ];
        return view('prefenciaView', $dados);
    }


    public function viewPreferenciaClient()
    {
        $idUsuario = $this->session->get("usuario")["idUsuario"];
        $retorna = $this->preferenciaModel->selecPreferenciaPessoal($idUsuario);

        $dados = [
            'retorna' => $retorna
        ];

        return view('preferenciaViewClient', $dados);
    }

    public function savePreferencia()
    {
        $idUsuario = $this->session->get('usuario')['idUsuario'];

        $i = 0;
        $retorno = intval($this->request->getPost("preferencia" . $i));
        while (!empty($retorno)) {
            $componente = $this->request->getPost("id_componente" . $i);
            if ($retorno > 1) {
                $retorno = $retorno - 1;
                $dados = [
                    'usuario_idUsuario' => $idUsuario,
                    'componentes_idComponentes' => $componente,
                    'prioridade' => $retorno
                ];
                $this->preferenciaModel->insert($dados);
            }

            $i++;
            $retorno = intval($this->request->getPost("preferencia" . $i));
        }
        return redirect()->back();
    }

    public function deletePreferencia($idComponente)
    {
        $idUsuario = $this->session->get("usuario")["idUsuario"];
        $deletar = $this->preferenciaModel->deletePreferencia($idComponente, $idUsuario);
        $dados = [
            'deletar' => $deletar,
            'idComponente' => $idComponente
        ];
        return redirect()->back();
    }
}
