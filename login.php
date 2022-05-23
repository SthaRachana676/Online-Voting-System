<!DOCTYPE html>
<html lang="en">
<head>
  <script src='https://www.google.com/recaptcha/api.js'> </script>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Login</title>

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>

  <style>
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

    a {
      color: #3aadcf;
      text-decoration: none;
    }

    a:link {
      color: #FFFFFF;
      text-decoration: none;
    }

    /* visited link */
    a:visited {
      color: #FFFFFF;
      text-decoration: none;
    }

    /* mouse over link */
    a:hover {
      color: #FFFFFF;
      text-decoration: none;
    }

    /* selected link */
    a:active {
      color: #FFFFFF;
      text-decoration: none;
    }
    /* form {
        width: 100%;
        margin: auto;
        padding: 5%;
        border: solid 2px black;
        border-radius: 10px;
        text-align: center;
        /* background-color:green; */
    body {
      /* The image used */
      background-image: url("images/7dc460d843ec2f103255c11a985dfa87.jpg");

      /* Control the height of the image */
      min-height: 380px;

      /* Center and scale the image nicely */
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      position: relative;
    }
  </style>


  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

  <div class="container">
    <nav class="navbar navbar-default navbar-fixed-top navbar-inverse
    " role="navigation">
      <div class="container">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <div class="navbar-header">
          <a href="index.php" class="navbar-brand headerFont text-lg"><strong>Online Voting System</strong></a>
        </div>

        <div class="collapse navbar-collapse" id="example-nav-collapse">
          <ul class="nav navbar-nav">
            <li><a href="#home"><span class="subFont"><strong>Home</strong></span></a></li>
            <li><a href="registration.php"><span class="subFont"><strong>Register</strong></span></a></li>
            <li><a href="login.php"><span class="subFont"><strong>Login</strong></span></a></li>
            <li><a href="#feedbackTab"><span class="subFont"><strong>Feedback</strong></span></a></li>
          </ul>
          <span class="normalFont"><a href="admin.php" class="btn btn-success navbar-right navbar-btn"><strong>Admin Panel</strong></a></span>
        </div>

      </div> <!-- end of container -->
    </nav>
  </div>


  <!-- Load font awesome icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- The social media icon bar -->
  <div class="icon-bar">
    <a href="https://facebook.com" class="facebook"><i class="fa fa-facebook"></i></a>
    <a href="https://twitter.com" class="twitter"><i class="fa fa-twitter"></i></a>
    <a href="https://google.com" class="google"><i class="fa fa-google"></i></a>
    <a href="https://linkedin.com" class="linkedin"><i class="fa fa-linkedin"></i></a>
    <a href="https://youtube.com" class="youtube"><i class="fa fa-youtube"></i></a>
  </div>

  <div class="bg-img">
    <div class="container" style="padding-top:100px;">
      <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4" style="border:3px solid black;padding:20px;">
          <br>
          <center>
            <legend>
              <h3> Login</h3>
            </legend>
          </center>
          <?php global $nam;
          echo $nam; ?>
          <?php global $error;
          echo $error; ?>

          <form action="login_action.php" method="post" enctype="multipart/form-data">
            <!-- <h2>Login</h2> -->
            <p class="hint-text"></p>
            <div class="form-group" id="input-container">
              <i class="fa fa-user icon"></i>
              Voter ID:
              <input type="text" class="form-control" name="voter_id" placeholder="voter_id" required="required">
            </div>
            <div class="form-group" id="input-container">
              <i class="fa fa-key icon"></i>
              Password:
              <input type="password" class="form-control" name="password" placeholder="Password" required="required">
            </div>
            <div class="form-group">
              <button type="submit" name="save" class="btn btn-success btn-lg btn-block">Login</button>
            </div>
            <div class="text-center">Don't have an account? <a href="registration.php">Register Here</a></div>
          </form>

          <!-- <form action= "login_action.php" method= "post" name="myform" >
        <div class="form-group">
        <label>voter_id:</label> <br>
        <input type="text" name ="voter_id" placeholder="Enter your voter ID" class="form-control">
        <br>
        <label>Password</label><br>
        <input type="password" name ="password" class="form-control" placeholder="Enter Your Password "><br>
        <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label><br>
        <button type="submit"> login</button>
        <br>
    <br>
  </div>
        </form> -->
          <script language="JavaScript" type="text/javascript">
            var frmvalidator = new Validator("myform");
            frmvalidator.addValidation("voter_id", "req", "Please enter voter_id");
            frmvalidator.addValidation("voter_id", "minlen=8", "Voter_id must be required.");
            frmvalidator.addValidation("password", "req", "Please enter voter password");
            frmvalidator.addValidation("password", "minlen=8", "Password must not be less than 8 characters.");
          </script>
        </div>
        <div class="col-sm-4"></div>
      </div>
    </div>
    <div>
      <br>
      <!-- <footer>
        <div class="container">
          <div class="row">
            <div class="col-sm-6 text-center">
             <h2 class="specialHead"><br></h2>
            </div>
            <div class="col-sm-6 text-center">
              <img src="images/Facebook.png" width="50" height="50" alt="">
              <img src="images/Twitter.png" width="50" height="50" alt="">
              <img src="images/GitHub.png" width="50" height="50" alt="">
            </div>

          </div>
        </div>
      </footer>
     -->


      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="js/bootstrap.min.js"></script>
</body>

</html>