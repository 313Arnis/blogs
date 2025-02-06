<?php require "views/components/header.php" ?>
<?php require "views/components/navbar.php" ?>

<h1><?= htmlspecialchars($post["content"]) ?> <br> Kategorija: <?= $post["category_name"] ?></h1>

<a href="/edit?id=<?= $post['id']; ?>">Rediģēt šo ierakstu</a>


<form method="POST" action="/delete">

    <input type="hidden" name="id" value="<?= $post['id']; ?>">

   
    <button >Izdzēst</button>
</form>

<?php require "views/components/footer.php" ?>
