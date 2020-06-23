<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/bootstrap.min.js"></script>
    <title>Thêm sản phẩm</title>
    <?php
        $a=1;
    ?>
</head>
<body>
    <div class="container">
    <h2>Thêm sản phẩm</h2>
    <form action="xlyaddProduct.php" method="POST" enctype="multipart/form-data"> 
        <div class="form-group">
            <label for="email">Tên sản phẩm:</label>
            <input type="text" class="form-control" id="name" placeholder="Tên sản phẩm" name="nameProduct">
        </div>
        <div class="form-group">
            <label for="pwd">Ảnh sản phẩm:</label>
            <input type="file" id="" name="fileToUpload" id="fileToUpload">
        </div>
        <div class="form-group">
            <label for="email">Giá sản phẩm:</label>
            <input type="number" class="form-control" id="price" placeholder="Giá sản phẩm" name="price">
        </div>
        <div class="form-group">
            <label for="description">Mô tả sản phẩm</label>
            <textarea class="form-control" id="description" rows="3" name="description" placeholder="Mô tả sản phẩm"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
</body>
</html>