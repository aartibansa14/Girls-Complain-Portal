<?php

$host='localhost';
  $dbusername='root';
  $dbpassword='';
  $dbname='online girls complain management website';
$conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
if (!$conn) {
    die("Something went wrong;");
}

?>