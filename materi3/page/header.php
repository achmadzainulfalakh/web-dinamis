<?php
$title="Material Design Bootstrap";
$brand="MDB";
$linkfacebook="https://www.facebook.com/mdbootstrap";
$linktwitter="https://twitter.com/MDBootstrap";
$topmenu=array(
    array(
        "title"=>"Home",
        "link"=>"index.php"
        ),
    array(
        "title"=>"About MDB",
        "link"=>"https://mdbootstrap.com/material-design-for-bootstrap/"
        ),
    array(
        "title"=>"Free download",
        "link"=>"https://mdbootstrap.com/getting-started/"
        ),
    array(
        "title"=>"Free tutorials",
        "link"=>"https://mdbootstrap.com/bootstrap-tutorial/"
        )   
    );
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php print $title; ?></title>
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="css/mdb.min.css" rel="stylesheet">
        <!-- Your custom styles (optional) -->
        <link href="css/style.min.css" rel="stylesheet">
    </head>

    <body>

        <!--Main Navigation-->
        <header>

            <!-- Navbar -->
            <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
                <div class="container">

                    <!-- Brand -->
                    <a class="navbar-brand waves-effect" href="https://mdbootstrap.com/material-design-for-bootstrap/" target="_blank">
                        <strong class="blue-text"><?php print $brand; ?></strong>
                    </a>

                    <!-- Collapse -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Links -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <!-- Left -->
                    <ul class="navbar-nav mr-auto">
                        <?php 
                        foreach ($topmenu as $key => $val ) { ?>
                            <li class="nav-item">
                                <a class="nav-link waves-effect" href="<?php print $val["link"] ?>" ><?php print $val["title"] ?></a>
                            </li>
                        <?php
                        }
                        ?>
                </ul>

                <!-- Right -->
                <ul class="navbar-nav nav-flex-icons">
                    <li class="nav-item">
                        <a href="<?php print $linkfacebook; ?>" class="nav-link waves-effect" target="_blank">
                            <i class="fa fa-facebook"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php print $linktwitter; ?>" class="nav-link waves-effect" target="_blank">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </li>
                </ul>

            </div>

        </div>
    </nav>
    <!-- Navbar -->

</header>
    <!--Main Navigation-->