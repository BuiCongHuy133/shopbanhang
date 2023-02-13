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
		<p> <a href="addProduct" class="btn btn-danger"> Thêm mới</a> </p>
	<table class="table" >
		
		<thead>
				<tr>
					<th>ID</th>
					<th>Tên sản phẩm</th>
					<th>Giá</th>
					<th>Thương Hiệu</th>
					<th>Danh mục</th>
					<th>Image</th>
					<th>Mô tả</th>
					<th>Sửa</th>
					<th>Xóa</th>
				</tr>
			</thead>
		<tbody>
		<?php $stt=1?>
		<?php 
			foreach ($info as $value):

		?>
			<tr class="odd gradeX">
					<td><?=  $stt++ ?></td>
					<td><?=  $value['productName'] ?></td>
					<td><?=  $value['price'] ?></td>
					<td><?=  $value['brandName'] ?></td>
					<td><?=  $value['catName'] ?></td>
					<td><img src="uploads/<?=  $value['image'] ?>" width="80"></td>
					<td><?=  $value['productdesc'] ?></td>
			<td><a href="editProduct/<?= $value['productId'] ?>">Sửa</td>
			<td><a href="deleteProduct/<?= $value['productId'] ?>">Xóa</td>
		</tr>
		<?php
			endforeach
		?>
		
	</table>
</div>

</body>
</html>
