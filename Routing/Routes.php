<?php
    $router->add('home', '/', 'MainController:index');
    $router->add('about', '/about', 'MainController:aboutProject');
    $router->add('topten', '/topten', 'MainController:topTen');
    $router->add('add', '/add', 'MainController:addCopout');
    $router->add('copout', '/copout', 'MainController:copout');