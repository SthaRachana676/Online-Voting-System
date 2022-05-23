<?php
include_once('connection.php');
function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Authentication</title>
</head>

<body>
      <?php
      session_start();
      if (empty($_POST['adminUserName']) || empty($_POST['adminPassword'])) {
        $error = "UserName or Password is Required.";
      } else {
        $admin_username = test_input($_POST['adminUserName']);
        $admin_password = test_input($_POST['adminPassword']);

        $sql = "SELECT * FROM project_voting.tbl_admin WHERE admin_username='" . $admin_username . "' AND admin_password='" . $admin_password . "'";
        $query = mysqli_query($con, $sql);
        $row  = mysqli_fetch_array($query);
        $_SESSION["voter_id"]=$row['aid'];
        echo $_SESSION["voter_id"];
        if (mysqli_num_rows($query) == 1) {
         header("location:cpanel.php");
          
        } else {
          $error = "Sorry !! Authentication Failed";
          echo "<p class='alert alert-danger'><strong>$error</strong></p>";
          echo "<p class='normalFont text-primary'><strong>Your Combination of UserName and Password is In-correct. Better, You contact to the developer of system.</strong> </p>";
          echo "<br><a href='admin.php' class='btn btn-primary'><span class='glyphicon glyphicon-refresh'></span> <strong>Try Again</strong></a>";
        }
        mysqli_close($con);
      }

      ?>
</body>

</html>