
function myFunction(){
let x = document.getElementById("myDIV");
if (x.innerHTML === "Step 1 : Enter your email address") {
    x.innerHTML = "Step 2 : Enter the OTP";
    return;
} 
    x.innerHTML = "Step 1 : Enter your email address";
    
}


/*function errorMessage() {

    let error = document.getElementById("error");
    if (isNaN(document.getElementById("otp").value)) {
    error.textContent = "Please enter a valid number";
    error.style.color = "red";
    }

    else 
    {error.textContent = ""; }
   }
*/

/*function ValidateEmail(inputText){
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if(inputText.value.match(mailformat))
    {
        alert("Valid email address!");
        document.form-mail.email.focus();
        return true;
    }
    else{
        alert("You have entered an invalid email address!");
        document.form-mail.email.focus();
        return false;
        }
}
*/


function checkEmail() {

    var email = document.getElementById('email');
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    if (!filter.test(email.value)) {
    alert('Please provide a valid email address');
    email.focus;
    return false;
 }
}