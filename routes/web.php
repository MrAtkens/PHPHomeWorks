<?php
use Klein\Klein;
use Klein\Request;
use Klein\Response;

/**
 * @var Klein $router
 */

$router->get('/', function ($request, $response) {
    return controller('PostsController@index', $request, $response);
});

$router->get('/post', function ($request, $response) {
    return controller('PostsController@view', $request, $response);
});

$router->with('/create', function() use ($router){
    $router->get('', function(){
        return controller('PostsController@create');
    });

    $router->post('', function($request, $res){
        return controller('PostsController@insert', $request, $res);
    });
});

$router->with('/update', function() use ($router){
    $router->get('', function($request, $res){
        return controller('PostsController@update',  $request, $res);
    });

    $router->post('', function($request, $res){
        return controller('PostsController@edit', $request, $res);
    });
});

$router->get('/delete', function($req, $res){
    return controller('PostsController@delete', $req, $res);
});