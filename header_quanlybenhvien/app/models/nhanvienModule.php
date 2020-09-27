<?php 

class nhanvienModules extends Db{

    // function lấy hết nhân viên để hiển thị
        public function getAllNhanVien()
        {
            $sql = parent::$connection->prepare("SELECT * FROM chitietnhanvien");
            return parent::select($sql);
        }
        public function getNhanVienById($id)
        {
            $sql = parent::$connection->prepare('SELECT * FROM `chitietnhanvien` WHERE chitietnhanvien.id_chitietnhanvien = ? ');
            $sql->bind_param('i', $id);
            return parent::select($sql)[0];
        }
    // function thêm nhân viên vào db
    public function addNhanVien($tennhanvien,$gioitinh,$ngaysinh,$diachi,$sodienthoai,$id_chitietkhoa,$id_loainhanvien,$img_nhanvien)
    {
        $sql = parent::$connection->prepare(' INSERT INTO `chitietnhanvien` ( `tennhanvien`, `gioitinh`, `ngaysinh`, `diachi`, `sodienthoai`, `id_chitietkhoa`, `id_loainhanvien`, `img_nhanvien`) VALUES (?,?,?,?,?,?,?,?)');
        $sql->bind_param('sssssiis',$tennhanvien,$gioitinh,$ngaysinh,$diachi,$sodienthoai,$id_chitietkhoa,$id_loainhanvien,$img_nhanvien);
        return $sql->execute();
    }
    // function sử nhân viên theo id
    public function updateNhanVien($idnhanvien,$tennhanvien,$gioitinh,$ngaysinh,$diachi,$sodienthoai,$id_chitietkhoa,$id_loainhanvien,$img_nhanvien)
    {
        $sql = parent::$connection->prepare('UPDATE chitietnhanvien SET  tennhanvien = ? , gioitinh = ? , ngaysinh = ? , diachi = ? , sodienthoai = ? , id_chitietkhoa = ?, id_loainhanvien = ? , img_nhanvien = ?  WHERE chitietnhanvien.id_chitietnhanvien = ?');
        $sql->bind_param('sssssiisi',$tennhanvien,$gioitinh,$ngaysinh,$diachi,$sodienthoai,$id_chitietkhoa,$id_loainhanvien,$img_nhanvien,$idnhanvien);
        return $sql->execute();
    }
    // funtion xóa nhân viên theo id
        public function deleteNhanVien($id){
            $sql = parent::$connection->prepare('DELETE FROM chitietnhanvien WHERE chitietnhanvien.id_chitietnhanvien = ?');
            $sql->bind_param('i', $id);
            return $sql->execute();
        }
        // function tìm nhân viên theo tên
        public function searchNhanVien($keyword){
            $search = "%{$keyword}%";
            $sql = parent::$connection->prepare('SELECT * FROM chitietnhanvien WHERE tennhanvien  LIKE ? ');
            $sql->bind_param('s', $search);
            return parent::select($sql);
        }
      // function lấy hết loại nhân viên để đổ dữ liệu vào select option
      public function getAllLoaiNhanVien()
      {
          $sql = parent::$connection->prepare("SELECT * FROM loainhanvien");
          return parent::select($sql);
      }
      // function lấy loại nhân viên theo ID
      public function getLoaiNhanVienById($id)
      {
          $sql = parent::$connection->prepare('SELECT * FROM loainhanvien WHERE id_loainhanvien = ? ');
          $sql->bind_param('i', $id);
          return parent::select($sql)[0];
      }
    //   function thêm loại nhân viên theo id


    // function xóa loại nhân viên theo id



    // function sửa loại nhân viên theo id
}

?>