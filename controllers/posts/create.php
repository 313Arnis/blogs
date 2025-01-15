<?php
$pageTitle = "Pievienot ierakstu";




if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['content'])) {
        $content = $_POST['content'];  


        $sql = "INSERT INTO posts (content) VALUES (:content)";
        $params = ["content" => $content];

        
        $db->query($sql, $params);

     
        header("Location: /");
        exit();
    }
}

require "views/posts/create.views.php"; 
?>
