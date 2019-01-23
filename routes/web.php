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
    return view('index');
});


$router->get('xinao', 'XinaoController@index');
$router->get('xinao/get', 'XinaoController@get');
$router->get('xinao/pass', 'XinaoController@pass');

$router->get('xinao/count', 'XinaoController@get_count');


$router->get('test/mysql/write', 'TestController@mysql_write');
$router->get('test/mysql/read', 'TestController@mysql_read');
$router->get('test/redis/write', 'TestController@redis_write');
$router->get('test/mysql/read', 'TestController@redis_read');
