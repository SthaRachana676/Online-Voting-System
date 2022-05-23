<?php
include "connection.php";
session_start();
if(empty($_POST['lan'])){
$error="<center><h4><font color='#FF0000'>Please select a Candidate to vote!</h4></center></font>";
include"voter.php";
exit();
}
$lan = $_POST['lan'];
$sess = $_SESSION['voter_id'] ;
$lan = addslashes($_POST['lan']);
$lan = mysqli_real_escape_string($con, $lan);
$sql = mysqli_query($con, 'SELECT * FROM loginusers WHERE voter_id="'.$_SESSION['voter_id'].'" AND cand_id !="0"');
?>
<?php
if(mysqli_num_rows($sql) > 0 ) {
	$msg="<center><h4><font color='#FF0000'>You have already been voted, No need to vote again</h4></center></font>";
		include 'voter.php';
		exit();	
}
else{
	echo $sess;
	
	$sql1 =mysqli_query($con, 'UPDATE loginusers SET cand_id = "'.$_POST['lan'].'" WHERE voter_id = "'.$sess.'"');
	$sql2 =mysqli_query($con, 'UPDATE voters SET status="VOTED" WHERE voter_id="'.$_SESSION['voter_id'].'"');
	if(!$sql1){
	die("Error on mysql query");
	}
	else{
	$msg="<center><h4><font color='#FF0000'>Congratulation, you have made your vote.</h4></center></font>";
	include 'voter.php';
	exit();
	}
}

?>

