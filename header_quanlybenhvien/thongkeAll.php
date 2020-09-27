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
                    <div class="ThongKe_contain">
                        <div class="selectThongke">
                            <select>
                                <option value="" id="tuan">Thống kế theo tuần</option>
                                <option value="" id="thang">Thống kế theo tháng</option>
                                <option value="" id="quy">Thống kế theo Quý</option>
                            </select>
                        </div>
                        <div class="lineArrowUp">
                            <span class="tongtien"> Tổng tiền (triệu)</span>
                        </div>
                        <div class="lineArrowDown">
                            tháng
                        </div>
                        <div class="mainChart">
                            <div class="mainChart_items">
                            </div>
                        </div>
                    </div>
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
    <script src="./public/js/thongke.js"></script>
    <script>
        document.querySelector('#thongke').classList.add('activeParent');
        document.querySelector('#thongke').childNodes.item(3).classList.add('activeLink');
    </script>
</body>

</html>