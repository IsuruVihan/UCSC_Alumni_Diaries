
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

function validateemail()  {  

    let x=document.form-mail.email.value;  
    let atposition=x.indexOf("@");  
    let dotposition=x.lastIndexOf(".");  

    if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length){  
        alert("Please enter a valid e-mail address");  
    return false;  
    }  
}  

