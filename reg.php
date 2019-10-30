<?php
$link=mysqli_connect("localhost","root","","student");
if(!$link)
{
    die ("couldn't connect". mysqli_connect_error());
}
else
{   echo "Connected successfully";

    $username=($_POST["username"]);
    $password=($_POST["password"]);
    $conpassword=($_POST["conpassword"]);

    if($password==$conpassword)
    {
        $username=trim($_POST["username"]);
        $password=trim($_POST["password"]);
       
        $sql = "SELECT Reg_No FROM student WHERE username = '$username' and password = '$password';";
        $result = mysqli_query($link, $sql);
        if ( mysqli_num_rows($result) ==1)
        {
        
            $sql = "INSERT INTO login (username,password) VALUES ('$username', '$password')";
            if (mysqli_query($link, $sql)) {
    
                include("thankyou.html");
    
            } 
            else 
            {
                 echo "Error: " . $sql . "<br>" . mysqli_error($link);
            }

        } 
        else 
        {
         echo "The user is already exist";
        }
        
    }
    mysqli_close($link);
}
?>