//check sua chi tiet
function validateForm() {
    if($('#form-login')[0].checkValidity() === false){
        event.preventDefault();
        event.stopPropagation();
       
    }
    $('#form-login').addClass('was-validated');
}
//check them chi tiet
function validateForm_Chitiet() {
    if($('#button-form')[0].checkValidity() === false){
        event.preventDefault();
        event.stopPropagation();
       
    }
    $('#button-form').addClass('was-validated');
}