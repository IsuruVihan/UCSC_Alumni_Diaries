<?php
    
    include('../../../db/db-conn.php');
    
    $ProjectId = $_POST['ProjectId'];
    
    echo "
        <div class='title'>
            Expenditures
        </div>
        <div class='gen-report-div'>
            <button class='btn gen-rep-btn'>Expenditure Report</button>
        </div>
    ";