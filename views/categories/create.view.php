<?php require "views/components/header.php";?>
<?php require "views/components/navbar.php";?>

<h1>Izveidot kategoriju</h1>

<form method="POST" >
    <label>
        <input name="category_name" value="<?= $_POST['category_name'] ?? "" ?>"/>
    </label>
    <button>Iesniegt</button>
</form>

<?php if(isset($errors["category_name"])) { ?>
    <p><?= $errors["category_name"] ?></p>
  <?php } ?>
