<?php
require 'Model.php';
require 'AbstractController.php';
require 'MainController.php';

//index, aboutProject, topTen, addCopout, copout
$action = $_GET['action'];
$routArr = ['index', 'aboutProject', 'topTen', 'addCopout', 'copout'];

if(!(in_array($action, $routArr))) {
   $action = 'page404';
}

$controller = new MainController();
$controller->$action();
