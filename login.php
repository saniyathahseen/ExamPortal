<html>
    <head>
        <title>
            Exam Portal
        </title>
        
        <style>
    
    * {
  box-sizing: border-box;
}
body {
    background-color: white;
  }
  
  p {
  
    color:violet;

  }  
  

/* Create two equal columns that floats next to each other */
.column1 {
  float: left;
  width: 50%;
  padding: 10px;
  height: 600px; 
  background-image: url('exam.png');
}
.column2 {
  float: left;
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
* {
  box-sizing: border-box;
}

input, select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}


label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color:#AED6F1;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}


input[type=submit]:hover {
        background-color: #030303;
      }


.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
h2{
  font-family: 'Courier New', Courier, monospace;
  color: #5DADE2 ;
  font-size: 60px;
}
</style>
</head>
<body>

    </div>
<div class="row">
       <div class="column1">  </div>
       <center>
       <div class="column2">
           <h2>Login</h2>
            <form action="log.php"method="post">
              <div class="row">
                <div class="col-25">
                  <label for="fname">Name</label></br>
                </div>
                <div class="col-75">
                  <input type="text" id="username" name="username" placeholder="Your name..">
                </div>
              </div>
              <div class="row">
                <div class="col-25">
                  <label for="fname">Password</label></br>
                </div>
                <div class="col-75">
                  <input type="password" id="password" name="password" placeholder="password">
                </div>
              </div>
            </br>
                <input type="submit" value="Submit" style="width: 200px;"></form></br>
                <a href="registration.php">Registration--></a></br>
              </div>
            </center> 
            </form>
          </div>
</div>
<!-- Footer -->
<footer class="w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
    <p class="w3-medium"> <a href="https://www.w3schools.com/w3css/default.asp" target="_blank"></a></p>
  </footer>
  
</body>
</html>