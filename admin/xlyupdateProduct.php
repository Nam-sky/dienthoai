<?php
include "connect.php";
$id = $_POST["id"];
$nameProduct = $_POST['nameProduct'];
$price = $_POST['price'];
$description = $_POST['description'];
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$image= $_FILES["fileToUpload"]["name"];
move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);

$sql = "UPDATE product SET anh = '$image' WHERE id = '$id'";
mysqli_query($conn,$sql);
header("Location:listproduct.php");

$sql = "UPDATE product SET name='$nameProduct', gia='$price', mota='$description' WHERE id=$id";
mysqli_query($conn,$sql);
header("Location:listproduct.php");

