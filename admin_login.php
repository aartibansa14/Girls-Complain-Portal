<?php
$login=false;

        if (isset($_POST["login"])) {
           $email = $_POST["adminemail"];
           $id = $_POST["adminid"];
           $password=$_POST['adminpassword'];
            include "database.php";
            $sql = "SELECT * FROM admin WHERE adminemail = '$email' AND adminpassword='$password' AND adminid='$id'";
            $result = mysqli_query($conn, $sql);
           $num=mysqli_num_rows($result);
           if($num==1)
           {
          $login=true;
          session_start();
          $_SESSION['loggedin']=true;
          
          
          header('location:ad_home.php');
           }
           else
           {
             echo "<script>alert('invalid input')</script>";
           }
        }

        
        ?>
        
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin_login.css">
    <title>Document</title>
</head>
<body>
    <div class="part-1">
        <img class="women" src="used_img/women.png">
        
        <p>Madhav Institute of Technology &amp; Science, Gwalior (M.P.), INDIA 
          <br>
          
            माधव प्रौद्योगिकी एवं विज्ञान संस्थान, ग्वालियर (म.प्र.), भारत 
        </p>
        <img class="logo" src="used_img/mits logo.png">
       
      </div>
      
      <form action="admin_login.php" method="POST" id="form">
        <h1>Admin</h1>
        <input id="input" type="text" placeholder="Enter your Admin Id" name="adminid" pattern="[0-9]+" title="Please enter numbers only" required>
        <input id="input" type="email" placeholder="Enter Your Email" name="adminemail"><br>
        <input id="input" type="password" placeholder="Enter Your Password" name="adminpassword"><br>
        <button name="login">Login</button>
      </form>
  </div>
</div>
        
</body>
</html>