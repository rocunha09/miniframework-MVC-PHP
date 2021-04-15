<?php
namespace App;

use MF\Init\Bootstrap;

class Route extends  Bootstrap {
//a lista de rotas muda de acordo com o projeto criado, e todos os métodos que realizam o trabalho de roteamento foram levados para Boostrap, em vendor/MF/Init/...

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

        $routes['contato'] = array(
            'route' => '/contato',
            'controller' => 'IndexController',
            'action' => 'contato'
        );

        $this->setRoutes($routes);

    }
}

?>