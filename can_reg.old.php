<?php
include 'connection.php';

$cname = $_POST['cname'];
$pname = $_POST['party'];

if (isset($_FILES['image'])) {
    $errors= array();
    $file_name = $_FILES['image']['name'];
    $file_size =$_FILES['image']['size'];
    $file_tmp =$_FILES['image']['tmp_name'];
    $file_type=$_FILES['image']['type'];
    @$file_ext=strtolower(end(explode('.', $_FILES['image']['name'])));

    $extensions= array("jpeg","jpg","png");
    
    if (in_array($file_ext, $extensions)=== false) {
        $errors[]="extension not allowed, please choose a JPEG or PNG file.";
    }
    if ($file_size > 2097152) {
        $errors[]='File size must be excately 2 MB';
    }
    
    if (empty($errors)==true) {
        $file_path="img/candidates";
        if (!file_exists($file_path)) {
            mkdir($file_path, 0777, true);
        }
        $con->query("INSERT INTO candidates VALUES('','$cname',$pname,'0')");
        // echo "<pre>";
        // print_r($con);
        // echo "</pre>";


        move_uploaded_file($file_tmp, $file_path."/".$cname.".".$file_ext);
         header('location:cpanel.php');
    } else {
        print_r($errors);
    }
}
