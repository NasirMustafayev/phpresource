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
                    <li><a href="<?php echo'about-'. seo($showprofile['user_name'])."-".$showprofile['user_id']; ?>">About</a></li>
                    <li><a href="album-<?php echo seo($showprofile['user_name'])."-".$showprofile['user_id'] ?>" class="active">Album</a></li>
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
                  <li><a href="<?php echo'about-'. seo($showprofile['user_name'])."-".$showprofile['user_id']; ?>">About</a></li>
                  <li><a href="<?php echo'album-'. seo($showprofile['user_name'])."-".$showprofile['user_id']; ?>" class="active">Album</a></li>
                </ul>
              </div>
            </div><!--Timeline Menu for Small Screens End-->

          </div>
          <div id="page-contents">
            <div class="row">
              <div class="col-md-3"></div>
              <div class="col-md-7">
               <!-- Sarch result show-->
               <div id="result">



               </div>
               <!-- Search result end-->

              <!-- Photo Album
                ================================================= -->
                <ul class="album-photos">
                  <?php
                  $postsquery=$db->prepare("SELECT * FROM
                    posts where
                    post_author=:author and
                    post_type>=:type 
                    order by post_date DESC");
                  $postsquery->execute(array(
                    'author'=> $showprofile['user_id'],
                    'type'=>1));

                  $countpost=$postsquery->rowCount();
                  if ($countpost==0) {?>
                    <div class="post-container" style="padding-bottom: 30%">
                      <div class="post-detail">
                        <h1><i class="fa fa-image"></i><br>
                        There is nothing to show on the album</h1>
                      </div>
                    </div>
                  <?php }
                  else{
                    while ($showposts=$postsquery->fetch(PDO::FETCH_ASSOC)) {?>
                      <li>
                        <div class="img-wrapper view" data-toggle="modal" data-target=".modal-1" id="<?php echo $showposts['post_id'];?>">
                         <?php
                         if (!empty($showposts['post_image'])) {?>
                          <a href="javascript:;" data-toggle="modal" data-target=".modal-1" id="<?php echo $showposts['post_id']; ?>"><img class="img-responsive" src="<?php echo $showposts['post_image']?>" alt="photo"/></a>
                        <?php }
                        if (!empty($showposts['post_video'])) {?>
                          <iframe width="100%" height="100%" src="https://www.youtube.com/embed/<?php echo substr($showposts['post_video'],+32,+11);?>?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                        <?php }?>
                      </div>
                    </li>
                  <?php }} ?>
                </ul>
              </div>
              <?php include'activitybar.php'; ?>

            </div>
          </div>
        </div>
      </div>
      <div class="modal fade modal-1" tabindex="-1" role="dialog" aria-hidden="true" id="post-detail">
      </div>
      <?php require_once'footer.php'; ?>