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


// $route->post('/contact', function use ($router){
//     retunr ''
// });

// $router->get('foo/{id}', function ($id) {
//     return 'Hello World '.$id;
// });


// $router->get('user/{id}', 'UserController@show');


// $router->post('user/make', 'UserController@make',);
$router->post('user/mail', 'UserController@makeMail',);