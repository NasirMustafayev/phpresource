<?php include'config/connect.php'; ?>
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
                            <li class="current mega-menu">
                                <a href="login.php">LOGIN</a>
                            </li>
                            <li>
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
                <h1 class="page-title">Write your Dream</h1>
            </div>
        </div>
        <div class="contact2">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-4 col-md-4 item_right">
                        <div class="row">
                            <br>
                            <?php
                            if (isset($_GET['login'])) {
                                if ($_GET['login']=='no') {
                                   ?>
                                   <div class="col-md-12">
                                       <h5 style="color: red">Error! Control your username and password</h5>
                                   </div><?php }}?>
                                   <form action="procces/login-procces.php" method="post" id="contact-form" class="contact-form">
                                    <div class="col-md-12">
                                        <input type="text" name="username" placeholder="Username" required class="form-control">
                                    </div>
                                    <div class="col-md-12">
                                        <input type="password" name="password" placeholder="Password" required class="form-control">
                                    </div>
                                    <div class="col-md-12">
                                        <input type="submit" value="Login" name="login" style="border-radius: 5px" class="message-sub pull-right btn btn-blue"><br>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-8">
                         <aside class="sidebar" style="border-radius: 5px">
                            <h4 class="widget-title">Most Popular</h4>
                            <?php 

                            $postview=mysql_query("select * from posts order by post_view DESC limit 5");
                            while ($show_sidebar=mysql_fetch_assoc($postview)) {
                                ?>
                                <div class="pp-item clearfix">
                                   <?php
                                   if (!$show_sidebar['post_img']==0) {
                                    ?>
                                    <a href="post.php?post=<?php echo $show_sidebar['post_id'];?>">
                                        <img src="<?php echo $show_sidebar['post_img']; ?>" alt="post thumb" class="img-responsive">
                                        <?php
                                    }
                                    ?>
                                </a>
                                <div class="pp-media">
                                    <span><?php echo $show_sidebar['post_date'];?></span>
                                    <i class="fa fa-eye"><?php echo $show_sidebar['post_view'];?></i>
                                    <i> By <?php echo $show_sidebar['post_author']; ?></i>
                                    <h4><a href="post.php?post=<?php echo $show_sidebar['post_id'];?>"><?php echo $show_sidebar['post_title'];?></a></h4>
                                </div>
                            </div>
                            <?php }
                            ?>
                        </aside>

                    </div>
                </div>
            </div>
        </div>
        <?php
        include'footer.php';
        ?>