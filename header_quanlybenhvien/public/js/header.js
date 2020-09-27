
const img_infor = document.querySelector('.img-infor');
const img_mess = document.querySelector('.img-mess');
const inforSelect = document.querySelector('.inforSelect');
const messSelect = document.querySelector('.messSelect');
let isCheckInfor = false;
let isCheckMess = false;

img_infor.addEventListener('click', () => {
    if (isCheckInfor === false) {
        inforSelect.style.display = 'block';
        inforSelect.style.animation = 'showOption  0.2s ease-in';
    }
    else {
        inforSelect.style.animation = ' hiddenOption 0.2s ease-in forwards';
    }
    isCheckInfor = !isCheckInfor;
});
img_mess.addEventListener('click', () => {
    if (isCheckMess === false) {
        messSelect.style.display = 'block';
        messSelect.style.animation = 'showOption  0.2s ease-in';
    }
    else {
        messSelect.style.animation = ' hiddenOption 0.2s ease-in forwards';
    }
    isCheckMess = !isCheckMess;
});
window.onload = () => {
    let date = new Date();
    let hour = date.getHours();
    let minute = date.getMinutes();
    let seconds = date.getSeconds();
    const timeInfor = document.querySelectorAll('.timeInfor');
    for (let i = 0; i < timeInfor.length; i++) {
        timeInfor[i].innerHTML = hour + ':' + minute;
    }
}
// logout
const option_profile = document.querySelector('.inforAdminFrofile');
const profileIcon = document.querySelector('.profileIcon');
const optionProfile_list = document.querySelector('.optionProfile_list');
let isCheckArrow = false;
option_profile.addEventListener('click', () => {
    if (isCheckArrow === false) {
        profileIcon.style.animation = 'showrota 0.2s ease-in forwards';
        optionProfile_list.style.display = 'block';
        optionProfile_list.style.animation = 'showOptionProfile 0.2s ease-in forwards'
    } else {
        profileIcon.style.animation = 'hiddenrota 0.2s ease-in forwards';
        optionProfile_list.style.animation = 'hiddenOptionProfile 0.2s ease-in forwards'
    }
    isCheckArrow = !isCheckArrow;
})




//  Click login =>{show Thoong baos}

const confirmlogin = document.querySelector('#logout');
const modalLogin = document.querySelector('.Modaldirect');
const btnCanCle = document.querySelector('.btnCanCle');
confirmlogin.addEventListener('click', () => {
    modalLogin.style.display = 'block';
});
btnCanCle.addEventListener('click', () => {
    modalLogin.style.display = 'none';
});

//option ok => xóa cookie
function setCookie (name , value){
    let date = new Date();
    date.setTime(date.getTime() - 60000);
    var expries = "expires = " + date.toUTCString();
    document.cookie = name + " = " + value + ';' + expries +  "; path =/";
}
const btnOk = document.querySelector('.btnOk');
btnOk.addEventListener('click', () => {
      setCookie('username','value');
      window.location = 'http://localhost/header_quanlybenhvien/index.php';
});

let regex = /[]/g;
let string = 'lethanhdat1*';
console.log(regex.test(string));

const viewProfile = document.querySelector('#viewProfile');
const Modalinformation = document.querySelector('.Modalinformation');
const hiddenInfor = document.querySelector('.hiddenInfor');
viewProfile.addEventListener('click', () => {
    Modalinformation.style.display = 'block';
})
hiddenInfor.addEventListener('click', () => {
    Modalinformation.style.display = 'none';
})



