
function myFunction(){
let x = document.getElementById("myDIV");
if (x.innerHTML === "Step 1 : Enter your email address") {
    x.innerHTML = "Step 2 : Enter the OTP";
    return;
} 
    x.innerHTML = "Step 1 : Enter your email address";
    
}

function checkEmail() {

    var email = document.getElementById('email');
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    if (!filter.test(email.value)) {
    alert('Please provide a valid email address');
    email.focus;
    return false;
 }
}

function container_2Show() {
    var x = document.getElementById("container-2");
    if (x.style.display === "none") {
      x.style.display = "block";
    } else {
      x.style.display = "none";
    }
  }

  function container_1Hide() {
    var y = document.getElementById("container-1");
    if (y.style.display === "flex") {
      y.style.display = "none";
    } else {
      y.style.display = "flex";
    }
  }