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
                <div class="row">

                    <div class="col-md-9 ">

                        <h2>Các Khoa của bệnh viện Đà Nẵng C: </h2>
                        <div class="list-khoa">
                            <ul class="list-khoa-1">
                                <li>
                                    <div class="khoa">
                                        <a href="./chitietkhoa.php">
                                            <img src="./public/images/slide4.jpg" alt="#" class="img-fluid">
                                        </a>
                                        <div class="name-khoa">
                                            <a href="./chitiet_khoa.html">Khoa Nội</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="khoa">
                                        <a href="./chitietkhoa.php">
                                            <img src="./public/images/slide4.jpg" alt="#" class="img-fluid">
                                        </a>
                                        <div class="name-khoa">
                                            <a href="./chitiet_khoa.html">Khoa Nội</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="khoa">
                                        <a href="./chitietkhoa.php">
                                            <img src="./public/images/bg-boxthuvien.jpg" alt="#" class="img-fluid">
                                        </a>
                                        <div class="name-khoa">
                                            <a href="./chitiet_khoa.html">Khoa Nội</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="khoa">
                                        <a href="./chitietkhoa.php">
                                            <img src="./public/images/slide2.jpg" alt="#" class="img-fluid">
                                        </a>
                                        <div class="name-khoa">
                                            <a href="./chitiet_khoa.html">Khoa Nội</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <hr>
                        <div class="tuvan icon-2"> <img src="./public/images/tu-van.gif" alt=""></div>
                        <div class="description-hpt">
                            <h4>Thông tin HOSPITAL Đà Nẵng C: </h4>
                            <p>Tất cả các tài liệu hướng dẫn triển khai QLCL-ATNB cũng đề cập điều đầu tiên là: lãnh đạo
                                phải
                                cam kết. Nhưng có một điều rõ ràng, không một lãnh đạo nào muốn cơ sở của họ không chất
                                lượng,
                                ko an toàn, đặc biệt rất sợ tai biến, rủi ro, sai sót xảy ra!
                                Vậy làm sao để toàn thể nhân viên tại cơ sở thấy và hiểu lãnh đại của họ rất cam kết,
                                rất quyết
                                tâm!?
                                Đẹp Trai Nhất Nhà Thay đổi nhận thức đã khó. Thay đổi hành vi va thói quen lại càng khó.
                                Ldao qtam ma ko lam cho nhân viên qtam thì là chưa qtam. Khi đó Cam kết sẽ chỉ là lý
                                thuyết

                                Ho Vu Ngoc Diep Thật ra thì phần lớn những người khi đã chọn ngành y thì người ta đã ý
                                thức được
                                những việc mà họ sẽ làm và phải làm. Nhưng vấn đề kinh phí, con người để làm tốt công
                                tác an
                                toàn người bệnh lại khó thực hiện. Không thể thực hiện công tác an toàn người bệnh khi
                                những vật
                                dụng tối thiểu để phục vụ như microshield cho Bs phẩu thuật, xà phòng rửa tay, túi đựng
                                chất
                                thải phải duyệt và cắt đến mức các khoa phòng phải than trời, nhiều khoa phải bỏ tiền
                                túi mua để
                                có sử dụng. Từ lời nói đến việc làm còn xa lắm. Chỉ khi nào lời lời nói đi đôi với việc
                                làm thì
                                có hy vọng

                            </p>
                            <img src="./public/images/bg-boxthuvien.jpg" alt="" class="img-fluid">
                            <p> Dang Quang Vinh Like mạnh với ý kiến Linh Phan: cam kết lãnh đạo. Mọi lời nói, phương
                                hướng,
                                hoạt động của lãnh đạo đưa ra phải làm cho nhân viên "cảm nhận" được cam kết này. Cũng
                                là 1 dạng
                                "perceived" như trg hài lòng khách hàng

                                Dang Quang Vinh Ngoài ra, các kế hoạch, mục tiêu khi bàn thảo cần có sự tham gia của tập
                                thể
                                nhân viên. Lãnh đạo chỉ là khơi gợi, hỗ trợ đưa ra quyết định cuối cùng

                                Ho Manh Tuong Cái quan trọng phải thay đổi nhận thức và thái độ của lãnh đạo và nhân
                                viên. Phần
                                kỹ thuật là cái dễ hơn. Các dự án QLCL-ATNB thất bại là do chú ý quá nhiều về kỹ thuật
                                và làm
                                theo "phong trào". Sẽ thất bại.

                                Ho Manh Tuong Frankly. Tôi nghĩ cái BS Linh đang làm mang tính phong trào nhiều quá. Làm
                                ở BV
                                công, mà kết hợp thêm với các "dự án" của BYT, SYT, trong khi nền tảng nhận thức của cơ
                                sở chưa
                                có, dễ rơi vào "bẫy" phong trào và sẽ thất bại.

                                Thanh Vo Hong Sự cam kết của LĐ là sự dan chủ, lắng nghe thật sự với ý kiến của nhân
                                viên mình
                                và sự có mặt tham gia, động viên, giám sát trực tiếp với các hoạt động CTCL của BV
                            </p>
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
                                <h5><a>Tư vấn bệnh</a></h5>
                            </div>
                            <div class="hotline dich-vu-item">
                                <h5>Hotline: 0123456789</h5>
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