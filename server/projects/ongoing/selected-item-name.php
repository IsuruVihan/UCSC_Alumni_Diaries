<?php
    
    include('../../../db/db-conn.php');
    
    $ItemId = $_POST['Id'];
    
    $query = "SELECT ItemName FROM projectitems WHERE Id='{$ItemId}'";
    $results = mysqli_query($conn, $query);
    
    while ($row = mysqli_fetch_assoc($results)) {
        echo "
            <label for='name'>Item Name</label>
            <input
                id='selected-item-name-txt'
                type='text'
                class='item-spend-input-field'
                value='{$row['ItemName']}'
                disabled
            />
        ";
    }