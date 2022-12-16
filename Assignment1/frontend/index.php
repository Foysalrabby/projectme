<!doctype html>
<html lang="en">

<head>
    <title>Hard Rock Solution - Song Lyric App</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Custom css -->
    <link rel="stylesheet" href="style1.css">
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
            <div class="search-bar col-md-6 mx-auto">
                <h1 class="text-center">Hard Rock Lyric Search</h1>
                <div class="search-box my-5">
                    <input id="search-field" type="text" class="form-control" placeholder="Enter your artist song name">
                    <button onclick="searchSongs()" class="btn btn-success search-btn">Search</button>
                </div>
            </div>
            <!-- Single Lyrics -->
            <h3 id="error-message" class="text-danger"></h3>
            <div id="song-lyrics" class="single-lyrics text-center">
                
            </div>
            <div id="song-container" class="search-result col-md-8 mx-auto py-4">
                
            </div>
        </main>
    </div>
    <!-- Optional JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <!-- Custom Script Here -->
    <script src="rafi.js"></script>

</body>

</html>