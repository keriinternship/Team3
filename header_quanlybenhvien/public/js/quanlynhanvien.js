const themnhanvien = document.querySelector('#themnhanvien');
const modalThemnhanvien = document.querySelector('.modalThemnhanvien');
const hiddenInforthemnhanvien = document.querySelector('.hiddenInforthemnhanvien');

// khai bao lay du lieu
const themhinhnhanvien = document.querySelector('#themhinhnhanvien')
const showValuethemnhanvien = document.querySelector('#showValuethemnhanvien')
const loainhanvien = document.querySelector('#loainhanvien')
const tennhanvien = document.querySelector('#tennhanvien')
const male = document.querySelector('#male')
const chonngaysinh = document.querySelector('#chonngaysinh')
const sodienthoai = document.querySelector('#sodienthoai')
const diachinhanvien = document.querySelector('#diachinhanvien')
const loaikhoanhanvien = document.querySelector('#loaikhoanhanvien')
// const suanhanvien = document.querySelectorAll('.btn_suanhanvien');
let keyword = document.querySelector('#key');
const autocomplete = document.querySelector('#autocomplete');
const autocompletelist =  document.querySelector(".autocompleteList")
keyword.addEventListener('keyup',async()=>{
    let keyw = keyword.value;
    if(keyw !== ""){
        autocomplete.style.display = 'block';
        let url = './app/searchModule/searchnhanvien.php';
        let data = {
            keyw : keyw,
        }
        let req = await fetch(url,{
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                Accept: "application/json"
            },
            body: JSON.stringify(data),
        });
        let elements = await req.json();
        let element = elements.map((value,index)=>{
            return `<li class="autocomplete_link">
            <a href="">${value['tennhanvien']}</a>
            <span class="removeRecomment">
                <img src="./public/images/delete.png" alt="">
            </span>
        </li>`
        }) ;
        autocompletelist.innerHTML = " ";
        element.map((value)=>{
            return autocompletelist.innerHTML += value;
        })
    }else{
        autocomplete.style.display = 'none';
    }
  
})
keyword.addEventListener('blur',()=>{
    autocomplete.style.display = 'none';
})
let idnhanvien;
themnhanvien.addEventListener('click', () => {
    modalThemnhanvien.style.display = 'block';
    cf_addnhanvien.innerHTML = "Thêm nhân viên";
    cf_addnhanvien.setAttribute('id', 'cf-addnhanvien');
})
hiddenInforthemnhanvien.addEventListener('click', () => {
    modalThemnhanvien.style.display = 'none';
    clearGiaTri();
})
themhinhnhanvien.addEventListener('change',()=>{
    uploadFile(themhinhnhanvien.files[0]);
})
const uploadFile = (file)=>{
    let url = "./app/updateModule/uploadfile.php";
    console.log('xin chao')
    const fd = new FormData();
    fd.append('avatar',file);
    fetch(url,{
        method: 'POST',
        body: fd
    })
        showValuethemnhanvien.setAttribute('src', `./public/images/${file['name']}`);
}
function clearGiaTri(){
    loainhanvien.value=1;
    tennhanvien.value="";
    male.value="Nam"
    chonngaysinh.value=""
    sodienthoai.value=""
    diachinhanvien.value=""
    loaikhoanhanvien.value=1;
    showValuethemnhanvien.setAttribute('src', `./public/images/bacsilogin.jpg`);
}
function suaNhanVien(){
    const suanhanvien = document.querySelectorAll('.btn_suanhanvien');
    for (let i = 0; i < suanhanvien.length; i++) {
        suanhanvien[i].addEventListener('click', async () => {
            modalThemnhanvien.style.display = 'block';
            cf_addnhanvien.innerHTML = "Sửa nhân viên";
            cf_addnhanvien.setAttribute('id', 'cf-suanhanvien');
            let id = suanhanvien[i].getAttribute('id');
            idnhanvien = id;
            data = {
                id: id,
            }
            let req = await fetch(urlgetID, {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    Accept: "application/json"
                },
                body: JSON.stringify(data),
            });
            let element = await req.json();
            // thay đổi giá trị
            showValuethemnhanvien.setAttribute('src', `./public/images/${element['img_nhanvien']}`);
            loainhanvien.value = element['id_loainhanvien'];
            tennhanvien.value = element['tennhanvien'];
            male.value = element['gioitinh'];
            chonngaysinh.value = element['ngaysinh'];
            sodienthoai.value = element['sodienthoai'];
            diachinhanvien.value = element['diachi'];
            loaikhoanhanvien.value = element['id_loainhanvien'];
        })
    }
}
function xoaNhanVien(){
    document.querySelector('#quanlynhanvien').classList.add('activeParent');
    document.querySelector('#quanlynhanvien').childNodes.item(3).classList.add('activeLink');
    let dele = document.querySelectorAll('.btn-xoa');
    let no_dele = document.querySelector('.btn-cc_delete');
    const confirmDeleteNhanVien = document.querySelector('.Modal_cf_deleteNhanVien');
    // const hienthinhanvien = document.querySelector('#hienthinhanvien');
    let idnNhanVien;
    function setClickDelete(delete1) {
        for (let i = 0; i < delete1.length; i++) {
            delete1[i].addEventListener('click', () => {
                confirmDeleteNhanVien.style.display = 'block';
                idnNhanVien = dele[i].getAttribute('id');
            })
        }
    }
    setClickDelete(dele);
    no_dele.addEventListener('click', () => {
        confirmDeleteNhanVien.style.display = 'none';
    })
    let ok_dele = document.querySelector('.btn_cf_delete');
    let table = document.querySelectorAll('.tr-1');
    ok_dele.addEventListener('click', async () => {
        const url = './app/deleteModule/deleteNhanvien.php';
        let data = {
            id: idnNhanVien,
        }
        let req = await fetch(url, {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                Accept: "application/json"
            },
            body: JSON.stringify(data),
        });
        confirmDeleteNhanVien.style.display = 'none';
        window.location.reload();
    })
}
function panigationJS(className,defaultValue,arr,arrloainhanvien){
    const pagin = document.querySelectorAll(className);
    pagin[0].classList.add('paginationActive');
    for(let i = 0;i<pagin.length;i++){
        pagin[i].addEventListener('click',()=>{
            pagin.forEach(value=>{
                value.classList.remove("paginationActive");
            })
            pagin[i].classList.add('paginationActive');

            let index =((pagin[i].innerHTML -1 ) * defaultValue);
            let getGT = ((pagin[i].innerHTML ) * defaultValue);
            setTableValue(arr,index,getGT,arrloainhanvien);
        })
    }
}
function setTableValue(arr,index,valueDefault,arrloainhanvien){
    let arrConcat = arr.slice(index,valueDefault);
    hienthinhanvien.innerHTML = "";
    arrConcat.map((value,index)=>{
        let loainhanvien;
        arrloainhanvien.forEach(v=>{
                if(v['id_loainhanvien']==value['id_loainhanvien']){
                    loainhanvien = v['ten_loainhanvien'];
                }
        })
        return hienthinhanvien.innerHTML += ` <tr class="tr-1">
                        <td>${index+1}</td>
                        <td id="${value['id_chitietnhanvien']}">${value['tennhanvien']}
                        </td>
                        <td>${value['diachi']}</td>
                        <td>${value['sodienthoai']}</td>
                        <td>${value['gioitinh']}</td>
                        <td>${loainhanvien}</td>
                        <td class="btn-mng-nv">
                            <button class="btn-mng  btn_suanhanvien btn-mng-edt btn-success"
                                id="${value['id_chitietnhanvien']}">Sửa</button>
                            <button class="btn-mng btn-xoa btn-mng-rm btn-danger"
                                id="${value['id_chitietnhanvien']}">Xóa</button>
                        </td>
                    </tr>`;
    })
    suaNhanVien();
    xoaNhanVien();
}