<?php

require "Validator.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    if (!isset($_POST['id']) || !Validator::number($_POST['id'])) {
        header("Location: /");
        exit();
    }

    $id = $_POST['id'];

    $sql = "DELETE FROM posts WHERE id = :id";
    $params = ["id" => $id];

    $db->query($sql, $params);

    header("Location: /");
    exit();
}
