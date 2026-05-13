<?php
// Giá sản phẩm
$price1 = 15000000;
$price2 = 12000000;

// Mặc định số lượng
$q1 = 1;
$q2 = 1;

// Nếu bấm cập nhật
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $q1 = $_POST["q1"];
    $q2 = $_POST["q2"];

    if ($q1 < 1) $q1 = 1;
    if ($q2 < 1) $q2 = 1;
}

// Tính tiền
$total1 = $price1 * $q1;
$total2 = $price2 * $q2;
$sum = $total1 + $total2;

// Format tiền
function money($n) {
    return number_format($n, 0, ",", ".") . "đ";
}
?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Light Cavalry</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/cart.css">
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">

            <a class="navbar-brand fw-bold" href="index.php">Light Cavalry</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navMenu">
                <ul class="navbar-nav ms-auto">

                    <li class="nav-item">
                        <a class="nav-link active fw-bold" href="index.php">
                            Trang chủ
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="product.php">Sản phẩm</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="promo.php">Khuyến mãi</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Liên hệ</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="cart.php">Giỏ hàng</a>
                    </li>

                </ul>
            </div>

        </div>
    </nav>

<!-- HEADER -->
<section class="products-header text-center">
    <div class="container">
        <h1 style="color: #000;">Giỏ hàng</h1>
        <p style="color: #000;">Kiểm tra lại sản phẩm trước khi đặt mua</p>
    </div>
</section>

<!-- CART CONTENT -->
<section class="products">
    <div class="container">

        <!-- PRODUCT ITEM -->
       <table class="table">
            <thead>
                <tr>
                    <th scope="col">Sản phẩm</th>
                    <th scope="col">Giá</th>
                    <th scope="col">Số lượng</th>
                    <th scope="col">Thành tiền</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
               
                <tr>
                    <td>
                        <div class="d-flex align-items-center gap-3">
                            <img src="images/anh-1.jpg" alt="LC-01" style="width:120px;">
                            <div>
                                <h5>LC-01</h5>
                            </div>
                        </div>
                    </td>                      
                    <td>12.000.000đ</td>
                    <td>
                        <label for="quantity2">Số lượng:</label>
                        <input type="number" id="quantity2" name="quantity2" value="1" min="1" class="form-control w-25">
                    <td>12.000.000đ</td>
                    <td>
                        <button class="btn btn-sm btn-outline-danger">
                            Xóa khỏi giỏ
                        </button>
                        <button class="btn btn-sm btn-outline-primary">
                            Liên hệ
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- PRODUCT ITEM -->
        

        <!-- SUMMARY -->
        <div class="row mt-5">
            <div class="col-md-8 text-end">
                <h4 class="text-white">Tổng tiền: <strong>27.000.000đ</strong></h4>

                <div class="d-flex justify-content-end gap-3 mt-3">
                    <a href="product.php" class="btn btn-warning">
                        Tiếp tục mua
                    </a>
                   <a href="checkout.php" class="btn btn-danger">
                        Đặt mua
                    </a>
                    <a href="" class="btn btn-primary">
                        Cập nhật
                    </a>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- FOOTER -->
<footer class="text-center py-4 text-white" style="background:black;">
    <p>© 2026 Light Cavalry.</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>