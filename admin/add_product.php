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

<div class="admin-content">

    <h1>Thêm sản phẩm</h1>

    <div class="admin-box">
        <p class="text-muted">
            Thêm một sản phẩm xe đạp mới vào hệ thống Light Cavalry.
        </p>
    </div>

    <div class="admin-box">
        <form action="#" method="post">

            <label for="name">Tên sản phẩm</label>
            <input 
                type="text" 
                id="name" 
                name="name" 
                placeholder="Ví dụ: LC Road 01"
            >

            <label for="category">Danh mục</label>
            <select id="category" name="category">
                <option value="">-- Chọn danh mục --</option>
                <option value="road">Road</option>
                <option value="mtb">MTB</option>
                <option value="fixed">Fixed Gear</option>
            </select>

            <label for="price">Giá</label>
            <input 
                type="text" 
                id="price" 
                name="price" 
                placeholder="Ví dụ: 12000000"
            >

            <label for="description">Mô tả</label>
            <textarea 
                id="description" 
                name="description" 
                rows="4"
                placeholder="Mô tả sản phẩm"
            ></textarea>

            <div style="margin-top: 16px;">
                <button type="submit">Lưu sản phẩm</button>
                &nbsp;&nbsp;
               <a href="product.php">Quay lại danh sách</a>
            </div>

        </form>
    </div>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>