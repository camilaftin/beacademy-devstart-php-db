<?php

declare(strict_types=1);

namespace App\Controller;

abstract class AbstractController
{
  public function render(string $viewName):void 
  {
     include dirname(__DIR__)."/View/{$viewName}.php";
    // include dirname(__DIR__).'/View/product/add.php';
    // include dirname(__DIR__).'/View/index/login.php';
  
  }
}