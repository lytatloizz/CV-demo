let password = document.querySelector(".user_password");
let repassword = document.querySelector("input[name='user_repassword']");
let repass_result = document.querySelector('.repass-result');
const btn_register = document.querySelector('.btn_register');


repassword.addEventListener('keyup', () => {
    if(repassword.value != password.value){
        repass_result.innerHTML = 'check you password again please!!!';
        btn_register.disabled = true;
    }else{
        repass_result.innerHTML = '';   
        btn_register.disabled = false;
    }
})

