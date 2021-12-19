<?php
include('../../db/db-conn.php');
include('../../server/session.php');

$email = $_SESSION['Email'];
$query = "SELECT projects.Name, committeemembers.Type 
          FROM projects
          INNER JOIN committeemembers
          ON projects.Id = committeemembers.ProjectId
          WHERE committeemembers.Email = '{$email}'";

$results = mysqli_query($conn, $query);

if (mysqli_num_rows($results) > 0 ) {
//     output data of each row
    while($row = mysqli_fetch_assoc($results)) {
        echo "<tr>
                <td class='cash-h-1'>".$row["Name"]."</td>
                <td class='cash-h-1'>".$row["Type"]."</td>
               </tr>";
    }
} else {
    echo " ";
}
