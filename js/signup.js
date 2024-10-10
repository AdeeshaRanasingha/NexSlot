function confirmPassword()//checking the same value entered in both password and confirm password
{
    var pwd = document.getElementById("password").value;
    var confirmPwd = document.getElementById("confirm_password").value;

    if(pwd != confirmPwd){
        alert("password doesnot match");
        document.getElementById("confirm_password").value="";//if doesnot match clear that input
    }
}

//removing the data in email section
function emailExist(){
    alert("email already exist");
    document.getElementById("email").value="";
}

// signup.js

document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector('form');
    const passwordInput = document.getElementById('password');
    const confirmPasswordInput = document.getElementById('confirm_password');
    const contactInput = document.getElementById('contact');
    const idInput = document.getElementById('ID');
    const licenceInput = document.getElementById('licence');

    form.addEventListener('submit', function (event) {
        if (!validateForm()) {
            event.preventDefault(); // Prevent form submission if validation fails
        }
    });

    function validateForm() {
        let isValid = true;
        
        // Validate password confirmation
        if (passwordInput.value !== confirmPasswordInput.value) {
            alert("Passwords do not match.");
            isValid = false;
        }

        // Validate password length (at least 8 characters)
        if (passwordInput.value.length < 8) {
            alert("Password must be at least 8 characters long.");
            isValid = false;
        }

        // Validate contact number length (10 digits)
        if (contactInput.value.length !== 10) {
            alert("Contact number must be exactly 10 digits long.");
            isValid = false;
        }

        // Validate ID length (13 characters)
        if (idInput.value.length !== 13) {
            alert("ID number must be exactly 13 characters long.");
            isValid = false;
        }

        // Validate licence length (10 characters)
        if (licenceInput.value.length !== 10) {
            alert("Licence number must be exactly 10 characters long.");
            isValid = false;
        }

        return isValid;
    }
});
