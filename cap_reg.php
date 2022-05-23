<?php
session_start();
$captcha = "";
include "connection.php";
if (isset($_POST['Submit'])) {
    if (isset($_POST['pswd'])) {
        $name3 = mysqli_real_escape_string($con, $_POST['email']);
        $name4 = mysqli_real_escape_string($con, $_POST['voter_id']);
        $pass = mysqli_real_escape_string($con, $_POST['pswd']);
    }
    $sq = mysqli_query($con, 'SELECT voter_id FROM loginusers WHERE voter_id="' . $_POST['voter_id'] . '"');
    $exist = mysqli_num_rows($sq);
    if ($exist == 1) {
        $nam = "<center><h4><font color='#FF0000'>The Voter_id already Registered.</h4></center></font>";
        unset($voter_id);
        include('registration.php');
        exit();
    }
    $sqnot = mysqli_query($con, 'SELECT vid FROM voters WHERE vid="' . $_POST['voter_id'] . '"');
    $notexist = mysqli_num_rows($sqnot);
    if ($notexist == 0) {
        $nam = "<center><h4><font color='#FF0000'>The Voter_id Not Found Contact Census.</h4></center></font>";
        unset($voter_id);
        include('registration.php');
        exit();
    } else {
        $checkmail = $con->query("SELECT * FROM voters WHERE Email='" . $_POST['email'] . "' AND vid ='" . $_POST['voter_id'] . "'");
        if (mysqli_num_rows($checkmail) == 1) {
            $sql2 = mysqli_query($con, 'INSERT INTO loginusers(email,voter_id,password,status) VALUES ("' . $_POST['email'] . '","' . $_POST['voter_id'] . '","' . md5($_POST['pswd']) . '","0")');
            if (!$sql2) {
                die(mysqli_error($con));
            } else {
                $to_email = $_POST['email'];
                $current_id = $_POST['voter_id'];
                $to_email = $_POST['email'];
                $current_id = $_POST['voter_id'];
                $queryString = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                $actual_link = str_replace('cap_reg.php', '', $queryString);
                $actual_link = $actual_link . "activate.php?id=" . $current_id;
                $subject = "User Registration Activation Email";
                $body = "Click this link to activate your account $actual_link ";
                $headers = "From: Admin\r\n";
                if (mail($to_email, $subject, $body, $headers)) {
                    echo "Verification mail sent to $to_email...";
                } else {
                    echo "Email sending failed...";
                }
                echo "Successfully Registered! <a href= 'login.php'>Click here to Login</a>";
            }
        } else {
            $nam = "<center><h4><font color='#FF0000'>The Email doesn't match.</h4></center></font>";
            unset($voter_id);
            include('registration.php');
            exit();
        }
    }
} else {
    $error = "<center><h4><font color='#FF0000'>Registration Failed Due To Error!</h4></center></font>";
    include "registration.php";
}
