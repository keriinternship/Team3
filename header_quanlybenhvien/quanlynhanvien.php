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

                    <div class="formAddNhanVien">
                        <h3 class="navContentTitle">Quản Lý Nhân Viên</h3>
                        <div class="navSearch">
                            <form action="#" method="get" id="form-search" autocomplete="off">
                                <div class="inputlable">
                                    <input type="text" name="key" id="key"
                                        placeholder="Bạn muốn tìm kiếm nhân viên ... ?">
                                    <div id="autocomplete">
                                        <ul class="autocompleteList">
                                        </ul>
                                    </div>
                                </div>
                                <button type="submit" class="btn-search bg-primary">search</button>
                            </form>
                        </div>
                        <button id="themnhanvien"> Thêm nhân viên</button>
                    </div>
                    <table class="table ">
                        <thead>
                            <tr>
                                <th>Số thứ tự</th>
                                <th>Tên nhân viên</th>
                                <th>Địa chỉ</th>
                                <th>Số điện thoại</th>
                                <th>Giới tính</th>
                                <th>Loại nhân viên</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody id="hienthinhanvien">
                            <!-- <?php 
                             $stt = 0;
                                foreach ($getAllNhanVien as $key => $value) {     
                                        $stt++;
                            ?>
                            <tr class="tr-1">
                                <td><?php echo $stt ?></td>
                                <td id="<?php echo $value['id_chitietnhanvien']?>"><?php echo $value['tennhanvien'] ?>
                                </td>
                                <td><?php echo $value['diachi'] ?></td>
                                <td><?php echo $value['sodienthoai'] ?></td>
                                <td><?php echo $value['gioitinh'] ?></td>
                                <?php $loainhanvien = $nhanvienModele->getLoaiNhanVienById($value['id_loainhanvien']);
                                       echo '<td>'.$loainhanvien['ten_loainhanvien'].'</td>';
                                ?>

                                <td class="btn-mng-nv">
                                    <button class="btn-mng  btn_suanhanvien btn-mng-edt btn-success"
                                        id="<?php echo $value['id_chitietnhanvien']?>">Sửa</button>
                                    <button class="btn-mng btn-xoa btn-mng-rm btn-danger"
                                        id="<?php echo $value['id_chitietnhanvien'] ?>">Xóa</button>
                                </td>
                            </tr>
                            <?php }?> -->
                        </tbody>
                    </table>
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
    <!-- modal sửa nhân viên-->


    <!-- modal them nhan vien -->
    <?php 
        include './View/modalThemnhanvien.php';   
    ?>
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
        include './View/includejsModule.php';
    ?>
    <script>
        const hienthinhanvien = document.querySelector('#hienthinhanvien');
        window.addEventListener('load', () => {
            // lây ra tất cả nhân viên
            let total = '<?php echo count($getAllNhanVien) ;?>';
            let datajson = `<?php echo json_encode($getAllNhanVien)?>`;

            // lấy ra tất cả loại nhân viên
            let dataloainhanvien  = `<?php echo json_encode($gaLoainhanvien)?>`;
            let arrDataLoaiNhanVien = JSON.parse(dataloainhanvien);

            let data = JSON.parse(datajson);
            let totalPage = Number.parseInt(total);
            const defaultValue = 4;
            let pagiLink = Math.ceil(totalPage / defaultValue);
            const pagep = document.querySelector('.pagi');
            for (let index = 0; index < pagiLink; index++) {
                pagep.innerHTML += `<li class="linkPage">${index + 1}</li>`;
            }
            setTableValue(data, 0, defaultValue,arrDataLoaiNhanVien);
            panigationJS('.linkPage',defaultValue,data,arrDataLoaiNhanVien);   
        })
    </script>
    <script src="./public/js/quanlynhanvien.js"></script>
    <script>
        let hinhanharr;
        let hinhanh;
        let loai;
        let ten;
        let gioitinh;
        let ngaysinh;
        let sdt;
        let diachi;
        let khoa;
        let data;
        let cf_addnhanvien = document.querySelector('#cf-addnhanvien');
        const urlgetID = './app/getModule/getNhanVienById.php';
        const urlAdd = './app/addModule/addnhanvien.php';
        const urlUpdate = './app/updateModule/updatenhanvien.php';
        cf_addnhanvien.addEventListener('click', async () => {
            let id = cf_addnhanvien.getAttribute('id');
            if (id === 'cf-addnhanvien') {
                hinhanharr = themhinhnhanvien.value;
                hinhanh = hinhanharr.split('\\')[2];
                loai = loainhanvien.value;
                ten = tennhanvien.value;
                gioitinh = male.value;
                ngaysinh = chonngaysinh.value;
                sdt = sodienthoai.value;
                diachi = diachinhanvien.value;
                khoa = loaikhoanhanvien.value;
                data = {
                    hinhanh: hinhanh,
                    loai: loai,
                    ten: ten,
                    gioitinh: gioitinh,
                    ngaysinh: ngaysinh,
                    sdt: sdt,
                    diachi: diachi,
                    khoa: khoa,
                }
                let req = await fetch(urlAdd, {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        Accept: "application/json"
                    },
                    body: JSON.stringify(data),
                })
                window.location.reload();
            } else {
                hinhanharr = themhinhnhanvien.value;
                hinhanh = hinhanharr.split('\\')[2];
                loai = loainhanvien.value;
                ten = tennhanvien.value;
                gioitinh = male.value;
                ngaysinh = chonngaysinh.value;
                sdt = sodienthoai.value;
                diachi = diachinhanvien.value;
                khoa = loaikhoanhanvien.value;
                id = idnhanvien;
                data = {
                    hinhanh: hinhanh,
                    loai: loai,
                    ten: ten,
                    gioitinh: gioitinh,
                    ngaysinh: ngaysinh,
                    sdt: sdt,
                    diachi: diachi,
                    khoa: khoa,
                    id: idnhanvien,
                }
                let req = await fetch(urlUpdate, {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        Accept: "application/json"
                    },
                    body: JSON.stringify(data),
                })
                window.location.reload();
            }
        })
    </script>
</body>

</html>