<?php
    include('../../db/db-conn.php');

 $otp =$_POST['otp'];
 $encOTP = sha1($otp);

 if (isset($_COOKIE['otp'])){
     if($encOTP == $_COOKIE['otp']){
         echo"Correct OTP"; 
     }
     else{
         echo"<span class='message-error'>Incorrect OTP </span>";
     }
}
else{
    echo"<span class='message-error'>Error Try again </span>";
}     
 

    
