<?php require "views/components/header.php" ?>
<?php require "views/components/navbar.php" ?>

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
    <input name="search_query" value="<?= $_GET["search_query"] ?? "" ?>" />
    <button type="submit">Meklēt</button>
</form>

<ul>
<?php foreach ($categories as $category) { ?>
    <li> <a href="/categories/show?id=<?=$category["id"]?>" > <?= htmlspecialchars($category["category_name"]) ?> </a> </li> 
    
    
<?php } ?>
</ul>
</body>
</html>

<?php require "views/components/footer.php" ?>
