const khong = document.querySelector('.khong');
const co = document.querySelector('.co');
const btn_save = document.querySelector('.btn-save');
const info_exit = document.querySelector('.info-1');
const form_edit_bn = document.querySelector('.form-edit-bn');
const form_edit_1 = document.querySelector('.form-edit-1');

const delete_bn = document.querySelector('.delete-bn');
const delete_1 = document.querySelector('.delete-1');
const edit_bn = document.querySelector('.edit-bn');

//JS exit form_edit 
form_edit_1.onclick = () => {
  form_edit_bn.style.display = 'none';
}
//JS button Save
btn_save.onclick = () => {
  alert('Lưu thành công ')
  form_edit_bn.style.display = 'none';
  info_bn.style.display = 'none';
}
//JS delete
co.onclick = () => {
  alert('Xóa thành công !');
  delete_bn.style.display = 'none';
}
khong.onclick = () => {

  delete_bn.style.display = 'none';
}
//JS Button edit thông tin bệnh nhân
edit_bn.onclick = () => {
  form_edit_bn.style.display = 'inline';
}
//JS Delete bệnh nhân
delete_1.onclick = () => {
  delete_bn.style.display = 'none';
}
info_exit.onclick = () => {
  info_bn.style.display = 'none';
}