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

.html { background-color: #4CAF50;}
.css {background-color: #2196F3;}
.js { background-color: #f44336;}
</style>
</head>
<body>
  <?php
  include('session.php');
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
<h1>My Skills</h1>

<p>CODE</p>
<div class="container">
  <div class="skills html"style="width:<?php echo ($row1['code'])*10; ?>;"><?php echo ($row1['code'])*10; ?>%</div>
</div>

<p>VERBAL</p>
<div class="container">
  <div class="skills css"style="width:<?php echo ($row1['verbal'])*10; ?>;"><?php echo ($row1['verbal'])*10; ?>%</div>
</div>

<p>REASON</p>
<div class="container">
  <div class="skills js"style="width:<?php echo ($row1['reason'])*10; ?>;"><?php echo ($row1['reason'])*10; ?>%</div>
</div>


<?php
              }}
            ?>
</body>
</html>
