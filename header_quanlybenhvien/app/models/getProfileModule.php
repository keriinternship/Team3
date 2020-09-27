<?php
    class getProfileModule extends Db{
        public function getProfileById($id){
            $sql = parent::$connection->prepare('SELECT * FROM login INNER JOIN chitietnhanvien ON login.id_nhanvien = chitietnhanvien.id_chitietnhanvien
                                                                        INNER JOIN loainhanvien ON chitietnhanvien.id_loainhanvien = loainhanvien.id_loainhanvien
                                                                        WHERE chitietnhanvien.id_chitietnhanvien = ?');
            $sql->bind_param('i', $id);
            return parent::select($sql)[0];
        }
    }
?>