<?php

if ($_SESSION['role'] == '0') {
    header("Location:http://localhost/Assignment1/admin/post.php");

}
include 'config.php';
$user_id=$_GET['id'];
$sql="DELETE FROM `user` WHERE user_id='{$user_id}'";
$result=mysqli_query($con,$sql) or die("unsuceessful");

if($result == true){

    header("Location:http://localhost/Assignment1/admin/users.php");
}
else{

    echo "<p style='color:red; text-align:center; margin:10px 0px;'> No record found</p>";
}



?>