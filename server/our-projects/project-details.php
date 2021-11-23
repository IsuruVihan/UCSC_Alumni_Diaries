<?php 
include('../../db/db-conn.php');

$Id = $_POST['Id'];

$query = "SELECT * FROM projects WHERE Id = '{$Id}'";
$result = mysqli_query($conn, $query);

while($row = mysqli_fetch_assoc($result)){
    $query2 = "SELECT * FROM committeemembers WHERE ProjectId = {$Id}";
    $results2 = mysqli_query($conn, $query2);

    echo "
    <div class='section-01'>
        <div class='title'>
            {$row['Name']}
        </div>
        <div class='filter-01'>
            <div class='box-01'>
                <div class='text'>
                    {$row['Timestamp']}
                </div> 
            </div>
            <div class=box-02>
                <div class='text'>
                    Cordinator : 
    ";
    
    if (mysqli_num_rows($results2) > 0) {
        while ($row2 = mysqli_fetch_assoc($results2)) {
            if ($row2['Type'] == 'Coordinator') {
                // $query3 = "SELECT FirstName, LastName FROM registeredmembers WHERE Email = {$row2['Email']}";
                $query3=" SELECT  registeredmembers.FirstName, registeredmembers.LastName
                        FROM registeredmembers
                        INNER JOIN committeemembers ON registeredmembers.Email = committeemembers.Email";
                $results3 = mysqli_query($conn, $query3);
                // echo mysqli_num_rows($results3);
                if (mysqli_num_rows($results3) > 0) {
                    while ($row3 = mysqli_fetch_assoc($results3)) {
                        echo "{$row3['FirstName']} {$row3['LastName']}";
                    }
                }
            }
        }
    } else {
        echo "-";
    }

    echo "
                </div>
            </div>
        </div>
        <div class='project-description'>
            {$row['Description']}
        </div>
        <div class='scroll-02'>
            <div class='list-01'>
                <p class='project-name'>Member 01</p>
            </div>
        </div>
    </div>
    <div class=' section-02'>
        <div class='container-01'>
            <div class='title'>
                Donate Cash
            </div>
            <div class='col-03'>
                <input class='input-field text-field' type='text' placeholder='Donar Name'/>
                <input class='input-field text-field' type='text' placeholder='Donar Email'/>
                <input class='input-field text-field' type='text' placeholder='Amount'/>
                <input class='input-field text-field' type='text' placeholder='Bank Slip Attachment'/>
            </div>
            <div class='col-04'>
                <button class='submit-btn btn'>Submit</button>
                <button class='cancel-btn btn'>Cancel</button>
            </div>
        </div>
        <div class='container-02'>
            <p class='project-name'>Donate via pay here</p>
            <!-- <button class='pay-btn btn'>Pay here</button>   -->
        </div>
        <div class='container-03'>
            <div class='title'>
                Donate Items
            </div>
            <div class='col-03'>
                <input class='input-field text-field' type='text' placeholder='Donar Name'/>
                <input class='input-field text-field' type='text' placeholder='Donar Email'/>
                <input class='input-field text-field' type='text' placeholder='Item'/>
                <input class='input-field text-field' type='text' placeholder='Quantity'/>
            </div>
            <div class='col-04'>
                <button class='submit-btn btn'>Submit</button>
                <button class='cancel-btn btn'>Cancel</button>
            </div>
        </div>
    </div>
";

}

   
   
   








