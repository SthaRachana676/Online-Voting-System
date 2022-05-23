<style>
    *{
        background-color: green;
    }
</style>
<?php
session_start();
if(isset($_POST['save']))
{
    extract($_POST);
    include 'connection.php';
	$sql = mysqli_query($con, 'SELECT * FROM loginusers WHERE voter_id="'.$_POST['voter_id'].'"  AND password="'.md5($_POST['password']).'" AND status="1" ' );
    //$sql=mysqli_query($conn,"SELECT * FROM  where Email='$email' and Password='md5($pass)'");
    $row  = mysqli_fetch_array($sql);
    // print_r($con);
    if(is_array($row))
    { 
        $_SESSION["id"] = $row['vid'];
        $_SESSION["voter_id"]=$row['voter_id'];
        $_SESSION["password"]=$row['password'];
        $_SESSION["rank"]=$row['rank'];
       // header("Location: voter.php"); 
    }
	if($row['rank']=='administrator'){
		header("location:admin.php");
		}
		else if($row['rank']=='voter'){
		header("location: voter.php");
		}
    else
    { ?>
          <script>
            alert('Invalid User or Password...');
            window.location='login.php';
        </script>
        <?php
    }
}
?>

