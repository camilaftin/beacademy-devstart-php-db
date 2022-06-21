<?php

declare(strict_types=1);

use App\Controller\IndexController;
use App\Controller\ProductController;
use App\Controller\CategoryController;

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
   '/categorias' => createRoute(CategoryController::class, 'listAction'),
   '/categorias/novas' => createRoute(CategoryController::class, 'addAction'),
 ];

 return $routes;