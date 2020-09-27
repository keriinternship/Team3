const btn_login = document.querySelector('.btn-lg');
const isUserName = document.querySelector('#username');
const isPassWord = document.querySelector('#password');
isPassWord.nextElementSibling
const pathURL = 'http://localhost/header_quanlybenhvien/quanlynhanvien.php';
let idUser=0;
// suwr dung btoa() để mã hóa và atob() để giải mã
//check người dùng focus vào mà k nhập dữ liệu cho trường username
function isCheckFocus(isData, err, err1) {
    isData.addEventListener('blur', () => {
        let user = isData.value;
        if (user.trim() === '') {
            isData.parentElement.classList.add('input-us-fail');
            isData.nextElementSibling.innerHTML = err;
        }
        if (user.trim().length >= 1 && user.trim().length < 8) {
            isData.parentElement.classList.add('input-us-fail');
            isData.nextElementSibling.innerHTML = err1;
        }
    })
    isData.addEventListener('keyup', () => {
        isData.parentElement.classList.remove('input-us-fail');
        isData.nextElementSibling.innerHTML = '';
    })
}

isCheckFocus(isUserName, 'hãy nhập vào  username', 'hãy nhập chuỗi có hơn 8 kí tự');
isCheckFocus(isPassWord, 'hãy nhập vào password', 'sai định dạng mật khẩu');

const regexname = /[\w]{8,}/g;
function checkData(e) {
    e.preventDefault();
    let user = isUserName.value;
    return regexname.test(user);
}
function checkConnec(isCheck, err) {
    isCheck.parentElement.classList.add('input-us-fail');
    isCheck.nextElementSibling.innerHTML = err;
}
async function checkLogin(e) {
    e.preventDefault();
    let user = isUserName.value;
    let pass = isPassWord.value;
    const url = './app/getModule/getLogin.php';
    // Gửi request
    const req = await fetch(url, {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            Accept: "application/json"
        },
        body: JSON.stringify(),
    });
    // chuyển dữ liệu trả về theo kiểu JSON 
    let listAccount = await req.json();
 
    let vitri_user = listAccount.findIndex(value => {
        return value.username === user;
    });
    function setCookie (name , value,exdays){
        let d = new Date();
        d.setTime(d.getTime() + (exdays*24*60*60*1000) );
        let expries = "expires=" + d.toUTCString();
        document.cookie = name + "=" + value + ';' + expries +  "; path =/";
    }
    if (vitri_user !== -1) {
        if (listAccount[vitri_user].password !== parseInt(pass)) {
            checkConnec(isPassWord, 'Mật khẩu không đúng');
        } else {
            setCookie('username',btoa(listAccount[vitri_user].username),1);
            setCookie('password',btoa(listAccount[vitri_user].password),1);
            setCookie('id_nhanvien',listAccount[vitri_user].id_nhanvien,1);
            window.location.href = `${pathURL}` ;
        }
    }
    let vitri_pass = listAccount.findIndex(value => {
        return value.password === parseInt(pass);
    });
    if(vitri_pass !==-1 ){
        if(listAccount[vitri_pass].username !== user){
            checkConnec(isUserName, 'Tên Đăng nhập không đúng')
        }else{
            setCookie('username',btoa(listAccount[vitri_user].username),1);
            setCookie('password',btoa(listAccount[vitri_user].password),1);
            setCookie('id_nhanvien',listAccount[vitri_user].id_nhanvien,1);
            window.location.href = `${pathURL}`;
        }
    }
    if(vitri_pass === -1 && vitri_user === -1){
        checkConnec(isUserName, 'Tên Đăng nhập không đúng');
        checkConnec(isPassWord, 'Mật khẩu không đúng');
    }
};
btn_login.addEventListener('click', checkLogin);