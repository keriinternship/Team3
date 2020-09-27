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
    <link rel="stylesheet" href="./View/viewQuanLyHoaDon/cssQuanLyHoaDon/bootstrap.min.css">
    <link rel="stylesheet" href="./View/viewQuanLyHoaDon/cssQuanLyHoaDon/dashboard.css">
    <link rel="stylesheet" href="./View/viewQuanLyHoaDon/cssQuanLyHoaDon/modal_them_chi_tiet_hoa_don.css">
    <link rel="stylesheet" href="./View/viewQuanLyHoaDon/cssQuanLyHoaDon/modal_sua_chi_tiet_hoa_don.css">
    <link rel="stylesheet" href="./View/viewQuanLyHoaDon/cssQuanLyHoaDon/modal_delete_hoa_don.css">
    <title>Quan lý hóa đơn</title>
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
                    <main>
                        <div class="context1">
                            <span>Dach sách hóa đơn</span>
                        </div>
                        <div class="buttonPlus">
                            <a class="btn btn-primary" id="buttonPlus_Programer"
                                onclick="modal_them_chi_tiet_hoa_don()"><i class="fas fa-plus-circle"></i> Thêm Chi Tiết
                                Hóa Đơn</a>
                        </div>
                        <div class="bodyCustomer">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="bg_table">Mã Chi Tiết Hóa Đơn</th>
                                        <th class="bg_table">Tên Thuốc</th>
                                        <th class="bg_table">Mã Hóa Đơn</th>
                                        <th class="bg_table">Số Lượng</th>
                                        <th class="bg_table">Số Tiền</th>
                                        <th class="bg_table"></th>

                                    </tr>
                                </thead>
                                <tbody class="bg_body_table">
                                    <tr boder="1">
                                        <td>HD01</td>
                                        <td>Paracetamon</td>
                                        <td>01</td>
                                        <td>25</td>
                                        <td>2500000</td>
                                        <td>
                                            <a class="btn btn-primary" onclick="modal_sua_chi_tiet_hoa_don()">Edit</a>
                                            <a class="btn btn-primary" onclick="modal_delete_hoa_don()">Delete</a>
                                        </td>

                                    </tr>
                                    <tr boder="1">
                                        <td>HD02</td>
                                        <td>Thuốc ngủ</td>
                                        <td>02</td>
                                        <td>20</td>
                                        <td>9000000</td>
                                        <td>
                                            <a class="btn btn-primary" onclick="modal_sua_chi_tiet_hoa_don()">Edit</a>
                                            <a class="btn btn-primary" onclick="modal_delete_hoa_don()">Delete</a>
                                        </td>


                                    </tr>
                                    <tr boder="1">
                                        <td>HD02</td>
                                        <td>Thuốc ngủ đêm</td>
                                        <td>03</td>
                                        <td>21</td>
                                        <td>9000000</td>
                                        <td>
                                            <a class="btn btn-primary" onclick="modal_sua_chi_tiet_hoa_don()">Edit</a>
                                            <a class="btn btn-primary" onclick="modal_delete_hoa_don()">Delete</a>
                                        </td>

                                    </tr>
                                    <tr boder="1">
                                        <td>HD02</td>
                                        <td>Thuốc ngủ ngày</td>
                                        <td>04</td>
                                        <td>22</td>
                                        <td>9000000</td>
                                        <td>
                                            <a class="btn btn-primary" onclick="modal_sua_chi_tiet_hoa_don()">Edit</a>
                                            <a class="btn btn-primary" onclick="modal_delete_hoa_don()">Delete</a>
                                        </td>

                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </main>

                    <ul class="pagi">
                    </ul>
                </div>
            </div>
        </div>
        </div>
    </nav>
    <!-- Modal Xóa Khoa -->



    <!-- modal dialog -->
    <?php 
        include './View/modalDialog.php';
    ?>

    <!-- modal view profile -->

    <?php 
        include './View/modalViewProfile.php';
    ?>
    <script src="./View/viewQuanLyKhoa/jsQuanlykhoa/fontawesome.js"></script>

    <?php
        include './View/includejsModule.php';
    ?>
    <script src="./public/js/jquery-3.3.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="./View/viewQuanLyHoaDon/jsQuanLyHoaDon/modal_them_chi_tiet_hoa_don.js"></script>
    <script src="./View/viewQuanLyHoaDon/jsQuanLyHoaDon/modal_sua_chi_tiet_hoa_don.js"></script>    
    <script src="./View/viewQuanLyHoaDon/jsQuanLyHoaDon/modal_delete_hoa_don.js"></script>
</body>

</html>