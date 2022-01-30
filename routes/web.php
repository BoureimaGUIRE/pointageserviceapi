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

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->group(['prefix' => 'pointageservice'], function () use ($router) {
        $router->get('/', ['uses' => 'PointageController@index']);
        $router->post('/', ['uses' => 'PointageController@store']);
        $router->get('/{id}', ['uses' => 'PointageController@show']);
        $router->patch('/{id}', ['uses' => 'PointageController@update']);
        $router->delete('/{id}', ['uses' => 'PointageController@destroy']);
    });
});
