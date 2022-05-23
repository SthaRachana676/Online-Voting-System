<?php

    $servername='localhost';

    $username='root';

    $password='';

    $dbname = "project_voting";

    $con=mysqli_connect($servername,$username,$password,"$dbname");

      if(!$con){

          die('Could not Connect MySql Server:' .mysql_error());

        }

?>