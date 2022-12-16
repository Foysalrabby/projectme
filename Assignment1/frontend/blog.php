<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hard Rock Solution - Song Lyric App</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Custom css -->
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
<nav class="navbar navbar-expand-lg navbar-dark ">
  <div class="container-fluid">
  <a class="navbar-brand" href="index.php">
                <img src="images/logo.png" alt="Hard Rock Solution" >
            </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ms-auto mb-2 mb-lg-0" id="ulnavbar">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="blog.php">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>  
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="login.php">Login</a>  
        </li> -->
        <!-- <li class="nav-item">
          <a class="nav-link" href="#">Logout</a>
        </li> -->
      </ul>
      
    </div>
  </div>
</nav>
       

  <main class="content-area"> 
   <section class="mt-3 pb-5" id="home1">
    <div class="row">
        <div class="col-md-12">
        <h2 class="text-center pb-5"> Famous sports news </h2>
            <hr>
        </div>
    </div>
    <div class="row">
      <?php
      include 'config.php';

      $limit=3;
      if(isset($_GET['page'])){
        $page = $_GET['page'];

      }
      else{
          $page = 1;
      }
      
      $offset = ($page - 1) * $limit;
      $sql = "SELECT * FROM `post`
               LEFT JOIN `category` ON `post`.category=`category`.category_id
               LEFT JOIN `user` ON `post`.author=`user`.user_id
               ORDER BY post_id DESC LIMIT {$offset},{$limit}";
              $result = mysqli_query($con, $sql) or die("failed");
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {

      ?>

        <div class="col-md-4">
         <div class="card mt-3" style="width: 18rem;">
        <img src="../admin/upload/<?php echo $row['post_img']; ?>" alt="pic1" height="200px"/>
        <div class="card-body"id="cradbody1" >
          <p><span><a href="single-blogpost.php?id=<?php echo $row['post_id']; ?>"><i class="fa fa-user"></i><?php echo $row['username']; ?></a> </span> <span class="text-dark"><i class="fa-regular fa-calendar-days"></i><?php echo $row['post_date']; ?></span></p>
          <p class="card-text text-dark"><a href="single-blogpost.php?id=<?php echo $row['post_id']; ?>"><?php echo $row['title']; ?></a></p>
           <button class="btnhero"><a href="single-blogpost.php?id=<?php echo $row['post_id']; ?>"> Read more </a></button>
        </div>
        </div>
        </div>
             <?php
        }

             ?>
        </div>
          <?php

        }

        $sql1 = "SELECT * FROM `post`" ;
                    $result1 = mysqli_query($con, $sql1) or die("failed");
                    if(mysqli_num_rows($result1)>0){
                        $total_record=mysqli_num_rows($result1);
                        $total_page=ceil($total_record/$limit);
                        echo "<ul class='pagination admin-pagination'>";
                        if($page >1){
                            echo "<li><a href='blog.php?page=".($page-1)."'>prev</a></li>";
                        }
                       
                     for ($i = 1; $i<=$total_page; $i++) {
                        if($i == $page){
                          $active = "active";
                        }
                        else{
                          $active = "";
                        }
                      echo "<li class='{$active}'><a href='blog.php?page=$i'>$i</a></li>";
                     }
                     if($page<$total_page){
                        echo "<li><a href='blog.php?page=".($page+1)."'>next</a></li>";
                     }
                     
                     echo "</ul>";

                    }

        
          ?>

          <!-- <ul class='pagination admin-pagination'>
                      <li class="active"><a>1</a></li>
                      <li><a>2</a></li>
                      <li><a>3</a></li>
                  </ul> -->
        
      

   </section>
            



   </main>
    </div>
  <section class="py-5 text-center" id="lastfoot">

<p>FOLLOW US!</p>
<i class="fa-brands fa-facebook"></i>
<i class="fa-brands fa-twitter"></i>
<i class="fa-brands fa-google-plus"></i><br>
<a href="https://www.facebook.com/"> Foysal Rabby </a>

</section>

    <!-- Optional JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <!-- Custom Script Here -->

</body>
</html>