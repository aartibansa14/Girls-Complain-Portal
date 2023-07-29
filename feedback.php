<?php
include 'database.php';
session_start();
if (!isset($_SESSION['enrollment'])) {
    // Redirect the user to the login page or display an error message
    header('location: logins.php');
    exit;
}

$enrollment = $_SESSION['enrollment']; // Get the enrollment of the logged-in user


      
            if (isset($_POST['submit'])) {
                $email = $_POST['email'];
                $name = $_POST['name'];
                $address = $_POST['address'];
                $message = $_POST['message'];
                 $com_id=$_GET['com_id'];
                // Insert the data into the feedback table
                $sql = "INSERT INTO feedback (com_id, enrollment, name, email, address, message) VALUES (?, ?, ?, ?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);
                if (mysqli_stmt_prepare($stmt, $sql)) {
                    mysqli_stmt_bind_param($stmt, "isssss", $com_id, $enrollment, $name, $email, $address, $message);
                    mysqli_stmt_execute($stmt);
                    header('location: homes.php');
                } else {
                    die("Something went wrong");
                }
           
        }
   

?>