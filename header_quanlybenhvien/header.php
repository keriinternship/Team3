<?php
    $url = 'http://localhost/header_quanlybenhvien/index.php';
    $user = $_COOKIE['username'];
    $pass = $_COOKIE['password']; 
    $id = $_COOKIE['id_nhanvien'];
   if((!isset($user))||(!isset($pass))){
        header('location:'.$url);
        exit();
    }
    require_once './config/database.php';
    require_once './app/models/Db.php';
    require_once './config/config.php';
    require_once './app/models/getProfileModule.php';
    $getprofile = new getProfileModule();
    $profile = $getprofile->getProfileById($id);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/css/bootstrap.min.css">
    <link rel="stylesheet" href="./public/css/fontawesome.min.css">
    <link rel="stylesheet" href="./public/css/header.css">
    <link rel="stylesheet" href="./public/css/modal.css">
    <link rel="stylesheet" href="./public/css/thongke.css">
    <link rel="stylesheet" href="./public/css/viewProfile.css">
    <link rel="stylesheet" href="./public/css/navContent.css">
    <title>Header-Trang Quan Tri</title>
</head>

<body>
    <header>
        <div class="container">
            <div class="header_top">
                <div class="header-logo">

                </div>
                <div class="header-option">
                    <div class=" option option_infor">
                        <div class="optionimg">
                            <img src="./public/images/gmail.png" alt="" class="img img-fluid img-infor">
                            <div class="inforSelect">
                                <h2 class="header_inforSelect">Tin nhắn</h2>
                                <div class="content_inforSelect">
                                    <ul class="content">
                                        <li class="content_inforItem">
                                            <div class="img-contentInfor">
                                                <img src="./public/images/ronaldo.jpg" alt="" class="img img-fluid">
                                            </div>
                                            <div class="information">
                                                Hôm nay khám cho bệnh nhân phòng 2 <br>
                                                <span class="timeInfor"></span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="footer_inforSelect">
                                    Xem thêm tin nhắn
                                </div>
                            </div>
                            <div class="messCount inforNotifi">
                                3
                            </div>
                        </div>
                    </div>
                    <div class=" option option_mess">
                        <div class="optionimg">
                            <img src="./public/images/bell.png" alt="" class="img img-fluid img-mess">
                            <div class="messSelect">
                                <h2 class="header_inforSelect">Thông báo</h2>
                                <div class="content_inforSelect">
                                    <ul class="content">
                                        <li class="content_inforItem">
                                            <div class="img-contentInfor">
                                                <img src="./public/images/ronaldo.jpg" alt="" class="img img-fluid">
                                            </div>
                                            <div class="information">
                                                Dịch Covid-19 đã được khống chế <br>
                                                <span class="timeInfor"></span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="footer_inforSelect">
                                    Xem thêm thông báo
                                </div>
                            </div>
                            <div class="messCount messNotifi">
                                2
                            </div>
                        </div>
                    </div>
                    <div class="option_profile">
                        <div class="inforAdminFrofile">
                            <div class="img-Amin">
                                <img src="./public/images/ronaldo.jpg" alt="" class="img img-fluid">
                            </div>
                            <span class="Profile"> <?php echo $profile['tennhanvien']?></span>
                            <span class="profileIcon">&#10167;</span>
                        </div>
                        <div class="optionProfile_list">
                            <ul class="listOption">
                                <li class="listOption_item" id="logout">
                                    <img src="./public/images/logout.png" alt="">
                                    Log out
                                </li>
                                <li class="listOption_item" id="viewProfile">
                                    <img src="./public/images/profile.png" alt="">
                                    View Profile
                                </li>
                                <li class="listOption_item">
                                    <img src="./public/images/settings.png" alt="">
                                    Setting
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="navSearch">
                <form action="#" method="get" id="form-search" autocomplete="off">
                    <div class="inputlable">
                        <input type="text" name="key" id="key" placeholder="Bạn muốn tìm kiếm ... ?">
                        <div id="autocomplete">
                            <ul class="autocompleteList">
                                <li class="autocomplete_link">
                                    <a href="">Video highlight Tây Ban Nha với Đức</a>
                                    <span class="removeRecomment">
                                        <img src="./public/images/delete.png" alt="">
                                    </span>
                                </li>
                                <li class="autocomplete_link">
                                    <a href="">Video highlight Bồ Đào Nha với Thụy Điển</a>
                                    <span class="removeRecomment">
                                        <img src="./public/images/delete.png" alt="">
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <button type="submit" class="btn-search bg-primary">search</button>
                </form>
            </div>
        </div>
    </header>
    <nav>
        <div class="container">
            <div class="row mx-1">
                <div class="col-md-2 px-1">
                    <!-- chứa thanh slide dọc cạnh , bao các option quản lý -->
                    <div class="navOption bg-primary">
                        <ul class="navOptionList">
                            <li class="navOption_item activeParent" id="quanlynhanvien">
                                <img src="./public/images/man.png" alt="" class="img img-fluid">
                                <a href="" class="activeLink">Quản lý Nhân Viên</a>
                            </li>
                            <li class="navOption_item" id="quanlythuoc">
                                <img src="./public/images/coronavirus.png" alt="" class="img img-fluid">
                                <a href="">Quản lý Thuốc</a>
                            </li>
                            <li class="navOption_item" id="quanlyvatlieu">
                                <img src="./public/images/wood-board.png" alt="" class="img img-fluid">
                                <a href="">Quản lý Vật liệu</a>
                            </li>
                            <li class="navOption_item thongke" id="thongke">
                                <img src="./public/images/count.png" alt="" class="img img-fluid">
                                <a href="">Thống kê ></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col -md-10 px-1">
                    <!-- hiển thị thông tin cần chỉnh sửa -->
                    <div class="navContent">
                        <h3 class="navContentTitle">Quản Lý Nhân Viên</h3>
                        <table class="table ">
                            <thead>
                                <tr>
                                    <th>Số thứ tự</th>
                                    <th>Tên nhân viên</th>
                                    <th>Địa chỉ</th>
                                    <th>Số điện thoại</th>
                                    <th>Giới tính</th>
                                    <th>Chức vụ</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="tr-1">
                                    <td>1</td>
                                    <td>Trương Huỳnh Quốc Bảo</td>
                                    <td>Gò Vấp</td>
                                    <td>089373636</td>
                                    <td>Nam</td>
                                    <td>Y tá</td>
                                    <td class="btn-mng-nv">
                                        <button class="btn-mng btn-mng-edt btn-success">Sửa</button>
                                        <button class="btn-mng btn-mng-rm btn-danger">Xóa</button>
                                    </td>
                                </tr>
                                <tr class="table-primary tr-2">
                                    <td>2</td>
                                    <td>Trương Huỳnh Quốc Bảo</td>
                                    <td>Gò Vấp</td>
                                    <td>089373636</td>
                                    <td>Nam</td>
                                    <td>Y tá</td>
                                    <td class="btn-mng-nv">
                                        <button class="btn-mng btn-mng-edt btn-success">Sửa</button>
                                        <button class="btn-mng btn-mng-rm btn-danger">Xóa</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- modal -->
    <!-- modal hiển thị phần xác nhận đăng xuất -->
    <div class="modalAuthen Modaldirect">
        <div class="modalLogin">
            <p>Đăng Xuất</p>
            <div class="modalLoginContent">
                Bạn muốn thoát khỏi hệ thống ?
                <div class="btnConfirm">
                    <button type="submit" class="btnLogin btnOk">OK</button>
                    <button type="submit" class="btnLogin btnCanCle">Cancle</button>
                </div>
            </div>
        </div>
    </div>
    <!-- modal hiển thị thông tin bác sĩ
        Mục địch : hiển hị ra thông tin chi tiết của Amin mà không cần phải chuyển qua trang khác => khỏi phải load lại trang
    -->
    <div class="modalAuthen Modalinformation">
        <div class="hiddenInfor">
        </div>
        <div class="Information">
            <header class="modalInfor_header">
                <div class="backgroungInfor  prop-bg">
                    <img src="./public/images/briged.jpg" alt="" class="img img-fluid img-bginfor">
                    <label for="edt-bg">
                        <span class="btn-edt-bg"> <img src="./public/images/photo-camera.png" alt=""
                                class="icon-edt-bg"> Chỉnh sửa
                            ảnh nền </span>
                        <input type="file" name="edt-bg" id="edt-bg">
                    </label>
                </div>
                <div class="representImg  prop-bg">
                    <img src="./public/images/bin-z.jpg" alt="" class="img img-fluid img-bgPresent">
                    <label for="edt-pre" class="edt-pre-img">
                        <span class="btn-edt-pre">
                            <img src="./public/images/photo-camera.png" alt="" class="icon-edt-pre">
                        </span>
                        <input type="file" name="edt-pre" id="edt-pre">
                    </label>

                </div>
            </header>
            <div class="nameInfor">
                <?php echo $profile['tennhanvien']?> <br>
                <span class="position">
                    <?php echo $profile['ten_loainhanvien']?>
                </span>
            </div>
            <section class="inforModal_section">
                <div class="inforTree">
                    <div class="inforLeft inforModal_content">
                        Chức vụ : <?php echo $profile['ten_loainhanvien']?>
                    </div>
                    <div class="inforRight inforModal_content">
                        Giới tính : <?php echo $profile['gioitinh']?>
                    </div>
                    <div class="both"></div>
                </div>
                <div class="inforTree">
                    <div class="inforLeft inforModal_content">
                        Địa chỉ : <?php echo $profile['diachi']?>
                    </div>
                    <div class="inforRight inforModal_content">
                        Số điện thoại: <?php echo $profile['sodienthoai']?>
                    </div>
                    <div class="both"></div>
                </div>
                <div class="inforTree">
                    <div class="inforLeft inforModal_content">
                        Ngày sinh : <?php echo $profile['ngaysinh']?>
                    </div>
                    <div class="inforRight inforModal_content">
                        Khoa:
                    </div>
                    <div class="both"></div>
                </div>
            </section>
        </div>
    </div>
    <script src="./public/js/header.js"></script>
    <script src="./public/js/editImageProfile.js"></script>
    <script src="./public/js/directAdmin.js"></script>
</body>

</html>