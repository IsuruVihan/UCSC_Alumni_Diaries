<?php
    
    include('../../../../db/db-conn.php');
    
    $Email = trim($_POST['Email']);
    
    $query = "SELECT Timestamp, Section, Activity FROM activitylog WHERE Email = '{$Email}'";
    
    $results = mysqli_query($conn, $query);
    
    echo "
        <div id='activity-filter'>
            <div class='col1'>
                <input id='activity-log-from' class='input-field' type='date'/>
                <input id='activity-log-to' class='input-field' type='date'/>
                <select id='activity-log-section2' class='input-field'>
                    <option value='All'>All</option>
                    <option value='Login'>Log In</option>
                    <option value='Logout'>Log Out</option>
                    <option value='Admin - Accounts'>Admin - Accounts</option>
                    <option value='Admin - Reports'>Admin - Reports</option>
                    <option value='Admin - Subscriptions'>Admin - Subscriptions</option>
                    <option value='Admin - Project Spendings'>Admin - Project Spendings</option>
                    <option value='Admin - Inventory'>Admin - Inventory</option>
                    <option value='Donations'>Donations</option>
                    <option value='Suggestions'>Suggestions</option>
                    <option value='Notifications'>Notifications</option>
                    <option value='Wall'>Wall</option>
                    <option value='Chat'>Chat</option>
                    <option value='My Account'>My Account</option>
                    <option value='Projects - All'>Projects - All</option>
                    <option value='Projects - Not Started'>Projects - Not Started</option>
                    <option value='Projects - Ongoing'>Projects - Ongoing</option>
                    <option value='Projects - Completed'>Projects - Completed</option>
                    <option value='Projects - Closed'>Projects - Closed</option>
                </select>
            </div>
            <div class='section-11' style='display: flex; justify-content: center; align-items: center'>
                <button class='filter-btn btn' onclick=FilterUserActivities('{$Email}',document.getElementById('activity-log-from').value,document.getElementById('activity-log-to').value,document.getElementById('activity-log-section2'))>Filter</button>
            </div>
        </div>
        <div style='height: 85%; overflow-y: scroll; margin-top: 20px'>
            <table id='activity-table' style='text-align: center; border: 1px solid gray'>
                <tr style='text-align: center; border: 1px solid black; background: black; color: white;'>
                    <th class='spend-approvals-h-1' style='text-align: center; width: 20%;'>Timestamp</th>
                    <th class='spend-approvals-h-2' style='text-align: center width: 20%;'>Section</th>
                    <th class='spend-approvals-h-3' style='text-align: center width: 60%;'>Activity</th>
                </tr>
                <tbody id='activity-items' style='background: #95a5a6;'>
    ";
    
    if (mysqli_num_rows($results) > 0) {
        while ($row = mysqli_fetch_assoc($results)) {
                echo "
                    <tr>
                        <td>{$row['Timestamp']}</td>
                        <td>{$row['Section']}</td>
                        <td>{$row['Activity']}</td>
                    </tr>
                ";
        }
    } else {
                echo "
                    <tr>
                        <td colspan='3'>No data</td>
                    </tr>
                ";
    }
    
    echo "
                </tbody>
            </table>
        </div>
    ";