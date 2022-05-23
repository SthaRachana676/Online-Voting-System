<?php
require_once "connection.php";
require "nav.php";

if (isset($_POST['dumReg'])) {
    extract($_POST);
    //echo "$uname $gen";
    $row = $con->query("INSERT into voters values ('$id','$uname','$dob','$mname','$fname','$gen','$email')");
    if ($row) {
      $msg = "Data Added Succesfully!";      
    }
    else{
        $msg = "Something went wrong...";
    }
}
?>
<style>
    body{
      margin: 0px;
      padding: 0px;
      background-image: url("images/1598063183638-4ffe7c5f0f8d.jpg");
      min-height: 380px;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      position: relative;
    }
    form {
        width: 30%;
        margin: auto;
        padding: 5%;
        border: solid 2px black;
        border-radius: 10px;
        text-align: center;
        background-color:lightgreen;
    }

    input {
        display: block;
        margin: 3vh 0;
        width: 100%;
        border-radius: 10px;
        text-align: center;
    }

    .rdn {
        display: inline;
        width: 20%;
    }

    caption {
        text-align: center;
    }
</style>
<body>
<div style="margin-top:100px; width:100%">
    <form action="dummy.php" method="post">
       <span style="font-weight:bold;"><caption >Census Data</caption></span> 
       <hr>
        <p><?php 
        global $msg; 
        echo  $msg;
        ?>
        </p>
        <input type="text" name="uname" id="" placeholder=" Enter Full Name " required>
        <input type="number" name="id" id="" placeholder=" Enter Voter ID" required>
        <input type="email" name="email" id=""  placeholder="Enter Your Email" required>
        <input class="rdn" type="radio" name="gen" id="" value="M" required>Male
        <input class="rdn" type="radio" name="gen" id="" value="F">Female
        <input type="date" name="dob" id="" required>
        <input type="text" name="fname" id="" placeholder="Father's Name" required>
        <input type="text" name="mname" id="" placeholder="Mother's Name" required>
        <input type="submit" value="Census Register" name="dumReg">
    </form>
</div>
</body>