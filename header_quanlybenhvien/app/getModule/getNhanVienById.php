<?php 
    require '../../config/database.php';
     require '../models/Db.php';
    require '../../config/config.php';
    require '../models/nhanvienModule.php';
    $input = json_decode(file_get_contents('php://input'), true);
    $id = $input['id'];
    $nv = new nhanvienModules();
    $getNV = $nv->getNhanVienById($id);
    echo json_encode($getNV);