<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Change Password | Vote</title>
  <!-- Bootstrap -->
  <!-- <link href="css/bootstrap.min.css" rel="stylesheet">

  <link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'> -->




  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>

  <!-- <div class="container">
    <nav class="navbar navbar-default navbar-fixed-top navbar-inverse" role="navigation">
      <div class="container">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <div class="navbar-header">
          <a href="index.php" class="navbar-brand headerFont text-lg"><strong>Online voting System</strong></a>
        </div>

        <div class="collapse navbar-collapse" id="example-nav-collapse">
          <ul class="nav navbar-nav"> -->
  <!-- 
            <li><a href="#featuresTab"><span class="subFont"><strong>Features</strong></span></a></li>
            <li><a href="#feedbackTab"><span class="subFont"><strong>Feedback</strong></span></a></li>
            <li><a href="#"><span class="subFont"><strong>About</strong></span></a></li>
            -->
  <!-- </ul>


          <button type="submit" class="btn btn-success navbar-right navbar-btn"><span class="normalFont"><strong>Admin Panel</strong></span></button>
        </div>

      </div> <!-- end of container ->
    </nav> -->

  <?php include "userNav.php" ?>
  <div class="container" style="padding-top:100px;">
    <div class="row">
      <div class="col-sm-4"></div>
      <div class="col-sm-4" style="border:2px solid #aba9a9;padding:10px;">

        <?php
        if (!isset($_SESSION)) {
          //session_start();
        }
        ?>
        <br>
        <br>
        <center>
          <h3>Change Password</h3>
        </center>
        <hr><br>
        <h4 style="color:black;">
          <?php
          global $nam;
          echo $nam;
          ?>
        </h4>
        <?php global $error;
        echo $error; ?>

        <form action="change_pass_action.php" method="post" id="myform">
          <label>Current Password :</label>
          <input type="password" name="cpassword" class="form-control">
          <br>
          <br>
          <label>New Password:</label>
          <input type="password" name="npassword" class="form-control">
          <br>
          <br>
          <label>Confirm New Password:</label>
          <input type="password" name="cnpassword" class="form-control">
          <br>
          <br>
          <center>
            <button type="submit" name="cpass" style="background-color: #449d44; width:30%; height: 40px; border-radius: 10px;">UPDATE</button>
          </center>
        </form>
        <script type="text/javascript">
          var frmvalidator = new Validator("myform");
          frmvalidator.addValidation("cpassword", "req", "Please enter Current Password");
          frmvalidator.addValidation("cpassword", "maxlen=50");
          frmvalidator.addValidation("npassword", "req", "Please enter New Password");
          frmvalidator.addValidation("npassword", "maxlen=50");
          frmvalidator.addValidation("cnpassword", "req", "Please enter Confirm New Password");
          frmvalidator.addValidation("cnpassword", "maxlen=50");
        </script>
        <br>
        <br>

      </div>
      <div class="col-sm-4"></div>
    </div>
  </div>
  </div>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
</body>
<style>
  body {
    /* background-color: aquamarine; */
    margin: 0px;
    padding: 0px;
    /* The image used */
    /* background-image: url("images/page_bg_blur03.jpg"); */
    background-image: url("images/1598063183638-4ffe7c5f0f8d.jpg");
    /* Control the height of the image */
    min-height: 380px;

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
  }
  .headerFont {
    font-family: 'Ubuntu', sans-serif;
    font-size: 24px;
  }

  .subFont {
    font-family: 'Raleway', sans-serif;
    font-size: 14px;

  }

  .specialHead {
    font-family: 'Oswald', sans-serif;
  }

  .normalFont {
    font-family: 'Roboto Condensed', sans-serif;
  }

  form{
    padding-bottom: 0;
  }
  form label{
    color : black;
  }

  form input{
    background-color: silver !important;
  }
</style>

</html>