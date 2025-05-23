<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ - Bán Giày</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    .card-title {
        font-size: 1.1rem;
        font-weight: 600;
    }
    .card-img-top {
        transition: transform 0.3s ease;
    }
    .card-img-top:hover {
        transform: scale(1.05);
    }
</style>

</head>

<body>
    <?php include '../app/views/layouts/header.php'; ?>

    <!-- Slide hình ảnh -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <?php foreach ($slides as $index => $slide) : ?>
                <div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>">
                    <img src="<?php echo $slide; ?>" class="d-block w-100" alt="Slide <?php echo $index + 1; ?>">
                </div>
            <?php endforeach; ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </button>
    </div>


    <!-- Phân loại danh mục -->
    <div class="container mt-4">
        <h3>Danh mục sản phẩm</h3>
        <div class="row">
            <?php
            $categories = [
                1 => "Giày Nam",
                2 => "Giày Nữ",
                3 => "Giày Trẻ Em",
                4 => "Giày Thể Thao"
            ];
            foreach ($categories as $id => $category) : ?>
                <div class="col-md-3">
                    <a href="index.php?controller=product&action=category&id=<?php echo $id; ?>" class="btn btn-outline-primary w-100">
                        <?php echo $category; ?>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>


    <!-- Danh sách sản phẩm -->
    <div class="container mt-4">
        <h3>Sản phẩm mới</h3>
        <div class="row">
            <?php foreach ($products as $key => $product) : ?>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="<?php echo $product['image']; ?>" class="card-img-top" alt="<?php echo $product['name']; ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $product['name']; ?></h5>
                            <p class="card-text"><?php echo number_format($product['price'], 0, ',', '.'); ?> VNĐ</p>
                            <a href="index.php?controller=product&action=detail&id=<?php echo $key; ?>" class="btn btn-primary">
                                Xem chi tiết
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>

    <?php include '../app/views/layouts/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>