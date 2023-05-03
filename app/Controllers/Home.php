<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('componentesView');
    }

    public function Cadastro()
    {
        return view('cadastroView');
    }
}
