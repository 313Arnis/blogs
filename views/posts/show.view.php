<?php require "views/components/header.php" ?>
<?php require "views/components/navbar.php" ?>
<h1><?= $post ["content"] ?></h1>


<a href="/edit?id=<?= $post['id']; ?>">Rediģēt šo ierakstu</a>
<form method="POST" action="/delete-post?id=<?= $post['id']; ?>">

<button>Izdzest</button>
</form>
<?php require "views/components/footer.php" ?>


