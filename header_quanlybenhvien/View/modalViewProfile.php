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
                        <?php 
                            $loainhanvien = new khoaModule();
                            $loai = $loainhanvien->getKhoaById($profile['id_chitietkhoa']);
                        ?>
                        Khoa: <?php  echo $loai['tenkhoa'];?>
                    </div>
                    <div class="both"></div>
                </div>
            </section>
        </div>
    </div>