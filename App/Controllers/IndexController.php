<?php


namespace App\Controllers;


use App\Connection;
use App\Models\Produto;
use MF\Controller\Action;//inclui a classe Action do namespace MF\Controller para extender

class IndexController extends Action {

    public function index(){
        //Usando o atributo view (criado na classe abstrata action) de forma dinâmica, atribuindo dados a ele.
        //$this->view->dados = array('Sofá', 'Cadeira', 'Cama');

        //instanciar a conexão com o banco e o modelo, e assim poder manipular os dados e sua visualização

        //instancia de conexão com o banco
        $conn = Connection::getDb();

        //instancia do modelo
        $produto = new Produto($conn);

        $produtos = $produto->getProdutos();

        $this->view->dados = $produtos;

        $this->render('index', 'layout1');
    }

    public function sobreNos(){

        $this->render('sobreNos', 'layout3');
    }

    public function contato(){

        $this->render('contato', 'layout1');
    }

}