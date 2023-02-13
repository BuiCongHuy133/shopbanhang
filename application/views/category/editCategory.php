<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title> Sửa danh mục </title>
</head>
<body>
<div class="container">
		<?php 
			foreach ($info as $value):

		?>
	<form action="<?= base_url() ?>mycontroller/updateCategory" method="post">
		ID: <input type="text" name="id" value="<?= $value['cat_id'] ?>" hidden><br>
		Sửa danh mục : <input type="text" name="category" placeholder="<?= $value['cat_name'] ?>"=>
		<input type="submit">
	</form>
		<?php
			endforeach
		?>
</div>

</body>
</html>
