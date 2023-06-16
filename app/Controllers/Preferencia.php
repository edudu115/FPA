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

    public function viewAtribuido()
    {
        $retorna = $this->preferenciaModel->SelectAtribuidoPara();
        $dados = [
            'retorna' => $retorna,
            'cargoUsuario' => $this->session->cargoUsuario,
        ];
        return view('atribuidoView', $dados);
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
}
