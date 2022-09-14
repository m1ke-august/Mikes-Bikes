<?php
	
session_start();
if(!isset($_SESSION['user'])){
	header('location:includes/login.php');
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Mikes Bikes</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        
        <!-- Favicon and Style Sheet Links-->
        <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
        <link href="style.css" rel="stylesheet" type="text/css">

    </head>
    <body class="background">
        <header> 
            <div class="container clearfix">

                <img src="images/logo.png" alt="logo" class="logo">
                <nav>
                    <ul>
                        <li><button class="btn dropdown-toggle dropdownbtn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           Online Store
                        </button>
                        <div class="dropdown-menu dropdownbtnoptions" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item dropdownmenutext" href="includes/bikes.php">Bikes</a>
                          <a class="dropdown-item dropdownmenutext" href="#">Parts</a>
                          <a class="dropdown-item dropdownmenutext" href="#">Gear & Accessories</a>
                        </li>
                        <li><a class="a" href="includes/trails.php">Trails</a></li>
                        <li><a class="a" href="includes/tipsandtricks.php">Tips & Tricks</a></li>
                    </ul>
                </nav>
                <a href="database/logout.php"><button class="button">Logout</button></a>

            </div>
        </header>
        <header class="container carouselbg carouselpos">
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators" >
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active ">
                  <img class="d-block w-100 carousel" src="images/carousel1.png" alt="First slide">
                  <div class="carousel-caption d-none d-md-block">
                    <a href="includes/bikes.php"><button class="carouselshopbtn">Shop Bikes</button></a>
                  </div>
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100 carousel" src="images/carousel2.png" alt="Second slide">
                  <div class="carousel-caption d-none d-md-block">
                    <a href="#"><button class="carouselshopbtn">Shop Accessories</button></a>
                  </div>                </div>
                <div class="carousel-item">
                  <img class="d-block w-100 carousel" src="images/carousel3.png" alt="Third slide">
                  <div class="carousel-caption d-none d-md-block">
                    <a href="#"><button class="carouselshopbtn">Shop Parts</button></a>
                  </div>
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only"></span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only"></span>
              </a>
            </div>
      </header>
      <div class="container bodytext">
        <div class="col-sm-6 float-left historybox">
          <h2 class="historyheader">Mikes Bikes History</h2>
          <p1 class="history">Mikes Bikes was established in 2022 by 3 Rongotai College Year 13 students as a project for their programming class. These students had the ambition to make a mountain bike website that could be a one stop shop for all riders with skill levels from beginners to professionals. The students goal for the site was to ensure that all riders are able to benefit from the site with ease and don’t have to go to other sources in order to find products or relevant information about mountain biking. </p1>
        </div>
        <div class="col-sm-6 float-right sitebox">
          <h2 class="historyheader">What is on our site</h2>
          <p1 class="siteinfo">On Mikes Bikes, we ensure a quality service. This is what we do:</p1>
          <li class="siteinfo">We have an Online Store where you can buy bikes, parts and accessories.</li>
          <li class="siteinfo">We have a Trails page where you can find trails across Wellington to ride</li>
          <li class="siteinfo">We have a Tips & Tricks page where you can learn new skills that can help with your riding</li>
          <li class="siteinfo">We have reviews that allow you to be able to read and write opinions on different products and trails</li>
        </div>
      </div>
      
    </body>
    
</html>