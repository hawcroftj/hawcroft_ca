<?php

//require('connect.php');

$test_data = [
    // "blog1" => [
    //     "title" => "Under Development",
    //     "content" => "I'm working on getting a database set up for the blogs page. Everything you see here is a work in progress."
    // ],
    // "blog2" => [
    //     "title" => "Test Blog Post",
    //     "content" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. In luctus maximus tincidunt. Ut scelerisque imperdiet dui vitae feugiat. Donec ullamcorper, tellus vel rhoncus tincidunt, sapien velit lacinia purus, et luctus sem lacus eget ex. Donec non consectetur quam. Quisque at elit et tortor dapibus rhoncus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus at urna id quam tincidunt dictum vel at erat. Integer tellus velit, facilisis eu nunc at, aliquet eleifend nibh. Donec tempor lacus at sem rutrum semper. Vestibulum libero risus, hendrerit quis libero in, auctor vestibulum eros. Etiam porta accumsan quam, et pulvinar est pulvinar a. Maecenas et eros in ante pharetra consequat vel eget nibh. Phasellus fermentum volutpat metus ut elementum. Sed ligula mi, laoreet sit amet maximus tincidunt, pretium ac purus."
    // ]
]

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
        <title>Work in Progress | Hawcroft</title>
    </head>

    <body id="body" class="colour-p">
        <?php include('nav.php'); ?>
        
        <!-- Temporary 'Work in Progress' message -->
        <div id="banner" class="jumotron jumbotron-fluid text-center border-top border-bottom border-dark pt-1 pb-1 colour-l1 text-d2">
            <h1 class="display-1 font-weight-light">Under Construction</h1>
            <p class="lead">This page will hopefully display blog posts someday (if I can successfully configure a database).
                Feel free to check back here for updates - everything is right on schedule.*</p>
            <p>*there is currently no schedule.</p>
        </div>

        <!-- Check for blog posts -->
        <?php if(!empty($test_data)): ?>
            <div class="container">
            <!-- Add post(s) to the container -->
            <?php foreach($test_data as $blog): ?>
                <div class="row mt-2 colour-l1 blog-entry">
                    <div class="col-sm-10 offset-1 p-2 colour-l1">
                        <p><?= $blog["title"] ?></p>
                        <p><?= $blog["content"] ?></p>
                    </div>
                </div>
            <?php endforeach ?>
            </div>
        <?php endif ?>

        <?php include('footer.php'); ?>
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/utility.js"></script>
        <script src="js/background_appearance.js"></script>
    </body>
</html>