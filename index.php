<?php

include "functions.php";
require "Database.php";

$config = require("config.php");

echo "<h1>Blogs</h1>";

$db = new Database($config["database"]);

echo "<form>";

$sql = "SELECT * FROM posts";
$params = [];

if (isset($_GET["search_query"]) && $_GET["search_query"] != ""){
    
    $search_query = "%" . $_GET["search_query"] . "%";
    $sql .= (" WHERE content LIKE :search_query;");
    $params = ["search_query" => $search_query];
} 
//dd ($sql);

$posts = $db->query($sql, $params)->fetchAll();

echo "<input name='search_query' />";
echo "<button>Meklet</button>";
echo "</form>";
echo "<ul>";
foreach ($posts as $post) {
    echo "<li>" . "{$post['content']}". "</li>";  
}
echo "</ul>"; 
