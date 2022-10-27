<?php
include'config/connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Always force latest IE rendering engine or request Chrome Frame -->
        <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <![endif]-->
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="utf-8">

    <!-- Site Title -->
    <title>Wream</title>
    
    <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">


        <!--
        Google Fonts
        ============================================= -->

        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,700italic,300italic">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,300,700">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Arvo:400,700">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Dosis:800,700">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Great+Vibes">
        
        
        <!--
        CSS
        ============================================= -->
        <link type="text/css" rel="stylesheet" href="css/font-awesome.min.css">
        <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
        <link type="text/css" rel="stylesheet" href="css/jquery.bxslider.css">
        <link type="text/css" rel="stylesheet" href="js/vendor/owl.carousel.css">
        <link type="text/css" rel="stylesheet" href="css/magnific-popup.css">
        <link type="text/css" rel="stylesheet" href="css/lightbox.css">
        <link type="text/css" rel="stylesheet" href="css/icomoon.css">
        <link type="text/css" rel="stylesheet" href="css/flaticon.css">
        <link type="text/css" rel="stylesheet" href="css/supersized.css">
        <link type="text/css" rel="stylesheet" href="css/bootstrap-timepicker.css">
        <link type="text/css" rel="stylesheet" href="css/jquery-ui.min.css">
        <link type="text/css" rel="stylesheet" href="css/animate.css">
        <link type="text/css" rel="stylesheet" href="css/multiscroll.css">
        <link type="text/css" rel="stylesheet" href="css/selectize.default.css">
        <link type="text/css" rel="stylesheet" href="css/jquery.fullPage.css">
        <link type="text/css" rel="stylesheet" href="css/bbpress.css">
        <link type="text/css" rel="stylesheet" href="css/jquery.timepicker.css">
        <link type="text/css" rel="stylesheet" href="css/bbp-theme.css">
        <link type="text/css" rel="stylesheet" href="css/buddypress.css">
        <link type="text/css" rel="stylesheet" href="css/buddypress-theme.css">
        <link type="text/css" rel="stylesheet" href="syntax-highlighter/scripts/prettify.min.css">
        <!-- Shortcodes main stylesheet -->
        <link type="text/css" rel="stylesheet" href="shortcodes/css/prettyPhoto.css">
        <link type="text/css" rel="stylesheet" href="shortcodes/css/eislideshow.css">
        <link type="text/css" rel="stylesheet" href="shortcodes/css/nivo-slider.css">
        <link type="text/css" rel="stylesheet" href="shortcodes/css/liteaccordion.css">
        <link type="text/css" rel="stylesheet" href="shortcodes/css/flexslider.css">
        <link type="text/css" rel="stylesheet" href="shortcodes/css/iconmoon.css">
        <link type="text/css" rel="stylesheet" href="shortcodes/css/slicebox.css">
        <link type="text/css" rel="stylesheet" href="shortcodes/css/camera.css">
        <link type="text/css" rel="stylesheet" href="shortcodes/css/main.css">
        <link type="text/css" rel="stylesheet" href="shortcodes/css/media-queries.css">
        <!-- Main Stylesheet -->
        <link type="text/css" rel="stylesheet" href="css/main.css">
        <!-- CSS media queries -->
        <link type="text/css" rel="stylesheet" href="css/media-queries.css">
        <link id="themeColorChangeLink" type="text/css" rel="stylesheet" href="css/colors/c0.css">
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->

  </head>
  <body class="bordered">

    <!-- Preloader Two -->
    <div id="preloader">
        <div class="spinner">
            <div class="rect1"></div>
            <div class="rect2"></div>
            <div class="rect3"></div>
            <div class="rect4"></div>
            <div class="rect5"></div>
        </div>
    </div>
    
    <div id="wrapper" class="main-wrapper">
        <!-- 
        Navigation
        ==================================== -->
        <header id="head" class="navbar-default sticky-header">
            <div class="container">
                <div class="mega-menu-wrapper border clearfix">
                    <div class="navbar-header">
                        <!-- responsive nav button -->
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!-- /responsive nav button -->                    
                        <!-- logo -->
                        <a class="navbar-brand" href="index.php">
                            <img src="img/icons/wream.png" style="width: 80px;" alt="Eydia">
                        </a>
                        <!-- /logo -->
                    </div>
                    <!-- main nav -->
                    <nav class="collapse navbar-collapse navbar-right">
                        <ul class="nav navbar-nav">
                            <li>
                                <a href="login.php">LOGIN</a>
                            </li>
                            <li class="current mega-menu">
                                <a href="registration.php">Sign up</a>
                            </li>
                        </ul>
                    </nav>
                    <!-- /main nav -->
                </div>                
            </div>
        </header>
        <div class="breadcrumb-area clearfix">
            <div class="container">
                <h2 class="page-title">Sign up</h2> to Wream
            </div>
        </div> <!-- end .breadcrumb-area -->

        <!--
        Contact
        ==================================== -->
        <section class="contact2">
            <?php
            if (isset($_GET['result'])) {
                if ($_GET['result']=='ok') {
                    ?>
                    <div style="float: right;">
                        <h5 style="color: green"><b>Registration successful.<a href="login.php"><u>Log in</u></a> and write</b></h5></div><hr>
                        <?php }else{ ?>
                        <div style="float: right;">
                            <h5 style="color: red"><b>Registration unsuccessful.Try again</b></h5></div><hr>
                            <?php }} ?>
                            <div class="container">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-6 item_left">
                                        <h3 class="subtitle">Information on Wream</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate eligendi enim iusto tenetur, perspiciatis id tempore aliquid hic ducimus debitis natus quisquam commodi sint voluptas nesciunt laboriosam repellat laudantium placeat quidem quia velit fuga veritatis. Expedita voluptatem vitae totam iusto sequi odio dolor, soluta, omnis laboriosam labore minus excepturi reprehenderit consequuntur assumenda minima, ipsa? Molestias ex quod illum ea tempora quas quos quam ullam, perferendis, voluptatem quo aperiam dolorum fuga ab, aliquid facere saepe laudantium cum vitae deserunt? Nemo dolores blanditiis doloribus recusandae totam ad ex ratione fugit provident consequatur, dolor rem. Reprehenderit veniam nemo, commodi doloremque nisi dolor, illum.</p>
                                        <a href="#" style="border-radius: 5px" class="btn btn-blue">Learn More</a>
                                    </div>

                                    <div class="col-xs-12 col-sm-6 col-md-6 item_right">
                                        <h3 class="subtitle">Important information</h3>
                                        <div class="row">
                                            <form action="procces/reg-procces.php" method="post" id="contact-form" class="contact-form">
                                                <div class="col-md-12">
                                                    <input type="text" name="username" placeholder="Username" required class="form-control">
                                                </div>
                                                <div class="col-md-12">
                                                    <input type="password" name="password" placeholder="Password" required class="form-control">
                                                </div>
                                                <div class="col-md-12">
                                                    <input type="email" name="email" placeholder="Email" required class="form-control">
                                                </div>
                                                <div class="col-md-12">
                                                    <input type="submit" style="border-radius: 5px" value="Registration" name="reg" class="message-sub pull-right btn btn-blue">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <?php
                        include'footer.php';

                        ?>