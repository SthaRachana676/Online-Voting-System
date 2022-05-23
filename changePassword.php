<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>ChangePassword | Vote</title>

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>

  <style>
    body {
      /* background-color: aquamarine; */
      margin: 0px;
      padding: 0px;
      background-color: skyblue;
      /* The image used */
      background-image: url("images/1598063183638-4ffe7c5f0f8d.jpg");
      /* background-image: url("images/Rf5171e8904e9aa802941c587999b322b.jpg"); */

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
    <nav class="navbar navbar-default navbar-fixed-top navbar-inverse" role="navigation">
      <div class="container">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <div class="navbar-header">
          <a href="cpanel.php" class="navbar-brand headerFont text-lg"><strong>Online voting System</strong></a>
        </div>

        <!-- <div class="collapse navbar-collapse" id="example-nav-collapse">
          <ul class="nav navbar-nav">
            <!-- 
            <li><a href="#featuresTab"><span class="subFont"><strong>Features</strong></span></a></li>
            <li><a href="#feedbackTab"><span class="subFont"><strong>Feedback</strong></span></a></li>
            <li><a href="#"><span class="subFont"><strong>About</strong></span></a></li>
        	-->
          </ul>


          <!-- <button type="submit" class="btn btn-success navbar-right navbar-btn"><span class="normalFont"><strong>Admin Panel</strong></span></button> 
        </div> -->
      <?php include "nav.php"; ?>
      </div> <!-- end of container -->
    </nav>


    <div class="container" style="padding-top:100px;">
      <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4" style="border:2px solid black;padding:20px;">

          <div class="page-header">
            <h2 class="specialHead" align="center">Admin's Password</h2>
            <p>
              <?php 
              global $error;
              echo $error;
              ?>
            </p>
          </div>

          <form action="updatePwd.php" method="POST">
            <div class="form-group">
              <label for=""> Current Password</label><br>
              <input type="password" name="existingPassword" placeholder="Enter Old Password" class="form-control"><br>

              <label for="">New Password</label><br>
              <input type="password" name="newPassword" class="form-control" placeholder="Enter New Password"><br>

              <label for="">Confirm Password</label><br>
              <input type="password" name="retypePassword" class="form-control" placeholder="Enter New Password Again"><br>

              <button type="submit" name="change" class="btn btn-block span btn-primary "> <span class="glyphicon glyphicon-ok"></span> Change Password</button>
            </div>
          </form>
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

</html>