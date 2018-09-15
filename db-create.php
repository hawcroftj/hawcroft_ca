<?php
    // connec to db 
    require_once 'db-connect.php';

    if($_POST) {
        if($_POST['cancel']) {
            // back to blog page
            header("Location: blog.php");
            die();
        } else {
            // if($_POST["title"] && $_POST["content"]) {
            //     $title = $_POST["title"];
            //     $content = $_POST["content"];
            //     // display the title and content
            //     $display_post = true;
    
            //     // generate date
            //     $created_date = date("Y-m-d H:i:s");
            //     $created_at = (string)$created_date;
    
            //     // prepare the new post
            //     $new_post = array(
            //         'title' => $_POST['title'],
            //         'content' => $_POST['content'],
            //         'created_at' => $created_at
            //     );
    
            //     // insert new post into db using pg_insert
            //     $insert = pg_insert($db_conn, 'posts', $new_post);
            //     if($insert) {
            //         echo "Post saved!";
            //     } else {
            //         echo pg_last_error($db_conn);
            //     }
            // }
        }
    }

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
        <title>New Blog | Hawcroft</title>
    </head>

    <body id="body" class="colour-p">
    <?php include('nav.php'); ?>
    <div id="banner" class="jumotron jumbotron-fluid text-center border-top border-bottom border-dark pt-1 pb-1 colour-l1 text-d2">
        <h1 class="display-1 font-weight-light">New Blog Post</h1>
    </div>

    <div class="container">
        <div class="row mt-2 colour-l1">
            <div class="col-sm-10 offset-1 p-2 colour-l1">
                <form action="db-create.php" method="post">
                    <div class="form-group">
                        <label for="title">Blog Title:</label>
                        <input type="text" class="form-control form-control-lg" name="title" />
                    </div>
                    <div class="form-group">
                        <label for="content">Content:</label>
                        <input type="text" class="form-control" name="content" />
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-4 offset-2">
                            <input type="submit" class="form-control" value="Submit" />
                        </div>
                        <div class="col-sm-4">
                            <input type="submit" class="form-control" name="cancel" value="Cancel" />
                        </div>
                    </div>
                </form>
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