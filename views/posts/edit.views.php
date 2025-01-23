<?php
require "views/components/header.php";
require "views/components/navbar.php";
?>

<form method = "POST">
<input  type="hidden" name="id" value="<?= $post['id']; ?>">
<input  name="content" value="<?= $post['content'] ?? ''; ?>">
<button>EDIT</button>
</form>