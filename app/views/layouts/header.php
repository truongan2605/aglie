<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="./">Shop Giày</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <!-- Menu trái -->
            <ul class="navbar-nav me-auto">
                <li class="nav-item"><a class="nav-link" href="./">Trang chủ</a></li>
                <li class="nav-item"><a class="nav-link" href="index.php?controller=product&action=index">Sản phẩm</a></li>
                <li class="nav-item"><a class="nav-link" href="index.php?controller=page&action=blog">Bài viết</a></li>
                <li class="nav-item"><a class="nav-link" href="index.php?controller=page&action=contact">Liên hệ</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Giỏ hàng <i class="bi bi-cart"></i></a></li>
            </ul>

            <!-- Thanh tìm kiếm -->
            <form class="d-flex" method="GET" action="index.php">
                <input type="hidden" name="controller" value="product">
                <input type="hidden" name="action" value="search">
                <input class="form-control me-2" type="search" name="keyword" placeholder="Tìm sản phẩm..." aria-label="Search"
                    value="<?php echo isset($_GET['keyword']) ? htmlspecialchars($_GET['keyword']) : ''; ?>">
                <button class="btn btn-outline-success" type="submit">Tìm</button>
            </form>
        </div>
    </div>
</nav>
