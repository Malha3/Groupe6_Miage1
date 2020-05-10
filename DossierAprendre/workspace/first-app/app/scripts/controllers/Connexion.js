function validation(valider,login,loginManquant,password,passwordManquant){
    var formValid = document.getElementById('valider');
           
    var login = document.getElementById('login');
    var loginManquant = document.getElementById('loginManquant');
    
    var password = document.getElementById('password');
    var passwordManquant = document.getElementById('passwordManquant');
     
    formValid.addEventListener('click', validation) 
    //Si le champ est vide
    if (formValid.addEventListener('click', validation)){
    if(login.validity.valueMissing){
        event.preventDefault();
        loginManquant.textContent = 'Login Manquant';
        loginManquant.style.color ='red';
    }

    if(password.validity.valueMissing){
        event.preventDefault();
        passwordManquant.textContent = 'Password Manquant';
        passwordManquant.style.color ='red';
    } 
}
}


function validation(){
    var formValid = document.getElementById('valider');
           
    var login = document.getElementById('login');
    var loginManquant = document.getElementById('loginManquant');
    
    var password = document.getElementById('password');
    var passwordManquant = document.getElementById('passwordManquant');
     
    formValid.addEventListener('click', validation); 
    //Si le champ est vide
    if(login.validity.valueMissing){
        event.preventDefault();
        loginManquant.textContent = 'Login Manquant';
        loginManquant.style.color ='red';
    }

    if(password.validity.valueMissing){
        event.preventDefault();
        passwordManquant.textContent = 'Password Manquant';
        passwordManquant.style.color ='red';
    } 
}