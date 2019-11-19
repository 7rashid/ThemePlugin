<?php

namespace Theme\Providers;


use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;

class ThemeServiceProvider extends RouteServiceProvider
{
  public function map(Router $router)
  {
      $router->get('hello','Theme\Controllers\ContentController@sayHello');
  }
}
