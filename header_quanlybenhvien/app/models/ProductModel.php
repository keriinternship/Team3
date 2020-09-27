<?php
class ProductModel extends Db
{
    // Lấy tát cả sản phẩm theo trang
    public function getProductListPage($perPage, $page)
    {
        $start = ($page - 1) * $perPage;
        $perPageFake = $perPage + 1;
        // Bước 2: Tạo câu query
        $sql = parent::$connection->prepare("SELECT * FROM products LIMIT $start, $perPageFake");
        return parent::select($sql);
    }

    // Lấy tất cả sản phẩm
    public function getProducts()
    {
        // Bước 2: Tạo câu query
        $sql = parent::$connection->prepare("SELECT * FROM products");
        return parent::select($sql);
    }

    // Lấy tổng sản phảm
    public function getTotalProduct()
    {
        $sql = parent::$connection->prepare("SELECT COUNT(product_id) FROM products");
        return parent::select($sql)[0]['COUNT(product_id)'];
    }

    //Lấy sp theo ID
    public function getProductById($id)
    {
        $sql = parent::$connection->prepare('SELECT * FROM products WHERE product_id=?');
        $sql->bind_param('i', $id);
        return parent::select($sql)[0];
    }

    //Láy sp theo danh mục
    public function getProductByCategory($catId)
    {
        $sql = parent::$connection->prepare('SELECT * FROM products INNER JOIN product_category ON products.product_id = product_category.product_id WHERE product_category.category_id = ?');
        $sql->bind_param('i', $catId);
        return parent::select($sql);
    }

    //Láy sp theo nhiều danh mục
    public function getProductByNCategories($arrCatId, $perPage, $page)
    {
        // Vị trí bắt đầu
        $start = ($page - 1) * $perPage;
        $perPageFake = $perPage + 1;

        // Tạo mệnh đề WHERE cho từng danh mục
        $selected_categories = "WHERE ";
        $selected_categories .=  str_repeat('product_category.category_id = ? OR ', count($arrCatId));
        $selected_categories = substr($selected_categories, 0, -3);

        // DISTINCT: chỉ giữ lại 1 giá trị, trùng sẽ bị bỏ
        $sql = parent::$connection->prepare("SELECT DISTINCT products.product_id, products.product_name, products.product_price, products.product_description, products.product_image FROM products INNER JOIN product_category ON products.product_id = product_category.product_id $selected_categories LIMIT $start, $perPageFake");

        // Tạo chuỗi iiii cho bind_param
        $nCate = str_repeat('i', count($arrCatId));

        $sql->bind_param($nCate, ...$arrCatId);
        return parent::select($sql);
    }

    //Láy sp theo từ khóa
    public function searchProduct($keyword)
    {
        $search = "%{$keyword}%";
        $sql = parent::$connection->prepare('SELECT * FROM products WHERE product_name LIKE ?');
        $sql->bind_param('s', $search);
        return parent::select($sql);
    }

    //Thêm sp
    public function addProduct($productName, $productPrice, $productDescription, $productImage)
    {
        $sql = parent::$connection->prepare('INSERT INTO `products` (`product_name`, `product_price`, `product_description`, `product_image`) VALUES (?, ?, ?, ?)');
        $sql->bind_param('sdss', $productName, $productPrice, $productDescription, $productImage);
        return $sql->execute();
    }

    //Cập nhật sp
    public function updateProduct($productName, $productPrice, $productDescription, $productImage, $productId)
    {
        $sql = parent::$connection->prepare('UPDATE `products` SET `product_name` = ?, `product_price` = ?, `product_description` = ?, `product_image` = ? WHERE `products`.`product_id` = ?');
        $sql->bind_param('sdssi', $productName, $productPrice, $productDescription, $productImage, $productId);
        return $sql->execute();
    }

    //Xoa sp
    public function deleteProduct($productId)
    {
        $sql = parent::$connection->prepare('DELETE FROM `products` WHERE `products`.`product_id` = ?');
        $sql->bind_param('i', $productId);
        return $sql->execute();
    }
}
