<?php 
    require '../../config/database.php';
     require '../models/Db.php';
    require '../../config/config.php';
    require '../models/nhanvienModule.php';
    $input = json_decode(file_get_contents('php://input'), true);
    $idnhanvien = $input['id'];
    $id_loainhanvien = $input['loai'];
    $tennhanvien = $input['ten'];
    $gioitinh =$input['gioitinh'];
    $ngaysinh =$input['ngaysinh'];
    $sodienthoai =$input['sdt'];
    $diachi =$input['diachi'];
    $id_chitietkhoa = $input['khoa']; 
    $hinhanh = $input['hinhanh'];
    $addNhanVien = new nhanvienModules();
    $addNhanVien->updateNhanVien($idnhanvien,$tennhanvien,$gioitinh,$ngaysinh,$diachi,$sodienthoai,$id_chitietkhoa,$id_loainhanvien,$hinhanh);
    echo json_encode($addNhanVien->getAllNhanVien());