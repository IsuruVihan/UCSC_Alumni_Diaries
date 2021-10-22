<?php
    include('../../db/db-conn.php');
    
    $query = "SELECT * FROM suggestions";
    $results = mysqli_query($conn, $query);
    if (mysqli_num_rows($results) > 0) {
        while ($row = mysqli_fetch_assoc($results)) {
            if ($row['PicSrc'] == NULL) {
                echo "
                    <div class='box2'>
                        <div class='box-title box-section'>${row['Title']}</div>
                        <div class='box-name box-section'>${row['Name']}</div>
                        <div class='box-email box-section'>${row['Email']}</div>
                        <div class='box-content box-section'>${row['Message']}</div>
                        <div class='box-download2 box-section'>
                            <button class='btn remove-btn3' onclick=DeleteSuggestion('${row['Id']}')>Delete</button>
                        </div>
                    </div>
                ";
            } else {
                echo "
                    <div class='box'>
                        <div class='box-title box-section'>${row['Title']}</div>
                        <div class='box-name box-section'>${row['Name']}</div>
                        <div class='box-email box-section'>${row['Email']}</div>
                        <div class='box-content box-section'>${row['Message']}</div>
                        <div class='box-pic box-section'>
                            <img alt='attachment' src='../uploads/suggestions/{$row['PicSrc']}' height='100%'>
                        </div>
                        <div class='box-download box-section'>
                            <button class='btn download-btn'>
                                <a class='download' href='../uploads/suggestions/{$row['PicSrc']}' download>
                                    Download Attachment
                                </a>
                            </button>
                            <button class='btn remove-btn' onclick=DeleteSuggestion('${row['Id']}')>Delete</button>
                        </div>
                    </div>
                ";
            }
        }
    } else {
        echo "
        
        ";
    }