//check them chi tiet hoa don
function validateForm() {
    if($('#form-login-outin')[0].checkValidity() === false){
        event.preventDefault();
        event.stopPropagation();
    }
    $('#form-login-outin').addClass('was-validated');
}
