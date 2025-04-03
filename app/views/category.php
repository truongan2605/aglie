<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh mục sản phẩm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php include '../app/views/layouts/header.php'; ?>

    <div class="container mt-4">
        <h3>Sản phẩm theo danh mục</h3>
        <div class="row">
            <?php if (empty($filteredProducts)) : ?>
                <p>Không có sản phẩm nào trong danh mục này.</p>
            <?php else : ?>
                <?php foreach ($filteredProducts as $key => $product) : ?>
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
            <?php endif; ?>
        </div>
    </div>

    <?php include '../app/views/layouts/footer.php'; ?>
</body>
</html>
