<?php
if(!isset($_SESSION)) { 
session_start();
}
include "connection.php";

$voter_id = $_SESSION['voter_id'];
$query = 'SELECT status FROM voters WHERE voter_id="'.$_SESSION['voter_id'].'" AND status = "VOTED"';
if ($result = mysqli_query($con,$query)) {
if (mysqli_num_rows($result) > 0) {
$sql = mysqli_query($con, 'SELECT voted from voters WHERE voter_id="'.$_SESSION['voter_id'].'"');
$row = mysqli_fetch_assoc($sql);
        echo "You have voted for: " . " " . $row['voted'];
    } else {
        echo "You have not voted yet. Please submit your vote!";
    }
}
$member = $con->query("SELECT * from voters inner join loginusers on vid=voter_id where voter_id=$voter_id");
$value = $member -> fetch_array(MYSQLI_ASSOC);
?>
<?php include "userNav.php" ?>
<style>
    #voterID{
        /* border: 5px outset red; */
        background-color: lightgreen;
        text-align: center;
        width:35%;
        margin:auto;
        margin-top: 5vh;
        padding: 2%;
        font-size: 18px;
        font-family: sans-serif;
     
    }
    #voterID span{
        display:block;
        text-align: left;
        padding-bottom: 2vh;
        text-transform: capitalize;
    }
    #center{
        margin: auto;
        width: 100%;
        /* border: 3px solid green; */
        padding: 10px;  
    }
    body{
      margin:0px;
      padding:0px;
      background-image: url("images/7dc460d843ec2f103255c11a985dfa87.jpg");
      min-height: 380px;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      position: relative;
    }
</style>
<body>
<div id="center">
<div id="voterID">
        <span><b>Name: </b><?=$value['name']?></span>
        <span><b>Voter ID: </b><?=$_SESSION['voter_id'];?></span>
        <span><b>Mothername: </b><?=$value['Mot_name']?></span>
        <span><b>Fathername: </b><?=$value['Fat_name']?></span>
        <span><b>Gender: </b><?=$value['gen']?></span>
</div>
</div>
</body>




