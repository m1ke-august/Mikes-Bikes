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
        <link href="../style.css" rel="stylesheet" type="text/css">
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
                          <p class="dropdown-item dropdownmenutext" href="includes/bikes.php">Bikes</p>
                          <p class="dropdown-item dropdownmenutext" href="#">Parts</p>
                          <p class="dropdown-item dropdownmenutext" href="#">Gear & Accessories</p>
                        </li>
                        <li><a class="a" href="includes/trails.php">Trails</a></li>
                        <li><a class="a" href="includes/tipsandtricks.php">Tips & Tricks</a></li>
                    </ul>
                </nav>
                <a href="database/logout.php"><button class="button">Logout</button></a>

            </div>
        </header>


            <!-- Template Code here --> 
                   
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class=" carouselsize carousel-inner" >
            <div class="carousel-item active ">
            <img class="d-block w-100 carousel" src="../images/moreinfo/stumpjumper/stumpjumper1.webp" alt="First slide">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100 carousel" src="../images/moreinfo/stumpjumper/stumpjumper2.webp" alt="Second slide">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100 carousel" src="../images/moreinfo/stumpjumper/stumpjumper3.webp" alt="Second slide">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100 carousel" src="../images/moreinfo/stumpjumper/stumpjumper4.webp" alt="Second slide">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100 carousel" src="../images/moreinfo/stumpjumper/stumpjumper5.webp" alt="Second slide">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100 carousel" src="../images/moreinfo/stumpjumper/stumpjumper6.webp" alt="Second slide">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100 carousel" src="../images/moreinfo/stumpjumper/stumpjumper7.webp" alt="Second slide">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100 carousel" src="../images/moreinfo/stumpjumper/stumpjumper8.webp" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev carousel-control-prev2" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next carousel-control-next2" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        </div>

        <div>
            <h class="heading">Stumpjumper Evo Pro</h>
            <p class="description" >The Stumpjumper EVO Pro is a testament to full-gas trail performance. With an all-new design, from its S-Sizing geometry with an adjustable head tube angle, to its 150mm of shred-ready travel, this thing is a full-on ripper. And to top it off, it’s build has been hand-picked to keep overall weight low and stoke high. Rider-First Engineered™ frames use a size-specific approach to ride characteristics that ensures benchmark handling and flawless performance, regardless of frame or rider size. Whether you’re a jump-happy grom riding an S1, or a DH-fiend giant in need of the lengthy S6, you’ll experience the same ride traits – rail-sharp cornering and balanced front and rear stiffness – at the lightest-possible weight. The Stumpjumper costs $15,600.00 however you get a bike that is durable and modern while still obtaining good riding characteristics and can fly round berms at high speed. </p>
        </div>
        <div>
            <a href="#"><button class="buynow">Buy Now</button></a>
            <a><button onclick="history.back()" class="goback">Go Back</button></a>
        </div>
</html>