<?php

require "Validator.php";


if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    redirectIfNotFound();
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  
    if (!isset($_POST['id']) || !Validator::number($_POST['id']) || $_POST['id'] <= 0) {
        header("Location: /");  
        exit();
    }


    $id = $_POST['id'];

  
    $sql = "DELETE FROM categories WHERE id = :id";
    $params = ["id" => $id];

    
      
        $db->query($sql, $params);

        header ("Location: /categories/index");
        
    } 

    
    

?>