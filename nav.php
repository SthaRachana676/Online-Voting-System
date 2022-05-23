<?php
session_start();
require_once "auth.php";

?>
<link href="css/bootstrap.min.css" rel="stylesheet">
<nav class="navbar navbar-default navbar-fixed-top navbar-inverse" role="navigation">
	<div class="container">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
		<div class="navbar-header"> <a href="" class="navbar-brand headerFont text-lg"><strong>Online voting System</strong></a> </div>
		<div class="collapse navbar-collapse" id="example-nav-collapse">
			<ul class="nav navbar-nav">
				<li><a href="cpanel.php"><span class="subFont"><strong>Home</strong></span></a></li>
				<li><a href="nominationAdmin.php"><span class="subFont"><strong>Nomination's List</strong></span></a></li>
				<li><a href="changePassword.php"><span class="subFont"><strong>Admin's Password</strong></span></a></li>
				<li><a href="candiForm.php"><span class=""><strong>Add Candidate</strong></span></a></li>
				<li><a href="partyForm.php"><strong>Add Party</strong></span></a></li>
				<li><a href="dummy.php"><strong>Census Data</strong></span></a></li>
			</ul> <span class="normalFont"><a href="index.php" class="btn btn-success navbar-right navbar-btn"><strong>Sign Out</strong></a></span></button>
		</div>
	</div>
	<!-- end of container -->
</nav>