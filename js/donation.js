function validEmail()
{
var error = document.getElementById("donation-message");
var mail = document.getElementById('donor-mail').value;

var email = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;

  if (!mail.match(email))
  {
      // alert("Your Email : " + mail);
      alert("Invalid Email !!!");
    
  }
  // else
  // {
  //     alert("Invalid Email !!!");
  // }
}