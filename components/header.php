<?php //include('../server/session.php'); ?>

<html lang='en'>
<head>
<title>UCSC Alumni Diaries</title>
<link rel='stylesheet' href='../assets/styles/header.css' />
<script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous">
</script>
</head>
<body>

<?php include('../db/db-conn.php'); ?>

<nav class='navbar'>
    <div class='logo-container'>
        <a href='../pages/home.php' class='anchor-tag'>
            <img src='../assets/images/ucsc_logo.webp' class='logo' width='22%' alt='logo' />
        </a>
    </div>
    <ul class='link-list'>
        <li class='link'>
            <a href='../pages/home.php' class='anchor-tag'>Home</a>
        </li>
        <li class='link'>
            <a href='../pages/projects.php' class='anchor-tag'>Projects</a>
        </li>
        <li class='link'>
            <a href='../pages/donations.php' class='anchor-tag'>Donations</a>
        </li>
        <li class='link'>
            <a href='../pages/developers.php' class='anchor-tag'>Developers</a>
        </li>
        <li class='link'>
            <a href='../pages/faq.php' class='anchor-tag'>FAQ</a>
        </li>
        <li class='link'>
            <a href='../pages/suggestions.php' class='anchor-tag'>Suggestions</a>
        </li>
        <?php
            if (isset($_SESSION["AccType"])) {
                if ($_SESSION["AccType"]==="TopBoard") {
                    echo "
                        <li class='link'>
                            <a href='../pages/admin.php' class='anchor-tag'>Admin</a>
                        </li>
                    ";
                }
                echo "
                    <li class='link'>
                        <a href='../pages/alumnus.php' class='anchor-tag'>Alumni</a>
                    </li>
                ";
                
                $query = "SELECT COUNT(*) AS Count FROM notifications WHERE Email = '{$_SESSION['Email']}' AND Status = 'NotViewed'";
                $results = mysqli_query($conn, $query);
                $count = 0;
                while ($row = mysqli_fetch_assoc($results)) {
                    $count = $row['Count'];
                }
                
                if ($count > 0) {
                    echo "
                    <li class='link'>
                        <a href='../pages/notifications.php' class='anchor-tag'>
                            <b>Notifications</b> <b style='background: red; border-radius: 100%; color: white; padding: 3px'>{$count}</b>
                        </a>
                    </li>
                    ";
                } else {
                    echo "
                    <li class='link'>
                        <a href='../pages/notifications.php' class='anchor-tag'>Notifications</a>
                    </li>
                    ";
                }
                
                echo "
                    <li class='link'>
                        <a href='../pages/wall.php' class='anchor-tag'>Wall</a>
                    </li>
                    <li class='link'>
                        <a href='../pages/chat.php' class='anchor-tag'>Chat</a>
                    </li>
                    <li class='link'>
                        <a href='../pages/my-account.php' class='anchor-tag'>My Account</a>
                    </li>
                    <li class='link'>
                        <a href='../server/logout/logout.php' class='anchor-tag'>Logout</a>
                    </li>
                ";
            }
            if (!isset($_SESSION["AccType"])) {
                echo "
                    <li class='link'>
                        <a href='../pages/login.php' class='anchor-tag'>Login</a>
                    </li>
                    <li class='link'>
                        <a href='../pages/signup.php' class='anchor-tag'>Signup</a>
                    </li>
                ";
            }
        ?>
    </ul>
</nav>