<?php

include('../../db/db-conn.php');


$query = "SELECT FirstName, LastName, PicSrc, PostId, Content, Id FROM registeredmembers
    INNER JOIN reportsforposts ON reportsforposts.OwnerEmail = registeredmembers.Email";


$results = mysqli_query($conn, $query);
if (mysqli_num_rows($results) > 0) {
    while ($row = mysqli_fetch_assoc($results)) {


      $query2 = "SELECT FirstName, LastName FROM registeredmembers INNER JOIN posts ON registeredmembers.Email = posts.OwnerEmail WHERE Id = '{$row['PostId']}'";


      $results2 = mysqli_query($conn, $query2);
      while ($row2 = mysqli_fetch_assoc($results2)) {
            echo "
        
            <div class='flexbox-item'>
                <div class='rdetails'>
                  <div class='propic'>
                  <img class='img' src='../../uploads/profile-pics/{$row['PicSrc']}' width='100%' height='' alt='user-pic'/>
                  </div> 
                  <div class='reporter'>
                        <div class='reporter-name'>
                              <div class='fname'>
                                    <label class='alllabels'> Reporter Name </label>
                                    <div class='first-name list-details'>{$row['FirstName']}
                                    </div>
                              </div>
                              <div class='lname'>
                                    <label class='alllabels'> </label>
                                    <div class='last-name list-details'>{$row['LastName']}
                                    </div>
                              </div>
                        </div>
                        <div class='report-post'>
                              <div class='id'>
                                    <label class='alllabels'> Reported Post ID </label>
                                    <div class='post-id list-details'>{$row['PostId']}
                                    </div>
                              </div>
                              <div class='owner'>
                                    <label class='alllabels'> Post Owner </label>
                                    <div class='post-owner list-details'> {$row2['FirstName']} {$row2['LastName']}
                                    </div>
                              </div>
                        </div> 
                        <div class='cause'>
                              <div class='report-cause'>
                                    <label class='alllabels'> Cause for Reporting </label>
                                    <div class='the-cause list-details'>{$row['Content']}
                                    </div>
                              </div>
                        </div>
                  </div> 
                </div> 
                <div class='rdelete'>
                  <button class='delete-btn' onclick=DeleteReport('{$row['Id']}')> Delete </button>
                </div>
            </div> 
    
            ";   
      }


        
    }
} else {
    echo "

    <div class='flexbox-item'>
        <p class='request-id'>No data</p>
    </div>

    ";
}