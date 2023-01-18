function validation(event , regex ,  error ){
    input = event.target;
    value = input.value;
    if(isValide(value , regex)){
        validEffect(input , 'valide');
        return true;
    } 
    else {
        invalidEffect(input , error);
        return false;
    }
}

function valideName(event) {
    error = "Name must have 4+ characters";
    regex = /^[a-zA-Z]+$/
    formElements.name = validation(event , regex ,  error );
    formValidation();
}
function valideEmail(event){
    error = "example@gmail.com";
    regex = /^[a-zA-Z0-9._%+-]+@gmail\.com$/
    formElements.email = validation(event , regex ,  error );
    formValidation();
}
let passVal;
function validePassword(event){
    passVal = event.target.value;
    error = "8+ characters, 1 uppercase, 1 lowercase, 1 digit, 1 character";
    regex = /^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/;
    formElements.password = validation(event , regex ,  error );
    formValidation();
}

function ConfirmePassord(event) {
    input = event.target;
    confPassVal = input.value;
    if (passVal == confPassVal || 1) {
        validEffect(input, 'Matching Passwords');
        formElements.confirmPassword = true;
    }
    else {
        invalidEffect(input, 'Different Passwords');
        formElements.confirmPassword = false;
    }
    formValidation();
}


function isValide(value , regex){
    // return value.match(regex) !== null && value.length >=4 ;
    return true;
}

function validEffect(input , error) {
    input.classList.remove("is-invalid");
    input.classList.add("is-valid");

    div = input.parentElement.children[2];
    validMessage(div , error);
}

function invalidEffect(input , error) {
    input.classList.remove("is-valid");
    input.classList.add("is-invalid");

    div = input.parentElement.children[2];
    invalidMessage(div , error);
}

function validMessage(div , mesg){
    div.classList.remove("invalid-feedback");
    div.classList.add("valid-feedback");
    div.innerText = mesg;
}
function invalidMessage(div , mesg){
    div.classList.remove("valid-feedback");
    div.classList.add("invalid-feedback");
    div.innerText = mesg;
}

formElements = {name:false , email : false , password : false , confirmPassword : false };
// formValidation();
function formValidation(){
    // btnSubmit = document.getElementById('btn-register-submite');
    // let isValid = true;
    // for(let key in formElements){
    //     if(!formElements[key]){
    //         isValid = false;
    //         break;
    //     }
    // }
    // btnSubmit.disabled = !isValid;
}
