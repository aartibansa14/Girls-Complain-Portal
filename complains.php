<?php
include 'database.php';
session_start();
$user_id=$_SESSION['enrollment'];
if(!isset($user_id))
{
  header('location:logins.php');

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complain_dashboard</title>
    <link rel="stylesheet" type="text/css" href="complain.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <style>
      .right{
        margin-top:210px;
      }
      .left a
      {
        font-size:9px;
      }
      .right a
      {
        font-size:9px;
      }

      </style>
      
</head>
<body>
    <div class="start">
        <div class="nav">
            <div class="left">
              <div class="home">
              <a href="homes.php"><i class="fa fa-home"></i></a>
              <a href="homes.php">Home</a>
              </div>
              <div class="home">
              <a href="complains.php"><i class="fa fa-comment"></i></a>
              <a href="complains.php">Complain</a>
              </div>
              <div class="home">
              <a href="#"><i class="fa fa-shield"></i></a>
              <a href="#">Policy</a>
              </div>
              <div class="home">
              <a href="update_status.php"><i class="fa fa-comments"></i></a>
              <a class="log" href="update_status.php">C-status</a>
              </div>
              <div class="home">
          <a href="logout.php"><i class="fa fa-question-circle"></i></a>
          <a href="logout.php">log out</a>
          </div>
             </div>
            <div class="right">
            <a class="prof" href="profile.php"><i class="fa fa-user"></i></a>
            <a class="pro" href="profile.php">Profile</a>
            </div>
        </div>
    <!------------------------------------------------------------------------------------------>

    <div class="section">
        <div class="part-1">
          <img class="women" src="used_img/women.png">
          
          <p>Madhav Institute of Technology &amp; Science, Gwalior (M.P.), INDIA 
            <br>
            
              माधव प्रौद्योगिकी एवं विज्ञान संस्थान, ग्वालियर (म.प्र.), भारत 
          </p>
          <img class="logo" src="used_img/mits logo.png">
         
        </div>
    </div>
</div>
  <!---------------------------------------------- Part second -------------------------------------------------------------------->
 
 <div class="part-2">
    
  
    <h3>Complaints Registration Form</h3>
    <form action="complain.php" method="POST">
      
    <h4>Victim's Details</h4>
    <div class="victim">
        
        <div class="name">
        <?php
$select=mysqli_query($conn,"SELECT * from registration where enrollment='$user_id'") or die('query failed');
if(mysqli_num_rows($select)>0)
{
  $fetch=mysqli_fetch_assoc($select);
}
?>
        <p>Enrollment</p>
        <input type="text" placeholder="Enrollment" name="vic_enrollment" value="<?php echo $fetch['enrollment'] ;?>" required="">
        </div>
        <div class="mobile">
         <p>Mobile No.</p>
        <input type="tel" placeholder="Enter Your Mobile No." name="vic_mobile" required="">
        </div>

    </div>
      <h5>Accused's Details</h5>
    <div class="accused">
      <div class="names">
        <p>Accused Name</p>
        <input type="text" class="capitalize-input" placeholder="Enter Name" name="accused_name" required="">
      </div>
      <div class="branch">
        <p>Accused Branch</p>
        <input type="text" placeholder="Branch" name="accused_branch" required="">
      </div>
      </div>
      <div class="accused">
      <div class="department">
        <p>Accused Department</p>
        <input type="text" placeholder="Department" name="accused_department" required="">
      </div>
      <div class="admission">
        <p>Incident Date</p>
        <input type="date" placeholder="mm/dd/yyyy" name="inc_date" required="">
      </div>
      </div>
      <div class="accused">
      <div class="ctype">
        <p>Complain Type</p>
        <input type="text" class="capitalize-input" placeholder="Type" name="com_type" required="">
      </div>
      <div class="cdate">
        <p>Complain Date</p>
        <input type="date" placeholder="mm/dd/yyyy" name="com_date" required="">
      </div>
      </div>
       <div class="accuse">
      <p>Insert Complete Details Of The Incident</p>
      <textarea class="message" id="myInput" rows="15" cols="147" placeholder="Start From Here" name="message" required="" onclick="capitalizeFirstLetter()"></textarea>
      </div>
     <!----<input  class="identity" type="number" name="com_id" >-->
      <button name="submit">Submit</button></form>
      
 </div>

 
</body>
</html>
<script>
  //for input text capital
var inputs = document.getElementsByClassName("capitalize-input");

for (var i = 0; i < inputs.length; i++) {
  inputs[i].addEventListener("keyup", function(event) {
    var inputValue = event.target.value;
    if (inputValue.length > 0) {
      event.target.value = inputValue.charAt(0).toUpperCase() + inputValue.slice(1);
    }
  });
}
//for textarea capital
function capitalizeFirstLetter() {
  var textarea = document.getElementById("myInput");
  textarea.value = textarea.value.charAt(0).toUpperCase() + textarea.value.slice(1);
}

</script>