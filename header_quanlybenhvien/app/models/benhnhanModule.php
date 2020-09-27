<?php 

class benhnhanModule extends Db{

        //function lấy tất cả bệnh nhân
        public function getAllBenhNhan(){
            $sql = parent::$connection->prepare("SELECT * FROM `chitietbenhnhan`");
            return parent::select($sql);
        }
        // function lấy bệnh nhân theo id

        public function getKhoaById($id){
            $sql = parent::$connection->prepare('SELECT * FROM `khoa` WHERE khoa.id_khoa = ? ');
            $sql->bind_param('i', $id);
            return parent::select($sql)[0];
        }

}