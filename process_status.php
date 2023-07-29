<?php
include 'database.php';

if (isset($_POST['com_id']) && isset($_POST['status'])) {
    $comId = $_POST['com_id'];
    $status = $_POST['status'];

    // Update the status in the database
    $updateQuery = "UPDATE complain SET status = '$status' WHERE com_id = '$comId'";
    $result = mysqli_query($conn, $updateQuery);

    // Check if the update was successful
    if ($result) {
        echo "Status updated successfully.";
    } else {
        echo "Error updating status.";
    }
}
?>






