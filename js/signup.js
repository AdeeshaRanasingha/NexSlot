function confirmPassword()//checking the same value entered in both password and confirm password
{
    var pwd = document.getElementById("password").value;
    var confirmPwd = document.getElementById("confirm_password").value;

    if(pwd != confirmPwd){
        alert("password doesnot match");
        document.getElementById("confirm_password").value="";//if doesnot match clear that input
    }
}

function emailExist(){
    alert("email already exist");
    document.getElementById("email").value="";
}