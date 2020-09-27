<?php 
  include '../../config/database.php';
  include '../models/Db.php';
  include '../../config/config.php';
  include '../models/vatlieuModule.php';
$input = json_decode(file_get_contents('php://input'),true);
$key = $input['key'];
$vatlieModule = new vatlieuModule();
$getVatlieu = $vatlieModule->getVatLieuByName($key);
echo json_encode($getVatlieu);
