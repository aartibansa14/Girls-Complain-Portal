<?php 
    
    include 'database.php';
   

    $query = " select * from complain ";
    $result = mysqli_query($conn,$query);
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ad_home.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <title>Document</title>
    <style>
    ul
      {
        
        border-bottom:2px solid white;
        padding: 20px;
        box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
      }

.status
{
  font-size: 20px;
  color:red;
}

  *
{
    margin: 0;
    padding: 0;
}
.section
{
    
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    width: 99%;
    height: 100%;
   
    border-radius: 10px;
   margin-left: 7px;
   margin-right: 10px;
    
    background: linear-gradient(to bottom, #0f0c29, #302b63, #24243e);;
}

.part-1
{
    display: flex;
    justify-content: space-between;
    align-items: center;
   margin-top:10px;
    margin-bottom: 20px;
    height: 130px;
    background: linear-gradient(to bottom, #0f0c29, #302b63, #24243e);
    
    
}
.part-1 .logo
{
   
   
    margin-left: 20px;
    width: 118px;
    height:107px;
    
}
.part-1 .women
{
   
   
    margin-right: 30px;
    width: 118px;
    height:107px;
    
}
.part-1 p
{
    color:white;
    font-family: 'roboto';
    font-weight: 700;
    text-align: center;
    font-size: 25px;
}
.search
{
  margin-left: -7px
}
.complain h1
{
  margin-left:330px;
}
.complain hr
{
  margin-left:320px;
}
#sear
{
  margin-left:-50px;
  
}


</style>

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
    
        <!-- ................Part to for feedback.............................. -->
        <div class="bodyfun">
          <div class="feedback">
            <h1>Feedback</h1>
            <hr>
            </hr>
            <div class="wrap1">
              <div class="search">
                <input type="text" class="searchTerm" placeholder="Search a feedback by Erollment">
                <button type="submit" class="searchButton">
                  <i class="fa fa-search"></i>
                </button>
              </div>
            </div>
            <div class="list">
            <?php
            include 'database.php';
            $query = " select com_id,enrollment,name,email,address,message from feedback ";
            $result = mysqli_query($conn,$query);
            
            while($row=mysqli_fetch_assoc($result))
            {
               $com_id = $row["com_id"];
               $enrollment=$row['enrollment'];
               $name=$row['name'];
               $email = $row['email'];
               $address=$row['address'];
               $message = $row['message'];
               
            ?>
            <ul>
            <li class="enroll"><?php echo "Com_ID : $com_id"; ?></li>
        <li><?php echo "Enrollment : $enrollment"; ?></li>
        <li><?php echo "Name : $name"; ?></li>
        <li><?php echo "Email : $email"; ?></li>
        <li><?php echo "Address: $address"; ?></li>
        <li><?php echo "Message : $message"; ?></li>
        </ul>
         <?php 
            }  

      ?> 
           </div>
          </div>
          <div class="complain">
    
            <h1>complains</h1>
            <hr>
            </hr>
            <div class="wrap2">
              <div class="search" id="sear">
                <input type="text" class="searchTerm" placeholder="Search a complain by Enrollment">
                <button type="submit" class="searchButton">
                  <i class="fa fa-search"></i>
                </button>
              </div>  
           </div>
           <div class="list">
           <?php  
               include 'database.php';
               $query = " select * from complain ";
               $result = mysqli_query($conn,$query); 
                        
          while($row=mysqli_fetch_assoc($result))
         {
            $venrollment = $row["vic_enrollment"];
            $mobile=$row['vic_mobile'];
            $aname=$row['accused_name'];
            $abranch = $row['accused_branch'];
            $adep=$row['accused_department'];
            $idate = $row['inc_date'];
            $cdate = $row['com_date'];
            $ctype = $row['com_type'];
            $message = $row["message"];
           $status=$row["status"];

            $com_id=$row['com_id'];
           
            
         ?>
            <ul>
            <li class="enroll"><?php echo "Vic_Enrollment : $venrollment"; ?></li>
            <li class="status"><?php echo "Status : $status"; ?></li>
        <li><?php echo "Com_ID : $com_id"; ?></li>
        <li><?php echo "vic_mobile : $mobile"; ?></li>
        <li><?php echo "Accused_name : $aname"; ?></li>
        <li><?php echo "Accused_branch: $abranch"; ?></li>
        <li><?php echo "Accused_department : $adep"; ?></li>
        <li><?php echo "incident_Date : $idate"; ?></li>
        <li><?php echo "Com_Date : $cdate"; ?></li>
        <li><?php echo "Com_type : $ctype"; ?></li>
        <li><?php echo "Message : $message"; ?></li>
        
        <div class="action">
       

        <form id="status-form-<?php echo $com_id; ?>" action="" method="POST">
        <?php
       

        
        

      
            echo '<button  type="submit" name="approve" onclick="updateStatus(' . $com_id . ', \'approve\')">Approved</button>';
            echo '<button type="submit" name="process" onclick="updateStatus(' . $com_id . ', \'process\')">Process</button>';
            echo '<button type="submit" name="solve"  onclick="updateStatus(' . $com_id . ', \'solved\')">Solved</button>';
      

         
        ?>
        
    </form>
        
    </div>
      </ul>
         <?php 
            }  
            
      ?> 
        
             </div>
            
            
          </div>
    
        </div>
        <script>
        
        

        function updateStatus(comId, status) {
         
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState === 4 && this.status === 200) {
                    // Do something with the response if needed
                    var form = document.getElementById("status-form-" + comId);

           
                    
            }
            };
            xhttp.open("POST", "process_status.php", true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send("com_id=" + comId + "&status=" + status);

                
            


            
        }

        
    
        
       
    </script>
   

    
    
</body>

</html>