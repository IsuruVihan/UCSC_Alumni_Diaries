<?php
include('../../../db/db-conn.php');
include('../../../server/session.php');

$query = "SELECT  Content,PicSrc,OwnerEmail,Timestamp,Id FROM posts WHERE isImportant='0' ORDER by Timestamp DESC";
$results = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($results);

$query1 = "SELECT FirstName, LastName, PicSrc FROM registeredmembers WHERE Email='{$row['OwnerEmail']}'";
$results1 = mysqli_query($conn, $query1);
$row1 = mysqli_fetch_assoc($results1);

$ownerEmail = $row['OwnerEmail'];
// $postId = $row['Id']; // post id
$PostId = $_POST['id'];

$query2 = "SELECT  Content,PostId,OwnerEmail,Timestamp,Id FROM commentsforposts";
$results2 = mysqli_query($conn, $query2);
$row2 = mysqli_fetch_assoc($results2);

$query3 = "SELECT Content,Timestamp,OwnerEmail,FirstName,PostId, LastName,commentsforposts.Id, registeredmembers.PicSrc 
                    FROM commentsforposts
                    INNER JOIN registeredmembers 
                    ON commentsforposts.OwnerEmail = registeredmembers.Email WHERE PostId ='{$PostId}' ORDER by Timestamp DESC";
$results3 = mysqli_query($conn, $query3);



// if($PostId  == $row2['PostId']){
    while ($row3 = mysqli_fetch_assoc($results3)){
        echo"
<div class='comment-show-outer-box'>
        <div class='user-info'>
            <img src='' alt='' class='comment-dp'>
            <div class='comment-author-info'>
                <div class='c-fname-show '>{$row3['FirstName']} {$row3['LastName']}</div>
                <div class='c-time-show'>{$row3['Timestamp']}</div>
            </div>
        </div>

        <div class='c-txt-show'>{$row3['Content']} </div>
        <div class='comment-box-buttons'>
            <div class='comment-buttons-show'>";

                if ($_SESSION["Email"] == $row3["OwnerEmail"]) {
                    echo"
                <button class='filter-btn btn c-edit-show'>Edit</button>
                ";
                }

                if ($_SESSION["AccType"] == "TopBoard" || $_SESSION["Email"] == $row["OwnerEmail"] || $_SESSION["Email"] == $row3["OwnerEmail"] ) {
                    echo"
                <button class='filter-btn btn c-dlt-show'>Delete</button>
                ";
                }
                if ( $_SESSION["Email"] != $row3["OwnerEmail"] ) {
                    echo" <button class='filter-btn btn c-report-show' onclick=DisplayCommentReport({$row3['Id']})>Report</button>
                ";
                }
                echo"
            </div>
            <div class='like-box-show'>
                <button class='thumb-icon'><i class='fa fa-thumbs-up fa-2x'></i></button>
                <div class='c-like-count-show'>112</div>
                <button class='thumb-icon'><i class='fa fa-thumbs-down fa-2x' aria-hidden='true'></i>
                </button>
                <div class='c-dislike-count'>111</div>
            </div>
        </div>

        <!--comment report-->
        <div id='comment-report-outer-box-{$row3['Id']}'>
            <form class='comment-report' id='comment-report-{$row3['Id']}'>
                <div class='box-title'>Report Comment</div>
                <textarea class='report-txt field-hover' id='report-content-{$row3['Id']}' placeholder='Your content goes here' name='report-content'></textarea>
                <input type='text' value='{$row3['Id']}' name='comment-id-no' hidden>
                <div class='create-post-buttons'>
                    <input type='submit' class='filter-btn btn report-submit-button' value='Submit' onclick=CommentReportSubmit({$row3['Id']})>
                    <input type='reset' class='filter-btn btn ' onclick=HideCommentReport({$row3['Id']}) value='Cancel'>
                </div>
            </form>
        </div>
                
        
</div>
";
    }
// }


// else {
//     echo "

// {$row2['PostId']}
//     ";
// }