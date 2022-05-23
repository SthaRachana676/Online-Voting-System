<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Update Password</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>

    <style>
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
          <a href="index.html" class="navbar-brand headerFont text-lg"><strong>Online Voting System</strong></a>
        </div>

        <div class="collapse navbar-collapse" id="example-nav-collapse">
          <ul class="nav navbar-nav">
            <!-- 
            <li><a href="#featuresTab"><span class="subFont"><strong>Features</strong></span></a></li>
            <li><a href="#feedbackTab"><span class="subFont"><strong>Feedback</strong></span></a></li>
            <li><a href="#"><span class="subFont"><strong>About</strong></span></a></li>
        	-->
          </ul>
          

          <button type="submit" class="btn btn-success navbar-right navbar-btn"><span class="normalFont"><strong>Admin Panel</strong></span></button>
        </div>

      </div> <!-- end of container -->
    </nav>

    
    <div class="container" style="padding-top:150px;">
    	<div class="row">
    		<div class="col-sm-4"></div>
    		<div class="col-sm-4 text-center" style="border:2px solid gray;padding:50px;">
<?php
session_start();
include "connection.php"; 
if(isset($_POST['change'])) {
	$existingPassword= md5($_POST['existingPassword']) ;
	$newPassword = md5($_POST['newPassword']);
	$retypePassword = md5($_POST['retypePassword']);
	$existingPassword = addslashes($existingPassword);
	$newPassword = addslashes($newPassword);
	$retypePassword = addslashes($result); 
	$existingPassword = mysqli_real_escape_string($con, $existingPassword);
	$newPassword = mysqli_real_escape_string($con, $newPassword);
	$retypePassword = mysqli_real_escape_string($con, $retypePassword);
	
$sql =  mysqli_query($con, "SELECT password FROM project_voting.tbl_admin WHERE admin_password='$existingPassword'");

$row = mysqli_fetch_assoc($sql);
$pass = $row['password'];
if ($existingPassword != $pass) {
	$error = "<center><h4><font color='#FF0000'>Incorrect existing Password!</h4></center></font>";
	include ("changePassword.php");
}
else if (($existingPassword == $pass) && ($newPassword == $retypePassword)){
$sql1 = mysqli_query($con, "UPDATE tbl_admin SET password=".md5($_POST['newPassword'])." WHERE admin_password='.$existingPassword'");
$error = "<center><h4><font color='green'>Password successfully changed!</h4></center></font>";
include ("changePassword.php");
}
else {
	$error = "<center><h4><font color='#FF0000'>New Password and Confirm Password does not match!</h4></center></font>";
	include ("changePassword.php");
}
}
else {
	$error = "<center><h4><font color='#FF0000'>Error!</h4></center></font>";
	include ("changePassword.php");
}
?>



	<!-- // // Fetch Data
	// if(empty($_POST['existingPassword']) || empty($_POST['newPassword']))
	// {
	// 	$error= "Fields Recquired.";
	// }
	// else
	// {
	// 	$old= test_input($_POST['existingPassword']);
	// 	$new= test_input($_POST['newPassword']);
	// }

	// //Establish Connection
	// $conn= mysql_connect($hostname, $username, $password, $database);

	// // Select Database
	// //$db= mysql_select_db($db, $conn);

	// // ******************************
	// // ADD USER NAME FIELD HERE-- FROM SESSION
	// //**********************************

	// $sql="SELECT * FROM project_voting.tbl_admin WHERE admin_password='".$old."'";
	// $query= mysql_query($sql, $conn);
	// $rows= mysql_num_rows($query);
	// if($rows==1)
	// {
	// 	// Given Password is Valid
	// 	$sql="UPDATE project_voting.tbl_admin SET admin_password='$new' WHERE admin_username='admin'"; // =============EDIT *SESSSION_SUERNAME *
	// 	if($query= mysql_query($sql, $conn))
	// 	{
	// 		// Successfully Changed
	// 		echo "<img src='images/success.png' width='70' height='70'>";
	// 		echo "<h3 class='text-info specialHead text-center'><strong> SUCCESSFULLY CHANGED.</strong></h3>";
	// 		echo "<a href='cpanel.php' class='btn btn-primary'> <span class='glyphicon glyphicon-ok'></span> <strong> Finish</strong> </a>";
	// 	}
	// }
	// else
	// {
	// 	$error= "Old-Password is Incorrect";

	// 	echo "<img src='images/error.png' width='70' height='70'>";
	// 	echo "<h3 class='text-info specialHead text-center'><strong> $error</strong></h3>";
	// 	echo "<a href='index.html' class='btn btn-primary'> <span class='glyphicon glyphicon-ok'></span> <strong> Finish</strong> </a>";

	// }

	// mysql_close($conn); -->


	
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


