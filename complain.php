<?php
        if (isset($_POST["submit"])) {
          
           $venrollment = $_POST["vic_enrollment"];
           $mobile=$_POST['vic_mobile'];
           $aname=$_POST['accused_name'];
           $abranch = $_POST['accused_branch'];
           $adep=$_POST['accused_department'];
           $idate = date('Y-m-d', strtotime($_POST['inc_date']));
           $cdate = date('Y-m-d', strtotime($_POST['com_date']));
           $ctype = $_POST['com_type'];
           $message = $_POST["message"];
         // $id=rand();
           
          
            $errors = array();
           
           
           include "database.php";

         
           session_start();
           
           
           if($_SESSION['enrollment']==$venrollment)
           {

            $com_id = rand();
            $status='pending';
           
            
            $sql = "INSERT INTO complain (com_id,vic_enrollment,vic_mobile,accused_name,accused_branch,accused_department,inc_date,com_date,com_type,message,status) VALUES ( ?, ?, ?,?,?,?,?,?,?,?,?)";
            $stmt = mysqli_stmt_init($conn);
            $prepareStmt = mysqli_stmt_prepare($stmt,$sql);
            if ($prepareStmt) {
                mysqli_stmt_bind_param($stmt,"isissssssss",$com_id,$venrollment,$mobile,$aname, $abranch,$adep,$idate,$cdate,$ctype,$message,$status);
                mysqli_stmt_execute($stmt);
               
                
                
                echo "<script>alert('COMPLAIN ID : $com_id')</script>";
               
            }else{
                die("Something went wrong");
            }
        }
        else
        {
            echo "error";
        }
       
          

                

        }

        
        ?>