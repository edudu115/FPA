<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('login');
    }

    public function cadastroView()
    {
        echo 1;
        //return view ('cadastroView');
    }

    public function Cadastro()
    {
        return view('cadastroView');
    }

}
