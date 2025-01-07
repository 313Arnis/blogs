<?php

include "functions.php";
require "Database.php";

$config = require("config.php");

echo "<h1>Categories</h1>";

$db = new Database($config["database"]);

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

echo "<input name='search_query' />";
echo "<button>Meklet</button>";
echo "</form>";
echo "<ul>";
foreach ($categories as $categorie) {
    echo "<li>" . "{$categorie['category_name']}". "</li>";  
}
echo "</ul>"; 
