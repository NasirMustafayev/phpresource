<!DOCTYPE html>
<html lang="en">
<?php
ob_start();
session_start();
date_default_timezone_set('Europe/Istanbul');
require_once'admin/config/connect.php';
include'admin/function/seo-function.php';
include'function/timeconvert.php';
//error_reporting(0);


//Parametrlər
$query=$db->prepare("SELECT * FROM parametr where parametr_id=:id");
$query->execute(array('id' => 0));
$show=$query->fetch(PDO::FETCH_ASSOC);

//İstifadəçi məlumatları
$userquery=$db->prepare("SELECT * FROM users where user_mail=:mail");
$userquery->execute(array('mail' => $_SESSION['otheruser_mail']));
$showuser=$userquery->fetch(PDO::FETCH_ASSOC);

$likequery=$db->prepare("SELECT * FROM likes where user_id=:user_id and post_id=:id");
$likequery->execute(array('user_id'=>$showuser['user_id'] ,'id'=> $_GET['pid']));
$count=$likequery->rowCount();
?>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="<?php echo $show['parametr_description']; ?>" />
	<meta name="keywords" content="<?php echo $show['parametr_keywords']; ?>"/>
	<meta name="robots" content="index, follow" />
	<title>
    <?php if (empty($title)) {
      echo $show['parametr_title'];
    }else{
      echo $title;
    }
    ?></title>

    <!-- Stylesheets
    	================================================= -->
    	<link rel="stylesheet" href="css/bootstrap.min.css" />
    	<link rel="stylesheet" href="css/style.css" />
    	<link rel="stylesheet" href="css/ionicons.min.css" />
    	<link rel="stylesheet" href="css/font-awesome.min.css" />
    	<link href="css/emoji.css" rel="stylesheet">

      <!--Google Font-->
      <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,700i" rel="stylesheet">

      <!--Favicon-->
      <link rel="shortcut icon" type="image/png" href="images/favicon.ico"/>
    </head>
    <body>

    <!-- Header
    	================================================= -->
    	<header id="header">
    		<nav class="navbar navbar-default navbar-fixed-top menu">
    			<div class="container">

    				<!-- Brand and toggle get grouped for better mobile display -->
    				<div class="navbar-header">
    					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
    						<span class="sr-only">Toggle navigation</span>
    						<span class="icon-bar"></span>
    						<span class="icon-bar"></span>
    						<span class="icon-bar"></span>
    					</button>
    					<a class="navbar-brand" href="index"><font size="6" color="white">Fl<font color="red">i</font>yingDreams</font></a>
    				</div>

    				<!-- Collect the nav links, forms, and other content for toggling -->

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

              <?php
              if (isset($_SESSION['otheruser_mail'])) {
                ?>
                <ul class="nav navbar-nav navbar-right main-menu">
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span><img src="images/down-arrow.png" alt="" /></span></a>
                    <ul class="dropdown-menu newsfeed-home">
                      <li><a href="my-profile"><i class="fa fa-user"></i> My profile</a></li>
                      <li><a href="editinfo"><i class="icon ion-ios-information-outline"></i> Edit info</a></li>
                      <li><a href="editpass"><i class="icon ion-ios-locked-outline"></i> Change password</a></li>
                      <li><a href="logout"><i class="fa fa-sign-out"></i> Log out</a></li>
                    </ul>
                  </li>
                </ul>
              <?php } ?>

              <form class="navbar-form navbar-right hidden-sm" id="sform">
                <div class="form-group">
                 <i class="icon ion-android-search"></i>
                 <input type="text" size="100" id="searchtext" class="form-control" placeholder="Search people, photos, videos">
               </div>
             </form>
           </div><!-- /.navbar-collapse -->
         </div><!-- /.container -->
       </nav>
     </header>
     <!--Header End-->

     