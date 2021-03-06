<?php

include ('../../../db/db-conn.php');
include ('../../../server/session.php');

$query = "
    SELECT Id, Title, Content, PicSrc, Timestamp FROM posts
    INNER JOIN starredposts ON starredposts.PostId = posts.Id
    WHERE starredposts.Email = '{$_SESSION['Email']}'
";

$results = mysqli_query($conn, $query);

if (mysqli_num_rows($results) > 0) {
    while ($row = mysqli_fetch_assoc($results)) {
        $pic = $row['PicSrc'];

        $array = explode("important-notice/", $pic);
        $newPath = end($array);
        if (!empty($pic)) {
            echo "
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
                         ";
            //query two
            $queryOne = "SELECT Email,PostId FROM starredposts WHERE PostId='{$row['Id']}'";
            $resultOne = mysqli_query($conn, $queryOne);

            if (mysqli_num_rows($resultOne) > 0) {
                echo " <div class='star-div-off star-div-on' id='star-div-off-{$row['Id']}'>
                                        <i class='fa fa-star' onclick=UnMarkStarred('{$row['Id']}')></i>
                                    </div>";
            }
            echo"
                        <button class='filter-btn btn edit-btn ' id='edit-notice-{$row['Id']}' onclick=EditNotice('{$row['Id']}')>Edit</button>
                        <button class='filter-btn btn dlt-btn' id='delete-notice-{$row['Id']}' onclick=DeleteNotice('{$row['Id']}')>Delete</button>
                   </div>
            </div>

             <div class='edit-notice-container' id='edit-notice-container-{$row['Id']}'>
                    <div class='edit-notice-box ' id='edit-notice-box-{$row['Id']}'>
                    <div class='box-title'>
                        Edit Important Notice
                    </div>
                    <form id='edit-notice-form-{$row['Id']}'>
                        <div class='row-1'>
                            <input class='input-field-title edit-notice-title' type='text' id='edit-title-{$row['Id']}' name='edit-title' value='{$row['Title']}'/>
                        </div>                       
                        <div class='row-3'>
                            <textarea class='create-notice-text' name='edit-content' id='edit-content-{$row['Id']}'>  {$row['Content']} </textarea>
                        </div>
                        <input type='text' value='{$row['Id']}' name='id' id='id' hidden>
                        <p class='notice-timestamp'> {$row['Timestamp']}</p>
                        <div class='row-4'>
                            <input type='submit' class='filter-btn btn edit-del-btn' value='Save Changes' />
                            <input type='reset'  class='filter-btn btn' id='edit-cancel' value='Cancel' />
                        </div>
                       <span id='flash-message-1' class='flashMsg'></span>
                    </form>
                </div>
            </div> ";
        } else {
            echo "
             <div class='notice-box' id='render-notice-{$row['Id']}'>
                  <div class='row-1 row-1-gap'>
                        <div class='input-field-title notice-title' id='notice-title'> {$row['Title']} </div>
                  </div>
                  <div class='notice-content' id='notice-content'>
                        {$row['Content']}
                  </div>
                  <div class='notice-timestamp' id='notice-timestamp'>{$row['Timestamp']}</div>
                  <div class='row-4'>
                       ";
            //query two
            $queryOne = "SELECT Email,PostId FROM starredposts WHERE PostId='{$row['Id']}'";
            $resultOne = mysqli_query($conn, $queryOne);

            if (mysqli_num_rows($resultOne) > 0) {
                echo " <div class='star-div-off star-div-on' id='star-div-off-{$row['Id']}'>
                                        <i class='fa fa-star' onclick=UnMarkStarred('{$row['Id']}')></i>
                                    </div>";
            }
            echo "
                        <button class='filter-btn btn edit-btn' id='edit-notice-{$row['Id']}'  onclick=EditNotice('{$row['Id']}')>Edit</button>
                        <button class='filter-btn btn dlt-btn' id='delete-notice-{$row['Id']}'  onclick=DeleteNotice('{$row['Id']}') >Delete</button>
                  </div>
            </div>

            <div class='edit-notice-container' id='edit-notice-container-{$row['Id']}'>
                    <div class='edit-notice-box' id='edit-notice-box-{$row['Id']}'>
                    <div class='box-title'>
                        Edit Important Notice
                    </div>
                    <form id='edit-notice-form-{$row['Id']}'>
                        <div class='row-1'>
                           <input class='input-field-title edit-notice-title' type='text' id='edit-title-{$row['Id']}' name='edit-title' value='{$row['Title']}'/>
                        </div>
                        <div class='row-3'>
                             <textarea class='create-notice-text' id='edit-content-{$row['Id']}' name='edit-content'> {$row['Content']} </textarea>
                        </div>
                        <input type='text' value='{$row['Id']}' id='id'  name='id' hidden>
                         <p class='notice-timestamp'> {$row['Timestamp']}</p>
                        <div class='row-4'>
                            <input type='submit' class='filter-btn btn edit-del-btn' value='Save Changes' />
                            <input type='reset'  class='filter-btn btn' id='edit-cancel-{$row['Id']}' value='Cancel' />
                        </div>
                    </form>
                   <span id='flash-message-1' class='flashMsg'></span>
                </div>
            </div> ";
        }
    }
}


























