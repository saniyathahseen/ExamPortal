<html>
    <head>
        <title>
            Exam Portal
        </title>
        <style>
            *{
                box-sizing: border-box;
            }
            body{
                background-color: white;
            }
            p{
                color:violet;
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
            input[type=submit] {
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
            <li><a class="active" href="home.php">Home</a></li>
            <li><a  href="login.php">Tests</a></li>
            <li><a href="contact.html">contact</a></li>
            <li><a href="registration.php">New user</a></li>
        </ul>
        <center>
            <div class="centered">
                <input type="submit" value="Reasoning" style="width: 200px;"><br><br>
                <form action="question1.php">
                <input type="submit" value="Coding" style="width: 200px;"><br><br></form>
                <input type="submit" value="Verbal" style="width: 200px;">
            </div>
        </center>
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