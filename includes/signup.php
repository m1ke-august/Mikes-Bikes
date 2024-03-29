<?php
	
session_start();	
	
	
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Home</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link rel="shortcut icon" type="image/x-icon" href="../images/favicon.png">
        <link href="../style.css" rel="stylesheet" type="text/css">

    </head>
    <body class="background">
        <header> 
            <div class="container clearfix">

                <img src="../images/logo.png" alt="logo" class="logo">
                <nav>
                    <ul>
                        <li><button class="btn dropdown-toggle dropdownbtn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Online Store
                         </button>
                         <div class="dropdown-menu dropdownbtnoptions" aria-labelledby="dropdownMenuButton">
                           <p class="dropdown-item dropdownmenutext" href="#">Bikes</p>
                           <p class="dropdown-item dropdownmenutext" href="#">Parts</p>
                           <p class="dropdown-item dropdownmenutext" href="#">Gear & Accessories</p>
                         </li>
                        <li><a href="trails.php">Trails</a></li>
                        <li><a href="tipsandtricks.php">Tips & Tricks</a></li>
                    </ul>
                </nav>
                

            </div>
        </header>
        <p5 class="p5">Sign-Up</p5>
        <form class="formalign" action="../database/connect.php" method="post" >
            <small id="emailHelp" class="form-text warningtxt">We'll never share your login credentials with others trust.</small>
            
            <div class="form-group">
                <label for="exampleInputFirstName1" class="logintxt">First name</label>
                <input type="name" class="form-control" id="firstName" placeholder="Enter First Name" name="firstName">
            </div>
            <div class="form-group">
                <label for="exampleInputLastName1" class="logintxt">Last name</label>
                <input type="name" class="form-control" id="lastName" placeholder="Enter Last Name" name="lastName"> 
            </div>
            <div class="form-group">
                <label for="user" class="logintxt">Username</label>
                <input type ="user" class="form-control" id="user"  name="user" placeholder="Enter Username">
            </div>
            <div class="form-group">
                <label for="email" class="logintxt">Email</label>
                <input type ="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" placeholder="Enter Email">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1" class="logintxt">Mobile Number</label>
                <input type="number" class="form-control" id="number" placeholder="number" name="mobile">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1" class="logintxt">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Password" name="password">
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label logintxt" for="exampleCheck1">Receive email notifications and offers</label>
                
            </div>
            <a><button type="submit" class="btn signupbtn" >Sign Up</button></a>
        </form>
      
    </body>
</html>