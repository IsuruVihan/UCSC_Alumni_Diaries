<?php
include('../../../db/db-conn.php');

$query = "SELECT Title, Content,PicSrc,OwnerEmail,Timestamp,Id FROM posts ORDER by Timestamp DESC";
$results = mysqli_query($conn,$query);

if (mysqli_num_rows($results) > 0) {
    while ($row = mysqli_fetch_assoc($results)) {

        $pic= $row['PicSrc'];

        $array = explode("important-notice/", $pic);
        $newPath= end($array);
        if(!empty($pic)){
        echo
        "   
             <div class='notice-box' id='render-notice-{$row['Id']}'>
                  <div class='row-1 row-1-gap'>
                        <div class='input-field-title notice-title' id='notice-title'> {$row['Title']} </div>                      
                  </div>      
                  <div class='img-wrapBox'>           
                  <img src='../uploads/wall/important-notice/$newPath'  class='image-box-notice' id='image-box-notice' alt='' >
                  </div>  
                  <div class='notice-content' id='notice-content'>
                        {$row['Content']}
                  </div>
                  <div class='notice-timestamp' id='notice-timestamp'>{$row['Timestamp']}</div>
                   <div class='row-4'>
                        <div class='star-div-off' id='star-div-off'>Star
                            <i class='fa fa-star' onclick=' MarkAsStarred() '></i>
                        </div>
                        <div class='star-div-on' id='star-div-on'>Star
                            <i class='fa fa-star' onclick=' MarkAsStarred() '></i>
                        </div>
                        <button class='filter-btn btn edit-btn' id='edit-notice-{$row['Id']}' onclick=EditNotice('{$row['Id']}') >Edit</button>
                        <button class='filter-btn btn dlt-btn' id='delete-notice-{$row['Id']}'>Delete</button>
                   </div>
            </div>";}

        else{
            echo
            " 
             <div class='notice-box' id='render-notice-{$row['Id']}'>
                  <div class='row-1 row-1-gap'>
                        <div class='input-field-title notice-title' id='notice-title'> {$row['Title']} </div>
                        
                  </div>                 
                  
                    
                  <div class='notice-content' id='notice-content'>
                        {$row['Content']}
                  </div>
                  <div class='notice-timestamp' id='notice-timestamp'>{$row['Timestamp']}</div>
                  <div class='row-4'>
                        <div class='star-div-off' id='star-div-off'>Star
                            <i class='fa fa-star' onclick=' MarkAsStarred() '></i>
                        </div>
                        <div class='star-div-on' id='star-div-on'>Star
                            <i class='fa fa-star' onclick=' MarkAsStarred() '></i>
                        </div>
                        <button class='filter-btn btn edit-btn' id='edit-notice-{$row['Id']}'  onclick=EditNotice('{$row['Id']}'>Edit</button>
                        <button class='filter-btn btn dlt-btn' id='delete-notice-{$row['Id']}'>Delete</button>
                  </div>
                   
            </div>";
        }

    }
}
echo "

    ";
    ?>