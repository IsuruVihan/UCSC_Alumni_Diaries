<?php include('../../server/session.php'); ?>
<link rel='stylesheet' href='../../assets/styles/activity-log.css'/>
<link rel="stylesheet" href='https://pro.fontawesome.com/releases/v5.10.0/css/all.css'
      integrity='sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p' crossorigin='anonymous'/>
<script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous">
</script>
<script src='../../js/activity-log.js'></script>
<script>
    $(document).ready(() => {
        $('#activity-items').load('../../server/my-account/activity-log.php');
    });
</script>

<div class='activity-log'>
    <div class='heading'>Activity Log</div>
    <form class='activity-filter' id='activity-filter'>
        <div class='section-11'>
            <input class='input4' id='from' type='text' placeholder='From' onmouseup="(this.type='date')">
            <input class='input4' id='to' type='text' placeholder='To' onmouseup="(this.type='date')">
        </div>
        <div class='section-11'>
            <select class='input5' id='subType'>
                <option value="" disabled selected hidden>Section</option>
                <option value='Log In'>Log In</option>
                <option value='Log Out'>Log Out</option>
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
            </select>
        </div>
        <div class='section-11'>
            <input type='submit' class='filter-btn btn' value='Filter'/>
            <button onClick="window.location.reload();" class='all-btn btn'>All</button>
        </div>
    </form>
    <table id='activity-table'>
        <tr>
            <th class='spend-approvals-h-1' style='text-align: center'>Timestamp</th>
            <th class='spend-approvals-h-2' style='text-align: center'>Section</th>
            <th class='spend-approvals-h-3' style='text-align: center'>Activity</th>
        </tr>
        <tbody id='activity-items'>
            <tr>
                <td>Test</td>
                <td>Test</td>
                <td>Test</td>
            </tr>
        </tbody>
    </table>
</div>