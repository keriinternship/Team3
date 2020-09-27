<?php 
    include './View/includeModule.php';
    include './app/models/khoaModule.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
        include './View/includeCss.php';
    ?>
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
                    <h3 class="navContentTitle">Quản Lý Vật Liệu</h3>
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

    <!-- modal dialog -->
    <?php 
        include './View/modalDialog.php';
    ?>

    <!-- modal view profile -->

    <?php 
        include './View/modalViewProfile.php';
    ?>

    <!-- include file js -->

    <?php
        include './View/includejsModule.php'
    ?>
     <script>
    document.querySelector('#quanlyvatlieu').classList.add('activeParent');
    document.querySelector('#quanlyvatlieu').childNodes.item(3).classList.add('activeLink');
    </script>
</body>

</html>