<?php
    if (!isset($_SESSION['AccType'])) {
        header("Location: ./home.php");
    }