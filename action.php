<?php
$link=mysqli_connect("localhost","root","","studentdetails");
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
        $sql = "INSERT INTO login (username,password) VALUES ('$username', '$password')";
        if (mysqli_query($link, $sql)) {

            include("thankyou.html");

        } 
        else 
        {
             echo "Error: " . $sql . "<br>" . mysqli_error($link);
        }
    }
    mysqli_close($link);
}
?>