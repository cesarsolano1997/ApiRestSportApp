<?php

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

/* Routing de users */
/*$router->get('/user','UserController@index');*/
$router->get('/user/{name}/{pass}','UserController@getUser');
$router->get('/user/create/{name}/{pass}','UserController@createUser');

/* Routing de pais */
$router->get('/pais','PaisController@index');

/* Routing de ciudad */
$router->get('/ciudad','CiudadController@index');

/* Routing de entrenamiento*/
$router->get('/entrenamiento/{user_id}/{entr_date}','EntrenamientoController@createEntr');
$router->get('/dentrenamiento/{entr_id}/{dentr_date}/{dentre_step}','dEntreController@createDentr');