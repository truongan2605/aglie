<?php include '../app/views/layouts/header.php'; ?>

<div class="container">
    <h2 class="my-4">Danh sách sản phẩm</h2>

    <!-- Hiển thị danh mục -->
    <div class="mb-3">
        <h4>Phân loại sản phẩm</h4>
        <ul class="list-group">
            <li class="list-group-item"><a href="index.php?controller=product&action=index">Tất cả</a></li>
            <?php foreach ($this->categories as $id => $name): ?>
                <li class="list-group-item">
                    <a href="index.php?controller=product&action=index&category_id=<?= $id ?>"><?= $name ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

    <!-- Hiển thị danh sách sản phẩm -->
    <div class="row">
        <?php foreach ($filteredProducts as $product): ?>
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="<?= $product['image'] ?>" class="card-img-top" alt="<?= $product['name'] ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= $product['name'] ?></h5>
                        <p class="card-text">Giá: <?= number_format($product['price'], 0, ',', '.') ?> VND</p>
                        <a href="index.php?controller=product&action=detail&id=<?= array_search($product, $this->products) ?>" class="btn btn-primary">Xem chi tiết</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php include '../app/views/layouts/footer.php'; ?>
