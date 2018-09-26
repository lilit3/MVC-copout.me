<?php
require 'Model.php';
require 'AbstractController.php';
require 'MainController.php';
require 'bootstrap.php';
require 'func.php';

use Routing\Router;
use Routing\MatchedRoute;

try {

    $router = new Router(GET_HTTP_HOST());
    $router->add('home', '/', 'MainController:index');
    $router->add('about', '/about', 'MainController:aboutProject');
    $router->add('topten', '/topten', 'MainController:topTen');
    $router->add('add', '/add', 'MainController:addCopout');

    $router->add('copout', '/copout', 'MainController:copout');

    $route = $router->match(GET_METHOD(), GET_PATH_INFO());

    if (null == $route) {
        $route = new MatchedRoute('MainController:page404');
    }

    list($class, $action) = explode(':', $route->getController(), 2);

    call_user_func_array(array(new $class($router), $action), $route->getParameters());

} catch (Exception $e) {
    header($_SERVER['SERVER_PROTOCOL'] . ' 500 Internal Server Error', true, 500);

    echo $e->getMessage();
    echo $e->getTraceAsString();
    exit;
}
