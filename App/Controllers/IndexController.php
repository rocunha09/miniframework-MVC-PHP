<?php


namespace App\Controllers;


class IndexController{

    public function index(){
        echo 'route->indexControler->action = index';
    }

    public function sobreNos(){
        echo 'route->indexControler->action = sobreNos';
    }

    public function contato(){
        echo 'route->indexControler->action = contato';
    }
}