<?php 
  include('../../db/db-conn.php');

//   $donorname = $_POST['donorname'];
//   $donormail = $_POST['donormail'];
//   $donoramount = $_POST['donoramount'];
//   $donorfile = $_FILES['donorfile'];

$targetPath = "'../../uploads/donations/'" . basename($_FILES['donorfile']['name']);
move_uploaded_file($_FILES['donorfile']['tmp_name'], $targetPath);

  if (
      empty($donor_name)|| empty($donor_mail)||empty($donor_amount)
  ) {
      echo "<span class='message-error'> All the fields are required</span>";
  }elseif(!filter_var($donor_mail,FILTER_VALIDATE_EMAIL)){
      echo"<span class='message-error'>Email is not valid</span>";
      
  }else{
      $query = "INSERT INTO cashdonations(
                DonorName,
                DonorEmail,
                Amount
             )VALUES(
                '$donor_name',
                '$donor_mail',
                '$donor_amount'
             )";
        if(mysqli_query($conn,$query)){
            echo"<span class='message-success'>Donation has been sucessfully submitted</span>";

        }else{
            echo"<span class='message-error'>Server Error: ". mysqli_error($conn) . "</span";
        }    
    }

?>