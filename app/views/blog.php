<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài viết - Shop Giày</title>

    <!-- Meta SEO -->
    <meta name="description" content="Tổng hợp các bài viết mới nhất về giày: cách chọn, bảo quản, xu hướng thời trang giày 2025.">
    <meta name="keywords" content="bài viết giày, thời trang giày, cách chọn giày, bảo quản giày">
    <meta name="author" content="Shop Giày">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        .card-title {
            font-size: 1.1rem;
            font-weight: bold;
        }
        .card-text {
            font-size: 0.95rem;
            color: #555;
        }
        .btn-outline-primary:hover {
            background-color: #0d6efd;
            color: #fff;
        }
    </style>
</head>
<body>

<?php include '../app/views/layouts/header.php'; ?>

<div class="container my-5">
    <h1 class="mb-4 text-center">📝 Bài viết mới nhất</h1>
    <div class="row">
        <?php
        $posts = [
            ['title' => 'Cách chọn giày phù hợp với bạn', 'excerpt' => 'Hướng dẫn chọn size, chất liệu, và kiểu dáng giày...', 'url' => '#'],
            ['title' => 'Top 5 thương hiệu giày hot nhất 2025', 'excerpt' => 'Danh sách các thương hiệu giày đình đám đang được yêu thích nhất...', 'url' => '#'],
            ['title' => 'Bảo quản giày đúng cách', 'excerpt' => 'Một số mẹo đơn giản giúp bạn giữ giày luôn như mới...', 'url' => '#'],
        ];

        foreach ($posts as $post) : ?>
            <div class="col-sm-6 col-lg-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title"><?php echo $post['title']; ?></h5>
                        <p class="card-text flex-grow-1"><?php echo $post['excerpt']; ?></p>
                        <a href="<?php echo $post['url']; ?>" class="btn btn-outline-primary btn-sm mt-3">Xem chi tiết</a>
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
