<?php
namespace App;

class Route{
    private $routes;

    public function __construct(){
        $this->initRoutes();
        $this->run($this->getUrl());
    }

    public function getRoutes(){
        return $this->routes;
    }

    public function setRoutes(array $routes){
        return $this->routes = $routes;
    }

    public function initRoutes(){
        $routes['home'] = array(
            'route' => '/',
            'controller' => 'IndexController',
            'action' => 'index'
        );

        $routes['sobre_nos'] = array(
            'route' => '/sobre_nos',
            'controller' => 'IndexController',
            'action' => 'sobreNos'
        );

        $this->setRoutes($routes);

    }

    public function run($url){
        echo '**'.$url.'**';

        foreach ($this->getRoutes() as $key => $route){
            if($url == $route['route']){
                //monta dinamicamente o nome da classe que precisa ser intanciada e realiza a instância:
                $class = "App\\Controllers\\". $route['controller'];
                $controller = new $class;

                //disparando o método (action do controller instanciado), de forma dinamica:
                $action = $route['action'];
                $controller->$action();
            }
        }
    }

    public function getUrl(){
        return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    }
}

?>