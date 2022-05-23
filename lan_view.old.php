<!DOCTYPE html>
<html lang="en">
  <head>
<script src='https://www.google.com/recaptcha/api.js'></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>online voting system</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>

    <style>

    body{
      /* background-color: aquamarine; */
      margin:0px;
      padding:0px;
      background-color:skyblue;
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
        width: 60%;
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
      tr:nth-child(even) {background-color:#ffcc99;}
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
            <li><a href="voter.php"><span class="subFont"><strong>Home</strong></span></a></li>
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
<?php
if(!isset($_SESSION)) { 
session_start();
}
?>
<div style="margin-top:100px">
<center><h3> Voting So Far  </h3></center>
<?php
include "connection.php";
$member = mysqli_query($con, 'select candidate_id,fullname,name from candidates inner join party on party_id=id' );
if (mysqli_num_rows($member)== 0) {
	echo '<font color="red">No results found</font>';
}
else {
  ?>
  <center>
    <font size='4'>
<table id="result_table" width="60%">
<tr class="helloTH">
<th width="10%">ID</th>		
<th width="60%">CANDIDATES</th>
<th width="20%" style="text-transform:uppercase;">party</th>
<th width="10%">VOTE</th>
</tr>
<?php
while($mb=mysqli_fetch_object($member)){	
  $id=$mb->candidate_id;
  $name=$mb->fullname;
  $about=$mb->name;
  $rs = $con->query("Select count(*) as data from loginusers where cand_id=".$id);
  $result = mysqli_fetch_array($rs);
  ?>    
  <!-- <pre><?php print_r($result); ?></pre>  -->
  <?php
  echo '<tr bgcolor="#BBBEFF">';
	echo '<td>'.$id.'</td>';		
	echo '<td>'.$name.'</td>';
	echo '<td>'.$about.'</td>';
	echo '<td>'.$result['data'].'</td>';
	echo "</tr>";
		}
		echo'</font></table></center>';
	}
  
?>