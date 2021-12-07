<?php
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
                                        $messages = "Your cash spend request has been submitted";
                                        echo "Your cash spend request has been submitted";
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