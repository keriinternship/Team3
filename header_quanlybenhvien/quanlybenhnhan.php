<?php 
    include './View/includeModule.php';
    include './app/models/nhanvienModule.php';
    include './app/models/khoaModule.php';
    include './app/models/benhnhanModule.php';
    $benhnhanmodule = new benhnhanModule();
    $getAllBenhNhan = $benhnhanmodule->getAllBenhNhan();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
        include './View/includeCss.php';
    ?>
    <link rel="stylesheet" href="./View/viewQuanLyKhoa/ccssQuanlykhoa/benh_nhan_modal.css">
    <link rel="stylesheet" href="./View/viewQuanLyKhoa/ccssQuanlykhoa/list_benh_nhan.css">
    <link rel="stylesheet" href="./View/viewQuanLyKhoa/ccssQuanlykhoa/lichsukb.css">
    <title>Document</title>
</head>

<body>
    <?php 
        include './View/Header.php';
    ?>
    <nav>
        <div class="container">
            <?php 
            include './View/SlideBar.php'
            ?>
            <div class="col -md-10 px-1">
                <!-- hiển thị thông tin cần chỉnh sửa -->
                <div class="navContent">
                    <div class="list-benh-nhan">
                        <div class="name-list">
                            Danh Sách Bệnh Nhân
                        </div>
                        <div class="header-list">
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-4">
                                    <div class="search-bn">
                                        <form action="">
                                            <input type="search" name="search-bn" id="search-bn"
                                                placeholder="Nhập tên bệnh nhân...">
                                        </form>
                                    </div>

                                </div>
                                <div class="col-md-4">
                                    <div class="plus-bn"><a href="#" class="add-bn">Thêm bênh nhân
                                            <i class="fas fa-user-plus"></i></a>
                                    </div>
                                </div>
                                <div class="col-md-2"></div>
                            </div>


                        </div>
                        <table class="list-bn">
                            <tr class="ten-muc list-item">
                                <th>STT</th>
                                <th>Mã Bênh Nhân</th>
                                <th>Họ Tên</th>
                                <th>Ngày Sinh</th>
                                <th>Giới Tính</th>
                                <th>Chức Năng</th>
                            </tr>
                            <?php 
                            $stt = 1;
                                foreach($getAllBenhNhan as $key=>$value){
                            ?>
                            <tr class="item-bn list-item">
                                 <td><?php echo $stt ?></td>
                                <td><?php echo $value['id_chitietbenhnhan'] ?></td>
                                <td class="name-bn"><?php echo $value['tenbenhnhan'] ?> </td>
                                <td><?php echo $value['ngaysinh'] ?></td>
                                <td><?php echo $value['gioitinh'] ?></td>
                                <td>
                                    <button class="btn-cn btn-chi-tiet">Chi tiết</button>
                                    <button class="btn-cn btn-delete">Xóa</button>
                                    <button class="btn-cn btn-lich-su">Lịch sử khám</button>
                                </td>
                            </tr>
                            <?php $stt++; } ?>
                        </table>
                    </div>
                    <ul class="pagi">
                    </ul>
                </div>
            </div>
        </div>
        </div>
    </nav>
    <?php 
        include './View/viewQuanLyBenhNhan/modaladdbenhnhan.php';
        include './View/viewQuanLyBenhNhan/modaleditthongtinbenhnhan.php';
        include './View/viewQuanLyBenhNhan/modallichsukhambenh.php';
        include './View/viewQuanLyBenhNhan/modalthongtinbenhnhan.php';
    ?>
    <div class="delete-bn">
        <div class="delete-1"></div>
        <div class="delete">
            <h4>Bạn muốn xóa bệnh nhân này ?</h4>
            <div class="choose">
                <a href="#" class="co btn-de">Có</a>
                <a href="#" class="khong btn-de">Không</a>
            </div>
        </div>
    </div>
        <!-- modal dialog -->
        <?php 
        include './View/modalDialog.php';
    ?>

    <!-- modal view profile -->

    <?php 
        include './View/modalViewProfile.php';
    ?>
    <script src="./View/viewQuanLyKhoa/jsQuanlykhoa/fontawesome.js"></script>
    <script src="./View/viewQuanLyKhoa/jsQuanlykhoa/benh_nhan_modal.js"></script>
    <script src="./View/viewQuanLyKhoa/jsQuanlykhoa/list_benh_nhan.js"></script>
    <?php
        include './View/includejsModule.php';
    ?>
</body>

</html>