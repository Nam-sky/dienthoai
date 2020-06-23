<?php
include "connect.php";
$id = $_GET["id"];
$sql = "SELECT * FROM product WHERE id=$id";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/bootstrap.min.js"></script>
    <title>Sửa sản phẩm</title>
</head>
<body>
    <div class="container">
    <h2>Sửa sản phẩm</h2>
    <form action="xlyupdateProduct.php" method="POST" enctype="multipart/form-data"> 
        <input type="hidden" name="id" value="<?php echo $id?>">
        <div class="form-group">
            <label for="email">Tên sản phẩm:</label>
            <input type="text" class="form-control" id="name" value="<?php echo $row ["name"]?>"  name="nameProduct">
        </div>
        <div class="form-group">
            <label for="pwd">Ảnh sản phẩm:</label>
            <img src="uploads/<?php echo $row["anh"]?>" style="width:100px" alt="">
            <input type="file" id="" name="fileToUpload" id="fileToUpload">
        </div>
        <div class="form-group">
            <label for="email">Giá sản phẩm:</label>
            <input type="number" class="form-control" id="price" value="<?php echo $row["gia"]?>" name="price">
        </div>
        <div class="form-group">
            <label for="description">Mô tả sản phẩm</label>
            <input class="form-control" id="description" rows="3" name="description" value="<?php echo $row["mota"]?>">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
</body>
</html>