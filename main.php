<?php
// $current_id = 1;
// if(isset($_SESSION['id'])) {
//     echo 'Set and not empty, and no undefined index error!';
//  }
// $to_email = "xevay76117@mi166.com";
// $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"."activate.php?id=" . $current_id;
// // $to_email = $_POST["userEmail"];
// $subject = "User Registration Activation Email";
// $body = "Click this link to activate your account $actual_link ";
// $headers = "From: Admin\r\n";
// if (mail($to_email, $subject, $body, $headers)) {
//     echo "Email successfully sent to $to_email...";
// } else {
//     echo "Email sending failed...";
// }



$queryString = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$queryString = str_replace('main.php', '',$queryString);


/*
$params = array();
parse_str($queryString, $params);
//change $params as needed
$queryString = http_build_query($params);
if ($queryString) {
  $queryString = '?'.$queryString;
}
 $newURI=preg_replace("/\\?./s","",$_SERVER['REQUEST_URI']).$queryString;
 echo $newURI;*/
?>
