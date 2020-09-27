const form_add_khoa = document.querySelector('.form-add-khoa');
const add_khoa = document.querySelector('.add-khoa');
const form_1 = document.querySelector('.form-1');
const form_edit_khoa = document.querySelector('.form-edit-khoa');
const edit_khoa = document.querySelector('.edit-khoa');
const form_edit_1 = document.querySelector('.form-edit-1');
const btn_edit = document.querySelectorAll('.btn-edit');
const btn_delete = document.querySelectorAll('.btn-delete');
const khong = document.querySelector('.khong');
const co = document.querySelector('.co');
const delete_bn = document.querySelector('.delete-bn');
const delete_1 = document.querySelector('.delete-1');
const btn_add_khoa = document.querySelector('.btn-add-khoa');
const btn_edit_khoa = document.querySelector('.btn-edit-khoa');
    
delete_1.onclick = () => {
    delete_bn.style.display = 'none';
  }
 
co.onclick = () => {
    alert('Xóa thành công !');
    delete_bn.style.display = 'none';
  }
  khong.onclick = () => {
  
    delete_bn.style.display = 'none';
  }
btn_delete.forEach((item) => {
    item.onclick = () => {
        delete_bn.style.display = 'inline';
    }
})
form_edit_1.onclick = () => {
    form_edit_khoa.style.display = 'none';
}
btn_edit.forEach((item) => {
    item.onclick = () => {
        form_edit_khoa.style.display = 'inline';
    }
})
btn_edit_khoa.onclick = () => {
    alert('Lưu thành công');
    form_edit_khoa.style.display = 'none';
}
form_1.onclick = () => {
    form_add_khoa.style.display = 'none';
}
add_khoa.onclick = () => {
    form_add_khoa.style.display = 'inline';
}
btn_add_khoa.onclick = () => {
    alert('Lưu thành công');
    form_add_khoa.style.display = 'none';
}