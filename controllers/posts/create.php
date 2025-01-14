<?php

$sql = "INSERT * INTO posts";
$params = ["content" => $_POST["content"]];
header("Location: /"); exit();
require "views/posts/create.views.php";