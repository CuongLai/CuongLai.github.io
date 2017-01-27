<!DOCTYPE html>
<html lang="en">
<head>
  <title>Currently Watching - Personal Site</title>
  <meta charset="utf-8">
  <meta name="author" content="Cuong Lai">
  <meta name="description" content="My personal stuff">

  <link rel="stylesheet"
  	  href="style.css"
        media="screen">
  <link rel="shortcut icon">

  <link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet">

  <!--[if lt IE 9]>
      <script src="//html5shim.googlecode.com/sin/trunk/html5.js"></script>
  <![endif]-->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

</head>

<body>

    <div class="hidden-menu">
      <a href="#" class="toggle-nav-btn"><img src='images/menu.png' alt='menu'></a>
      <a href="main.php" class="logo2"><img src="images/logo.png" alt="logo"></a>
    </div>
    <nav class="toggle hidden">
      <ul>
         <a href="main.php" class="logo"><img src="images/logo.png" alt="logo"></a>
         <a href='#' class='exit-btn'><img src='images/exitbtn.png' alt='exitbtn'></a>
         <li id='hidden-menu-border'><a class="current" href="main.php">Currently Watching</a></li>
         <li><a href="watched.php">Watched</a></li>
         <li><a href="https://myanimelist.net/" target="_blank">My Anime List</a></li>
         <li><a href="http://anichart.net/airing" target="_blank">Anichart</a></li>
      </ul>
    </nav>

  <div class="content">
    <img class="banner" src="images/currentlybanner.png" alt="banner">
    <div class="top">
      <p class="title">Currently Watching</p>
    </div>

    <div class="text">
      <a class="card" href="http://www.crunchyroll.com/naruto-shippuden">
        <img class='watch' src="http://img1.ak.crunchyroll.com/i/spire1/958243dc68ae929a6b9cb834165112471456969325_full.jpg" alt="shippuden">
        <p>Naruto Shippuden</p>
      </a>

      <a class="card" href="http://www.crunchyroll.com/masamune-kuns-revenge">
        <img class='watch' src="http://img1.ak.crunchyroll.com/i/spire1/ffa692e515077369d17480ff259d7d5e1483617006_full.jpg" alt="masamune">
        <p>Masamune-kun no Revenge</p>
      </a>

      <a class="card" href="http://kissanime.ru/Anime/Kaichou-wa-Maid-sama">
        <img class='watch' src="https://myanimelist.cdn-dena.com/images/anime/6/25254.jpg" width="298px" height="445px" alt="maidsama">
        <p>Kaichou wa Maid-Sama!</p>
      </a>
    </div>

  </div>


  <script type="text/javascript">
  $(document).ready(function(){
    $(".toggle-nav-btn").click(function(){
      $(".toggle").toggleClass('hidden show');
    });
    });
  $(document).ready(function(){
    $(".exit-btn").click(function(){
      $(".toggle").toggleClass('show hidden');
    });
    });
  </script>

</body>

<footer>
  <p>Created by Cuong Lai.</p>
</footer>

</html>
