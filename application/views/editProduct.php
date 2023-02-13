<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title> Sửa sản phẩm </title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container">
		<?php 
			foreach ($info as $value):

		?>
	<form action="<?= base_url() ?>mycontroller/updateProduct" method="post">
	<div class="container my-md-5 text-center">
	<h2> Sửa sản phẩm</h2>
	<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
			<table>
		<tr>
			<td>ID:</td>
			<td><input type="text" class="form-control" name="productId" placeholder="<?= $value['productId']?>" hidden ></td>
		</tr>
		<tr>
			<td>Sửa tên sản phẩm:</td>
			<td><input type="text" class="form-control" name="productName" placeholder="<?= $value['productName']?>"required ></td>
		</tr>
		<tr>
			<td>Sửa hình ảnh:</td>
			<td><input type="text" class="form-control" name="image" placeholder="<?= $value['image']?>" required ></td>
		</tr>
		<tr>
			<td>Sửa mô tả:</td>
			<td><input type="Password" class="form-control" name="productdesc" placeholder="<?= $value['productdesc']?>" required></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="Sửa" class="btn btn-danger"></td>
		</tr>
	</table>

	</div>
			<div class="col-md-4"></div>
	</div>
		</form>
		<?php
			endforeach
		?>
</div>

</body>
</html>
