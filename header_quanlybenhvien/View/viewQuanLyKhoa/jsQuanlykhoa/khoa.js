const chat = document.querySelector('.chat');
const message = document.querySelector('#message');
const send = document.querySelector('#send');
const show = document.querySelector('.btn-show');
const icon = document.querySelector(' .icon');
const chat_cover = document.querySelector('.chat-cover');
const down = document.querySelector('.down');
const rotage = document.querySelector('.btn-show i');
const icon_2 = document.querySelector('.item-tv');
const tuvan = document.querySelector('.tuvan');
const tu_van = document.querySelector('.tu-van');
const icon_exit = document.querySelector('.icon-exit');
const img_qc = document.querySelector('.hinh-qc');
const tac_vu = document.querySelector('.tac-vu');
const exit_tac_vu = document.querySelector('.exit-tac-vu');
exit_tac_vu.onclick = () => {
    tac_vu.style.display = 'none';
}
send.onclick = () => {
    chat.insertAdjacentHTML('beforeend', '<div class="box-msg msg-right">' + message.value + '</div>');
    message.value = '';
}
icon_exit.onclick = () =>{
    img_qc.style.display = 'none';
}
icon.onclick = () => {
    chat_cover.style.display = 'none';
}

tu_van.onclick = () => {
    chat_cover.style.display = 'inline';
    chat_cover.style.height = '400px';
    rotage.classList.remove('rotage');
    icon.style.display = 'inline';
}
tuvan.onclick = () => {
    chat_cover.style.display = 'inline';
    chat_cover.style.height = '400px';
    rotage.classList.remove('rotage');
    icon.style.display = 'inline';
}
let dem = 0;
let tt = 1;
show.onclick = () => {
    dem += 1;
    if (dem % 2 == 0) {
        
        icon.style.display = 'inline';
        chat_cover.style.height = '400px';
        rotage.classList.remove('rotage');
        
    }
    else {
        icon.style.display = 'none';
        chat_cover.style.height = '50px';
        rotage.classList.add('rotage');
        
    }
}
icon_2.onclick = () => {
    dem += 1;
    chat_cover.style.display = 'inline';
    chat_cover.style.height = '400px';
    rotage.classList.remove('rotage');
    icon.style.display = 'inline';
}
let screen_height = screen.availHeight;
// // alert(screen_height);
// if(screen_height >= 500 )
// {
//     alert(screen_height);
// }
// else
// {
//     alert('an san')
// }


