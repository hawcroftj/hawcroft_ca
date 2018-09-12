<?php
    require_once 'connect.php';
    $posts_query = pg_query($db_conn, "SELECT * FROM posts");
    $posts = pg_fetch_all($posts_query);
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
        <?php if(!empty($posts)): ?>
            <div class="container">
            <!-- Add post(s) to the container -->
            <?php foreach($posts as $blog): ?>
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