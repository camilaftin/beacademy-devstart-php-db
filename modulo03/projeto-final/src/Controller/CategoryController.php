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

    //$data = $result->fetch(\PDO::FETCH_ASSOC);

    //include dirname(__DIR__).'/View/category/list.php';
    // echo $cat['id'];
    // echo $cat['name'];
    // echo $cat['description'];


    parent::render('/category/list', $result);
  }

  public function addAction():void 
  {
    
    if($_POST){
      $name = $_POST['name'];
      $descritpion = $_POST['description'];

      $query = "INSERT INTO tb_category (name, description) VALUES ('{$name}','{$description}')";
      $con = Connection::getConnection();
      $result = $con->prepare($query);
      $result->execute();

      echo ' Categoria inserida com sucesso!';


    }
    
    
    parent::render('/category/add');
  }

  public function editAction():void 
  {
    parent::render('/product/edit');
  }


  public function removeAction():void 
  {
    $con = Connection::getConnection();

    $id = $_GET['id'];
    $query = "DELETE FROM tb_category WHERE id='{$id}'";

    $result = $con->prepare($query);
    $result->execute();

    echo 'Pronto, categoria excluida';

  }

 

}