<?php

include '../vendor/autoload.php';

use App\Controller\IndexController;
use App\Controller\ProductController;
use App\Controller\ErrorController;

$url = explode('?', $_SERVER['REQUEST_URI'])[0];

function createRoute(string $controllerName, string $methodName){
  return [
    'controller' => $controllerName,
    'method' => $methodName,
  ];
}

$routes = [
  '/' => createRoute(IndexController::class, 'indexAction'),
  '/produtos' => createRoute(ProductController::class, 'listAction'),
  '/produtos/novo' => createRoute(ProductController::class, 'addAction'),
];

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