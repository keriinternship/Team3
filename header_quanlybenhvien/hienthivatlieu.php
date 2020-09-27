<?php
    include './View/include_module.php';
    include './app/models/vatlieuModule.php';
    include './app/getModule/GiaoDienChild.php';
     $giaodienchild = new GiaoDienChild();
     $vatlieu = new vatlieuModule();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/css/bootstrap.min.css">
    <link rel="stylesheet" href="./public/css/style.css">
    <link rel="stylesheet" href="./public/css/base.css">
    <link rel="stylesheet" href="./public/css/hienthivatlieu.css">
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
                <!-- form search  -->
                <div class="form-search-vl">
                    <form action="" method="get">
                        <div class="search-vl">
                            <input type="text" name="search" id="search-vl">
                            <button type="submit" class="btn-search-vl">search</button>
                        </div>

                    </form>

                </div>
                <div class="row rowVL">
                    <?php  
                            $getAllVatLieu = $vatlieu -> getAllVatLieu();
                            foreach($getAllVatLieu as $key=>$value){
                        
                        ?>
                    <div class="col-sm-12 col-md-3 col-lg-3">
                        <div class="box-vatlieu">
                            <div class="img_vlieu">
                                <img src="./public/images/images/vatlieu/<?php echo $value['img_vatlieu']?>" alt=""
                                    class="img img-fluid">
                            </div>
                            <div class="name_vl">
                                <p><?php  echo $value['tenvatlieu']  ?></p>
                            </div>
                            <div class="rate">
                                <img src="./public/images/star.png" alt="" class="img img-fluid img-rate">
                                <img src="./public/images/star.png" alt="" class="img img-fluid img-rate">
                                <img src="./public/images/star.png" alt="" class="img img-fluid img-rate">
                                <img src="./public/images/star.png" alt="" class="img img-fluid img-rate">
                                <img src="./public/images/star.png" alt="" class="img img-fluid img-rate">
                            </div>
                        </div>
                    </div>
                    <?php }?>
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
        login_click.addEventListener('click', () => {
            window.location = 'http://localhost/header_quanlybenhvien/login.php';
        })
    </script>

    <script>
        const search = document.querySelector('#search-vl');
        const content = document.querySelector('.rowVL');

        search.addEventListener('keyup',

            async () => {
                const url = './app/getModule/getVatlieuModule.php';
                let data = {
                    key: search.value,
                };
                let req = await fetch(url, {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        Accept: "application/json"
                    },
                    body: JSON.stringify(data),
                });
                let receives = await req.json();
                let receive = receives.map((value) => {
                        return `<div class="col-sm-12 col-md-3 col-lg-3">
                                        <div class="box-vatlieu">
                                            <div class="img_vlieu">
                                                <img src="./public/images/images/vatlieu/${value['img_vatlieu']}" alt="" class="img img-fluid">
                                            </div>
                                            <div class="name_vl">
                                                <p>${value['tenvatlieu']}</p>
                                            </div>
                                            <div class="rate">
                                                <img src="./public/images/star.png" alt="" class="img img-fluid img-rate">
                                                <img src="./public/images/star.png" alt="" class="img img-fluid img-rate">
                                                <img src="./public/images/star.png" alt="" class="img img-fluid img-rate">
                                                <img src="./public/images/star.png" alt="" class="img img-fluid img-rate">
                                                <img src="./public/images/star.png" alt="" class="img img-fluid img-rate">
                                            </div>
                                        </div> 
                                </div>`;
                });
                content.innerHTML = "";
                receive.forEach((value)=>{
                       return content.innerHTML += value
                })
            }

        )
    </script>
</body>

</html>