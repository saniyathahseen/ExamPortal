<html>
  <head>
    <title>
          Exam Portal
    </title>
    <style>
    * {
        box-sizing: border-box;
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
        padding: 10px;
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
        background-color:lightgrey ;
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
    <div class="row">
      <div class="column1"></div>
      <div class="column2">
        <h2>Registration</h2>
        <form action="reg.php"method="post">
          <div class="row">
            <div class="col-25">
              <label for="username">Name</label>
            </div>
            <div class="col-75">
              <input type="text" id="username" name="username" placeholder="Your name..">
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="password">Password</label>
            </div>
            <div class="col-75">
              <input type="password" id="password" name="password" placeholder="password">
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="password">Confirm Password</label>
            </div>
            <div class="col-75">
              <input type="password" id="conpassword" name="conpassword" placeholder="confirmpassword">
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="phone">Phone:</label>
            </div>
            <div class="col-75">
              <input type="number" id="phone" name="phone" placeholder="phone">
            </div>
          </div>
          <input type="submit" value="Submit" style="width: 200px;">
        </form>
      </div>
    </div>
  </body>
</html>