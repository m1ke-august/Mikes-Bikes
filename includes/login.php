
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
                        <li><a href="trails.html">Trails</a></li>
                        <li><a href="tipsandtricks.html">Tips & Tricks</a></li>
                    </ul>
                </nav>
                <a href="login.html"><button class="button">Login</button></a>

            </div>
        </header>
        <p5 class="loginhead">Login</p5>
        <form action="../validation.php" method="post" class="loginform ">
            <small id="emailHelp" class="form-text warningtxt">We'll never share your login credentials with others.</small>

            <div class="form-group">
                <label for="user" class="logintxt">Username</label>
                <input type ="user" class="form-control" id="user" name="user" placeholder="Enter Username">
            </div>
            <div class="form-group">
                <label for="password" class="logintxt">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label logintxt" for="exampleCheck1">Not a robot</label>
                <a href="signup.php" class="anotherbutton">I don't have an account</a>                
            </div>
            <a><button type="submit" class="btn loginbtn">Login</button></a>
        </form>
      
    </body>
</html>