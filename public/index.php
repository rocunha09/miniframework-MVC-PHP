<?php
    require_once "../vendor/autoload.php";
    $route = new \App\Route();

    echo '<br>isto esta funcinando';
    echo '<h5>url acessada:</h5>';

    echo '<pre>';
    print_r($route->getUrl());
    echo '</pre>';
    echo '<Hr>';
    echo '<pre>';
    print_r($route->getRoutes());
    echo '</pre>';

?>