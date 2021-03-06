<?php
  include "admin/connect.php";
  $sql = "SELECT * FROM product";
  $resutl = mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/fe9872fc12.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <title>Trang chủ</title>
</head>
<body>
    <header class="bg bg-dark p-2">
        <div class="container">
            <div class="row">
                <img src="image/logo.png" alt="" class="col-md-2">
                <div class="col-md-7 text-center">
                    <input class="w-75" type="text" placeholder="Bạn cần tìm sản phẩm nào">
                    <button class="btn btn-info">Tìm kiếm</button>
                </div>
                <div class="col-md-3 text-center">
                    <button class="btn btn-info">Đăng ký</button>
                    <button class="btn btn-success">Đăng nhập</button>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="bg bg-success">
            <nav class="navbar navbar-expand-sm navbar-dark container p-0">
                <!-- Brand/logo -->
                <a class="navbar-brand" href="#"><img src="image/logoapple.png" class="w-50" alt=""></a>
                
                <!-- Links -->
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link text-white font-weight-bold" href="#">Trang chủ</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white font-weight-bold" href="#">Iphone</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white font-weight-bold" href="#">Ipad</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white font-weight-bold" href="#">Apple watch</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white font-weight-bold" href="#">Phụ kiện Apple</a>
                  </li>
                </ul>
              </nav>
        </div>
        <!-- Slider -->
        <div class="container mt-3 p-0">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="image/slider1.png" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="image/slider2.png" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="image/slider3.png" alt="Third slide">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
        </div>
        <div class="container menu2 mt-3">
            <div class="row">
                <h3 class="text-black col-md-2">iPhone</h3>
                <nav class="navbar navbar-expand-sm navbar-dark  container p-0 col-md-7">
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <a class="nav-link text-primary" href="#">Dưới 10 triệu  |</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link text-primary" href="#">Từ 10 - 15 triệu  |</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link text-primary" href="#">Từ 15 - 20 triệu  |</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link text-primary" href="#">Trên 25 triệu|</a>
                      </li>
                    </ul>
                  </nav>
            </div>
        </div>
        <div class="container mt-2 product">
            <div class="row">
              <?php
                foreach($resutl as $row){
              ?>
                <div class="col-md-3 border">
                    <img class="mx-auto d-block mb-1 w-100" src="admin/uploads/<?php echo $row["anh"]?>" alt="">
                    <h6 class="font-weight-bold m-0 "><?php echo $row["name"]?></h6>
                    <p class="m-0 mt-4 mb-2">Giá bán: <span class="text-danger font-weight-bold"><?php echo $row["gia"] ?></span> ₫</p>
                    <small><?php echo $row["mota"]?></small>
                </div>
                <?php } ?>
            </div>
        </div>
        <div class="container news mt-3">
            <h1 class="text-center">Tin tức</h1>
            <div class="row">
              <div class="col-md-3 p-0">
                <img src="image/news-item.jpg" class="mx-auto d-block " alt="">
                <p class="font-weight-bold">Choáng ngợp trước thiết kế 12 Pro max trong tương lai</p>
                <p>23/6/2020</p>
              </div>
              <div class="col-md-3 p-0">
                <img src="image/news-item.jpg" class="mx-auto d-block " alt="">
                <p class="font-weight-bold">Choáng ngợp trước thiết kế 12 Pro max trong tương lai</p>
                <p>23/6/2020</p>
              </div>
              <div class="col-md-3 p-0">
                <img src="image/news-item.jpg" class="mx-auto d-block " alt="">
                <p class="font-weight-bold">Choáng ngợp trước thiết kế 12 Pro max trong tương lai</p>
                <p>23/6/2020</p>
              </div>
              <div class="col-md-3 p-0">
                <img src="image/news-item.jpg" class="mx-auto d-block " alt="">
                <p class="font-weight-bold">Choáng ngợp trước thiết kế 12 Pro max trong tương lai</p>
                <p>23/6/2020</p>
              </div>
            </div>
            <hr>
        </div>
    </main>
    <footer class="container">
      <small>© 2018 Công ty TNHH Nhà nước Một thành viên Thương mại và Xuất nhập khẩu Viettel. Đăng ký doanh nghiệp số 0104831030, do Sở Kế hoạch và Đầu tư Hà Nội cấp lần đầu ngày 25/01/2006, thay đổi lần thứ 38 ngày 01/07/2019. Địa chỉ: Số 01, Phố Giang Văn Minh, phường Kim Mã, quận Ba Đình, Thành phố Hà Nội. Chịu trách nhiệm nội dung: Đinh Sơn Tùng.</small>
    </footer>
</body>
</html>