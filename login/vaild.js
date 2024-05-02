var email = document.forms['form']['email'];
var password = document.forms['form']['password']; 

var email_error = document.getElementsById('email_error');
var phone_error = document.getElementsById('phone_error');

email.addEventListener('textInput',email_verify);
password.addEventListener('textInput',pass_verify);

function validated() {
    if(email.value.length < 9){
        email.style.border = "1px solid red";
        email_error.style.display = "block";
        email.focus();
        return false;
    }
    if(password.value.length < 6){
        password.style.border = "1px solid red";
        phone_error.style.display = "block";
        password.focus();
        return false;
    }
    
}
function email_verify(){
    if(email.value.length >= 8){
        email.style.border = "1px solid silver";
        email_error.style.display = "block";
       
        return true;
}
}

function pass_verify(){
    if(password.value.length >= 5){
        password.style.border = "1px solid silver";
        password_error.style.display = "block";
       
        return true;
}
}