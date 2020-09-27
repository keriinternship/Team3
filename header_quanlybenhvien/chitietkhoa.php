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
    <link rel="stylesheet" href="./View/viewQuanLyKhoa/ccssQuanlykhoa/khoa.css">
    <link rel="stylesheet" href="./View/viewQuanLyKhoa/ccssQuanlykhoa/chitiet_khoa.css">
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
                <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="info-khoa">
                    <img src="./public/images/bg-boxthuvien.jpg" alt="" class="img-fluid">
                    <h2>Hospital Đà Nẵng C: <a href="#">Khoa Nội</a> </h2>
                    <h6>Phòng: <a href="#">Danh sách phòng</a></h6>
                    <h6>Điện thoại: <span>0123456789</span></h6>
                    <h6>Lịch làm việc: <span>Thứ Hai – Chủ Nhật: 07h00 – 20h00</span></h6>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-6 col-6">
                        <h5 class="text-cv">Trưởng khoa: </h5>
                        <div class="avatar">
                            <div class="hinh">
                                <img src="./public/images/bs01.png" alt="" class="img-fluid">
                            </div>
                            <h6>Bác sĩ</h6>
                            <h6> <a href="#" class="text">Trần Văn A</a></h6>
                        </div>
                    </div>
                    <div class="col-md-6 col-6">
                        <h5 class="text-cv">Phó khoa: </h5>
                        <div class="avatar">
                            <div class="hinh">
                                <img src="./public/images/bs02.png" alt="" class="img-fluid">
                            </div>
                            <h6>Bác sĩ</h6>

                            <h6> <a href="#" class="text">Trần Văn A</a></h6>
                        </div>
                    </div>
                </div>
                <hr>
                <h5 class="text-cv">Đội ngũ y bác sĩ: </h5>
                <div class="nhan-vien">

                    <ul class="list-nv">
                        <li class="ittem-nv">
                            <div class="avatar">
                                <div class="hinh">
                                    <img src="./public/images/bs01.png" alt="" class="img-fluid">
                                </div>
                                <h6>Bác sĩ</h6>
                                <h6> <a href="#" class="text">Trần Văn san</a></h6>

                            </div>
                        </li>
                        <li class="ittem-nv">
                            <div class="avatar">
                                <div class="hinh">
                                    <img src="./public/images/bs01.png" alt="" class="img-fluid">
                                </div>
                                <h6>Bác sĩ</h6>
                                <h6> <a href="#" class="text">Trần Văn A</a></h6>

                            </div>
                        </li>
                        <li class="ittem-nv">
                            <div class="avatar">
                                <div class="hinh">
                                    <img src="./public/images/bs01.png" alt="" class="img-fluid">
                                </div>
                                <h6>Bác sĩ</h6>
                                <h6> <a href="#" class="text">Trần Văn A</a></h6>

                            </div>
                        </li>
                        <li class="ittem-nv">
                            <div class="avatar">
                                <div class="hinh">
                                    <img src="./public/images/bs01.png" alt="" class="img-fluid">
                                </div>
                                <h6>Bác sĩ</h6>
                                <h6> <a href="#" class="text">Trần Văn A</a></h6>

                            </div>
                        </li>
                        <li class="ittem-nv">
                            <div class="avatar">
                                <div class="hinh">
                                    <img src="./public/images/bs01.png" alt="" class="img-fluid">
                                </div>
                                <h6>Bác sĩ</h6>
                                <h6> <a href="#" class="text">Trần Văn A</a></h6>

                            </div>
                        </li>
                        <li class="ittem-nv">
                            <div class="avatar">
                                <div class="hinh">
                                    <img src="./public/images/bs01.png" alt="" class="img-fluid">
                                </div>
                                <h6>Bác sĩ</h6>
                                <h6> <a href="#" class="text">Trần Văn A</a></h6>

                            </div>
                        </li>
                        <li class="ittem-nv">
                            <div class="avatar">
                                <div class="hinh">
                                    <img src="./public/images/bs01.png" alt="" class="img-fluid">
                                </div>
                                <h6>Bác sĩ</h6>
                                <h6> <a href="#" class="text">Trần Văn A</a></h6>

                            </div>
                        </li>
                        <li class="ittem-nv">
                            <div class="avatar">
                                <div class="hinh">
                                    <img src="./public/images/bs01.png" alt="" class="img-fluid">
                                </div>
                                <h6>Bác sĩ</h6>
                                <h6> <a href="#" class="text">Trần Văn A</a></h6>

                            </div>
                        </li>
                        <li class="ittem-nv">
                            <div class="avatar">
                                <div class="hinh">
                                    <img src="./public/images/bs01.png" alt="" class="img-fluid">
                                </div>
                                <h6>Bác sĩ</h6>
                                <h6> <a href="#" class="text">Trần Văn A</a></h6>

                            </div>
                        </li>
                        <li class="ittem-nv">
                            <div class="avatar">
                                <div class="hinh">
                                    <img src="./public/images/bs01.png" alt="" class="img-fluid">
                                </div>
                                <h6>Bác sĩ</h6>
                                <h6> <a href="#" class="text">Trần Văn A</a></h6>

                            </div>
                        </li>
                        <li class="ittem-nv">
                            <div class="avatar">
                                <div class="hinh">
                                    <img src="./public/images/bs01.png" alt="" class="img-fluid">
                                </div>
                                <h6>Bác sĩ</h6>
                                <h6> <a href="#" class="text">Trần Văn A</a></h6>

                            </div>
                        </li>
                        <li class="ittem-nv">
                            <div class="avatar">
                                <div class="hinh">
                                    <img src="./public/images/bs01.png" alt="" class="img-fluid">
                                </div>
                                <h6>Bác sĩ</h6>
                                <h6> <a href="#" class="text">Trần Văn A</a></h6>

                            </div>
                        </li>
                        <li class="ittem-nv">
                            <div class="avatar">
                                <div class="hinh">
                                    <img src="./public/images/bs01.png" alt="" class="img-fluid">
                                </div>
                                <h6>Bác sĩ</h6>
                                <h6> <a href="#" class="text">Trần Văn A</a></h6>

                            </div>
                        </li>
                        <li class="ittem-nv">
                            <div class="avatar">
                                <div class="hinh">
                                    <img src="./public/images/bs01.png" alt="" class="img-fluid">
                                </div>
                                <h6>Bác sĩ</h6>
                                <h6> <a href="#" class="text">Trần Văn A</a></h6>

                            </div>
                        </li>
                        <li class="ittem-nv">
                            <div class="avatar">
                                <div class="hinh">
                                    <img src="./public/images/bs01.png" alt="" class="img-fluid">
                                </div>
                                <h6>Bác sĩ</h6>
                                <h6> <a href="#" class="text">Trần Văn A</a></h6>

                            </div>
                        </li>0
                        <li class="ittem-nv">
                            <div class="avatar">
                                <div class="hinh">
                                    <img src="./public/images/bs01.png" alt="" class="img-fluid">
                                </div>
                                <h6>Bác sĩ</h6>
                                <h6> <a href="#" class="text">Trần Văn Anh</a></h6>

                            </div>
                        </li>
                    </ul>

                </div>

            </div>
            <div class="col-md-3">
                <div class="box-book">
                    <div class="box-text">
                        <h5>Thời Gian Khám Bệnh</h5>
                        <i>Từ 8h - 20h hằng ngày</i>
                    </div>
                </div>
                <div class="contact">
                    <div class="row">
                        <div class="col-md-6 col-6">
                            <div class="con-item">
                                <a href="tel:0123456789">
                                    <h6>0123456789</h6>
                                    <i class="fas fa-phone-square-alt icon-1"></i>
                                </a>
                            </div>
                            <div class="con-item item-tv">
                                <a>
                                    <h6>Bác sĩ tư vấn</h6>
                                    <i class="fas fa-headset icon-2"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-6">
                            <div class="con-item">
                                <a href="#">
                                    <h6>Đặt lịch khám</h6>
                                    <i class="far fa-calendar-plus icon-3"></i>
                                </a>
                            </div>
                            <div class="con-item">
                                <a
                                    href="https://www.google.com/maps/place/T%C3%B2a+nh%C3%A0+SBI/@10.8500366,106.6258568,1884m/data=!3m1!1e3!4m5!3m4!1s0x31752a211822e6cf:0xd7fdb44c860c4312!8m2!3d10.8546169!4d106.6256062?hl=vi-VN">
                                    <h6>Vị trí</h6>
                                    <i class="fas fa-map-marked-alt icon-4"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tuvan"> <img src="./public/images/tu-van.gif" alt="" class="img-fluid"></div>
                <div class="dich-vu">
                    <div class="tin-tuc dich-vu-item">
                        <h5> <a href="">Tin tức</a></h5>
                    </div>
                    <div class="dk-kham dich-vu-item">
                        <h5> <a href="">Đăng ký khám bệnh</a></h5>
                    </div>
                    <div class="tu-van dich-vu-item">
                        <h5><a >Tư vấn bệnh</a></h5>
                    </div>
                    <div class="hotline dich-vu-item">
                        <h5>Hotline: 0123456789</h5>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="description">
                    <hr>
                    <div class="tuvan"><img src="./public/images/tu-van.gif" alt=""></div>
                    <h4>Giới thiệu:</h4>
                    <p>Khoa Nội – Bệnh người cao tuổi – Bệnh viện Điều dưỡng phục hồi chức năng Bưu Điện 1 Hải Phòng là
                        cơ sở trực thuộc Bệnh viện Điều dưỡng phục hồi chức năng Bưu Điện 1 Hải Phòng ở Hải Phòng. Khoa
                        Nội – Bệnh người cao tuổi – Bệnh viện Điều dưỡng phục hồi chức năng Bưu Điện 1 Hải Phòng là một
                        trong những địa chỉ uy tín cung cấp các dịch vụ Lão khoa khu vực Hải Phòng <br>

                        Tên: Khoa Nội – Bệnh người cao tuổi – Bệnh viện Điều dưỡng phục hồi chức năng Bưu Điện 1 Hải
                        Phòng <br>
                        Trực thuộc: Bệnh viện Điều dưỡng phục hồi chức năng Bưu Điện 1 Hải Phòng <br>
                        Chuyên khoa: Lão khoa <br>
                        Loại hình: Khoa/cơ sở thuộc Bệnh viện/Viện <br>
                        Dịch vụ: Khám chữa bệnh theo quy định của Bộ Y Tế về Lão khoa <br>
                        Đặt lịch hẹn: Đến trực tiếp trong giờ làm việc hoặc liên hệ trước theo thông tin liên hệ dưới
                        đây <br>
                        Ngôn ngữ: Tiếng Việt <br>
                        Bảo hiểm: BHXH, BHYT Theo quy định của Bộ Y Tế</p>
                    <img src="./public/images/bg-boxthuvien.jpg" alt="" class="img-fluid">
                    <p>Khoa Nội – Bệnh người cao tuổi – Bệnh viện Điều dưỡng phục hồi chức năng Bưu Điện 1 Hải Phòng là
                        cơ sở trực thuộc Bệnh viện Điều dưỡng phục hồi chức năng Bưu Điện 1 Hải Phòng ở Hải Phòng. Khoa
                        Nội – Bệnh người cao tuổi – Bệnh viện Điều dưỡng phục hồi chức năng Bưu Điện 1 Hải Phòng là một
                        trong những địa chỉ uy tín cung cấp các dịch vụ Lão khoa khu vực Hải Phòng <br>

                        Tên: Khoa Nội – Bệnh người cao tuổi – Bệnh viện Điều dưỡng phục hồi chức năng Bưu Điện 1 Hải
                        Phòng <br>
                        Trực thuộc: Bệnh viện Điều dưỡng phục hồi chức năng Bưu Điện 1 Hải Phòng <br>
                        Chuyên khoa: Lão khoa <br>
                        Loại hình: Khoa/cơ sở thuộc Bệnh viện/Viện <br>
                        Dịch vụ: Khám chữa bệnh theo quy định của Bộ Y Tế về Lão khoa <br>
                        Đặt lịch hẹn: Đến trực tiếp trong giờ làm việc hoặc liên hệ trước theo thông tin liên hệ dưới
                        đây <br>
                        Ngôn ngữ: Tiếng Việt <br>
                        Bảo hiểm: BHXH, BHYT Theo quy định của Bộ Y Tế</p>
                </div>
            </div>
        </div>
    </div>
            </div>
        </div>
    </section>
    <?php 
       $footer =  $giaodienchild->footer();
       echo($footer);
    ?>
    <script src="./View/viewQuanLyKhoa/jsQuanlykhoa/fontawesome.js"></script>
    <script src="./public/js/main.js"></script>
    <script src="./View/viewQuanLyKhoa/jsQuanlykhoa/khoa.js"></script>
    <script>
        const login_click = document.querySelector('#login_click');
        login_click.addEventListener('click', () => {
            window.location = 'http://localhost/header_quanlybenhvien/login.php';
        })
    </script>
</body>

</html>