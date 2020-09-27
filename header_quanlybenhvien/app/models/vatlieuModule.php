<?php 
    
    class vatlieuModule  extends Db 
    {

        // function lất ra hết vật liệu
        public function getAllVatLieu()
        {
            $sql = parent::$connection->prepare("SELECT * FROM vatlieu");
            return parent::select($sql);
        }
        //function tìm kiếm vật liệu theo tên
        public function getVatLieuByName($keyword)
        {
        $search = "%{$keyword}%";
        $sql = parent::$connection->prepare('SELECT * FROM vatlieu WHERE tenvatlieu LIKE ? ');
        $sql->bind_param('s', $search);
        return parent::select($sql);
        }

        // function lấy vật liệu theo id

        // function thêm vật liệu

        // function xóa vật liệu theo id




    }