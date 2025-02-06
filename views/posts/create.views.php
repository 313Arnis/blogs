<?php require "views/components/header.php"; ?>
<?php require "views/components/navbar.php"; ?>

<h1>Izveidot bloga ierakstu</h1>

<form method="POST">
    <label>
        Saturs:
        <input type="text" name="content" value="<?= $_POST['content'] ?? "" ?>">
    </label>

    <label for="category">Izvēlies kategoriju:</label>
    <select  name="id">
           <?php foreach ($categories as $category): ?>
            <option name = "id" value= "<?= $category['id'] ?> ">
            <?= $category['category_name'] ?>
            </option>
        <?php endforeach; ?>
    </select>

    <button type="submit">Iesniegt</button>
</form>

<?php if (isset($errors["content"])): ?>
    <p><?= $errors["content"] ?></p>
<?php endif; ?>

<?php require "views/components/footer.php"; ?>
