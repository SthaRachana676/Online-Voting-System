<?php
include 'connection.php';
// $row = $con->query("Select * from party");
$row = $con->query("SELECT * FROM candidates right outer join party on party_id = id WHERE party_id is null");
/*

Select *
From tbAddresses As tba1
Where tba1.aType = "Home"
  And tba1.HID = (Select MAX(tba2.HID) 
                      From tbAddresses As tba2 
                     Where tba1.EID = tba2.EID)*/
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Control Panel</title>
	<link href="css/bootstrap.min.css" rel="stylesheet"/>
	<style>
		body {
			/* background-color: aquamarine; */
			margin: 0px;
			padding: 0px;
			/* background-color:skyblue; */
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

		#formContainer{
			color: white;
		}

		#formContainer input{
			text-align: center;
			color: black;
			border-radius: 10px;
			padding:1vh;
			text-align-last:center;
			/* vertical-align-last: middle;	 */
		}
		select {
			width:100%;
			text-align-last:center;
			color:black;
			border-radius: 10px;
			padding:1vh;
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
		.boderMaker{
			background: #5cb85c;
			padding: 2% 5%;
			width:30%;
			margin:auto;
			border-radius: 15px;
			border:solid 2px white;
		}

		input[type="file"] {
		  font-size: 17px;
		  color: #b8b8b8;
			width:100%;
			background:white;
		}
	</style>
</head>
<body>
	<div id="formContainer" style="margin-top: 10rem; width:100%;">
			<div class="boderMaker">
				<h2 style="text-align:center; padding-bottom: 1vh; margin-top:0">Candidate Register</h2>
				<hr style="width:126%; margin-left: -13%;">
				<?php require_once("nav.php"); ?>
					<form action="can_reg.php" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<label>Candidate Name :</label>
							<br>
							<input type="text" name="cname" placeholder="Enter Candidate's Name" class="form-control" required>
						</div>
						<span>Party:</span><br>
						<select style="color:black" name="party" required>
							<?php
              echo"<option value='' disabled selected >----Choose Party----</option>";
              foreach ($row as $value) {
                  echo "<option value=".$value['id'].">".$value['name'].$value['fullname']."</option>";
              }
              ?>
						</select>
						<br><br>
						<input type="file" name="image" id="image" required>
						<br>
						<center>
							<button type="submit"  name="submit" class="btn-lg" style="background: #080808; border:solid 2px white;">
								Submit
							</button>
						</center>
					</form>
			</div>
		</div>
</body>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>

</html>
