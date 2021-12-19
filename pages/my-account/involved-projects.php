<link rel='stylesheet' href='../../assets/styles/my-account.css'/>
<link rel="stylesheet" href='https://pro.fontawesome.com/releases/v5.10.0/css/all.css'
      integrity='sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p' crossorigin='anonymous'/>

<script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous">
</script>

<script>
    $(document).ready(() => {
        $('#table-body1').load("../../server/my-account/involved-projects-backend.php");
    });
</script>

<div class='projects'>
    <div class='title'>
        Involved Projects
    </div>
    <table class='involved-projects'>
        <thead>
        <tr>
            <th class='cash-h-1'>Project Name</th>
            <th class='cash-h-1'>Position</th>
        </tr>
        </thead>
        <tbody id='table-body1'>

        </tbody>
    </table>
</div>






<!--    <div class='projects-container'>-->
<!--        <div class='projects-item'>-->
<!--           <p class='item-label'>ProjectName</p>-->
<!--            <p class='item-label'>Position</p>-->
<!--        </div>-->
<!--       <div class='projects-item'>-->
<!--            <p class='item-label'>ProjectName</p>-->
<!--            <p class='item-label'>Position</p>-->
<!--        </div>-->
<!--        <div class='projects-item'>-->
<!--            <p class='item-label'>ProjectName</p>-->
<!--            <p class='item-label'>Position</p>-->
<!--        </div>-->
<!--        <div class='projects-item'>-->
<!--            <p class='item-label'>ProjectName</p>-->
<!--            <p class='item-label'>Position</p>-->
<!--        </div>-->
<!--        <div class='projects-item'>-->
<!--            <p class='item-label'>ProjectName</p>-->
<!--            <p class='item-label'>Position</p>-->
<!--        </div>-->
<!--        <div class='projects-item'>-->
<!--            <p class='item-label'>ProjectName</p>-->
<!--            <p class='item-label'>Position</p>-->
<!--        </div>-->
<!--    </div>-->
