<?php
/**
 * Created by PhpStorm.
 * User: annikawolff
 * Date: 18.02.19
 * Time: 14:59
 */

namespace HelloWorld\Providers;


use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;

class HelloWorldRouteServiceProvider extends RouteServiceProvider
{
    public function map(Router $router)
    {
        $router->get('hello','HelloWorld\Controllers\ContentController@sayHello');

        $router->get('goodbye','HelloWorld\Controllers\ContentController@sayBye');
    }
}
