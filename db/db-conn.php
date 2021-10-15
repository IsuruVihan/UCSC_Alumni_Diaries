<?php

  // Credentials
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "ucsc_alumni_diaries";
//  $port = "3307";

  // Setting up the connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }