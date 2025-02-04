<?php

require "Validator.php";

$sql = "SELECT * FROM posts WHERE id = :id";
$params = ["id" => $_GET ["id"]];
$post = $db->query($sql, $params)->fetch();


if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $errors = [];
    if(!Validator::string($_POST["content"],max: 50)){
        $errors["content"] = "Saturam jābūt ievadītam, bet ne garākam par 50 rakstzīmēm";
    }
  
    if (empty($errors)) {
        $content = $_POST['content'];  


        $sql = "UPDATE posts SET content = :content WHERE id = :id";
        $params["content"] = $_POST["content"];

        
        $db->query($sql, $params);

     
        header("Location: /show?id=" . $_POST["id"]);
        exit();
    }
}



require "views/categories/edit.views.php"; 
