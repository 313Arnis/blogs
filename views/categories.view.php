<?php require "components/header.php" ?>
<?php require "components/navbar.php" ?>
<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogs</title>
</head>
<body>
<h1>Categories</h1>
<form>
    <input name='search_query' value = '<?= $_GET["search_query"] ?? "" ?>' />
        <button>Meklet</button>
</form>

<ul>
<?php foreach ($categories as $category) {?>
     <li> <?= $category["category_name"] ?> </li> 
<?php } ?>
</ul>
</body>
</html>
