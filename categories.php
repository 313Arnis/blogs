<?php

include "functions.php";
require "Database.php";

$config = require("config.php");



$db = new Database($config["database"]);
echo "";
echo "<form>";

$sql = "SELECT * FROM categories";
$params = [];

if (isset($_GET["search_query"]) && $_GET["search_query"] != ""){
    
    $search_query = "%" . $_GET["search_query"] . "%";
    $sql .= (" WHERE category_name LIKE :search_query;");
    $params = ["search_query" => $search_query];
} 
//dd ($sql);

$categories = $db->query($sql, $params)->fetchAll();


require "views/categories.view.php";