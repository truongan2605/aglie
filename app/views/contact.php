<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Liên hệ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php include '../app/views/layouts/header.php'; ?>

<div class="container mt-5">
    <h2>Liên hệ với chúng tôi</h2>
    <form method="post" action="#">
        <div class="mb-3">
            <label for="name" class="form-label">Họ và tên</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Nhập họ tên">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Địa chỉ Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Nhập email">
        </div>
        <div class="mb-3">
            <label for="message" class="form-label">Nội dung</label>
            <textarea class="form-control" id="message" name="message" rows="4" placeholder="Nhập nội dung cần gửi"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Gửi</button>
    </form>
</div>

<?php include '../app/views/layouts/footer.php'; ?>
</body>
</html>
