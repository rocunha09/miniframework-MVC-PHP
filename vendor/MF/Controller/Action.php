<?php


namespace MF\Controller;


abstract class Action{
    protected $view;

    public function  __construct(){
        /*
            Cria um objeto de forma dinâmica usando a stdClass do php e este objeto é atribuído ao
          atributo do controller podendo assim ser acessado em qualquer método e criar objetos dinâmicos
          com atributos dinâmicos conforme for necessário. [será usado nos controllers]
        */
        $this->view = new \stdClass();
    }

    protected function render($view, $layout){
        $this->view->page = $view;
        $file = '../App/Views/'.$layout.'.phtml';
        if(file_exists($file)){
            require_once '../App/Views/'.$layout.'.phtml';
        } else{
            $this->content();
        }

    }

    protected function content(){
        $classAtual = get_class($this);
        $classAtual = str_replace('App\\Controllers\\', '', $classAtual);
        $classAtual = strtolower(str_replace('Controller', '', $classAtual));

        return require_once '../App/Views/'.$classAtual.'/'.$this->view->page.'.phtml';
    }
}