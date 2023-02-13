<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Thêm sản phẩm</title>
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
<div class="container my-md-4 text-center">
	<form action="addProduct" method="post">
		Tên sản phẩm : <input type="text" class="form-control" name="productName"><br>
		Giá : <input type="text" class="form-control" name="price"><br>
		Hình ảnh : <input type="text" class="form-control" name="image"><br>
		Mô tả : <input type="text" class="form-control" name="productdesc"><br>
		<input type="submit" class="btn btn-danger">
	</form>
</div>

</body>
</html>
