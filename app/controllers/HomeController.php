<?php
class HomeController {
    public function index() {
        $slides = [
            '../public/images/slide1.jpg',
            '../public/images/slide2.jpg',
            '../public/images/slide3.webp'
        ];
        $products = [
            0 => ['name' => 'Giày Nike', 'image' => '../public/images/giày 1.jpeg', 'price' => 1200000, 'description' => 'Giày Nike chính hãng, siêu nhẹ, thoáng khí.'],
            1 => ['name' => 'Giày Adidas', 'image' => '../public/images/giày 2.webp', 'price' => 1350000, 'description' => 'Giày Adidas bền đẹp, phù hợp mọi hoạt động.'],
            2 => ['name' => 'Giày Puma', 'image' => '../public/images/giày 3.webp', 'price' => 1100000, 'description' => 'Giày Puma phong cách trẻ trung, năng động.'],
            3 => ['name' => 'Giày Converse', 'image' => '../public/images/giày 4.webp', 'price' => 950000, 'description' => 'Giày Converse cổ điển, phù hợp với mọi trang phục.'],
            4 => ['name' => 'Giày Vans', 'image' => '../public/images/giày 5.webp', 'price' => 980000, 'description' => 'Giày Vans thời trang, cá tính, thích hợp đi học và đi chơi.'],
            5 => ['name' => 'Giày Balenciaga', 'image' => '../public/images/giày 6.webp', 'price' => 3500000, 'description' => 'Giày Balenciaga hàng hiệu, sang trọng và đẳng cấp.'],
            6 => ['name' => 'Giày New Balance', 'image' => '../public/images/giày 7.webp', 'price' => 1250000, 'description' => 'Giày New Balance hỗ trợ bàn chân tốt, phù hợp chạy bộ.']
        ];
        

        include '../app/views/home.php';
    }
}
?>
