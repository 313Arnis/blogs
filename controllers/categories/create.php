<?php

require "Validator.php";

$pageTitle = "Pievieno ierakstu";




if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $errors = [];
    if(!Validator ::string($_POST["category_name"],min: 3,max: 25)){
        $errors["category_name"] = "Saturam jābūt ievadītam, bet ne garākam par 25 rakstzīmēm";
    }
  
    if (empty($errors)) {
        $category_name = $_POST['category_name'];  


        $sql = "INSERT INTO categories (category_name) VALUES (:category_name)";
        $params = ["category_name" => $category_name];

        
        $db->query($sql, $params);

     
        header("Location: /categories/index");
        exit();
    }
}

require "views/categories/create.view.php"; 
?>
