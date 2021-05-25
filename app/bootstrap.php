<?php
session_start();

require_once 'vendor/autoload.php';
use app\core\Route;
use app\core\Model;
use app\core\View;
use app\core\Controller;
class_alias('\RedBeanPHP\R', '\R');
R::setup( 'mysql:host=localhost;dbname=contentcreator','root', 'root', false);
if(!R::testConnection()) die('No DB connection!');

$router = new Route();
$router->run();