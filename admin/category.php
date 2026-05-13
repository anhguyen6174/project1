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

        <h1>Quản lý danh mục</h1>

        <div class="admin-box">
            <p>Quản lý các danh mục sản phẩm trong hệ thống Light Cavalry.</p>
                <a href="add_category.php" class="btn">Thêm danh mục mới</a>
        </div>

        <div class="admin-box">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tên danh mục</th>
                        <th>Mô tả</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Road</td>
                        <td>Xe đạp đường trường</td>
                        <td>
                            <a href="edit_category.php?id=1">Sửa</a> |
                            <a href="#">Xóa</a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>MTB</td>
                        <td>Xe đạp địa hình</td>
                        <td>
                            <a href="edit_category.php?id=2">Sửa</a> |
                            <a href="#">Xóa</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </main>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
