<?php
   $link=mysqli_connect("localhost","root","","student");
   if(!$link)
   {
       die ("couldn't connect". mysqli_connect_error());
   }
   session_start();
   
   $user_check = $_SESSION['username'];
   
   $ses_sql = mysqli_query($link,"select username from login where username = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['username'];
   
   if(!isset($_SESSION[$login_session])){
      header("location:login.php");
      die();
   }
?>