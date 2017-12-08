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
    return "hopla Api.v1";
});


$router->group(['prefix' => 'v1'], function($router)
{
    // Users
    $router->get('bros','UserController@index');

    $router->get('bros/{id}','UserController@getUser');

    $router->post('bros','UserController@createUser');

    $router->put('bros/{id}','UserController@updateUser');

    $router->delete('bros/{id}','UserController@deleteUser');

    $router->post('bros/login','UserController@login');


    // Events
    $router->get('murge','EventController@index');

    $router->get('murge/{id}','EventController@getEvent');

    $router->post('murge','EventController@createEvent');

    $router->put('murge/{id}','EventController@updateEvent');

    $router->delete('murge/{id}','EventController@deleteEvent');

    $router->delete('murge/{id}','EventController@deleteEvent');

    $router->get('murge/cest-ce-soir/{id}','EventController@getCurrentEvent');

    $router->get('murge/cest-trop-tard/{id}','EventController@getPassedEvent');

    $router->post('murge/ramene-tes-fesses','EventController@sendEmailEvent');


});
