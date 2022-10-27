<!doctype html>
<?php
ob_start();
session_start();
require_once'admin/config/connect.php';
include'admin/function/seo-function.php';


//Parametrlər
$query=$db->prepare("SELECT * FROM parametr where parametr_id=:id");
$query->execute(array('id' => 0));
$show=$query->fetch(PDO::FETCH_ASSOC);

//İstifadəçi məlumatları
$userquery=$db->prepare("SELECT * FROM users where user_mail=:mail");
$userquery->execute(array('mail' => $_SESSION['otheruser_mail']));
$showuser=$userquery->fetch(PDO::FETCH_ASSOC);

$showuserpass=$showuser['user_password'];
//Ölkələr sorğusu
$countryquery=$db->prepare('SELECT * FROM countries');
$countryquery->execute();

//İstifadəçinin ölkəsi
$usercountryquery=$db->prepare('SELECT * FROM countries where country_id=:user_country');
$usercountryquery->execute(array('user_country'=>$showuser['user_country']));
$showusercountry=$usercountryquery->fetch(PDO::FETCH_ASSOC);
/*if ($showuser['user_status']==0) {
  header('Location:logout');
}*/
?>
<html class="no-js" lang="">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title><?php
  if (empty($title)) {
    echo $show['parametr_title']; 
  }else{
    echo $title;
  } ?></title>
  <meta name="description" content="<?php echo $show['parametr_description']; ?>">
  <meta name="keywords" content="<?php echo $show['parametr_keywords']; ?>">
  <meta name="author" content="<?php echo $show['parametr_author']; ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="img\favicon.png">

  <!-- Normalize CSS --> 
  <link rel="stylesheet" href="css\normalize.css">

  <!-- Main CSS -->         
  <link rel="stylesheet" href="css\main.css">

  <!-- Bootstrap CSS --> 
  <link rel="stylesheet" href="css\bootstrap.min.css">

  <!-- Animate CSS --> 
  <link rel="stylesheet" href="css\animate.min.css">

  <!-- Font-awesome CSS-->
  <link rel="stylesheet" href="css\font-awesome.min.css">

  <!-- Owl Caousel CSS -->
  <link rel="stylesheet" href="vendor\OwlCarousel\owl.carousel.min.css">
  <link rel="stylesheet" href="vendor\OwlCarousel\owl.theme.default.min.css">

  <!-- Main Menu CSS -->      
  <link rel="stylesheet" href="css\meanmenu.min.css">

  <!-- Datetime Picker Style CSS -->
  <link rel="stylesheet" href="css\jquery.datetimepicker.css">

  <!-- ReImageGrid CSS -->
  <link rel="stylesheet" href="css\reImageGrid.css">

  <!-- Switch Style CSS -->
  <link rel="stylesheet" href="css\hover-min.css">

  <!-- Select2 CSS -->
  <link rel="stylesheet" href="css\select2.min.css">
  
  <!-- Nouislider Style CSS -->
  <link rel="stylesheet" href="vendor\noUiSlider\nouislider.min.css">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="style.css">

  <!-- Modernizr Js -->
  <script src="js\modernizr-2.8.3.min.js"></script>

