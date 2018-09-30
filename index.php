<?php
require 'Model.php';
require 'BlogModel.php';
require 'AbstractController.php';
require 'MainController.php';
require 'BlogController.php';
//require 'bootstrap.php';

$page = filter_input(INPUT_GET, 'page');

switch ($page) {
    case null:
    case 'home':
        $nameController = MainController::class;
        $method = 'index';
        break;

     case 'topten':
        $nameController = MainController::class;
        $method = 'topTen';
        break;

    case 'about':
        $nameController = MainController::class;
        $method = 'aboutProject';
        break;

      case 'copout':
        $nameController = MainController::class;
        $method = 'copout';
        break;
  
    //Blog
    case 'knows':
        $nameController = BlogController::class;
        $method = 'knowledges';
        break;
    
    case 'know':
        $nameController = BlogController::class;
        $method = 'knowledge';
        break;
    
    default:
        $nameController = MainController::class;
        $method = 'page404';
        break;
}

$controller = new $nameController();
$controller->$method();
