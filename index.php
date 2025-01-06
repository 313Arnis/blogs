<?php

include "functions.php";
require "Database.php";

$config = require("config.php");

echo "<h1>Blogs</h1>";

$db = new Database($config["database"]);
$posts = $db->query("SELECT * FROM posts")->fetchAll();
echo "<form>";

if (isset($_GET["search_query"]) && $_GET["search_query"] != ""){
    dd("SELECT * FROM posts WHERE content LIKE '" . $_GET ["search_query"] . "';");
    $posts = $db->query("SELECT * FROM posts WHERE content LIKE " . $_GET ["search_query"])->fetchAll();
};

echo "<input name='search_query' />";
echo "<button>Meklet</button>";
echo "</form>";
echo "<ul>";
foreach ($posts as $post) {
    echo "<li>" . "{$post['content']}". "</li>";  
}
echo "</ul>"; 
