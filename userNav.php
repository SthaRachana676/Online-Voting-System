<?php
session_start();
require_once "auth.php";
?>
<link href="css/bootstrap.min.css" rel="stylesheet">
<style>
    .headerFont {
        font-family: 'Ubuntu', sans-serif;
        font-size: 24px;
    }
</style>
<div class="container">
    <nav class="navbar navbar-default navbar-fixed-top navbar-inverse" role="navigation">
        <div class="container">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="navbar-header">
                <a href="" class="navbar-brand headerFont "><strong>Online Voting System</strong></a>
            </div>
            <div class="collapse navbar-collapse" id="example-nav-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="voter.php"><span class="subFont"><strong>Home</strong></span></a></li>
                    <!-- <li><a href="lan_view.php"><span class="subFont"><strong>Vote Results</strong></span></a></li> -->
                    <li><a href="profile.php"><span class="subFont"><strong>Profile</strong></span></a></li>
                    <li><a href="changepass.php"><span class="subFont"><strong>ChangePassword</strong></span></a></li>
                </ul>
                <span class="normalFont">
                    <a href="logout.php" class="btn btn-success navbar-right navbar-btn">
                        <strong>Logout</strong>
                    </a>
                </span>
                <!-- <span class="normalFont"><a href="admin.php" class="btn btn-success navbar-right navbar-btn"><strong>Admin Panel</strong></a></span> -->
            </div>
        </div> <!-- end of container -->
    </nav>
</div>