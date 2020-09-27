<?php 
   $target = "../../public/images/".basename($_FILES['avatar']['name']);
   move_uploaded_file($_FILES['avatar']['tmp_name'], $target);
?>