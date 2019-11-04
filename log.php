<?php
$link=mysqli_connect("localhost","root","","student");
if(!$link)
{
    die ("couldn't connect". mysqli_connect_error());
}
else
{   session_start();
    $username=trim($_POST["username"]);
        $password=trim($_POST["password"]);
       
       $sql = "SELECT username FROM login WHERE username = '$username' and password = '$password';";
       $result = mysqli_query($link, $sql);
       if ($result)
        {
        $_SESSION['login_user'] = $username;
        header("location:CustHome.php?username=".$username);

        } 
        else 
        {
         echo "Error:Invalid Username Or passWord";
        }
       
  
}
?>