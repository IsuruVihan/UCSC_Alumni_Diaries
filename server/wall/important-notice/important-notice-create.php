<?php 
    include ('../../../db/db-conn.php');

//    if(isset ($_POST['create-notice'])){
//        $title = $_POST['notice-title'];
//        $body = $POST['notice-body'];
//        $file = $_FILES['filename'];

//        if(empty($title) ||empty($body) ){
//           echo' <span> Title & notice is required</span>';
//        }

//    }

    $targetPath = "../../../../uploads/wall/important-notice" .basename($_FILES['filename']['name']);
    move_uploaded_file($_FILES['filename']['tmp_name'],$targetPath);

?>