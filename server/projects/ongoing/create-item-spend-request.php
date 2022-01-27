<?php
    include ('../../../server/session.php');
    $conn = mysqli_connect("localhost", "root", "", "ucsc_alumni_diaries");
    
    $errors = "";
    $messages = "";
    
    $item_id = $_POST['selected-item-id'];
    $spend_qty = $_POST['item-spend-qty'];
    $spend_description = $_POST['item-spend-description'];
    $file = $_FILES['item-spend-quotation'];
    
    $query2 = "SELECT Quantity FROM projectitems WHERE Id='{$item_id}' AND Quantity >= '{$spend_qty}'";
    $results2 = mysqli_query($conn, $query2);
        
    if (empty($item_id) || empty($spend_qty) || empty($spend_description)) {
        $errors = "All fields are required.";
        header("Location: ../../../pages/ongoing-projects.php");
    } elseif (mysqli_num_rows($results2) == 0) {
        $errors = "No enough item resources to make the spend request.";
        header("Location: ../../../pages/ongoing-projects.php");
    } else {
        if ($file['name'] != '') {
            $fileName = $_FILES['item-spend-quotation']['name'];
            $fileTmpName = $_FILES['item-spend-quotation']['tmp_name'];
            $fileSize = $_FILES['item-spend-quotation']['size'];
            $fileError = $_FILES['item-spend-quotation']['error'];
            $fileType = $_FILES['item-spend-quotation']['type'];
            $fileExt = explode('.', $fileName);
            $fileActualExt = strtolower(end($fileExt));
            $allowedExt = array('jpg', 'jpeg', 'png', 'pdf');
            $allowedMaxSize = 100000;

            if (in_array($fileActualExt, $allowedExt)) {
                if ($fileError === 0) {
                    if ($fileSize < $allowedMaxSize) {
                        $fileNameNew = uniqid('', true) . "." . $fileActualExt;
                        $fileDestination = '../../../uploads/project-item-spend-request-quotations/' . $fileNameNew;
                        move_uploaded_file($fileTmpName, $fileDestination);

                        $query = "
                            INSERT INTO projectitemspendings (ItemId, SpentQuantity, Description, BillSrc)
                            VALUES ('{$item_id}', '{$spend_qty}', '{$spend_description}', '{$fileNameNew}')
                        ";
                        
                        if (mysqli_query($conn, $query)) {

                            //notification
                            $query15="SELECT ItemName FROM projectitems WHERE Id='{$item_id}'";  
                            $results15 = mysqli_query($conn, $query15);
                            $row15 = mysqli_fetch_assoc($results15);

                            $query5 = "SELECT Name FROM projects WHERE Id='{$row1['ProjectId']}'";  
                            $results5 = mysqli_query($conn, $query5);
                            $row5 = mysqli_fetch_assoc($results5);

                            $query4 = "SELECT Email FROM registeredmembers WHERE AccType='TopBoard'";
                            $results4 = mysqli_query($conn, $query4);
                            
                            if (mysqli_num_rows($results4) > 0) {
                                while ($row4 = mysqli_fetch_assoc($results4)) {  
                                    $query3 = "
                                        INSERT INTO notifications (Email,Message)
                                        VALUES ('{$row4['Email']}','item spend request on {$spend_qty} {$row15['ItemName']} of {$row5['Name']} has been submitted by {$_SESSION['Email']}')
                                    ";
                                    mysqli_query($conn, $query3);
    
                                    // Activity
                                    $query16 = "
                                        INSERT INTO activitylog (Email, Section, Activity)
                                        VALUES ('{$_SESSION['Email']}', 'Projects - Ongoing', 'Created Item spend request of {$row15['ItemName']} Qty. {$spend_qty}')
                                   ";
                                    mysqli_query($conn, $query16);
                                }
                            }

                            header("Location: ../../../pages/ongoing-projects.php");
                            $messages = "Item spend request has been submitted successfully";
                        } else {
                            unlink("../../../uploads/project-item-spend-request-quotations/" . $fileNameNew);
                            $errors = "Server error";
                            header("Location: ../../../pages/ongoing-projects.php");
                        }
                    } else {
                        $errors = "File size should be less than 10MB";
                        header("Location: ../../../pages/ongoing-projects.php");
                    }
                } else {
                    $errors = "There was an error uploading your file";
                    header("Location: ../../../pages/ongoing-projects.php");
                }
            } else {
                $errors = "File types allowed: jpg, jpeg, png, pdf";
                header("Location: ../../../pages/ongoing-projects.php");
            }
        }  else {
            $errors = "Attach a quotation";
            header("Location: ../../../pages/ongoing-projects.php");
        }
    }