<?php 
    require '../../config/database.php';
     require '../models/Db.php';
    require '../../config/config.php';
    require '../models/nhanvienModule.php';
    $input = json_decode(file_get_contents('php://input'), true);
   
    $loai = $input['loai'];
    $ten = $input['ten'];
    $gioitinh =$input['gioitinh'];
    $ngaysinh =$input['ngaysinh'];
    $sodienthoai =$input['sdt'];
    $diachi =$input['diachi'];
    $khoa = $input['khoa']; 
    $hinhanh = $input['hinhanh'];
    $addNhanVien = new nhanvienModules();
    $addNhanVien->addNhanVien($ten,$gioitinh,$ngaysinh,$diachi,$sodienthoai,$khoa,$loai,$hinhanh);
    echo json_encode($addNhanVien->getAllNhanVien());