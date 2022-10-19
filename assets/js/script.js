const eye = document.getElementById('eye');
const password = document.getElementById('password');
let loginPwdStatus = false;


eye.addEventListener('click', function(){

    if(loginPwdStatus === false){
        password.setAttribute("type","text");
        loginPwdStatus = true;
        console.log(loginPwdStatus)
    } else if (loginPwdStatus === true){
        password.setAttribute("type","password");
        loginPwdStatus = false;
        console.log(loginPwdStatus);
    }
})