<?php
    if ((!isset($_SESSION['AccType'])) || ($_SESSION['AccType']!=="TopBoard")) {
        header("Location: ./home.php");
    }