<?php include("init.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?=$base_url?>../../bootstrap/bootstrap.ltr.min.css">
    <link rel="stylesheet" href="<?=$base_url?>css/main.css">
    <script src="<?=$base_url?>../../bootstrap/bootstrap.bundle.min.js"></script>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary position-sticky top-0" style="z-index:10">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link <?=$page_link=="home.php"?"active":""   ?>" aria-current="page" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?=$page_link=="about.php"?"active":""   ?>" href="about.php">About</a>
        </li>
        
      </ul>
     
    </div>
  </div>
</nav>