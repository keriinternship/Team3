<?php

    include './app/getModule/GiaoDienChild.php';
     $giaodienchild = new GiaoDienChild();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/css/bootstrap.min.css">
    <link rel="stylesheet" href="./public/css/style.css">
    <link rel="stylesheet" href="./public/css/base.css">
    <title>Quản lý bệnh viện</title>
</head>

<body>
    <?php 
       $header = $giaodienchild ->header();
       echo($header);
    ?>
    <section>
        <div class="slideHeader">
            <div class="directImagesSlide">
                <div class="imgSlide  active"><img src="./public/images/slide.jpg" alt=""
                        class="img img-fluid img-SlideHeader">
                </div>
                <div class="imgSlide"><img src="./public/images/slide3.jpg" alt=""
                        class="img img-fluid img-SlideHeader"></div>
                <div class="imgSlide"><img src="./public/images/slide4.jpg" alt=""
                        class="img img-fluid img-SlideHeader"></div>
            </div>
        </div>
        <div class="Content">
            <div class="container">
                <div class="row rowContent">
                    <?php
                         $Content1 = $giaodienchild->contentChild('form_chinh','dieutri.jpg','Phòng');
                         echo ($Content1);
                         $Content4 = $giaodienchild->contentChild('hienthikhoa','khambenh1.png','Khoa');
                         echo($Content4);
                         $Content5 = $giaodienchild->contentChild('tintuc','hospital.png','tin tức');
                         echo($Content5);
                         $Content6 = $giaodienchild->contentChild('hienthivatlieu','diem.jpg','Vật tư');
                         echo($Content6);
                    ?>
                </div>
            </div>
        </div>
    </section>
    <?php 
       $footer =  $giaodienchild->footer();
       echo($footer);
    ?>
    <script src="./public/js/main.js"></script>
    <script>

const login_click = document.querySelector('#login_click');
login_click.addEventListener('click',()=>{
   window.location = 'http://localhost/header_quanlybenhvien/login.php';
})
    </script>
</body>

</html>