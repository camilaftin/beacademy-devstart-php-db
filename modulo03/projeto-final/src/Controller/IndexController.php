<?php

declare(strict_types=1);

namespace App\Controller;

use App\Controller\AbstractController;

class IndexController extends AbstractController{

   public function indexAction():void
   {
     parent::render('index/login');
   }

  //  public function indexAction():void
  //  {
  //    parent::render('index/index');
  //  }

  // public function loginAction():void 
  // {
  //   parent::render('index/login');
  // }

}