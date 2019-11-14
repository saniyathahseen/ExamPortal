<?php
  include('session.php');?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box}

.container {
  width: 100%;
  background-color: #ddd;
}

.skills {
  text-align: right;
  padding-top: 10px;
  padding-bottom: 10px;
  color: white;
}
* {
  box-sizing: border-box;
}
body {
    background-color: white;
  }
  
  p {
  
    color:violet;

  }  
  *{
                box-sizing: border-box;
            }
            body{
                background-color: white;
            }
            p{
                color:black;
            }  
            ul{
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
                background-color: #333;
            }
            li{
                float: left;
            }
            li a{
               
                color: white;
                text-align: center;
                
                text-decoration: none;
            }
            li {
                display: block;
                color: white;
                text-align: center;
                padding: 30px 30px;
                text-decoration: none;
            }
            li a:hover{
                background-color: #111;
            }

            /* Create two equal columns that floats next to each other */
            .column1{
                float: center;
                width: 50%;
                padding: 10px;
                height: 600px; 
                background-image: url('exam.png');
            }
            .column2{
                float: center;
                width: 50%;
                padding: 20px;
                height: 300px; 
            }
            /* Clear floats after the columns */
            .row:after {
                content: "";
                display: table;
                clear: both;
            }
            *{
                box-sizing: border-box;
            }
            input, select, textarea {
                width: 100%;
                padding: 12px;
                border: 1px solid #ccc;
                border-radius: 4px;
                resize: vertical;
            }
            label{
                padding: 12px 12px 12px 0;
                display: inline-block;
            }
            .html,.css,.js {
                background-color:#AED6F1;
                color: white;
                padding: 12px 20px;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                float: center;
            }
            input[type=submit]:hover {
                background-color: #030303;
            }
            .container{
                border-radius: 5px;
                background-color: #f2f2f2;
                padding: 20px;
            }
           
            /* Clear floats after the columns */
            .row:after{
                content: "";
                display: table;
                clear: both;
            }
            /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
            @media screen and (max-width: 600px) {
                
                    width: 100%;
                    margin-top: 0;
               
            }
            h2{
                font-family: 'Courier New', Courier, monospace;
                color: #5DADE2 ;
                font-size: 60px;
            }
            .centered {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                text-align: center;
             }
</style>
</head>
<body>
<ul>
            <li><?php echo $_SESSION['login_user'] ?></li>
            <li><a  href="skill.php">status</a></li>
            <li><a href="contact us.html">contact</a></li>
            <li><a  href="logout.php">Logout</a></li>
        </ul>
  <?php
  
  $link=mysqli_connect("localhost","root","","student");
  if(!$link)
  {
      die ("couldn't connect". mysqli_connect_error());
  }
  else
  {    
      $username=$_SESSION['login_user'];
      
    $sql2="select * from login where login.username='$username'";
    $sql=mysqli_query($link,$sql2);
    while ($row1 = mysqli_fetch_array($sql)){
      ?>


<p>CODE</p>
<div class="container">
  <div class="skills html"style="width:<?php echo ($row1['code'])*10; ?>%;"><?php echo ($row1['code'])*10; ?>%</div>
</div>

<p>VERBAL</p>
<div class="container">
  <div class="skills css"style="width:<?php echo ($row1['verbal'])*10; ?>%;"><?php echo ($row1['verbal'])*10; ?>%</div>
</div>

<p>REASON</p>
<div class="container">
  <div class="skills js"style="width:<?php echo ($row1['reason'])*10; ?>%;"><?php echo ($row1['reason'])*10; ?>%</div>
</div>


<?php
              }}
            ?>
</body>
</html>
