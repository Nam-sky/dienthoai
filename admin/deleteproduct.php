<?php
include "connect.php";
$id = $_GET["id"];
$sql = "DELETE FROM product WHERE id=$id";
mysqli_query($conn,$sql);
if ($sql) {
    header("Location:listproduct.php");
}