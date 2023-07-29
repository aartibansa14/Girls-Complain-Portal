<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="homes.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <style>
      .left a
      {
        font-size:9px;
      }
      .right a
      {
        font-size:9px;
      }
      .right
      {
        margin-top:210px;
      }
    #lt1
      {
        display: none;
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
          <a class="log" href="update_status.php">C-Status</a>
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
    <!------------------------------------------------------------------------------------------------------->

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

    <!-------------------------------------------------------------------------------------------------------->
    

    <div class="part-2">
      
    <div class="img-1">
      <img src="used_img/banner-5.png" width="100%" height="340px">
    </div>
    <div class="img-1">
     <img src="used_img/banner-2.png" width="100%" height="340px">
    </div>
    <div class="img-1">
      <img src="used_img/banner-1.png" width="100%" height="340px">
    </div>
    <div class="img-1">
      <img src="used_img/banner-4.png" width="100%" height="340px">
    </div>
    <div class="img-1">
      <img src="used_img/banner-3(1).png" width="100%" height="340px">
    </div>
     
      <span class="prev" onclick="controller(-1)">&#10094</span>
      <span class="next" onclick="controller(1)">&#10095</span>
    </div>
<!------------------------------------------------------------------------------------------------------------>

    <div class="part-3">
      <h4>GIRLS <span>ISSUE</span></h4>
      <div class="top">
      <div class="molest">
      <img src="used_img/molest.svg">
      <p>Molestation</p>
      </div>
      <div class="mental">
        <img src="used_img/mental_stress.svg">
        <p>Mental Stress</p>
      </div>
      <div class="acid">
        <img src="used_img/acid_attack.svg">
        <p>Acid Attack</p>
      </div>
    </div>
    <div class="bottom">
      <div class="bully">
        <img src="used_img/bullying.svg">
        <p>Bullying</p>
      </div>
      <div class="rape">
        <img src="used_img/rape.svg">
        <p>Rape/Attempt To Rape</p>
      </div>
      <div class="harrase">
        <img src="used_img/harassement.svg">
        <p>harassement</p>
      </div>
    </div>

    </div>
    <!---------------------------------------------------------------------------------------------------------->
 <footer id="feedback-section">
 

    <div class="lt" id="lt1">
    
     <p class="feed">FEEDBACK <span>FORM</span></p>
     
     
  <form method="POST" action="feedback.php?com_id=<?php echo isset($_GET['com_id']) ? $_GET['com_id'] : ''; ?>">
   
    
        <div class="ename">
    <div class="email">
        <p>Email</p>
        <input type="email"  name="email" placeholder="Enter your valid email id" required="">
    </div>
    <div class="name">
      <p>Name</p>
      <input type="text"  name="name" placeholder="Enter Your Name" required="">
      </div>
    </div>
      <div class="adress">
      
        <p>Address</p>
        <input class="address" type="text" name="address" placeholder="Enter Your Address" required="">
    </div>
    <div class="message">
        <p>Message</p>
        <!--<textarea rows="8" cols="50" name="message" form="usrform">
          </textarea>-->
          <textarea class="message" rows="8" cols="50" placeholder="Start From Here" name="message" required=""></textarea>

          </div>
      

     
        <button name="submit">SUBMIT</button>
     
      
</form>
    </div>

    <div class="rt" id="rt1">
      <h4>CONTACT US</h4>
      <img src="used_img/contact.png" width="200px" height="200px">
      <div class="social" id="scoi">
        
        <a class="face" href="#"><i class="fa fa-facebook"></i></a>
        <a class="twi" href="#"><i class="fa fa-twitter"></i></a>
        <a class="insta" href="#"><i class="fa fa-instagram"></i></a>
        <a class="youtube" href="#"><i class="fa fa-youtube"></i></a>
        <a class="linke" href="#"><i class="fa fa-linkedin"></i></a>
      </div>
    </div>
  </footer>
  

    <script src="index.js"></script>
  <script src="demo.js"></script>
    
   
</body>

</html>

