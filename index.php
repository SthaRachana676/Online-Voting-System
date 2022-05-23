<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Online voting System</title>

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
      background-color:cyan;
      width: 100% !important;
      overflow-x: hidden;

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
      background-color: white;
    }
    .normalFont h2{
      font-size:28px;
      color : black;
      /* border: white solid 2px; */
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


    /* Fixed/sticky icon bar (vertically aligned 50% from the top of the screen) */
    .icon-bar {
      position: fixed;
      top: 50%;
      -webkit-transform: translateY(-50%);
      -ms-transform: translateY(-50%);
      transform: translateY(-50%);
    }

    /* Style the icon bar links */
    .icon-bar a {
      display: block;
      text-align: center;
      padding: 16px;
      transition: all 0.3s ease;
      color: white;
      font-size: 20px;
    }

    /* Style the social media icons with color, if you want */
    .icon-bar a:hover {
      background-color: #000;
    }

    .facebook {
      background: #3B5998;
      color: white;
    }

    .twitter {
      background: #55ACEE;
      color: white;
    }

    .google {
      background: #dd4b39;
      color: white;
    }

    .linkedin {
      background: #007bb5;
      color: white;
    }

    .youtube {
      background: #bb0000;
      color: white;
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
  <!-- Load font awesome icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <div class="container">
    <nav class="navbar navbar-default navbar-fixed-top navbar-inverse" role="navigation">
      <div class="container">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <div class="navbar-header">
          <a href="index.php" class="navbar-brand headerFont text-lg">
            <strong>
              <marquee style="color:white">Online Voting</marquee>
            </strong>
          </a>
        </div>

        <div class="collapse navbar-collapse" id="example-nav-collapse">
          <ul class="nav navbar-nav">
            <li><a href="#home.php"><span class="subFont"><strong>Home</strong></span></a></li>
            <li><a href="#aboutTab"><span class="subFont"><strong>About</strong></span></a></li>
            <li><a href="#feedbackTab"><span class="subFont"><strong>Feedback</strong></span></a></li>
          </ul>
          <span class="normalFont"><a href="admin.php" class="btn btn-success navbar-right navbar-btn">
              <strong>Admin Panel</strong></a>
          </span>
        </div>
      </div> <!-- end of container -->
    </nav>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12">
        <div class="jumbotron text-center text-block" style="padding-top:170px;">
          <img src="images/Vote.png" style="width:25%" alt="">
          <!-- <h1 class="specialHead">Online Voting</h1>
                  <p class="normalFont">Safe . Reliable . Secure . Fast </p> -->
          <br><br>
          <a href="registration.php" class="btn btn-primary btn-md specialHead">
            <span class="glyphicon glyphicon-tag"></span>Registration
          </a>
        </div>
      </div>
    </div>
  </div>
  <hr>
  <!-- <div class="conatiner" id="featuresTab">
        <div class="row">
          <div class="col-sm-12 text-center">
            <div class="page-header" style="padding-top:50px;padding-bottom:50px">
              <h1 class="normalFont" style="font-size:44px;text-transform: capitalize;font-family: Georgia, serif;" >WHAT IS ONLINE VOTING.</h1>
              <p class="subFont" style="font-size:24px;font-family: cursive;">
                <em>A Intractive Way To Solve Conventional Voting.</em>
              </p>
            </div>
          </div>
        </div>
      </div> -->

  <div class="conatiner" style="padding:50px;" id="aboutTab">
    <div class="row">
      <div class="col-sm-4 text-center">
        <img src="images/Nominee.png" width="100" height="100" alt="" />
        <a href="login.php" class="normalFont">
          <h2>VOTE ONLINE.</h2>
        </a>
        <p><em>You Just Need Basic Details of Yours and We Will Let You Vote.</em></p>
      </div>
      <div class="col-sm-4 text-center">
        <img src="images/Vote.png" width="100" height="100" alt="" />
        <a href="nomination.php" class="normalFont">
          <h2>Nomination</h2>
        </a>
        <p><em>Admin's Control Panel allows you to manage the list of filled nomination.</em></p>

      </div>
      <div class="col-sm-4 text-center">

        <img src="images/Stats.png" width="100" height="100" alt="" />
        <a href="votingresult.php" class="normalFont">
          <h2> Statitics</h2>
        </a>
        <p><em>SHows You the Graphical Data Representation of your votes. And, It is in Admin's Control Panel.</em></p>
      </div>
    </div>
  </div>
  <!-- <hr>
        <div class="container" id="feedbackTab">
          <div class="row">
            <div class="col-sm-12 text-center" style="">
              <div class="page-header" style="padding-top:30px;padding-bottom:30px;">
                <img src="images/MailBoy.png" width="100" height="100" alt="">
                <br>
                <h1 class="specialHead">CONTACT</h1>
                <p style="font-size:16px;">If You have any suggestion regarding our voting system. We 'll welcome your suggestion,</p>
                
              
                <br>
                <a  class="btn btn-info"> <strong>Feedback</strong></a>
              </div>
            </div>
          </div>
        </div> -->

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