</head>
<body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
          <![endif]-->

          <!-- Add your site or application content here -->
          <!-- Preloader Start Here -->
          <div id="preloader"></div>
          <!-- Preloader End Here -->
          <!-- Main Body Area Start Here -->
          <div id="wrapper">
           <!-- Header Area Start Here -->
           <header>                
            <div id="header2" class="header2-area right-nav-mobile">
             <div class="header-top-bar">
              <div class="container">
               <div class="row">                         
                <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs">
                 <div class="logo-area">
                  <a href="index"><img class="img-responsive" src="<?php echo $show['parametr_logo']; ?>" alt="logo"></a>
                </div>
              </div> 
              <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
               <ul class="profile-notification">                                            
                <li>
                 <div class="notify-contact"><span>Need help?</span> Talk to an expert: +61 3 8376 6284</div>
               </li>                                        
               <?php 
               if (!empty($showuser)) {?>
                <!--
                 <li>
                  <div class="notify-notification">
                    <a href="#"><i class="fa fa-bell-o" aria-hidden="true"></i><span>8</span></a>
                    <ul>
                      <li>
                        <div class="notify-notification-img">
                          <img class="img-responsive" src="img\profile\1.png" alt="profile">
                        </div>
                        <div class="notify-notification-info">
                          <div class="notify-notification-subject">Need WP Help!</div>
                          <div class="notify-notification-date">01 Dec, 2016</div>
                        </div>
                        <div class="notify-notification-sign">
                          <i class="fa fa-bell-o" aria-hidden="true"></i>
                        </div>
                      </li>
                      <li>
                        <div class="notify-notification-img">
                          <img class="img-responsive" src="img\profile\2.png" alt="profile">
                        </div>
                        <div class="notify-notification-info">
                          <div class="notify-notification-subject">Need HTML Help!</div>
                          <div class="notify-notification-date">01 Dec, 2016</div>
                        </div>
                        <div class="notify-notification-sign">
                          <i class="fa fa-bell-o" aria-hidden="true"></i>
                        </div>
                      </li>
                      <li>
                        <div class="notify-notification-img">
                          <img class="img-responsive" src="img\profile\3.png" alt="profile">
                        </div>
                        <div class="notify-notification-info">
                          <div class="notify-notification-subject">Psd Template Help!</div>
                          <div class="notify-notification-date">01 Dec, 2016</div>
                        </div>
                        <div class="notify-notification-sign">
                          <i class="fa fa-bell-o" aria-hidden="true"></i>
                        </div>
                      </li>
                    </ul>
                  </div>
                </li>
                <li>
                  <div class="notify-message">
                    <a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i><span>5</span></a>
                    <ul>
                      <li>
                        <div class="notify-message-img">
                          <img class="img-responsive" src="img\profile\1.png" alt="profile">
                        </div>
                        <div class="notify-message-info">
                          <div class="notify-message-sender">Kazi Fahim</div>
                          <div class="notify-message-subject">Need WP Help!</div>
                          <div class="notify-message-date">01 Dec, 2016</div>
                        </div>
                        <div class="notify-message-sign">
                          <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        </div>
                      </li>
                      <li>
                        <div class="notify-message-img">
                          <img class="img-responsive" src="img\profile\2.png" alt="profile">
                        </div>
                        <div class="notify-message-info">
                          <div class="notify-message-sender">Richi Lenal</div>
                          <div class="notify-message-subject">Need HTML Help!</div>
                          <div class="notify-message-date">01 Dec, 2016</div>
                        </div>
                        <div class="notify-message-sign">
                          <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        </div>
                      </li>
                      <li>
                        <div class="notify-message-img">
                          <img class="img-responsive" src="img\profile\3.png" alt="profile">
                        </div>
                        <div class="notify-message-info">
                          <div class="notify-message-sender">PsdBosS</div>
                          <div class="notify-message-subject">Psd Template Help!</div>
                          <div class="notify-message-date">01 Dec, 2016</div>
                        </div>
                        <div class="notify-message-sign">
                          <i class="fa fa-reply" aria-hidden="true"></i>
                        </div>
                      </li>
                    </ul>
                  </div>
                </li>-->
                <li>
                  <div class="user-account-info">
                    <div class="user-account-info-controler">
                      <div class="user-account-img">
                        <img class="img-responsive" src="<?php echo  $showuser['user_picture']; ?>" alt="profile" style="border-radius: 100%;width: 35px">
                      </div>
                      <div class="user-account-title">
                        <div class="user-account-name"><?php echo $showuser['user_name'].' '.$showuser['user_lastname']; ?></div>
                        <div class="user-account-balance">$171.00</div>
                      </div>
                      <div class="user-account-dropdown">
                        <i class="fa fa-angle-down" aria-hidden="true"></i>
                      </div>
                    </div>
                    <ul>
                      <li><a href="profile">Profile Page</a></li>
                      <li><a href="#">Portfolio</a></li>
                      <li><a href="settings">Account Setting</a></li>
                    </ul>
                  </div>
                </li>
                <li><a class="apply-now-btn" href="logout" id="logout-button">Logout</a></li>
              <?php }
              else{ ?>
                <li>
                 <div class="apply-btn-area">
                  <a class="apply-now-btn" href="#" id="login-button">Giriş</a>
                  <div class="login-form" id="login-form" style="display: none;">
                   <h2>Login</h2>
                   <form action="process/login" method="post">
                    <input class="form-control" name="email" type="text" placeholder="Email" required="">
                    <input class="form-control" name="password" type="password" placeholder="Şifrə" required="">
                    <button class="btn-login" type="submit" name="login" value="Login">Giriş</button>
                    <a class="btn-login" href="registration">Qeydiyyat</a>
                    <div class="remember-lost">
                     <div class="checkbox">
                      <label><input type="checkbox"> Məni xatırla</label>
                    </div>
                    <a class="lost-password" href="#">Şifrəni unutmusan?</a>
                  </div>
                  <button class="cross-btn form-cancel" type="submit" value=""><i class="fa fa-times" aria-hidden="true"></i></button>
                </form>
              </div>
            </div>
            <li><a class="apply-now-btn-color hidden-on-mobile" href="registration">Qeydiyyat</a></li>
          </li>
        <?php } ?>
      </ul>
    </div>                          
  </div>                          
