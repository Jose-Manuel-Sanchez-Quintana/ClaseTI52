<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/saludo/{nombre}', function ($nombre) {
    return 'Hola mi nombre '.$nombre;
});

$router->get('/edad/{edad}', function ($edad) {
    if ($edad >= 18 && $edad <= 100){
        echo 'Tu eres mayor de edad tienes: '.$edad;
    }elseif ($edad < 18 && $edad > 0){
        echo 'Tu eres menor de edad tienes: '.$edad;
    }elseif ($edad >= 100){
        echo 'Tu eres mayor de edad puede que estes muerto: '.$edad;
    }else{
        echo 'Tu no existes, eres un error tienes: '.$edad;
    }
});






$router->post('/saludo', function () {
    return 'Se creo un dato';
});

$router->put('/saludo', function (){
    return 'Se borra un dato';
});

$router->delete('/saludo', function (){
    return 'Se borra todo';
});
