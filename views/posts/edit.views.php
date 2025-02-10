<?php
require "views/components/header.php";
require "views/components/navbar.php";
?>

<form method = "POST">
<input  type="hidden" name="id" value="<?= $post['id']; ?>">
<input  name="content" value="<?= $post['content'] ?? ''; ?>">
<button>EDIT</button>
<label for="category">Izvēlies kategoriju:</label>
    <select  name="id">
           <?php foreach ($categories as $category): ?>
            <option name = "id" value= "<?= $category['id'] ?> ">
            <?= $category['category_name'] ?>
            </option>
        <?php endforeach; ?>
    </select>

</form>