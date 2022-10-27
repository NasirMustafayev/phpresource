<!DOCTYPE html>
<html lang="en">
<?php
ob_start();
session_start();
require_once'admin/config/connect.php';
include'admin/function/seo-function.php';
//error_reporting(0);

if (isset($_SESSION['otheruser_mail'])) {
 echo " <meta http-equiv='refresh' content='0;URL=../'>";  
}

//Parametrlər
$query=$db->prepare("SELECT * FROM parametr where parametr_id=:id");
$query->execute(array('id' => 0));
$show=$query->fetch(PDO::FETCH_ASSOC);

//İstifadəçi məlumatları
$userquery=$db->prepare("SELECT * FROM users where user_mail=:mail");
$userquery->execute(array('mail' => $_SESSION['otheruser_mail']));
$showuser=$userquery->fetch(PDO::FETCH_ASSOC);
?>
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="<?php echo $show['parametr_description']; ?>" />
  <meta name="keywords" content="<?php echo $show['parametr_keywordss']; ?>"/>
  <meta name="robots" content="index, follow" />
  <title><?php
  $title="Registration | FliyingDreams";
  if (empty($title)) {
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
    <body style="background: #f0f0f0">

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
                      <li><a href="newsfeed.html">My profile</a></li>
                      <li><a href="newsfeed-people-nearby.html">Edit information</a></li>
                      <li><a href="newsfeed-friends.html">Security</a></li>
                      <li><a href="logout">Log out</a></li>
                    </ul>
                  </li>
                </ul>
              <?php } ?>

              <form class="navbar-form navbar-right hidden-sm">
                <div class="form-group">
                 <i class="icon ion-android-search"></i>
                 <input type="text" class="form-control" placeholder="Search people, photos, videos">
               </div>
             </form>
           </div><!-- /.navbar-collapse -->
         </div><!-- /.container -->
       </nav>
     </header>
     <!--Header End-->
     <div id="page-contents">
      <div class="container">
       <div class="row">

        <div class="col-md-3"></div>
        <center>
          <div class="col-md-6" style="background: white;border-radius: 10px;padding: 50px">
            <div class="form-wrapper">
              <p class="signup-text">Sign up now and start sharing</p>
              <?php
              if (isset($_GET['res'])) {
                if ($_GET['res']=='1') { ?>
                  <div class="alert alert-danger">
                    Passwords are different! Try again
                  </div>
                  <?php
                }
                if ($_GET['res']=='2') { ?>
                  <div class="alert alert-danger">
                    Password must be at least 6 characters
                  </div>
                <?php }
                if ($_GET['res']=='3') { ?>
                  <div class="alert alert-danger">
                    Email already in use
                  </div>
                <?php }
              }
              ?>
              <form action="process/registration" method="post" name="registration_form" id="registration_form">
                <fieldset class="form-group col-md-6">
                  <input type="text" class="form-control" name="name" id="example-name" placeholder="Enter first name">
                </fieldset>
                <fieldset class="form-group col-md-6">
                  <input type="text" class="form-control" name="lastname" id="example-lastname" placeholder="Enter lastname">
                </fieldset>
                <fieldset class="form-group col-md-12">
                  <input type="email" class="form-control" name="email" id="example-email" placeholder="Enter email">
                </fieldset>
                <fieldset class="form-group col-md-12">
                  <input type="password" class="form-control" name="password" id="example-password" placeholder="Enter a password">
                </fieldset>
                <fieldset class="form-group col-md-12">
                  <input type="password" class="form-control" name="rpassword" id="example-password" placeholder="Retype password">
                </fieldset>
                <input type="checkbox"><p>By signning up you agree to the terms</p>
                <button class="btn-secondary" type="submit" name="signup">Signup</button>
              </form>
            </div>
          </div>
        </center>

      </div>
    </div>
  </div>
</body>
</html>
<?php
include'footer.php';
?>