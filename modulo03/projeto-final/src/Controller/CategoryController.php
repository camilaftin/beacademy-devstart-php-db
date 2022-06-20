<?php

declare(strict_types=1);

namespace App\Controller;

use App\Connection\Connection;

class CategoryController extends AbstractController{

  public function listAction():void 
  {
    $con = Connection::getConnection();

    $result = $con->prepare('SELECT * FROM  tb_category');

    $result->execute();

    $cat = $result->fetch(\PDO::FETCH_ASSOC);

    echo $cat['id'];
    echo $cat['name'];
    echo $cat['description'];


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