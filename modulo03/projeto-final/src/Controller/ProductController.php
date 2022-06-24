<?php

declare(strict_types=1);

namespace App\Controller;

use App\Connection\Connection;
use App\Controller\AbstractController;

class ProductController extends AbstractController{

  public function listAction():void 
  {
    $con = Connection::getConnection();
    $result = $con->prepare('SELECT * FROM tb_product');
    $result->execute();

    parent::render('/product/list', $result);
  }

  public function addAction():void 
  {
    $con = Connection::getConnection();

    if($_POST){
      $name = $_POST['name'];
      $description = $_POST['description'];
      $value = $_POST['value'];
      $photo = $_POST['photo'];
      $quantity = $_POST['quantity'];
      $categoryId = $_POST['category'];
      $createdAt = date('Y-m-d H:i:s');

      $query - "INSERT INTP tb_product (name, description, value, photo, quantity, category_id, created_at) VALUES ('{$name}', '{$description}', '{$value}', '{$photo}', {$quantity}, '{$categoryId}','{$createdAt}');";

      $result = $con->prepare($query);
      $result->execute();

      echo 'Pronto, produto adicionado';

    }

    $result = $con->prepare('SELECT * FROM tb_category');
    $result->execute();
    
    parent::render('/product/add', $result);
  }

  public function editAction():void 
  {

    $id = $_GET['id'];

    $con = Connection::getConnection();
    // $categories = $con->prepare('SELECT * FROM tb_category');
    // $categories->execute();

    if($_POST){
      $name = $_POST['name'];
      $description = $_POST['description'];
      $value = $_POST['value'];
      $photo = $_POST['photo'];
      $quantity = $_POST['quantity'];

      $query = "UPDATE tb_product SET 
                name='{$name}',
                description='{$description}',
                value = '{$value}',
                photo = '{$photo}',
                quantity = '{$quantity}'
                WHERE id='{$id}'      
      ";

      $resultUpdate = $con->prepare($query);
      $resultUpdate->execute();

      echo 'Produto atualizado';

    }

    $product = $con->prepare("SELECT * FROM tb_product WHERE id='{$id}'");
    $product->execute();

    parent::render('/product/edit', ['product' => $product->fetch(\PDO::FETCH_ASSOC)]);
  }

  public function removeAction():void 
  {
    $id = $_GET['id'];
    $con = Connection::getConnection();

    $result = $con->prepare("DELETE FROM tb_product WHERE id='{$id}'");

    $result->execute();

    //$message = 'Produto excluido com sucesso';

    //include dirname(__DIR__).'View/_partials/message.php';
    parent::renderMessage('Produto excluido com sucesso');

  }

}