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

    //订单列表
    $router->get('/orders', 'OrdersController@index')->name('admin.orders.index');
    //订单详情
    $router->get('orders/{order}', 'OrdersController@show')->name('admin.orders.show');

    //订单发货
    $router->post('orders/{order}/ship', 'OrdersController@ship')->name('admin.orders.ship');

    //拒绝退款
    $router->post('orders/{order}/refund', 'OrdersController@handleRefund')->name('admin.orders.handle_refund');
});
