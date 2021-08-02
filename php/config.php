<?php
  // $hostname = "localhost";
  // $username = "u453384897_chatapp";
  // $password = "Suryasen86";
  // $dbname = "u453384897_chatapp";
  $hostname = "remotemysql.com";
  $username = "73CtQfq4Jt";
  $password = "hQNlnTnBP7";
  $dbname = "73CtQfq4Jt";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>
