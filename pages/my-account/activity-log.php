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

<div class='activity-log'>
    <div class='heading'>Activity Log</div>
    <form class='activity-filter' id='activity-filter'>
        <div class='section-11'>
            <input class='input4' id='from' type='text' placeholder='From' onmouseup="(this.type='date')">
            <input class='input4' id='to' type='text' placeholder='To' onmouseup="(this.type='date')">
        </div>
        <div class='section-11'>
            <select class='input5' id='subType'>
                <option value="" disabled selected hidden>Subscription Type</option>
                <option value='Anually'>Annually</option>
                <option value='Monthly'>Monthly</option>
            </select>
        </div>
        <div class='section-11'>
            <input type='submit' class='filter-btn btn' value='Filter'/>
            <button onClick="window.location.reload();" class='all-btn btn'>All</button>
        </div>
    </form>
    <div class='activity-table'>
    
    </div>
</div>