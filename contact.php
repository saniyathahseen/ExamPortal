<?php
$link=mysqli_connect("localhost","root","","student");
if(!$link)
{
    die ("couldn't connect". mysqli_connect_error());
}
else
{   
    $name=($_POST["name"]);
    $phone=($_POST["phone"]);
    $email=($_POST["email"]);
    $message=($_POST["message"]);
 
            $sql = "INSERT INTO contact (name,email,phone,msg) VALUES ('$name', '$email','$phone','$message')";
            if (mysqli_query($link, $sql)) {
                
               Header("Location:CustHome.php");
    
            } 
            else 
            {
                 echo "Error: " . $sql . "<br>" . mysqli_error($link);
            }

       
        
   
    mysqli_close($link);
}
?>