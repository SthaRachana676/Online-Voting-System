<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Control Panel</title>
	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
	<style>
	body{
		margin:0px;
      padding:0px;
      /* background-color:skyblue; */
      /* The image used */
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

	</style>
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
	<div class="container" style="padding-top:100px;" >
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4" style="border:2px solid black;padding:5px;">
		<br>
		<center>
			<legend><h3>Party Register</h3></legend>
	    </center>
          <style>
            .form-group label{
              color:black;
            }
          </style>	
    <?php require_once("nav.php"); ?>
    <form class="" action="party_reg.php" method="post" enctype="multipart/form-data"   > 
      <div class="form-group">
	 <label>Party Name :</label><br>
      <input type="text" name="pname" class="form-control">
      <br>
	  <label>Optional Name :</label><br>
      <input type="text" name="oname" class="form-control">
      <br>
	  <label> Party Logo :</label>
      <br>
      <input type="file" name="image" id="image">
      <br>
      <input type="submit" value="Party Register" name="submit" class="btn btn-success btn-lg btn-block"> 
    </form>
  </div>
	</div>
</body>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</html>