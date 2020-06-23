<?php
include "connect.php";
$sql = "SELECT * FROM product";
$result = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/bootstrap.min.js"></script>
    <title>Danh sách sản phẩm</title>
</head>
<body>
<h1 class="text-center mb-4">Danh sách sản phẩm</h1>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>STT</th>
                <th>Tên sản phẩm</th>
                <th>Giá</th>
                <th>Mô tả sản phẩm</th>
                <th>Ảnh</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($result as $row){
            ?>
                <tr>
                    <td><?php echo $row["id"] ?></td>
                    <td><?php echo $row["name"]?></td>
                    <td><?php echo $row["gia"]?>đ</td>
                    <td><?php echo $row["mota"]?></td>
                    <td><img src="uploads/<?php echo $row["anh"]?>" style="width:200px" alt=""></td>
                    <td><a href="updateProduct.php?id=<?php echo $row['id']?>">Sửa</a>|<a href="deleteproduct.php?id=<?php echo $row['id'] ?>">Xóa</a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <button class="btn btn-danger mx-auto d-block"><a style="text-decoration:none" class="text-white" href="addproduct.php">Thêm sản phẩm mới</a></button>
</body>
</html>