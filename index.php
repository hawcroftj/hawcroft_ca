<?php
    
?>

<!DOCTYPE html>
<html lang="en" class="colour-p">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Personal Website for Jadon Hawcroft">
        <meta name="keywords" content="Jadon,Hawcroft">
        <meta name="author" content="Jadon Hawcroft">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/custom.css">
        <title>Welcome | Hawcroft</title>
    </head>
    
    <body id="body" class="colour-p">
        <?php include('nav.php'); ?>
        <div id="banner" class="jumotron jumbotron-fluid text-center border-top border-bottom border-dark pt-1 pb-1 colour-l1 text-d2">
            <h1 class="display-1 font-weight-light">hawcroft.ca</h1>
            <p id="welcome-message" class="lead">My personal JavaScript sandbox. Thanks for stopping by!</p>
        </div>
        <div class="container rounded mt-5 p-5">
            <div class="row">
                <div class="col-sm-4 text-center text-bulge">
                    <a href="https://www.linkedin.com/in/jadon-hawcroft-a66013115/">
                        <img src="res/LinkedIn.png"/>
                    </a>
                    <p class="text-l2">LinkedIn</p>
                </div>
                <div class="col-sm-4 text-center text-bulge">
                    <a href="https://github.com/hawcroftj">
                        <img src="res/GitHub.png"/>
                    </a>
                    <p class="mt-2 text-l2">GitHub</p>
                </div>
                <div class="col-sm-4 text-center text-bulge">
                    <a href="#">
                        <img src="res/jh_120.png"/>
                    </a>
                    <p class="mt-2 text-l2">Contact</p>
                </div>
            </div>            
        </div>
        <?php include('footer.php'); ?>
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/utility.js"></script>
        <script src="js/background_appearance.js"></script>
    </body>
</html>
