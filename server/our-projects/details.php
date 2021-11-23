<?php 
include('../../db/db-conn.php');

// $query = "SELECT * FROM projects";
$query="SELECT projects.Name, committeemembers.Email, projects.Id, projects.Description, projects.Timestamp
        FROM projects
        INNER JOIN committeemembers ON projects.Id=committeemembers.ProjectId
        

";

$result = mysqli_query($conn, $query);



while($row = mysqli_fetch_assoc($result)){
    echo "

    <div class='section-01'>
    <div class='title'>
        {$row['projects.Name']}
    </div>
    <div class='filter-01'>
        <div class='box-01'>
            <div class='text'>
                {$row['projects.Timestamp']}
            </div> 
        </div>
        <div class=box-02>
            <div class='text'>
                Cordinator Email
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
        <div class='list-01'>
            <p class='project-name'>Member 02</p>
        </div>
        <div class='list-01'>
            <p class='project-name'>Member 03</p>
        </div>
        <div class='list-01'>
            <p class='project-name'>Member 04</p>
        </div>
        <div class='list-01'>
            <p class='project-name'>Member 05</p>
        </div>
        <div class='list-01'>
            <p class='project-name'>Member 06</p>
        </div>
        <div class='list-01'>
            <p class='project-name'>Member 07</p>
        </div>
        <div class='list-01'>
            <p class='project-name'>Member 08</p>
        </div>
        <div class='list-01'>
            <p class='project-name'>Member 09</p>
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

   
   
   








