<?php
require "views/components/header.php";
require "views/components/navbar.php";
?>

<form method = "POST">
<input  type="hidden" name="id" value="<?= $category['id']; ?>">
<input  name="category_name" value="<?= $category['category_name'] ?? ''; ?>">
<button>EDIT</button>
</form>