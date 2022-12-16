<?php
include 'config.php';
$post_id = $_GET['id'];
$cat_id = $_GET['catid'];

//for image dekete in folder
$sql1 = "SELECT * FROM `post` WHERE post_id={$post_id}";
$result = mysqli_query($con, $sql1) or die("failed");
$row=mysqli_fetch_assoc($result);

unlink("upload/".$row['post_img']);
//array print check
// echo"<pre>";
// print_r($row);
// echo "</pre>";
// die();
$sql = "DELETE FROM `post` WHERE post_id={$post_id};";
$sql.= "UPDATE `category` SET post= post - 1 WHERE category_id={$cat_id}";
if(mysqli_multi_query($con,$sql)){
    header("Location:http://localhost/Assignment1/admin/post.php");

}else{
    echo "failed";
}


?>