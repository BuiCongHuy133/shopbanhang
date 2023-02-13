<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Danh mục sản phẩm </title>
	<style>
		tr, th, td {
			border: 1px solid black;
			padding: 20px;
		}
	</style>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>

	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
<h2> Danh mục sản phẩm </h2>
		<p> <a href="addCategory" class="btn btn-danger"> Thêm mới</a> </p>
	<table class="table" >
		
		<tr>
			<th>STT</th>
			<th>Danh mục</th>
			<th>Ngày tạo danh mục</th>
			<th>Sửa</th>
			<th>Xóa</th>
		</tr>
		
		<?php $stt=1?>
		<?php 
			foreach ($info as $value):

		?>
			<tr><td><?= $stt++	?></td>
			<td> <?= $value['cat_name'] ?></td>
			<td> <?= $value['cat_date_create'] ?></td>
			<td><a href="editCategory/<?= $value['cat_id'] ?>">Sửa</td>
			<td><a href="deleteCategory/<?= $value['cat_id'] ?>">Xóa</td>
		</tr>
		<?php
			endforeach
		?>
		
	</table>
</div>

</body>
</html>
