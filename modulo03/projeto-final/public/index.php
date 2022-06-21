<?php

//init_set('display_errors', 1);

include '../vendor/autoload.php';

//$database = 'db_store';
//$username = 'root';
//$password = 'leleco';

use App\Connection\Connection;
use App\Controller\ErrorController;

$connection = Connection::getConnection();

//$connection = new PDO('mysql:host=localhost;dbname='.$database, $username, $password);

// var_dump($connection);
//$query = 'SELECT * FROM tb_category;';

//$preparacao = $connection->prepare($query);
//$preparacao->execute();

$url = explode('?', $_SERVER['REQUEST_URI'])[0];

$routes = include ' ../config/routes.php';

 if(false === isset($routes[$url])){
   (new ErrorController())->notFoundAction();
   exit;
 }

 $controllerName = $routes[$url]['controller'];
 $methodName = $routes[$url]['method'];

 (new $controllerName())->$methodName();

//echo $controllerName;


// if($url === '/'){
//   $c = new IndexController();
//   $c->indexAction();
// }else if($url === '/login'){
//   $c = new IndexController();
//   $c->loginAction();
// }else if($url === '/produtos'){
//   $p = new ProductController();
//   $p->listAction();
// }else{
//   $e = new ErrorController();
//   $e->notFoundAction();
// }
// $p = new ProductController();
// $c->loginAction();
// $p->listAction();
// $p->addAction();
// $p->editAction();
//echo 'Ola mundo';