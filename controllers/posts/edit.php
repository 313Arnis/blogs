<?php

require "Validator.php";


$sql = "SELECT * FROM posts WHERE id = :id";
$params = ["id" => $_GET["id"]];
$post = $db->query($sql, $params)->fetch();


$sql = "SELECT * FROM categories";
$params = [];
$categories = $db->query($sql, $params)->fetchAll();


if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $errors = [];
    $content = $_POST['content'];  
    $category_id = $_POST['id']; 


    if (!Validator::string($content, max: 50)) {
        $errors["content"] = "Saturam jābūt ievadītam, bet ne garākam par 50 rakstzīmēm";
    }

   
    if (empty($errors)) {
        $sql = "UPDATE posts SET content = :content, category_id = :category_id WHERE id = :id";

        $params = [
            "content" => $content,
            "category_id" => $category_id,
            "id" => $_GET["id"]  
        ];

    
        $db->query($sql, $params);

        
        header("Location: /show?id=" . $_GET["id"]);
        exit();
    }
}

require "views/posts/edit.views.php";
?>
