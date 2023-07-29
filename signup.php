<?php
       
    if (isset($_POST["submit"])) {
    $name = $_POST["username"];
    $father = $_POST['father'];
    $mother = $_POST['mother'];
    $email = $_POST["email"];
    $mobile = $_POST['mobile'];
    $alternativemobile = $_POST["alternative_mobile"];
   // $enrollment = "0901" .$_POST["enrollment"];
    $enrollment = $_POST["enrollment"];
   
    $admission_year = date('Y-m-d', strtotime($_POST["admission_year"]));
    $dep = $_POST["department"];
    $branch = $_POST["branch"];
    $password = $_POST["password"];
    $confirm = $_POST["confirm_pass"];

    $errors = array();

    // Check if email is valid
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        array_push($errors, "Email is not valid");
    }

    // Check if password is at least 8 characters long
    if (strlen($password) < 8) {
        array_push($errors, "Password must be at least 8 characters long");
    }

    // Check if password and confirm password match
    if ($password !== $confirm) {
        array_push($errors, "Password and confirm password do not match");
    }
    if (substr($enrollment, 0, 4) !== "0901") {
        array_push($errors, "Invalid Enrollment");
    }
    

    // Check if the email is already registered
    include "database.php";
    //for email
    $check_email_query = "SELECT * FROM registration WHERE email = ?";
    $stmt = mysqli_stmt_init($conn);
    if (mysqli_stmt_prepare($stmt, $check_email_query)) {
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        if (mysqli_stmt_num_rows($stmt) > 0) {
            array_push($errors, "Email is already registered");
        }
    } else {
        die("Something went wrong");
    }
    //for enrollment 
    $check_email_query = "SELECT * FROM registration WHERE enrollment = ?";
    $stmt = mysqli_stmt_init($conn);
    if (mysqli_stmt_prepare($stmt, $check_email_query)) {
       mysqli_stmt_bind_param($stmt, "s", $enrollment);
      
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        if (mysqli_stmt_num_rows($stmt) > 0) {
            array_push($errors, "Enrollment is already registered");
        }
    } else {
        die("Something went wrong");
    }

    // Process the uploaded image
    if (isset($_FILES['image']) && $_FILES['image']['name'] !== '') {
        $image = $_FILES['image'];
        $image_name = $image['name'];
        $image_tmp = $image['tmp_name'];
        $image_size = $image['size'];
        $image_error = $image['error'];
       
    

        if ($image_error === UPLOAD_ERR_OK) {
            // Specify the target directory for the image
            $target_directory = "images/";
            $target_path = $target_directory . $image_name;

            // Move the uploaded image to the target directory
            if (move_uploaded_file($image_tmp, $target_path)) {
                if (count($errors) === 0) {
                    $sql = "INSERT INTO registration (username, father, mother, email, mobile, alternative_mobile, enrollment, admission_year, department, branch, password, confirm_pass, image) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
                    $stmt = mysqli_stmt_init($conn);
                    if (mysqli_stmt_prepare($stmt, $sql)) {
                        mysqli_stmt_bind_param($stmt, "ssssiisssssss", $name, $father, $mother, $email, $mobile, $alternativemobile, $enrollment, $admission_year, $dep, $branch, $password, $confirm, $target_path);
                        mysqli_stmt_execute($stmt);

                        header('location:logins.php#lo');
                      
                        exit();
                    } else {
                        array_push($errors, "Something went wrong");
                       
                    }
                }
            } else {
                array_push($errors, "Error uploading image");
            }
        } else {
            array_push($errors, "Error uploading image");
        }
    } else {
        array_push($errors, "No image uploaded");
    }

    // Display error messages, if any
    if (count($errors) > 0) {
        foreach ($errors as $error) {
            echo "<div class='alert alert-danger'>$error</div>";
        }
    }
}
?>


        