</div>
</div>
<div class="main-menu-area bg-primaryText" id="sticker">
  <div class="container">
   <nav id="desktop-nav">
    <ul>
     <li class="active"><a href="#">Home</a>
      <ul>
       <li><a href="index">Home 1</a></li>
       <li><a href="index2">Home 2</a></li>
     </ul>   
   </li>
   <li><a href="about">About</a></li>
   <li><a href="#">Pages</a>
    <ul class="mega-menu-area"> 
     <li>
      <a href="index">Home 1</a>
      <a href="index2">Home 2</a>
      <a href="about">About</a>
      <a href="product-page-grid">Product Grid</a>
    </li> 
    <li>
      <a href="product-page-list">Product List</a>
      <a href="product-category-grid">Category Grid</a>
      <a href="product-category-list">Category List</a>
      <a href="single-product">Product Details</a>
    </li>
    <li>
      <a href="profile">Profile</a>
      <a href="favourites-grid">Favourites Grid</a>
      <a href="favourites-list">Favourites List</a>
      <a href="settings">Settings</a>
    </li>
    <li>
      <a href="upload-products">Upload Products</a>
      <a href="sales-statement">Sales Statement</a>
      <a href="withdrawals">Withdrawals</a>
      <a href="404">404</a>
    </li>
  </ul>                                            
</li>
<li><a href="product-page-grid">WordPress</a></li>
<li><a href="product-category-grid">Joomla</a></li>
<li><a href="product-category-list">Plugins</a></li>
<li><a href="product-page-list">Components</a></li>
<li><a href="product-category-grid">PSD</a></li>
<li><a href="#">Blog</a>
  <ul>
   <li><a href="blog">Blog</a></li>
   <li><a href="single-blog">Blog Details</a></li> 
   <li class="has-child-menu"><a href="#">Second Level</a>
    <ul class="thired-level">
     <li><a href="index">Thired Level 1</a></li>
     <li><a href="index">Thired Level 2</a></li>
   </ul>
 </li>
</ul>
</li>
<li><a href="contact">Contact</a></li>
<li><a href="help">Help</a></li>
</ul>
</nav>
</div>
</div>
</div>
<!-- Mobile Menu Area Start -->
<div class="mobile-menu-area">
 <div class="container">
  <div class="row">
   <div class="col-md-12">
    <div class="mobile-menu">
     <nav id="dropdown">
      <ul>
       <li class="active"><a href="#">Home</a>
        <ul>
         <li><a href="index">Home 1</a></li>
         <li><a href="index2">Home 2</a></li>
       </ul>   
     </li>
     <li><a href="about">About</a></li>
     <li><a href="#">Pages</a>
      <ul class="mega-menu-area"> 
       <li>
        <a href="index">Home 1</a>
        <a href="index2">Home 2</a>
        <a href="about">About</a>
        <a href="product-page-grid">Product Grid</a>
      </li> 
      <li>
        <a href="product-page-list">Product List</a>
        <a href="product-category-grid">Category Grid</a>
        <a href="product-category-list">Category List</a>
        <a href="single-product">Product Details</a>
      </li>
      <li>
        <a href="profile">Profile</a>
        <a href="favourites-grid">Favourites Grid</a>
        <a href="favourites-list">Favourites List</a>
        <a href="settings">Settings</a>
      </li>
      <li>
        <a href="upload-products">Upload Products</a>
        <a href="sales-statement">Sales Statement</a>
        <a href="withdrawals">Withdrawals</a>
        <a href="404">404</a>
      </li>
    </ul>                                            
  </li>
  <li><a href="product-page-grid">WordPress</a></li>
  <li><a href="product-category-grid">Joomla</a></li>
  <li><a href="product-category-list">Plugins</a></li>
  <li><a href="product-page-list">Components</a></li>
  <li><a href="product-category-grid">PSD</a></li>
  <li><a href="#">Blog</a>
    <ul>
     <li><a href="blog">Blog</a></li>
     <li><a href="single-blog">Blog Details</a></li> 
     <li class="has-child-menu"><a href="#">Second Level</a>
      <ul class="thired-level">
       <li><a href="index">Thired Level 1</a></li>
       <li><a href="index">Thired Level 2</a></li>
     </ul>
   </li>
 </ul>
</li>
<li><a href="contact">Contact</a></li>
<li><a href="help">Help</a></li>
</ul>
</nav>
</div>           
</div>
</div>
</div>
</div>  
<!-- Mobile Menu Area End -->
</header>
            <!-- Header Area End Here -->