<?php
$link=mysqli_connect("localhost","root","","student");
if(!$link)
{
    die ("couldn't connect". mysqli_connect_error());
}
else
{       $username=trim($_POST["username"]);
        $password=trim($_POST["password"]);
       
       $sql = "SELECT Reg_No FROM student WHERE username = '$username' and password = '$password';";
       $result = mysqli_query($link, $sql);
       if ( mysqli_num_rows($result) ==1)
        {
        
        include("question.html");

        } 
        else 
        {
         echo "Error:Invalid Username Or passWord";
        }
       
  
}
?>