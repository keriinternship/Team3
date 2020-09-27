<?php 
    include './View/includeModule.php';
    include './app/models/nhanvienModule.php';
    include './app/models/khoaModule.php';
    $nhanvienModele = new nhanvienModules();
    $khoaModule = new khoaModule();
    $getAllNhanVien = $nhanvienModele -> getAllNhanVien();
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
    <link rel="stylesheet" href="./View/viewQuanLyKhoa/ccssQuanlykhoa/khoa_admin_modal.css">
    <link rel="stylesheet" href="./View/viewQuanLyKhoa/ccssQuanlykhoa/khoa_admin.css">
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
                    <div class="list-khoa">
                        <div class="name-list">
                            Danh Sách Khoa
                        </div>
                        <div class="header-list">
                            <div class="row">
                                <div class="col-md-2">

                                </div>
                                <div class="col-md-4">
                                    <div class="search-khoa">
                                        <form action="">
                                            <input type="search" name="search-khoa" id="search-khoa"
                                                placeholder="Nhập tên khoa...">
                                        </form>
                                    </div>

                                </div>
                                <div class="col-md-4">
                                    <div class="add-khoa"><a href="#" class="add-bn">Thêm Khoa
                                            <i class="fas fa-user-plus"></i></a>
                                    </div>
                                </div>
                                <div class="col-md-2">

                                </div>
                            </div>


                        </div>
                        <table class="list-khoa">
                            <tr class="ten-muc list-item">
                                <th>Mã Khoa</th>
                                <th>Tên Khoa</th>
                                <th>Chức năng</th>
                            </tr>
                            <tr class=" list-item">
                                <td>1</td>
                                <td class="name-bn">Khoa Nội </td>

                                <td>
                                    <button class="btn-cn btn-edit">Edit</button>
                                    <button class="btn-cn btn-delete">Xóa</button>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <ul class="pagi">
                    </ul>
                </div>
            </div>
        </div>
        </div>
    </nav>
    <div class="modal_cf_delete Modal_cf_deleteNhanVien">
        <div class="modalLogin">
            <p>Thông báo</p>
            <div class="modalLoginContent">
                Bạn muốn xóa nhân viên khỏi hệ thống ?
                <div class="btnConfirm">
                    <button type="submit" class="btnLogin btn_cf_delete">OK</button>
                    <button type="submit" class="btnLogin btn-cc_delete">Cancle</button>
                </div>
            </div>
        </div>
    </div>
    <?php 
        include './View/viewQuanLyKhoa/modaleditkhoa.php';
        include './View/viewQuanLyKhoa/modalthemchitietkhoa.php';
        include './View/viewQuanLyKhoa/modalthemkhoa.php';
    ?>

        <!-- modal dialog -->
        <?php 
        include './View/modalDialog.php';
    ?>

    <!-- modal view profile -->

    <?php 
        include './View/modalViewProfile.php';
    ?>
    <!-- Modal Xóa Khoa -->
    <div class="delete-bn">
        <div class="delete-1"></div>
        <div class="delete">
            <h4>Bạn muốn xóa Khoa này ?</h4>
            <div class="choose">
                <a href="#" class="co btn-de">Có</a>
                <a href="#" class="khong btn-de">Không</a>
            </div>
        </div>
    </div>
    <script src="./View/viewQuanLyKhoa/jsQuanlykhoa/fontawesome.js"></script>
    <script src="./View/viewQuanLyKhoa/jsQuanlykhoa/khoa_admin_modal.js"></script>
    
    <?php
        include './View/includejsModule.php';
    ?>  
    <script src="./public/js/quanlynhanvien.js"></script>
</body>

</html>