<!DOCTYPE html>
<html lang="en">
<style>
  .nav-link:hover {
      text-decoration: underline;
      transition: 0.3s;
  }
</style>

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Giày - Trang chủ</title>
    <meta name="description" content="Shop Giày - Chuyên giày thể thao chính hãng Nike, Adidas, Converse. Giao hàng toàn quốc.">
    <meta name="keywords" content="giày, sneaker, nike, adidas, shop giày">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
        .nav-link:hover {
            text-decoration: underline;
            transition: 0.3s;
        }
    </style>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold" href="./">Shop Giày</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-lg-flex justify-content-between" id="navbarNav">
            <!-- Menu trái -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link" href="./">Trang chủ</a></li>
                <li class="nav-item"><a class="nav-link" href="index.php?controller=product&action=index">Sản phẩm</a></li>
                <li class="nav-item"><a class="nav-link" href="index.php?controller=page&action=blog">Bài viết</a></li>
                <li class="nav-item"><a class="nav-link" href="index.php?controller=page&action=contact">Liên hệ</a></li>
                <li class="nav-item"><a class="nav-link" href="#"><i class="bi bi-cart"></i> Giỏ hàng</a></li>
            </ul>

            <!-- Thanh tìm kiếm -->
            <form class="d-flex gap-2" method="GET" action="index.php">
                <input type="hidden" name="controller" value="product">
                <input type="hidden" name="action" value="search">
                <input class="form-control" type="search" name="keyword" placeholder="Tìm sản phẩm..." aria-label="Search"
                       value="<?php echo isset($_GET['keyword']) ? htmlspecialchars($_GET['keyword']) : ''; ?>">
                <button class="btn btn-outline-success" type="submit">Tìm</button>
            </form>
        </div>
    </div>
</nav>

