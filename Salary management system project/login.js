//validation code for inputs
var username = document.forms['form']['username'];
var password = document.forms['form']['password'];

var error_username = document.getElementById('error_ap');
var error_password = document.getElementById('error_password');



function validated() {
    if (username.value.length < 5 || password.value.length < 1) {
        username.style.border = "2px solid #fc3131";
        error_username.style.display = "block";
        username.focus();
        password.style.border = "2px solid #fc3131";
        error_username.style.display = "block";
        username.focus();
        return false;
    }
}