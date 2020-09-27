<?php 

class khoaModule extends Db{

        //function lấy tất cả loại nhân viên
        public function getAllKhoa(){
            $sql = parent::$connection->prepare("SELECT * FROM khoa");
            return parent::select($sql);
        }
        // function lấy loại nhân viên theo ID

        public function getKhoaById($id){
            $sql = parent::$connection->prepare('SELECT * FROM `khoa` WHERE khoa.id_khoa = ? ');
            $sql->bind_param('i', $id);
            return parent::select($sql)[0];
        }

}