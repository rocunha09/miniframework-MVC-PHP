<?php


namespace App\Controllers;


use App\Connection;
use App\Models\Info;
use App\Models\Produto;

use MF\Controller\Action;
use MF\Model\Container;

//inclui a classe Action do namespace MF\Controller para extender

class IndexController extends Action {

    public function index(){
        $produto = Container::getModel('Produto');
        $produtos = $produto->getProdutos();
        $this->view->dados = $produtos;

        $this->render('index', 'layout1');
    }

    public function sobreNos(){
         $info = Container::getModel('Info');
        $informacoes = $info->getInfo();
        $this->view->dados = $informacoes;

        $this->render('sobreNos', 'layout1');
    }

    public function contato(){

        $this->render('contato', 'layout1');
    }

}