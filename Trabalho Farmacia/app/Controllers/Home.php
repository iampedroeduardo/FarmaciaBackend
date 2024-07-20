<?php

namespace App\Controllers;
use App\Models\AutomoveisModel;
use App\Models\FarmacoModel;

class Home extends BaseController
{
    public function index(): string
    {
        return view('inicio');
    }
    public function cadastro(): string
    {
        return view('cadastro');
    }
    public function cadastrar(): string
    {
        $data = array(
            'nome' => $this->request->getVar('nome'),
            'laboratorio' => $this->request->getVar('laboratorio'),
            'preco' => $this->request->getVar('preco'),
            'quantidade' => $this->request->getVar('quantidade')
        );
        $farmaco_model = new FarmacoModel;        
        $farmaco_model->insert($data);
        return view('inicio');
    }
}
