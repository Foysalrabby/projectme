<?php
include 'config.php';
session_start();


if(isset($_FILES['fileToUpload'])){

      $errors = array();
      $file_name = $_FILES['fileToUpload']['name'];
      $file_size =$_FILES['fileToUpload']['size'];
      $file_tmp =$_FILES['fileToUpload']['tmp_name'];
      $file_type=$_FILES['fileToUpload']['type'];
      $sub_ext= explode('.', $_FILES['fileToUpload']['name']);
      $file_ext=strtolower(end($sub_ext));

      $expensions= array("jpeg","jpg","png");
      if(file_exists($file_name)) {
        echo "Sorry, file already exists.";
        }
      if(in_array($file_ext,$expensions) === false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }

      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }

      if(empty($errors)==true){
        move_uploaded_file($file_tmp,"upload/".$file_name);
        echo "Success";
         echo "<script>window.close();</script>";

      }

      else{
         print_r($errors);
      }

}

$tittle = $_POST['post_title'];
$post_desc = $_POST['postdesc'];
$post_cat= $_POST['category'];
$post_date = date('d M,Y');
$author = $_SESSION['user_id'];

$sql="INSERT INTO `post`( title, description, category, post_date, author, post_img) 
VALUES ('{$tittle}','{$post_desc}','{$post_cat}','{$post_date}','{$author}','{$file_name}');";
$sql .= "UPDATE`category` SET post = post + 1 WHERE category_id = {$post_cat}";

if(mysqli_multi_query($con,$sql)){
    header("Location:http://localhost/Assignment1/admin/post.php");

}else{
    echo "<div class='alert alert-danger'>uncessful</div>";
}



?>

