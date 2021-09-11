<?php include('../components/header.php'); ?>

<div class='my-account'>

        <title>Forgot Password</title>
        <link rel="stylesheet" href="../assets/styles/forgot_password.css">
        <link rel="stylesheet" href="../assets/styles/header.css" type="text/css" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
        <script src="../js/forgot_password.js"></script>

          
            <div id="myDIV">Step 1 : Enter your email address</div>   
                    <!-- OTP request container-->
            <section class="container-wrapper">
                                   
                <img src="../assets/images/alumniDiaries_logo_transparent" alt="alumni diaries logo" class="alumniDiaries_logo">

                <header>Forgot Your Password?</header>
                        
                 <form action="" method="POST" class="container-1" name="form-mail">
                    <input type="email" name="email" id="email" placeholder="Enter your Email address" class="input-style" required>
                    <input type="submit" value="Send OTP" class="button1" onsubmit="myFunction()" > 
                            
                 </form>

              <form action="#" method="POST" class="container-2">
                    <input type="text" id="otp" placeholder="OTP Code" class="input-style" required maxlength="6">
                    <span id="error"> </span>
                    <input type="submit" value="Submit" class="button1" >
              </form>
                        <a href="#" class="return_login">Return to login</a>
             </section>   
                      
</div>

<?php include('../components/footer.php'); ?>