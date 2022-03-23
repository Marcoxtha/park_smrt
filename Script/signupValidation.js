function validation(){
    var full_name = document.getElementById('full-name').value;
    var email = document.getElementById('email').value;
    var contact = document.getElementById('contact').value;
    var user_name = document.getElementById('user-name').value;
    var password = document.getElementById('password').value;
    var confirm_password = document.getElementById('confirm-password').value;
    var fullNameValidation = document.getElementById('full-name-validation');
    var emailValidation = document.getElementById('email-validation');
    var contactValidation = document.getElementById('contact-validation');
    var userNameValidation = document.getElementById('user-name-validation');
    var passwordValidation = document.getElementById('password-validation');
    var confirmPasswordValidation = document.getElementById('confirm-password-validation');
    var full_nameREGEXP =/(^[A-Za-z]{3,16})([ ]{0,1})([A-Za-z]{3,16})?([ ]{0,1})?([A-Za-z]{3,16})?([ ]{0,1})?([A-Za-z]{3,16})/;
    var full_name_final = full_nameREGEXP.test(full_name);
    var emailREGEXP = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    var email_final = emailREGEXP.test(email);
    var user_nameREGEXP = /^[A-Za-z][A-Za-z0-9_]{7,29}$/;
    var user_name_final = user_nameREGEXP.test(user_name);
    isValidated = false;
    if(full_name.trim()==""){
        fullNameValidation.innerHTML = "Full name cannot be empty";
        fullNameValidation.style.display = 'block';
    }
    else if(full_name_final == false){
        fullNameValidation.innerHTML = "Your full name doesn't match standard full name format";
        fullNameValidation.style.display = 'block';
    }
    else{
        isValidated = true;
        fullNameValidation.style.display = 'none';
    }
    if(email.trim()==""){
        emailValidation.innerHTML = "Email cannot be empty";
        emailValidation.style.display = 'block';
    }
    else if(email_final == false){
        emailValidation.innerHTML = "Your email doesn't match standard email format";
        emailValidation.style.display = 'block';
    }
    else{
        isValidated = true;
        emailValidation.style.display = 'none';
    }
    if(contact.trim() == ""){
        contactValidation.innerHTML = "Email cannot be empty";
        contactValidation.style.display = 'block';
    }
    else if(contact.length != 10){
        contactValidation.innerHTML = "Contact must be a 10 digit number";
        contactValidation.style.display = 'block';
    }
    else{
        isValidated = true;
        contactValidation.style.display = 'none';
    }
    if(user_name.trim() == ""){
        userNameValidation.innerHTML = "User name cannot be empty";
        userNameValidation.style.display = 'block';
    }
    else if(user_name.length<8 || user_name.length>28 ){
        userNameValidation.innerHTML = "User name should be between 8 and 28 characters";
        userNameValidation.style.display = 'block';
    }
    else if(user_name_final == false){
        userNameValidation.innerHTML = "User username doesn't match standard username format.";
        userNameValidation.style.display = 'block';
    }
    else{
        isValidated = true;
        userNameValidation.style.display = 'none';
    }
    if(password == ""){
        passwordValidation.innerHTML = "Password cannot be empty";
        passwordValidation.style.display = 'block';
    }
    else if(password.length <8 || password.length>28){
        passwordValidation.innerHTML = "Password must be between 8 and 28 characters";
        passwordValidation.style.display = 'block';
    }
    else{
        isValidated = true;
        passwordValidation.style.display = 'none';
    }
    if (password != confirm_password){
        confirmPasswordValidation.innerHTML = "Your passwords doesn't match";
        confirmPasswordValidation.style.display = 'block';
    }
    else{
        isValidated = true;
        confirmPasswordValidation.style.display = 'none';
    }
    if(isValidated == true){
        document.getElementById('signUpForm').submit();
    }
}