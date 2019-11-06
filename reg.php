<?php
$link=mysqli_connect("localhost","root","","student");
if(!$link)
{
    die ("couldn't connect". mysqli_connect_error());
}
else
{   
    $username=($_POST["username"]);
    $phone=($_POST["phone"]);
    $password=($_POST["password"]);
    $conpassword=($_POST["conpassword"]);

    if($password==$conpassword)
    {
        $username=trim($_POST["username"]);
        $password=trim($_POST["password"]);
       
        $sql = "SELECT username FROM student WHERE username = '$username' and phone = '$phone';";
        $result = mysqli_query($link, $sql);
        if (!($result))
        {
        
            $sql = "INSERT INTO login (username,password,phone) VALUES ('$username', '$password','$phone')";
            if (mysqli_query($link, $sql)) {
                
                header("Location:thankyou.html");
    
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