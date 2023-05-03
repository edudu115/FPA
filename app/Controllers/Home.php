<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('informar_hr');
    }

    public function Cadastro()
    {
        return view('Cadastro');
    }
}
