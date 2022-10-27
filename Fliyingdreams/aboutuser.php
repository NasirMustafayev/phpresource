<?php
require_once'header.php';

$profilequery=$db->prepare("SELECT * FROM users where user_id=:user_id");
$profilequery->execute(array('user_id' => $_GET['id']));
$showprofile=$profilequery->fetch(PDO::FETCH_ASSOC);
?>

<div class="container">

      <!-- Timeline
        ================================================= -->
        <div class="timeline">
          <div class="timeline-cover" style="background: url(<?php echo $showprofile['user_bgpicture']; ?>) no-repeat; background-size: 100% 100%;">

            <!--Timeline Menu for Large Screens-->
            <div class="timeline-nav-bar hidden-sm hidden-xs">
              <div class="row">
                <div class="col-md-3">
                  <div class="profile-info">
                    <img src="<?php echo $showprofile['user_picture']; ?>" alt="" class="img-responsive profile-photo" />
                    <h3><?php echo $showprofile['user_name']." ".$showprofile['user_lastname'];  ?></h3>
                  </div>
                </div>
                <div class="col-md-9">
                  <ul class="list-inline profile-menu">
                    <li><a href="user_<?php echo seo($showprofile['user_name'])."-".$showprofile['user_id'] ?>">Timeline</a></li>
                    <li><a href="<?php echo'about-'. seo($showprofile['user_name'])."-".$showprofile['user_id']; ?>" class="active">About</a></li>
                    <li><a href="<?php echo'album-'. seo($showprofile['user_name'])."-".$showprofile['user_id']; ?>">Album</a></li>
                  </ul>
                </div>
              </div>
            </div><!--Timeline Menu for Large Screens End-->

            <!--Timeline Menu for Small Screens-->
            <div class="navbar-mobile hidden-lg hidden-md">
              <div class="profile-info">
                <img src="<?php echo $showprofile['user_picture']; ?>" alt="" class="img-responsive profile-photo" />
                <h4><?php echo $showprofile['user_name']." ".$showprofile['user_lastname'];  ?></h4>
              </div>
              <div class="mobile-menu">
                <ul class="list-inline">
                  <li><a href="user_<?php echo seo($showprofile['user_name'])."-".$showprofile['user_id'] ?>">Timeline</a></li>
                  <li><a href="<?php echo'about-'. seo($showprofile['user_name'])."-".$showprofile['user_id']; ?>" class="active">About</a></li>
                  <li><a href="<?php echo'album-'. seo($showprofile['user_name'])."-".$showprofile['user_id']; ?>">Album</a></li>
                </ul>
              </div>
            </div><!--Timeline Menu for Small Screens End-->

          </div>
          <div id="page-contents">
            <div class="row">
              <div class="col-md-3"></div>
              <div class="col-md-7">

              <!-- About
                ================================================= -->
                <!-- Sarch result show-->
                <div id="result">



                </div>
                <!-- Search result end-->
                <div class="about-profile">
                  <div class="about-content-block">
                    <h4 class="grey"><i class="ion-ios-information-outline icon-in-title"></i>Personal Information</h4>
                    <p><?php echo $showprofile['user_about']; ?></p>
                  </div>
                  <div class="about-content-block">
                    <h4 class="grey"><i class="ion-ios-location-outline icon-in-title"></i>Location</h4>
                    <p><?php echo $showprofile['user_address']; ?></p>
                  </div>
                </div>
              </div>

              <?php include'activitybar.php'; ?>
            </div>
          </div>
        </div>
      </div>


      <?php require_once'footer.php';?>
