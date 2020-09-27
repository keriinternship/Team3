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
                    <h3 class="navContentTitle">Quản Lý Thuốc</h3>
                    <table class="table ">
                        <thead>
                            <tr>
                                <th>Số thứ tự</th>
                                <th>Tên thuốc</th>
                                <th>Giá</th>
                                <th>Số lượng</th>
                                <th>Xuất xứ</th>
                                <th>Hình ảnh</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="tr-1">
                                <td>1</td>
                                <td>Paraxintanol</td>
                                <td>20000vnd</td>
                                <td>20 tấn</td>
                                <td>Việt nam</td>
                                <td>para.jpg</td>
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
    document.querySelector('#quanlythuoc').classList.add('activeParent');
    document.querySelector('#quanlythuoc').childNodes.item(3).classList.add('activeLink');
    </script>
</body>

</html>