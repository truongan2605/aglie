<?php
class ProductController {
    private $products;
    private $categories;

    public function __construct() {
        // Danh sách danh mục
        $this->categories = [
            1 => 'Nike',
            2 => 'Adidas',
            3 => 'Converse & Vans'
        ];

        // Danh sách sản phẩm kèm theo category_id
        $this->products  = [
            0 => ['name' => 'Giày Nike', 'image' => '../public/images/giày 1.jpeg', 'price' => 1200000, 'description' => 'Giày Nike chính hãng, siêu nhẹ, thoáng khí.', 'category_id' => 1],
            1 => ['name' => 'Giày Adidas', 'image' => '../public/images/giày 2.webp', 'price' => 1350000, 'description' => 'Giày Adidas bền đẹp, phù hợp mọi hoạt động.', 'category_id' => 2],
            2 => ['name' => 'Giày Puma', 'image' => '../public/images/giày 3.webp', 'price' => 1100000, 'description' => 'Giày Puma phong cách trẻ trung, năng động.', 'category_id' => 3],
            3 => ['name' => 'Giày Converse', 'image' => '../public/images/giày 4.webp', 'price' => 950000, 'description' => 'Giày Converse cổ điển, phù hợp với mọi trang phục.', 'category_id' => 4],
            4 => ['name' => 'Giày Vans', 'image' => '../public/images/giày 5.webp', 'price' => 980000, 'description' => 'Giày Vans thời trang, cá tính, thích hợp đi học và đi chơi.', 'category_id' => 1],
            5 => ['name' => 'Giày Balenciaga', 'image' => '../public/images/giày 6.webp', 'price' => 3500000, 'description' => 'Giày Balenciaga hàng hiệu, sang trọng và đẳng cấp.', 'category_id' => 3],
            6 => ['name' => 'Giày New Balance', 'image' => '../public/images/giày 7.webp', 'price' => 1250000, 'description' => 'Giày New Balance hỗ trợ bàn chân tốt, phù hợp chạy bộ.', 'category_id' => 2]
        ];
    }

    // Hiển thị danh sách sản phẩm theo danh mục
    public function index() {
        $category_id = isset($_GET['category_id']) ? (int)$_GET['category_id'] : null;

        // Lọc sản phẩm theo danh mục (nếu có)
        $filteredProducts = $this->products;
        if ($category_id !== null && isset($this->categories[$category_id])) {
            $filteredProducts = array_filter($this->products, function ($product) use ($category_id) {
                return $product['category_id'] == $category_id;
            });
        }

        include '../app/views/product_list.php';
    }

    public function category() {
        $categoryId = isset($_GET['id']) ? (int)$_GET['id'] : 0;

        $filteredProducts = array_filter($this->products, function($product) use ($categoryId) {
            return $product['category_id'] == $categoryId;
        });

        include '../app/views/category.php';
    }

    // Hiển thị chi tiết sản phẩm
    public function detail() {
        $id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

        if (!isset($this->products[$id])) {
            echo "Sản phẩm không tồn tại!";
            return;
        }

        $product = $this->products[$id];
        include '../app/views/product_detail.php';
    }

    public function search() {
        $keyword = isset($_GET['keyword']) ? trim($_GET['keyword']) : '';
    
        $filteredProducts = [];
    
        if ($keyword !== '') {
            foreach ($this->products as $key => $product) {
                if (stripos($product['name'], $keyword) !== false || stripos($product['description'], $keyword) !== false) {
                    $filteredProducts[$key] = $product;
                }
            }
        }
    
        include '../app/views/search_result.php';
    }
    
}
?>
