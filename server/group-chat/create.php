<?php
session_start();
include('../../db/db-conn.php');

if(isset($_POST['submit'])){
   $group_name = $_POST['group-name'];
   $file = $_FILES['file'];
  
   if(empty($group_name)){
      echo "Enter a Group Name";
   }else{
    
      if ($file['name'] != '') {
         $fileName = $_FILES['file']['name'];
         $fileTmpName = $_FILES['file']['tmp_name'];
         $fileSize = $_FILES['file']['size'];
         $fileError = $_FILES['file']['error'];
         $fileType = $_FILES['file']['type'];
         $fileExt = explode('.', $fileName);
         $fileActualExt = strtolower(end($fileExt));
         $allowedExt = array('jpg', 'jpeg', 'png', 'pdf');
         $allowedMaxSize = 100000;

         if(in_array($fileActualExt,  $allowedExt)){
            if($fileError === 0){
               if($fileSize < 10000000){
                  $fileNameNew = uniqid('', true).".". $fileActualExt;
                  $fileDestination = '../../uploads/group-chat/'.$fileNameNew;
                  move_uploaded_file($fileTmpName, $fileDestination);
                  
                  $query ="
                     INSERT INTO groupchats (OwnerEmail,PicSrc, Name) 
                     VALUES (
                        '{$_SESSION['Email']}',
                        '$fileNameNew',
                        '$group_name'
                  )";  
                  if (mysqli_query($conn, $query)) {
                     header("Location: ../../pages/group-chat/group-chat.php");
                  }else{
                  echo "Server error";
                  }
               }else{
                  echo "Your file size is large";
               }   
            }else{
               echo "There is error in uploading file";
            }
         }else{
         echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed. ";
         }
      }else{
         $query ="INSERT INTO groupchats (OwnerEmail,PicSrc,Name) 
         VALUES ('{$_SESSION['Email']}','group-chat.png','$group_name')"; 
         
         if (mysqli_query($conn, $query)) {
             header("Location: ../../pages/group-chat/group-chat.php");
         }else{
             echo "Server error";
         } 
      }        
   }
   
}
   


