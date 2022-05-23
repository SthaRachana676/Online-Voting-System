<?php
session_start();
include 'connection.php';

$existingPassword = $_POST['existingPassword'];
$newPassword = $_POST['newPassword'];
$retypePassword = $_POST['retypePassword'];
$sql = mysqli_query($con, "SELECT admin_password as password FROM project_voting.tbl_admin where admin_password='$existingPassword'");
$row = mysqli_fetch_assoc($sql);
$pass = $row['password'];
if ($row == 0) {
        $error = "Wrong Current Password";
        include "changePassword.php";
} else {
        if ($newPassword == $retypePassword) {
                mysqli_query($con, "UPDATE tbl_admin SET admin_password='$newPassword' where  admin_password='$existingPassword'");
                $error = "Congratulations You have successfully changed your password";
                include "changePassword.php";
        } else {
                $error = "New Pass word Mis-matched";
                include "changePassword.php";
        }
}
