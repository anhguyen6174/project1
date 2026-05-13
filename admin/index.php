<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/admin.css">
   
</head>
<body>

<!-- HEADER -->
<header class="admin-header">
    <div>
        <strong>LIGHT CAVALRY</strong> · Admin
    </div>
    <div>
        <a href="login.php">Đăng xuất</a>
    </div>
</header>

<div class="admin-container">

    <!-- SIDEBAR -->
  <aside class="admin-sidebar col-12 col-md-3 col-lg-2 p-0 bg-dark">
    <div class="list-group list-group-flush">
        <a href="index.php" class="list-group-item list-group-item-action bg-dark text-white">Dashboard</a>
        <a href="product.php" class="list-group-item list-group-item-action bg-dark text-white">Sản phẩm</a>
        <a href="category.php" class="list-group-item list-group-item-action bg-dark text-white">Danh mục</a>
        <a href="order.php" class="list-group-item list-group-item-action bg-dark text-white">Đơn hàng</a>
        <a href="user.php" class="list-group-item list-group-item-action bg-dark text-white">Người dùng</a>
    </div>
</aside>

    <!-- MAIN CONTENT -->
    <main class="admin-content">
        
        <h1>Tổng quan quản trị</h1>

        <div class="placeholder">   
            <p>Chào mừng quản trị viên </p>
            <p>Đây là khu vực hiển thị nội dung quản trị.</p>
          
        </div>
    </main>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
