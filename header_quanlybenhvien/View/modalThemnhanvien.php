
<div class="modalAuthen modalThemnhanvien">
        <div class="hiddenInforthemnhanvien">
        </div>
        <div id="themnhanvienContent">
                <div class="" id="hinhanhnhanvien">
                        <label id="lablehinhanhnhanvien"> Chọn hình nhân viên
                                <input type="file" name="themnhanvien" id="themhinhnhanvien">
                                <img src="./public/images/picture.png" alt="" class="img-chonanhnhanvien">
                        </label>
                        <div class="valuehinhanhnhanvien">
                                <img src="./public/images/bacsilogin.jpg" alt="" id="showValuethemnhanvien">
                        </div>
                </div>
                <div id="loainhanvienid">
                        <span class="chonloainhanvien">
                                <img src="./public/images/man.png" alt="" class="iconLoaiNhanvien">
                                Chọn loại nhân viên</span>
                        <select name="loainhanvien" id="loainhanvien">
                                <?php 
                                        $gaLoainhanvien = $nhanvienModele->getAllLoaiNhanVien();
                                        foreach($gaLoainhanvien as $key => $value){
                                ?>
                                <option value="<?php echo  $value['id_loainhanvien']?>"><?php echo  $value['ten_loainhanvien']?></option>
                                        <?php } ?>
                        </select>
                </div>
                <div class="hotennhanvien">
                        <input type="text" name="tennhanvien" id="tennhanvien" placeholder="nhập vào tên nhân viên" value="">
                </div>
                <div id="gioitinhngaysinh">
                        <div class="gioitinh">
                                <div class="gioitinhDesc">
                                        <img src="" alt="" class="icongioitinh">
                                        <span>Giới tính</span>
                                </div>
                                <select name="gioitinh" id="male">
                                        <option value="Nam">Nam</option>
                                        <option value="Nữ">Nữ</option>
                                </select>

                        </div>
                        <div class="ngaysinh">
                                <div class="ngaysinhDesc">
                                        <img src="" alt="" class="icongioitinh">
                                        <span>Ngày sinh</span>
                                </div>

                                <input type="date" name="" id="chonngaysinh" value="">

                        </div>
                        <div class="sodienthoai">
                                <div class="stdDesc">
                                        <img src="" alt="" class="icongioitinh">
                                        <span>Số điện thoại</span>
                                </div>
                                <div class="nhapsodienthoai">
                                        <input type="text" name="sodienthoai" id="sodienthoai" placeholder="nhập vào số điện thoại">
                                </div>
                        </div>
                </div>
                <div class="diachinhanvien">
                        <input type="text" name="diachinhanvien" id="diachinhanvien" placeholder="nhập vào địa chỉ nhân viên">
                </div>
                <div id="khoanhanvien">
                        <span class="chonloainhanvien">
                                <img src="./public/images/man.png" alt="" class="iconLoaiNhanvien">
                                Chọn khoa</span>
                        <select name="loainhanvien" id="loaikhoanhanvien">
                                                <?php 
                                                $getAllKhoa =  $khoaModule->getAllKhoa();
                                                foreach($getAllKhoa as $key=>$value){
                                                ?>
                                <option value="<?php echo  $value['id_khoa']?>"><?php echo  $value['tenkhoa']?></option>
                                                <?php } ?>
                        </select>
                </div>
                <button id="cf-addnhanvien" class="cf-addnhanvien"> Thêm nhân viên </button>
        </div>
</div>