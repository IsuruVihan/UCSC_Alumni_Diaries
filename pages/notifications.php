<?php include('../server/session.php'); ?>

<?php
    if (!isset($_SESSION['Email']) || $_SESSION['Banned']) {
        header('Location: home.php');
    }
?>

<?php include('../components/header.php'); ?>

<link rel='stylesheet' href='../assets/styles/notification.css'/>
<link rel='stylesheet' href='https://pro.fontawesome.com/releases/v5.10.0/css/all.css'
      integrity='sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p' crossorigin='anonymous'/>

<script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous">
</script>

<script>
    $(document).ready(() => {
        $('#scroll').load("../server/notification/notification-render.php");
    });
</script>
<script>
      const DeleteNotification = (id) => { 
        $('#flash-message').load("../server/notification/delete.php", {
            id: id
        });
        setTimeout(() => window.history.go(), 1);
    }
    const MarkNotification = (id) => {
         $('#scroll').load("../server/notification/mark-notification.php", {
             id: id
         })
    }     
</script>

<div class='main-container'>
    <p class='breadcrumb'>
        <a href='home.php'>Home</a> /Notifications
    </p>
    <p class='main-title'>
        <i class='fas fa-bell'></i> Notifications
    </p>
</div>
<div class='container'>
    <div class='card container-01'>
        <div class='title'>
            Notifications
        </div> 
        <div id='flash-message' class='flash-message'></div>
        <div class='scroll' id='scroll'>
            <div class='list'>
                <div class='box-01'>
                    <div class='text'>
                        message
                    </div>
                    <div class='button'>
                        <button class='delete-btn btn'>Delete</button>
                    </div>
                </div>
            </div>
            <div class='list'>
                <div class='box-01'>
                    <div class='text'>
                        message
                    </div>
                    <div class='button'>
                        <button class='delete-btn btn'>Delete</button>
                    </div>
                </div>
            </div>
            <div class='list'>
                <div class='box-01'>
                    <div class='text'>
                        message
                    </div>
                    <div class='button'>
                        <button class='delete-btn btn'>Delete</button>
                    </div>
                </div>
            </div>
            <div class='list'>
                <div class='box-01'>
                    <div class='text'>
                        message
                    </div>
                    <div class='button'>
                        <button class='delete-btn btn'>Delete</button>
                    </div>
                </div>
            </div>
            <div class='list'>
                <div class='box-01'>
                    <div class='text'>
                        message
                    </div>
                    <div class='button'>
                        <button class='delete-btn btn'>Delete</button>
                    </div>
                </div>
            </div>
            <div class='list'>
                <div class='box-01'>
                    <div class='text'>
                        message
                    </div>
                    <div class='button'>
                        <button class='delete-btn btn'>Delete</button>
                    </div>
                </div>
            </div>
            <div class='list'>
                <div class='box-01'>
                    <div class='text'>
                        message
                    </div>
                    <div class='button'>
                        <button class='delete-btn btn'>Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('../components/footer.php'); ?>