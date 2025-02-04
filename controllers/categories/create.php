<?php

require "Validator.php";

$pageTitle = "Pievieno ierakstu";




if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $errors = [];
    if(!Validator ::string($_POST["content"],min: 3,max: 25)){
        $errors["content"] = "Saturam jābūt ievadītam, bet ne garākam par 25 rakstzīmēm";
    }
  
    if (empty($errors)) {
        $content = $_POST['content'];  


        $sql = "INSERT INTO posts (content) VALUES (:content)";
        $params = ["content" => $content];

        
        $db->query($sql, $params);

     
        header("Location: /");
        exit();
    }
}

require "views/categories/create.views.php"; 
?>
