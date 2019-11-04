<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Quick Quiz - Play</title>
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
      ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: #333;
      }
      li {
        float: left;
      }
      li a {
        display: block;
        color: white;
        text-align: center;
        padding: 30px 30px;
        text-decoration: none;
      }
      li a:hover {
        background-color: #111;
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
    
     select, textarea {
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
    <script>
      var score=0;
      var x=0;
      var count=0;
    </script>
  </head>
  <body>
      <ul>
          <li><a>usernmae</a></li>
          <li><a  href="logout.php">Logout</a></li>
          <li><a href="contact.html">contact</a></li>
          </ul>
    <div class="container">
      <div id="game" class="justify-center flex-column">
        <div id="hud">
          <div id="hud-item">
            <p id="progressText" class="hud-prefix">
              Question
            </p>
            <div id="progressBar">
              <div id="progressBarFull"></div>
            </div>
          </div>
          <div id="hud-item">
            <p class="hud-prefix">
              Score
            </p>
            <h1 class="hud-main-text" id="score">
              0
            </h1>
          </div>
        </div>
        <h2 id="question">What is the answer to this questions?</h2>
        
          <div>
            <input id="a" name="Radio"value="1"type="radio" onclick="calculate(this.value)"/>
            <label for="a" id="a1">choice</label><br />
            <input id="b" name="Radio" value="2" type="radio" onclick="calculate(this.value)"/>
            <label for="a" id="b1">choice</label><br />
            <input id="c" name="Radio"value="3" type="radio" onclick="calculate(this.value)"/>
            <label for="a" id="c1">choice</label><br />
            <input id="d" name="Radio"value="4" type="radio"onclick="calculate(this.value)" />
            <label for="a" id="d1">choice</label><br />
          </div>        
          <input type="button" id="btn"onclick="coding()"value="Next"name="Next">
          <input type="button" id="btn1"onclick="completes()"value="complete"name="complete">
        
      </div>
    </div>
    <script>
      var arr={"question": [
      {
        "question"  : "What is the name of Draco Malfoy's son?",
        "choice1"  : "Scorpius",
        "choice2"  : "Lucius",
        "choice3"  : "Diego",
        "choice4"  : "Severus",
        "choice5"  : "Dane",                    
        "correct"  : 1
      },
    
      {
        "question"  : "What creature does Dumbledore have as a pet?",
        "choice1"  : "Efreet",
        "choice2"  : "Fey",
        "choice3"  : "Troll",
        "choice4"  : "Phoenix",
        "choice5"  : "Basilisk",                    
        "correct"  : 4
      },
    
      {
        "question"  : "What is Voldemort's final horcrux?",
        "choice1"  : "A mirror",
        "choice2"  : "A snake",
        "choice3"  : "A brooch",
        "choice4"  : "Harry Potter",
        "choice5"  : "A violin",                    
        "correct"  : 2
      },
    
      {
        "question"  : "Who takes over as headmaster of Hogwarts after Dumbledore's death?",
        "choice1"  : "Voldemort",
        "choice2"  : "Narcissa Black",
        "choice3"  : "Professor Trelawny",
        "choice4"  : "Delores Umbridge",
        "choice5"  : "Professor Snape",                    
        "correct"  : 5
      },
    
      {
        "question"  : "Who killed Deatheater Antonin Dolohov during the Battle of Hogwarts?",
        "choice1"  : "Professor Flitwick",
        "choice2"  : "Ron Weasley",
        "choice3"  : "Falling Debris",
        "choice4"  : "Hermione Granger",
        "choice5"  : "A Troll",                    
        "correct"  : 1
      }
      ]};
      document.getElementById("question").innerHTML = arr.question[x].question;
      document.getElementById("a1").innerHTML = arr.question[x].choice1;
      document.getElementById("b1").innerHTML = arr.question[x].choice2;
      document.getElementById("c1").innerHTML = arr.question[x].choice3;
      document.getElementById("d1").innerHTML = arr.question[x].choice4;
      
      function calculate(val){
        var answer=val;
  
        if(answer==arr.question[x].correct){
            score=score+1;
            }
      }
      
          
      function coding(){
        document.getElementById("a").checked=false;
        document.getElementById("b").checked=false;
        document.getElementById("c").checked=false;
        document.getElementById("d").checked=false;

        document.getElementById("score").innerHTML=score;
        count=count+1;
        x=x+1;
        if(count!=10){
            
            document.getElementById("question").innerHTML = arr.question[x].question;

            
            document.getElementById("a1").innerHTML = arr.question[x].choice1;
            document.getElementById("b1").innerHTML = arr.question[x].choice2;
            document.getElementById("c1").innerHTML = arr.question[x].choice3;
            document.getElementById("d1").innerHTML = arr.question[x].choice4;
        }
        else
        {
            document.getElementById("btn").style.display="none";       
        }
      }
      function completes(){
                window.confirm("score="+score+" out of 10");
                window.location.href="CustHome.php";
      }
    </script>
  </body>
</html>