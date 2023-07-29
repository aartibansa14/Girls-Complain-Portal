<?php
include 'database.php';
session_start();
$user_id=$_SESSION['enrollment'];
if(!isset($user_id))
{
  header('location:logins.php');

}
//for UPDATE  the profile Section
if(isset($_POST['submit']))
{
  $up_fname=mysqli_real_escape_string($conn,$_POST['father']);
  $up_mname=mysqli_real_escape_string($conn,$_POST['mother']);
  $up_email=mysqli_real_escape_string($conn,$_POST['email']);
  $up_mob=mysqli_real_escape_string($conn,$_POST['mobile']);
  $up_dep=mysqli_real_escape_string($conn,$_POST['dep']);
  $up_branch=mysqli_real_escape_string($conn,$_POST['branch']);
  $up_adate=mysqli_real_escape_string($conn,$_POST['date']);
 
  mysqli_query($conn,"UPDATE registration set father='$up_fname',mother='$up_mname',
  email='$up_email',mobile='$up_mob',department='$up_dep',branch='$up_branch',admission_year='$up_adate' WHERE
  enrollment='$user_id'") or die('query failed');

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
      mysqli_query($conn,"UPDATE registration set image='$target_path' where enrollment='$user_id'" ) or die('failed');
    }     
  
}
}





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
  .update
{
    color: aliceblue;
    font-size: 15px;
    text-align: center
    font-family: 'roboto';
    border:none;
    margin-bottom:20px;
    width:300px;
    position: absolute;
    bottom:-10px;
    right:85px;
    border-radius:20px;
    font-weight:700;
   background-color:coral;
   padding:10px;
}
.update:hover
{
  background-color:chocolate;
}
#pho
{
margin-right:18px;
}
#pho input
{
width:153px;
}

 </style>
    <link rel="stylesheet"  href="profile.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
</head>
<body>
<div id="profile">

<?php
$select=mysqli_query($conn,"SELECT * from registration where enrollment='$user_id'") or die('query failed');
if(mysqli_num_rows($select)>0)
{
  $fetch=mysqli_fetch_assoc($select);
}
?>
    <div class="pro">
      <div class="left">
      <form action="" method="POST" enctype="multipart/form-data">
       <img class="image"   id="images" src="<?php echo $fetch['image']; ?>">

       <!------------------------------------------------------------------------>
       <label for="input"><img class="camera" src="used_img/camera.png"></label>
       <input type="file" name="image" action="image/jpg,image/jpeg,image/png" id="input">
       <p> <?php echo $fetch['username'] ;?></p>
       
       
        </div>
      <div class="right">
       <p class="info">INFORMATION</p>
       
       <div class="EP">
        <div class="email">
        <p>Father's name</p>
        <input type="text" name="father" value="<?php echo $fetch['father'];?>">
        </div>
        <div class="phone">
            <p>Mother's name</p>
            <input type="text" name="mother" value="<?php echo $fetch['mother'];?>">
        </div>
      </div>
      <div class="EP">
        <div class="email">
        <p>Email</p>
        <input type="email" name="email" value="<?php echo $fetch['email'];?>">
        </div>
        <div class="phone">
            <p>Phone</p>
            <input type="tel" pattern="[6-9]\d{9}" name="mobile" value="<?php echo $fetch['mobile'];?>">
        </div>
      </div>
      <div class="EP">
        <div class="email">
        <p>Department</p>
        <input type="text" name="dep" value="<?php echo $fetch['department'];?>">
        </div>
        <div class="phone">
            <p>Branch</p>
            <input type="text" name="branch" value="<?php echo $fetch['branch'];?>">
        </div>
      </div>
      <div class="EP">
        <div class="email">
        <p>Enrollment No.</p>
        <input type="text" name="enrollment" value="<?php echo $fetch['enrollment'];?>">
        </div>
        <div class="phone" id="pho">
            <p>Admission Year</p>
            <input type="date"  name="date" value="<?php echo $fetch['admission_year'];?>">
        </div>
        
      </div>
      
      </div>
      <button name="submit" class="update">UPDATE PROFILE</button>
    </div>
</form>
</div>
<script src="profile.js"></script>
</body>
</html>