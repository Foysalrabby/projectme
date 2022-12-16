<?php
include 'config.php';
if(empty($_FILES['new-image']['name'])){
//user jodi new image dey
$file_name=$_POST['old-image'];

}else{

    $errors = array();
    $file_name = $_FILES['new-image']['name'];
    $file_size =$_FILES['new-image']['size'];
    $file_tmp =$_FILES['new-image']['tmp_name'];
    $file_type=$_FILES['new-image']['type'];
    $sub_ext= explode('.', $_FILES['new-image']['name']);
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
$post_id=$_POST['post_id'];
$title = $_POST['post_title'];
$description = $_POST['postdesc'];
$category = $_POST['category'];
$post_img = $_POST['old-image'];

 $sql = "UPDATE `post` SET title='{$title}',description='{$description}',
category='{$category}',post_img='{$file_name}' WHERE post_id={$post_id}";  //post_img='{$file_name} //file name hobe two input                                                                          
$result=mysqli_query($con,$sql);

if($result == true){
    header("Location:http://localhost/Assignment1/admin/post.php");

}else{

    echo " uncessful";
}




?>