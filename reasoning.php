<?php
   include('session.php');
?>
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
        display: block;
        color: white;
        text-align: center;
        padding: 30px 30px;
        text-decoration: none;
      }
      li a {
        color: white;
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
          <li><?php echo $_SESSION['login_user'] ?></li>
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
        </div>
        <form action="scorereason.php"method="post">
          <div id="hud-item">
            <p class="hud-prefix">Score</p>
            <h1 class="hud-main-text" name="score"id="score">0</h1>
          </div>
        <p id="question">What is the answer to this questions?</p>
        
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
        
          </form>
      </div>
    </div>
    <script>
      var arr={"question" : [
    {
      "question"  : "Which number should come next in the series, 48, 24, 12, ......?",
       "choice1"  : "8",
       "choice2"  : "6",
       "choice3"  : "4",
       "choice4"  : "2",                   
       "correct"  : 2
    },
    
    {
      "question"  : "RQP, ONM, _, IHG, FED, find the missing letters",
       "choice1"  : "CDE",
       "choice2"  : "LKI",
       "choice3"  : "LKJ",
       "choice4"  : "BAC",
       "correct"  : 3
    },
    
    {
      "question"  : " PETAL: FLOWER",
       "choice1"  : "Pen: Paper",
       "choice2"  : "Engine: Car",
       "choice3"  : "Cat: Dog",
       "choice4"  : "Ball: Game",                    
       "correct"  : 2
    },
    
    {
      "question"  : " I. All the colleges in the city had to keep closed for three days a week.II. Many students have left the local colleges.",
       "choice1"  : "Statement II is the cause and statement I is its effect",
       "choice2"  : "Statement I is the cause and statement II is its effect",
       "choice3"  : "Both the statements are effects of independent causes",
       "choice4"  : "Both the statements are independent causes",                   
       "correct"  : 3
    },
    
    {
       "question"  : " Which word does not belong to others?",
       "choice1"  : "Inch",
       "choice2"  : "Kilogram",
       "choice3"  : "Centimeter",
       "choice4"  : "Yard",               
       "correct"  : 2
    },
    {
      "question"  : " Pointing to a photograph, a man said, I have no brother, and that man's father is my father's son.Whose photograph was it?",
       "choice1"  : "His son",
       "choice2"  : "His own",
       "choice3"  : "His father",
       "choice4"  : "His nephew",               
       "correct"  : 1
    },
    {
      "question"  : "Arrange the following words in a meaningful sequence.\n1. Infection\n2. Consultation\n3. Doctor\n4. Treatment\n5. Recovery",
       "choice1"  : "1, 3, 4, 5, 2",
       "choice2"  : "1, 3, 2, 4, 5",
       "choice3"  : "1, 2, 3, 4, 5",
       "choice4"  : "2, 3, 5, 1, 4",               
       "correct"  : 2
    },
    {
      "question"  : "Peter is in the East of Tom and Tom is in the North of John.Mike is in the South of John then in which direction of Peter is Mike?",
       "choice1"  : "South-East",
       "choice2"  : "South-West",
       "choice3"  : "South",
       "choice4"  : "North-East",               
       "correct"  : 2
    },
    {
      "question"  : "Today it is Thursday.After 132 days,it will be",
       "choice1"  : "Monday",
       "choice2"  : "Sunday",
       "choice3"  : "Wednesday",
       "choice4"  : "Thursday",               
       "correct"  : 3
    },
     {
      "question"  : "Complete the series 1,6,13,22,33,...",
       "choice1"  : "46",
       "choice2"  : "48",
       "choice3"  : "49",
       "choice4"  : "51",               
       "correct"  : 1
    },
     {
      "question"  : "At a conference, 12 members shook hands with each other before & after the meeting.How many total number of hand shakes occurred?",
       "choice1"  : "100",
       "choice2"  : "122",
       "choice3"  : "132",
       "choice4"  : "145",               
       "correct"  : 3
    },
     {
      "question"  : "The day after the day after tomorrow is four days before Monday. What day is it today?",
       "choice1"  : "Monday",
       "choice2"  : "Tuesday",
       "choice3"  : "Wednesday",
       "choice4"  : "Thursday",               
       "correct"  : 1
    },
     {
      "question"  : "6, 12, 1, 13, 5 is to flame as 2, 12, 15, 1, 20 is to ?",
       "choice1"  : "voice",
       "choice2"  : "bald",
       "choice3"  : "bloat",
       "choice4"  : "castle",               
       "correct"  : 3
    },
     {
      "question"  : "In alphabet series, some alphabets are missing which are given in that order as one of the alternatives below it.Choose the correct alternative.G4T, J10R, M20P, P43N, S90L",
       "choice1"  : "G4T",
       "choice2"  : "J10R",
       "choice3"  : "M20P",
       "choice4"  : "P43N",               
       "correct"  : 2
    }

]
};
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
                window.location.href = "scorereason.php?score=" + score;
      }
    </script>
  </body>
</html>