<?php
include "connect.php";
$nameProduct = $_POST['nameProduct'];
$price = $_POST['price'];
$description = $_POST['description'];
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$image= $_FILES["fileToUpload"]["name"];
move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);

$sql = "INSERT INTO product(name,gia,mota,anh) VALUES  ('$nameProduct','$price','$description','$image')";
mysqli_query($conn,$sql);
if ($sql) {
    header('Location:listproduct.php');
}
