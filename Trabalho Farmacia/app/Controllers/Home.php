<?php

namespace App\Controllers;
use App\Models\FarmacoModel;

class Home extends BaseController
{
    public function index(): string
    {
        $model = new FarmacoModel;
        $data['dados'] = $model -> findAll();
        return view('inicio',$data);
    }
    public function cadastro(): string
    {
        return view('cadastro');
    }
    public function cadastrar()
    {
        $data = array(
            'nome' => $this->request->getVar('nome'),
            'laboratorio' => $this->request->getVar('laboratorio'),
            'preco' => $this->request->getVar('preco'),
            'quantidade' => $this->request->getVar('quantidade')
        );
        $farmaco_model = new FarmacoModel;        
        $farmaco_model->insert($data);
        return redirect()->to('/');
    }
    public function pesquisar(): string
    {
        $pesquisa = $this->request->getVar('pesquisa');
        $campo = $this->request->getVar('campo');
        $ordem = $this->request->getVar('ordem');
        $db = \Config\Database::connect();
        $builder = $db->table('remedio')->like($campo,$pesquisa)->orderBy($ordem,'DESC');
        $query = $builder->get();
        $data['dados'] = $query->getResultArray();
        return view('inicio',$data);
    }
}
