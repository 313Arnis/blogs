<?php require "views/components/header.php" ?>
<?php require "views/components/navbar.php" ?>

<h1><?= htmlspecialchars($category["category_name"]) ?></h1>

<a href="/categories/edit?id=<?= $category['id']; ?>">Rediģēt šo kategoriju</a>


<form method="POST" action="/categories/delete">

    <input type="hidden" name="id" value="<?= $category['id']; ?>">

   
    <button >Izdzēst</button>
</form>

<?php require "views/components/footer.php" ?>
