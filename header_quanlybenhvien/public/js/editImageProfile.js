const backround = document.querySelector('.img-bginfor');
const represent = document.querySelector('.img-bgPresent');
let backgroundPath = '';
let representPath = '';

const edt_bg = document.querySelector('#edt-bg');

const edt_pre = document.querySelector('#edt-pre');

edt_bg.addEventListener('change', () => {
    let fileNamearr = edt_bg.value;
    let fileName = fileNamearr.split('\\');
    backround.setAttribute('src', `./public/images/${fileName[2]}`);
    }
)

edt_pre.addEventListener('change',()=>{
    let fileNamearr = edt_pre.value;
    let fileName = fileNamearr.split('\\');
    represent.setAttribute('src', `./public/images/${fileName[2]}`);
})
