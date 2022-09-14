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
            <img class="d-block w-100 carousel" src="../images/moreinfo/rockhopper/rockhopper1.webp" alt="First slide">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100 carousel" src="../images/moreinfo/rockhopper/rockhopper2.webp" alt="Second slide">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100 carousel" src="../images/moreinfo/rockhopper/rockhopper3.webp" alt="Third slide">
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
            <h class="heading">Rockhopper 27.5</h>
            <p class="description" >Better performance. Better value. Better Rockhopper. By tapping the fit and handling advantages of pairing each rider with their ideal suspension that works its hardest for everyone thanks to our size-specific Rx Tune, we’ve baked in added performance to the all-new Rockhopper. Shimano and MicroSHIFT team up for drivetrain duties with a robust 2x8 drivetrain that can handle everything you’re throw down while confident braking from Radius CX7 mechanical disc brakes seals the deal of the century. A heart of gold, presented in our lightweight yet durable Premium A1 Aluminum, the Rockhopper’s butted aluminum frame features hydroformed top and downtubes in order to keep weight low and strength high, all while providing increased standover clearance, slick internal cable routing and dropper-post compatibility. For the price of $950.00 you get a entry level hard tail that is fun to ride.</p>
        </div>
        <div>
            <a href="#"><button class="buynow">Buy Now</button></a>
            <a><button onclick="history.back()" class="goback">Go Back</button></a>
        </div>
</html>