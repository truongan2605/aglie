<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Bài viết</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php include '../app/views/layouts/header.php'; ?>

<div class="container mt-5">
    <h2>Bài viết mới nhất</h2>
    <div class="row">
        <?php
        $posts = [
            ['title' => 'Cách chọn giày phù hợp với bạn', 'excerpt' => 'Hướng dẫn chọn size, chất liệu, và kiểu dáng giày...'],
            ['title' => 'Top 5 thương hiệu giày hot nhất 2025', 'excerpt' => 'Danh sách các thương hiệu giày đình đám đang được yêu thích nhất...'],
            ['title' => 'Bảo quản giày đúng cách', 'excerpt' => 'Một số mẹo đơn giản giúp bạn giữ giày luôn như mới...'],
        ];

        foreach ($posts as $post) : ?>
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $post['title']; ?></h5>
                        <p class="card-text"><?php echo $post['excerpt']; ?></p>
                        <a href="#" class="btn btn-outline-primary btn-sm">Xem chi tiết</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php include '../app/views/layouts/footer.php'; ?>
</body>
</html>
