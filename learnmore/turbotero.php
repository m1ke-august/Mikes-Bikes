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
            <img class="d-block w-100 carousel" src="../images/moreinfo/turbotero/turbotero1.webp" alt="First slide">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100 carousel" src="../images/moreinfo/turbotero/turbotero2.webp" alt="Second slide">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100 carousel" src="../images/moreinfo/turbotero/turbotero3.webp" alt="Third slide">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100 carousel" src="../images/moreinfo/turbotero/turbotero4.webp" alt="Third slide">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100 carousel" src="../images/moreinfo/turbotero/turbotero5.webp" alt="Third slide">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100 carousel" src="../images/moreinfo/turbotero/turbotero6.webp" alt="Third slide">
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
            <h class="heading">Turbo Tero 5.0</h>
            <p class="description" >The new Turbo Tero is an electric mountain bike equipped for everyday rides. A mountain bike that you can commute on. A commuter you can take touring. A touring bike that you can haul freight with. Whatever you need it to be, for wherever you want to go. A true do-it-all superhero, Tero combines adaptable utility with World Champion mountain bike DNA and category-leading electric pedal assist. Tero’s strengths are the fusion of power, confidence, and versatility. Developed in concert together, these attributes result in a strong, efficient, adaptable bike that is a joy to ride everywhere, from city streets to backcountry trails. This bike comes with a Turbo Full Power 2.2 Motor and 710 Wh Battery that will give you a good amount of riding time and if the battery dies you can still keep going. For the hefty price of $9,000.00 you get a bike that saves you time and effort and fits in with the modern times.</p>
        </div>
        <div>
            <a href="#"><button class="buynow">Buy Now</button></a>
            <a><button onclick="history.back()" class="goback">Go Back</button></a>
        </div>
</html>