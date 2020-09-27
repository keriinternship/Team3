const info_bn = document.querySelector('.info-form');
const add_bn = document.querySelector('.add-bn');
const btn_chi_tiet = document.querySelectorAll('.btn-chi-tiet');
const btn_delete = document.querySelectorAll('.btn-delete');
const form_add_bn = document.querySelector('.form-add-bn');
const form_add_1 = document.querySelector('.form-add-1');
const btn_add = document.querySelector('.btn-add');
const modal = document.getElementById("myModal");
const btn_lich_su = document.querySelectorAll('.btn-lich-su');
const btnClose = document.getElementById("close");
btn_lich_su.forEach((item) => {
  item.onclick= () => {
    modal.style.display = 'inline';
  }
})
btnClose.addEventListener('click',()=>{
  modal.style.display = 'none';
})
btn_add.onclick = () => {
    alert('Thêm thành công !!!');
    form_add_bn.style.display = 'none';
}
//JS exit form add
    form_add_1.onclick = () => {
    form_add_bn.style.display = 'none';
  }
//JS Button chi tiết bệnh nhân
btn_chi_tiet.forEach((item) => {
    item.onclick = () => {
      info_bn.style.display = 'inline';
    }
  })
  info_exit.onclick = () => {
    info_bn.style.display = 'none';
  }
//JS Thêm bệnh nhân
add_bn.onclick = () => {
    form_add_bn.style.display = 'inline';
  }

  btn_delete.forEach((item) => {
    item.onclick = () => {
      delete_bn.style.display = 'inline';
    }
  })
  
