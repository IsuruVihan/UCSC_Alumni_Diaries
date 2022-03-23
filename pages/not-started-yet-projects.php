<?php include('../server/session.php'); ?>

<?php include('../db/db-conn.php'); ?>

<?php
    if (!isset($_SESSION['Email']) || $_SESSION['Banned']) {
        header('Location: home.php');
    }
?>

<?php include('../components/header.php'); ?>

<link rel='stylesheet' href='../assets/styles/not_started_yet_projects.css'/>
<link rel='stylesheet' href='https://pro.fontawesome.com/releases/v5.10.0/css/all.css'
      integrity='sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p' crossorigin='anonymous'/>
<script src='../js/not-started-yet-projects.js'></script>

<div class='main-container'>
    <p class='breadcrumb'>
        <a href='home.php'>Home</a> /
        <a href='projects.php'>Projects</a> / Not Started Yet
    </p>
    <p class='main-title'>
        <i class='fas fa-pause-circle'></i> Not Started Yet
    </p>
</div>
<div class='not-started-yet-projects'>
    <div class='section-1'>
        <a
            id='l-1'
            class='iframe-link clicked-link'
            href='./projects/not-started-yet/details.php'
            target='iframe'
            onclick=ClickLink('l-1')
        >Project details</a>
        
<?php
    $query = "SELECT * FROM registeredmembers WHERE Email='{$_SESSION['Email']}' AND AccType='TopBoard'";
    $results = mysqli_query($conn, $query);
    if (mysqli_num_rows($results) > 0) {
        echo "
        <a
            id='l-2'
            class='iframe-link'
            href='./projects/not-started-yet/create-project.php'
            target='iframe'
            onclick=ClickLink('l-2')
        >Create project</a>
        ";
    }
?>
    
    </div>
    <iframe
        name='iframe'
        class='section-2'
        src='./projects/not-started-yet/details.php'
    ></iframe>
</div>

<?php include('../components/footer.php'); ?>