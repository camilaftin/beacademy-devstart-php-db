<?php

declare(strict_types=1);

namespace App\Controller;

use App\Controller\AbstractController;

class ProductController extends AbstractController{

  public function listAction():void 
  {
    parent::render('/product/list');
  }

  public function addAction():void 
  {
    parent::render('/product/add');
  }

  public function editAction():void 
  {
    parent::render('/product/edit');
  }

  

}