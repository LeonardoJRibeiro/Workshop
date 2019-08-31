<?php

define('__APP_ROOT__', dirname(__DIR__));

require __APP_ROOT__ . '/vendor/autoload.php';

use App\Router;

$router = new Router();

$router
    /*->on('GET', 'path/to/action', function () {
        return 'this is a hero return';
    })*/
    ->post('/(\w+)', function ($module) {
        echo $_POST['nome'];
    })
    
    ->get('/cadastro', function(){
        ob_start();
        require dirname(__DIR__) . "/view/home.php";
        $html = ob_get_contents();
        ob_end_clean();
        return $html;
    })
    ->get('/(.*)', function(){
        return "Essa página não existe!";
    });
    

echo $router($router->method(), $router->uri());