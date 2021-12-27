<?php

include('../../db/db-conn.php');

$query = "SELECT Id, CommentId, Content, PicSrc, FirstName, LastName FROM reportsforcomments INNER JOIN registeredmembers ON registeredmembers.Email = reportsforcomments.OwnerEmail";

$results = mysqli_query($conn, $query);

if (mysqli_num_rows($results) > 0) {
    while ($row = mysqli_fetch_assoc($results)) {
        $query2 = "SELECT OwnerEmail, PostId FROM commentsforposts WHERE Id = '{$row['CommentId']}'";
        
        $results2 = mysqli_query($conn, $query2);
        while ($row2 = mysqli_fetch_assoc($results2)) {	
            $query3 = "SELECT OwnerEmail FROM posts WHERE Id = '{$row2['PostId']}'";
            $results3 = mysqli_query($conn, $query3);
            while ($row3 = mysqli_fetch_assoc($results3)) {
                echo "
                    <div class='flexbox-item'>
                        <div class='rdetails'>
                            <div class='propic'>
                                <img class='img' src={$row['PicSrc']} width='100%' height=''
                                class='user-pic' alt='user-pic'/>
                            </div>
                            <div class='c-reporter'>
                                <div class='c-reporter-name'>
                                    <div class='cfname'>
                                        <label class='alllabels'> Reporter Name </label>
                                        <div class='cfirst-name list-details'> {$row['FirstName']}
                                        </div>
                                    </div>
                                    <div class='clname'>
                                        <div class='clast-name list-details'> {$row['LastName']}
                                        </div>
                                    </div>
                                </div> 
                                <div class='c-report-comment'>
                                    <div class='cid'>
                                        <label class='alllabels'> Repoted Post ID </label>
                                        <div class='cpost-id list-details'> {$row2['PostId']}
                                        </div>
                                    </div>
                                    <div class='cowner'>
                                        <label class='alllabels'> Post Owner </label>
                                        <div class='cpost-owner list-details'> {$row3['OwnerEmail']}
                                        </div>
                                    </div>
                                </div> 
                                <div class='commentdetails'>
                                    <div class='rcid'>
                                        <label class='alllabels'> Reported Comment ID </label>
                                        <div class='cpost-id list-details'> {$row['CommentId']}
                                        </div>
                                    </div>
                                    <div class='rcowner'>
                                        <label class='alllabels'> Comment Owner </label>
                                        <div class='cpost-id list-details'> {$row2['OwnerEmail']}
                                        </div>
                                    </div>
                                </div> 
                                <div class='rcause'>
                                    <div class='report-cause'>
                                        <label class='alllabels'> Cause for Reporting </label>
                                        <div class='thee-cause list-details'> {$row['Content']}
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div> 
                        <div class='rdelete'>
                            <button class='delete-btn' onclick=DeleteReportComment('{$row['Id']}')> Delete </button>
                        </div>
                    </div> 
                ";
                
            }
            
        }
    
    }
} else {
    echo "

    <div class='flexbox-item'>
        <p class='request-id'>No data</p>
    </div>

    ";
}