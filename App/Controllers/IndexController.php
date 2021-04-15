<?php


namespace App\Controllers;

//inclui a classe Action do namespace MF\Controller para extender
use MF\Controller\Action;

class IndexController extends Action {

    public function index(){
        /*
            Usando o atributo view (criado na classe abstrata action) de forma dinâmica, atribuindo dados a ele.
        */
        $this->view->dados = array('Sofá', 'Cadeira', 'Cama');
        $this->render('index');
    }

    public function sobreNos(){
        $this->view->dados = array('Computador', 'calculadora', 'caneta');
        $this->render('sobreNos');
    }

    public function contato(){
        $this->view->dados = array();
        $this->render('contato');
    }

}