<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
    <style>
    .feed a
{
  
  font-weight:600;
  color:white;
  text-decoration:none;
  cursor: pointer;
  

}
.feed
{
  background-color:green;
}


      </style>
    
    <link rel="stylesheet" type="text/css" href="update_status.css">
    
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 </head>
<body>
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
  
 <table>
  <tr>
    <th>Com_ID</th>
    <th>Com_Date</th>
    <th>Com_Type</th>
    <th>Status</th>
    <th>Feedback</th>
  </tr>
  
  <?php
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
  include 'database.php';
  session_start();
  
  $query = "SELECT * FROM complain";
  $result = mysqli_query($conn, $query);

  while ($row = mysqli_fetch_assoc($result)) {
    $cdate = $row['com_date'];
    $ctype = $row['com_type'];
    $enroll = $row['vic_enrollment'];
    $com_id = $row['com_id'];
    $status = $row['status'];
   
    if ($_SESSION['enrollment'] == $enroll) {
      
      
      
      
      ?>
      <tr>
        <td><?php echo $com_id ?></td>
        <td><?php echo $cdate ?></td>
        <td><?php echo $ctype ?></td>
        <td class="status"><?php echo $status ?></td>
     

      <td class="feed" id="td" ><a href="homes.php?com_id=<?php echo $com_id ?>#feedback-section"  id="my" onclick="feed()">FEEDBACK</a></td>
 
        
      </tr>
    <?php
    }
  }
  ?>
  </table>


<?php

?>
<script src="update_feed.js"></script>
</body>

</html>


