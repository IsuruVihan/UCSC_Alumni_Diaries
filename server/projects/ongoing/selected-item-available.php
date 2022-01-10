<?php
    
    include('../../../db/db-conn.php');
    
    $ItemId = $_POST['Id'];
    
    $query = "SELECT Quantity FROM projectitems WHERE Id='{$ItemId}'";
    $results = mysqli_query($conn, $query);
    
    while ($row = mysqli_fetch_assoc($results)) {
        echo "
            <label for='available'>Available Quantity</label>
            <input
                id='selected-item-available-txt'
                type='text'
                class='item-spend-input-field'
                value='{$row['Quantity']}'
                disabled
            />
        ";
    }