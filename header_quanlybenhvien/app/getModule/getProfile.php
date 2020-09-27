<?php 
       require '../../config/database.php';
       require '../models/Db.php';
      require '../../config/config.php';
      require '../models/LoginModule.php';
      $input = json_decode(file_get_contents('php://input'),true);
      echo json_encode($input);
?>