<?php include '../app/views/layouts/header.php'; ?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ - Bán Giày</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<div class="container mt-4">
    <div class="row">
        <div class="col-md-6">
            <img src="<?php echo $product['image']; ?>" class="img-fluid" alt="<?php echo $product['name']; ?>">
        </div>
        <div class="col-md-6">
            <h2><?php echo $product['name']; ?></h2>
            <p><?php echo $product['description']; ?></p>
            <h4><?php echo number_format($product['price'], 0, ',', '.'); ?> VNĐ</h4>
            <a href="#" class="btn btn-success">Thêm vào giỏ hàng</a>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


<?php include '../app/views/layouts/footer.php'; ?>
