<?php
include('../../../db/db-conn.php');

$query = "SELECT Title, Content,PicSrc,OwnerEmail,Timestamp FROM posts";
$results = mysqli_query($conn,$query);

if (mysqli_num_rows($results) > 0) {
    while ($row = mysqli_fetch_assoc($results)) {
        echo
        " 
             <div class='notice-box'>
                  <div class='row-1 row-1-gap'>
                        <div class='input-field-title' id='notice-title'> {$row['Title']} </div>
                        <div class='field-header' id='notice-timestamp'>{$row['Timestamp']}</div>
                  </div>                 
                  <img src='{$row['PicSrc']}'  class='image-box-notice' id='image-box-notice' alt='' >
                    
                  <div class='notice-content' id='notice-content'>
                        {$row['Content']}
                   </div>
                   <div class='row-4'>
                        <div class='star-div-off' id='star-div-off'>Star
                            <i class='fa fa-star' onclick=' MarkAsStarred() '></i>
                        </div>
                        <div class='star-div-on' id='star-div-on'>Star
                            <i class='fa fa-star' onclick=' MarkAsStarred() '></i>
                        </div>
                        <button class='filter-btn btn edit-btn' id='edit-notice-{$row['OwnerEmail']}' onclick='ShowEditNotice()'>Edit</button>
                        <button class='filter-btn btn dlt-btn' id='delete-notice-{$row['OwnerEmail']}'>Delete</button>
                   </div>
            </div>";

    }
}
echo "

    ";
    ?>