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
            if (!isset($_SESSION['Email'])) {
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