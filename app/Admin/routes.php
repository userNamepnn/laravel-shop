<?php

use Illuminate\Routing\Router;

Admin::registerAuthRoutes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {
    //管理后台主页
    $router->get('/', 'HomeController@index');
    //管理员列表
    $router->get('/users', 'UsersController@index');

    //商品添加
    $router->get('products/create', 'ProductsController@create');
    $router->post('products', 'ProductsController@store');
    //商品修改
    $router->get('products/{id}/edit', 'ProductsController@edit');
    $router->put('products/{id}', 'ProductsController@update');

    //商品列表
    $router->get('/products', 'ProductsController@index');

});
