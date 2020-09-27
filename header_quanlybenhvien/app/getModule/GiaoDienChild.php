<?php
class GiaoDienChild {
    public function addCss(){
        return '
        <link rel="stylesheet" href="./public/css/bootstrap.min.css">
        <link rel="stylesheet" href="./public/css/hoadon.css"> 
        <link rel="stylesheet" href="./public/css/style.css">
        <link rel="stylesheet" href="./public/css/base.css">
        <link rel="stylesheet" href="./public/css/khoa.css">
        <link rel="stylesheet" href="./public/css/chitiet_khoa.css">
        <link rel="stylesheet" href="./public/css/hienthivatlieu.css">
        <script src="./public/js/fontawesome.js"></script>
        <link rel="stylesheet" href="./publlic/css/vattu.css">';
    }
    public function contentChild($link , $image ,$linkName){
    return '
        <div class="col-sm-12 col-md-6 col-lg-6 colContentChildMain">
        <a href="/header_quanlybenhvien/'.$link.'.php">
            <div class="colContentChild">
                <div class="ContentChild_image">
                    <img src="./public/images//'.$image.'" alt=""
                        class="img img-fluid img_contentChild"></div>
                <div class="ContentChild_disc">
                    <p>'.$linkName.'</p>
                </div>
            </div>
        </a></div>'  ;
    }
    public function header(){
    return '
    <header>
    <div class="topHeader">
        <div class="container">
            <div class="row rowTopheader">
                <div class="col-6">
                    <div class="colTopHeader-logo">
                        <div class="colTopHeader-logo_imagesLogo">
                            <img src="./public/images/logobv.png" alt="" class="img img-fluid img-logo" />
                        </div>
                        <p class="colTopHeader-logo_name">
                            
                        </p>
                    </div>
                </div>
                <div class="col-6">
                    <div class="colTopHeader-login-imagesLogin">
                        <img src="./public/images/bacsilogin.jpg" alt="" class="img img-fluid img-login" />
                        <span class="topHeaderLogin-title">
                            Admin
                            <ul class="topHeaderLogin_form">
                                <li class="topHeaderLogin_form-item topHeaderLogin_form-login" id="login_click">
                                    Login
                                </li>
                                <li class="topHeaderLogin_form-item topHeaderLogin_form-register">
                                    Register
                                </li>   
                            </ul>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav>
        <div class="nav">
            <div class="container">
                <div class="navContainer">
                    <div class="navMenu">
                        <div class="iConMenu">
                            <span class="itemIconMenu"></span>
                            <span class="itemIconMenu"></span>
                            <span class="itemIconMenu"></span>
                            <span class="itemIconMenu"></span>
                        </div>
                    </div>
                    <ul class="navItem">
                        <li class="navItemLink"><a href="/trang-chu">Trang chủ</a></li>
                        <li class="navItemLink"><a href="/dang-ki-kham-benh">Đăng kí khám bệnh</a></li>
                        <li class="navItemLink"><a href="/dieu-tri">Điều trị</a></li>
                        <li class="navItemLink"><a href="/thanh-toan">Thanh Toán</a></li>
                    </ul>
                    <div class="showMenu">
                        <span class="closeIcon">
                            x
                        </span>
                        <ul class="navItemRes">
                            <li class="NavItemLinkRes"><a href="/trang-chu">Trang chủ</a></li>
                            <li class="NavItemLinkRes"><a href="/dang-ki-kham-benh">Đăng kí khám bệnh</a></li>
                            <li class="NavItemLinkRes"><a href="/dieu-tri">Điều trị</a></li>
                            <li class="NavItemLinkRes"><a href="/thanh-toan">Thanh Toán</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="contactUs">
        <img src="./public/images/mess.png" alt="" class="img-fluid img" id="img-contactUs" />
        <div class="contacUs_form">
            <div id="contactUs_form-box">
                <div class="contactUs_header">
                    <div class="contactUs_context">
                        <img src="./public/images/logo.jpg" alt="" class="img_contactUs-logo">
                        <span id="contact_header-name">Bệnh viện C Đà Nẵng</span>
                    </div>
                    <span class="contact_header-icon"></span>
                </div>
                <div class="contactUs_contant"></div>
                <div class="contactUs_footer">
                    <form action="" method="post">
                        <input type="text" name="" id="contactUs_input" placeholder="">
                        <button type="submit" id="contactUs_button">
                            <img src="./public/images/telegram.png" alt="" id="logo_telegram">
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>';
    }
    public function footer(){
        return '
        <footer>
        <div class="footer">
            <div class="container">
                <div class="footerInfor">
                    Quản ly bệnh viện
                </div>
            </div>
        </div>
    </footer>';
    }
    public function infor(){
        return '
        <div class="row">
        <div class="col-md-3">
            <div class="logo">
                <img src="./public/images/logobv.png" alt="#" class="img img-fluid">

            </div>
        </div>
        <div class="col-md-9 diachi" style="margin-top: 40px;">
            <h5>BỆNH VIỆN C ĐÀ NẴNG</h5>
            <b>Địa chỉ:</b> 122 Hải Phòng, Thạch Thang, Hải Châu, Đà Nẵng<br>
            <b>Điện thoại:</b> 0236.3821.480 <br>
            <b>Website:</b> <a href="">https://DaNangC.com</a>
        </div>
    </div>';
    }
}
?>
