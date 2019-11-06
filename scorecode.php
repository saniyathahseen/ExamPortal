<?php
$link=mysqli_connect("localhost","root","","student");
if(!$link)
{
    die ("couldn't connect". mysqli_connect_error());
}
else
{   
    

    
        $username=$_SESSION['login_user'];
        $code=trim($_POST["score"]);
       
       
        
            $sql ="UPDATE login SET code='$code' WHERE  username='$username'";
            if (mysqli_query($link, $sql)) {
                
                header("Location:CustHome.php");
    
            } 
            else 
            {
                 echo "Error: " . $sql . "<br>" . mysqli_error($link);
            }

       
        
    
    mysqli_close($link);
}
?>