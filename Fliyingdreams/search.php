<?php 
require_once'header.php';

if($_GET['type']=='videos'){
  $postsquery=$db->prepare("SELECT * FROM posts where post_type=:type order by post_date DESC");
  $postsquery->execute(array('type'=>2));
}

if($_GET['type']=='images'){
  $postsquery=$db->prepare("SELECT * FROM posts where post_type=:type order by post_date DESC");
  $postsquery->execute(array('type'=>1));
}

if($_GET['type']=='articles'){
  $postsquery=$db->prepare("SELECT * FROM posts where post_type=:type order by post_date DESC");
  $postsquery->execute(array('type'=>0));
}
?>

<div id="page-contents">
 <div class="container">
  <div class="row">

 <!-- Newsfeed Common Side Bar Left
  ================================================= -->
  <div class="col-md-3 static">
    <?php
    if (isset($_SESSION['otheruser_mail'])) {
      ?>
      <div class="profile-card" style="background: url(<?php echo $showuser['user_bgpicture']; ?>);">
        <img src="<?php echo $showuser['user_picture'] ?>" alt="user" class="profile-photo" />
        <h4><a href="profile?uid=<?php echo $showuser['user_id'] ?>" class="pname"><?php echo $showuser['user_name']." ".$showuser['user_lastname']; ?></a></h4>
        <!--<a href="#" class="text-white"><i class="ion ion-android-person-add"></i> 1,299 followers</a>-->
      </div><!--profile card ends-->
    <?php }
    else{ ?>
      <div class="profile-card">
        <img src="images/default.png" alt="user" class="profile-photo" />
        <h5><a href="#" class="text-white">Guess</a></h5>
      </div><!--profile card ends-->
    <?php }
    $videos='videos';
    ?>
    <ul class="nav-news-feed">
      <li><i class="icon ion-compose"></i><div><a href="shared-articles">Articles</a></div></li>
      <li><i class="icon ion-images"></i><div><a href="shared-images">Images</a></div></li>
      <li><i class="icon ion-ios-videocam"></i><div><a href="shared-videos">Videos</a></div></li>
    </ul><!--news-feed links ends-->

    <?php include'newusersbar.php'; ?>

  </div>
  <div class="col-md-7" id='result'>

            <!-- Search Result
              ================================================= -->

            </div>
            
            <div class="modal fade modal-1" tabindex="-1" role="dialog" aria-hidden="true" id="post-detail">

            </div>


                          <!-- Newsfeed Common Side Bar Right
                            ================================================= -->
                            <?php include'sidebar.php'; ?>

                          </div>
                        </div>
                      </div>

                      <?php require_once'footer.php'; ?>