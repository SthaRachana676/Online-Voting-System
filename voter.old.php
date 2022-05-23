<?php
require_once 'connection.php';

$row = $con->query("select * from candidates inner join party on party_id=id ORDER BY name ASC");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
<script src='https://www.google.com/recaptcha/api.js'></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Voters</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>

    <style>
        
        body{
        /* The image used */
        /* background-image: url("images/online voting-1.jpg"); */

        /* Control the height of the image */
        min-height: 380px;

        /* Center and scale the image nicely */
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;
      } 
        
      .headerFont{
        font-family: 'Ubuntu', sans-serif;
        font-size: 24px;
      }

      .subFont{
        font-family: 'Raleway', sans-serif;
        font-size: 14px;
        
      }
      
      .specialHead{
        font-family: 'Oswald', sans-serif;
      }

      .normalFont{
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
      /* #selectcolor{
        color:green;
      } */

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

      .helloTH th{
        background-color:green;
        color:white;
        border:solid;
      }
      
      table {
        border-collapse: collapse;
        width: 100%;
        border: solid 2px black;
      }

      th, td {
        text-align: center;
        padding: 8px;
        

      }
      tr{
        padding : 1rem ;
        border-top: solid 2px black;
      }

      tr:nth-child(even) {background-color: #f2f2f2;}

      input[type=radio] {
        border: 0px;
        padding:0;
        width: 100%;
        height: 2.5em;
      }

/* HIDE RADIO */
[type=radio] { 
  position: absolute;
  opacity: 0;
  width: 0;
  height: 0;
}

/* IMAGE STYLES */
[type=radio] + img {
  cursor: pointer;
}

/* CHECKED STYLES */
[type=radio]:checked + img {
  outline: 2px solid #f00;
}
    </style>


    <script>
      function showLogo() {
        document.getElementById("myLogo").style.display = "none";
      } 
    </script>

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
            <li><a href="lan_view.php"><span class="subFont"><strong>Vote Results</strong></span></a></li>
            <li><a href="profile.php"><span class="subFont"><strong>Profile</strong></span></a></li>
            <li><a href="logout.php"><span class="subFont"><strong>Logout</strong></span></a></li>
            <li><a href="changepass.php"><span class="subFont"><strong>ChangePassword</strong></span></a></li>
          </ul>
          <span class="normalFont"><a href="admin.php" class="btn btn-success navbar-right navbar-btn"><strong>Admin Panel</strong></a></span>
        </div>

      </div> <!-- end of container -->
    </nav>
    </div>
    
      
<div class="container" style="padding-top:100px;">
<!-- <h4 class="normalFont"><marquee> Welcome, Make a Vote</marquee> </h4>  -->
<h2 class="normalFont" style="text-align:center">Select Any One of Them</h2>
<form id="selectcolor" action="submit_vote.php" name="vote" method="post" id="myform" align="right" >
<font size='5'> 
<table width="100%">
  <tr class="helloTH">
    <th style="width:10%;">SN</th>
    <th style="width:40%;">Candidate</th>
    <th style="width:40%;">Party</th>
    <th style="width:10%;">Status</th>
  </tr>
  <?php $i=1; foreach($row as $value){ ?>
  <tr>
    <td style="text-align:center"><?=$i?></td>
    <td><?=$value['fullname'] ?></td>
    <td><?=$value['name'] ?></td>
    <td style="text-align:center">
      <label>
        <input type="radio" name="lan" onclick="showLogo" value="<?=$value['candidate_id']?>">
        <!-- <input type="radio" name="test" value="small" checked> -->
        <img src="images/Stamp.svg" id="myLogo" width="50px" style="display:block">
      </label>
          <?php $i++; }  ?>
    </td>
  </tr>
</table>
</font><br>
<?php global $msg; echo $msg; ?>
<?php global $error; echo $error; ?>
<center>
<button type="submit" name="submit" class="btn btn-primary">
  <strong>Submit</strong>
</button>
</center>
</form>
</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
<br>



