
<?php
$login=false;

        if (isset($_POST["login"])) {
           $email = $_POST["email"];
           $password = $_POST["password"];
           $enrollment=$_POST['enrollment'];
            include "database.php";
            $sql = "SELECT * FROM registration WHERE email = '$email' AND password='$password' AND enrollment='$enrollment'";
            $result = mysqli_query($conn, $sql);
           $num=mysqli_num_rows($result);
           if($num==1)
           {
          $login=true;
          session_start();
          $_SESSION['loggedin']=true;
          $_SESSION['enrollment']=$enrollment;
          header('location:homes.php');
           }
           else
           {
             echo "invalid email or password or enrollment";
           }
        }

        
        ?>
        