<?php include '../app/views/layouts/header.php'; ?>

<div class="container">
    <h2 class="my-4"><?= $product['name'] ?></h2>

    <div class="row">
        <div class="col-md-6">
            <img src="<?= $product['image'] ?>" class="img-fluid" alt="<?= $product['name'] ?>">
        </div>
        <div class="col-md-6">
            <h3>Giá: <?= number_format($product['price'], 0, ',', '.') ?> VND</h3>
            <p><?= $product['description'] ?></p>
            <a href="#" class="btn btn-success">Thêm vào giỏ hàng</a>
        </div>
    </div>
</div>

<?php include '../app/views/layouts/footer.php'; ?>
