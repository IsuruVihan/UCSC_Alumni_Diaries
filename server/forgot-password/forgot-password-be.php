<?php
    include('../../db/db-conn.php');

   
    $email = trim($_POST['email']);

    $query = "SELECT * FROM registeredmembers WHERE Email='$email' ";
    $result = mysqli_query($conn, $query);
    if($email == ''){
        echo("Please enter your email");
    }
    else if (mysqli_num_rows($result) > 0) {
        //OTP Generator
        function generateNumericOTP() { 
      
            $generator = "1357902468"; 
            $result = ""; 
        
            for ($i = 1; $i <= 4; $i++) { 
                $result .= substr($generator, (rand()%(strlen($generator))), 1); 
            } 
            return $result; 
        } 
    
        $randomno = generateNumericOTP();
    
            $msg = $randomno;  
            $header = "From:abc@somedomain.com \r\n";
            $header .= "Cc:afgh@somedomain.com \r\n";
            $header .= "MIME-Version: 1.0\r\n";
            $header .= "Content-type: text/html\r\n";
            $sentMail = mail($email,"My subject",$header,$msg);
    
            if($sentMail){
                echo("Message sent");
            }
            else{
                echo("Message not sent");
            }
        
    
        $otp =($_POST['#otp']);
    
        if(isset ($_POST['submit'])){
            if($otp == $randomno){
                echo("Incorrect OTP"); //otp equal nm redirect venna one ntnm error enna one
            }
            else('');// reset pw ekata redirect venna
         }
    } else {
        echo("Account doesn't exist");//meka popup 1k vidiyt enna one. ntnm yatinvatenna one
    }


?>
