<?php include '../components/header.php';?>


 <link rel='stylesheet' type='text/css' href='../assets/styles/login.css'>
 <!-- <br> <br>  -->
    
    <div class='login'>
    <div class=img>
        <!-- <img src='../assets/images/logo.jpeg' alt='logo' width='150' height='150'> <br>  -->
    </div>
    <h1 class='title'> Login </h1>
    <form id='form' action='#' method="POST" class='login-form'>
        <div class='container1'>
          <div class='labels'>
            <label>Email</label>
          </div>
          <div class='input-field'>
            <input id='email' type='text' placeholder='Enter Email' name='email'/>
          </div>
        </div>
        <div class='container2'>
          <div class='labels'>
            <label>Password</label>
        </div>
          <div class='input-field'>
            <input id='password' type='password' placeholder='Enter Password' name='password'/>
          </div>
        </div>
        
        <div id="error"> </div>

       
        <div class='check-box' align='left';>
                  <input type='checkbox' id='checkbox'>
                  <label for="checkbox"> <b> Remember me </b> </label>
                </div> 
        

                <br>

        <table class='logcan'>
                    <tr> 
                        <td align='left'>
                        <input class='btn-solid-login' type='submit' name='' value=' Login  '> 
                        </td>
                        <td align='right'> 
                        <input class='btn-solid-cancel' type='reset' name='' value='Cancel'> 
                        </td>
                        </tr>
                        </table> <br> 

            
                <center> 
                
                <a class='loginpagelink' href='forgot_password.php'> <b> Forgot Password? </b> </a> <br>
                <p> <b> Not one of us yet? </b> <a class='loginpagelink' href='signup.php'> <b> Sign Up </b> </a> </p>
                </center>
        
    </form>
</div>
<script defer src='../js/login.js'> </script>

<?php include('../components/footer.php'); ?>
