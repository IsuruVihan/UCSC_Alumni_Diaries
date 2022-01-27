<?php
    include('../../session.php');

    $conn = mysqli_connect("localhost", "root", "", "ucsc_alumni_diaries");
    
    $errors = "";
    $messages = "";
    
    if (isset($_POST['cash-spend-submit'])) {
        $pid = $_POST['project-id'];
        $amount = $_POST['amount'];
        $description = $_POST['description'];
        $file = $_FILES['quotation-attachment'];
        
        if (empty($amount) || empty($description)) {
            $errors = "All fields are required.";
            echo "All fields are required.";
            header("Location: ../../../pages/ongoing-projects.php");
        } else {
            if ($file['name'] != '') {
                $query2 = "SELECT Amount FROM projectcash WHERE ProjectId='$pid'";
                $results2 = mysqli_query($conn, $query2);
                while ($row2 = mysqli_fetch_assoc($results2)) {
                    if (!($row2['Amount'] < $amount)) {
                        $fileName = $_FILES['quotation-attachment']['name'];
                        $fileTmpName = $_FILES['quotation-attachment']['tmp_name'];
                        $fileSize = $_FILES['quotation-attachment']['size'];
                        $fileError = $_FILES['quotation-attachment']['error'];
                        $fileType = $_FILES['quotation-attachment']['type'];
                        $fileExt = explode('.', $fileName);
                        $fileActualExt = strtolower(end($fileExt));
                        $allowedExt = array('jpg', 'jpeg', 'png', 'pdf');
                        $allowedMaxSize = 1000000000;
        
                        if (in_array($fileActualExt, $allowedExt)) {
                            if ($fileError === 0) {
                                if ($fileSize < $allowedMaxSize) {
                                    $fileNameNew = uniqid('', true) . "." . $fileActualExt;
                                    $fileDestination = '../../../uploads/projects-spend-cash-quotations/' . $fileNameNew;
                                    move_uploaded_file($fileTmpName, $fileDestination);
                    
                                    $query = "
                                        INSERT INTO projectcashspendings (ProjectId, SpentAmount, Description, BillSrc)
                                        VALUES ('${pid}', '${amount}', '${description}', '${fileNameNew}')
                                    ";
                                    if (mysqli_query($conn, $query)) {

                                        //notification
                                        $query1 = "SELECT Name FROM projects WHERE Id='{$pid }'";  
                                        $results1 = mysqli_query($conn, $query1);
                                        $row1 = mysqli_fetch_assoc($results1);

                                        $query4 = "SELECT SpentQuantity, FROM projectcashspendings WHERE ProjectId='{$pid }'";  
                                        $results4 = mysqli_query($conn, $query4);
                                        $row4 = mysqli_fetch_assoc($results4);

                                        $query2 = "SELECT Email FROM registeredmembers WHERE AccType='TopBoard'";
                                        $results2 = mysqli_query($conn, $query2);
                                        
                                        if (mysqli_num_rows($results2) > 0) {
                                            while ($row2 = mysqli_fetch_assoc($results2)) {  
                                                $query3 = "INSERT INTO notifications (Email,Message) VALUES ('{$row2['Email']}','Rs.{$row4['SpentAmount']} cash spending request of {$row1['Name']} has been submited by {$_SESSION['Email']}')
                                                ";
                                                mysqli_query($conn, $query3);
                                            
                                            }
                                        }
                                        $messages = "Your cash spend request has been submitted";
                                        echo "Your cash spend request has been submitted";
    
                                        // Activity
                                        $query10 = "
                                            INSERT INTO activitylog (Email, Section, Activity)
                                            VALUES ('{$_SESSION['Email']}', 'Projects - Ongoing', 'Cash spend LKR {$amount} of Project (ID): {$pid}')
                                        ";
                                        mysqli_query($conn, $query10);
                                    } else {
                                        unlink("../../../uploads/projects-spend-cash-quotations/" . $fileNameNew);
                                        $errors = "Server error";
                                        echo "Server error";
                                    }
                                    header("Location: ../../../pages/ongoing-projects.php");
                                } else {
                                    $errors = "File size should be less than 10MB";
                                    echo "File size should be less than 10MB";
                                    header("Location: ../../../pages/ongoing-projects.php");
                                }
                            } else {
                                $errors = "There was an error uploading your file";
                                echo "There was an error uploading your file";
                                header("Location: ../../../pages/ongoing-projects.php");
                            }
                        } else {
                            $errors = "File types allowed: jpg, jpeg, png, pdf";
                            echo "File types allowed: jpg, jpeg, png, pdf";
                            header("Location: ../../../pages/ongoing-projects.php");
                        }
                    } else {
                        $errors = "No enough cash to spend Rs. {$amount}";
                        echo "No enough cash to spend Rs. {$amount}";
                        header("Location: ../../../pages/ongoing-projects.php");
                    }
                    break;
                }
            }  else {
                $errors = "Attach a quotation";
                echo "Attach a quotation";
                header("Location: ../../../pages/ongoing-projects.php");
            }
        }
    }