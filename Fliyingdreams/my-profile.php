<?php
$title="Profile | FliyingDreams";
require_once'header.php';

if (empty($_SESSION['otheruser_mail'])) {
  header("Location:index");}
  ?>
  <div class="container">

      <!-- Timeline
        ================================================= -->
        <div class="timeline">
          <!--if( document.getElementById("videoUploadFile").files.length == 0 ){console.log("no files selected");}-->
          <div class="timeline-cover" id="bgpic" style="background: url(<?php echo $showuser['user_bgpicture']; ?>) no-repeat; background-size: 100% 100%;">

            <!--Timeline Menu for Large Screens-->
            <div class="timeline-nav-bar hidden-sm hidden-xs">
              <div class="row">
                <div class="col-md-3">
                  <div class="profile-info">
                    <img src="<?php echo $showuser['user_picture']; ?>" alt="" class="img-responsive profile-photo" />
                    <h3><?php echo $showuser['user_name']." ".$showuser['user_lastname'];  ?></h3>
                    <label class="custom-file-upload">
                      <form id="mypp" enctype="multipart/form-data">
                        <input type="file" name="ppicture" id="ppicture">
                      </form>
                      <font style="size: 8"><i class="fa fa-camera"></i></font></label>
                    </div>
                  </div>
                  <div class="col-md-9">
                    <ul class="list-inline profile-menu">
                      <li><a href="<?php echo'user_'. seo($showuser['user_name'])."-".$showuser['user_id']; ?>" class="active">Timeline</a></li>
                      <li><a href="<?php echo'about-'. seo($showuser['user_name'])."-".$showuser['user_id']; ?>">About</a></li>
                      <li><a href="<?php echo'album-'. seo($showuser['user_name'])."-".$showuser['user_id']; ?>">Album</a></li>
                    </ul>
                    <ul class="follow-me list-inline">
                      <li><label class="custom-file-upload">
                        <form id="mybg" enctype="multipart/form-data">
                          <input type="file" name="bgpicture" id="bgpicture">
                        </form>
                        <font style="size: 8"><i class="ion-images"></i></font></label></li>
                      </ul>
                    </div>
                  </div>
                </div><!--Timeline Menu for Large Screens End-->

                <!--Timeline Menu for Small Screens-->
                <div class="navbar-mobile hidden-lg hidden-md">
                  <div class="profile-info">
                    <img src="<?php echo $showuser['user_picture']; ?>" alt="" class="img-responsive profile-photo" />
                    <h4><?php echo $showuser['user_name']." ".$showuser['user_lastname'];  ?></h4>
                    <label class="custom-file-upload">
                      <form id="mypp" enctype="multipart/form-data">
                        <input type="file" name="ppicture" id="ppicture">
                      </form>
                      <font style="size: 8"><i class="fa fa-camera"></i></font></label>
                    </div>
                    <div class="mobile-menu">
                      <ul class="list-inline">
                        <li><a href="user_<?php echo seo($showprofile['user_name']).$showprofile['user_id']; ?>" class="active">Timeline</a></li>
                        <li><a href="<?php echo'about-'. seo($showprofile['user_name']).$showprofile['user_id']; ?>">About</a></li>
                        <li><a href="<?php echo'album-'. seo($showprofile['user_name']).$showprofile['user_id']; ?>">Album</a></li>
                      </ul>
                      <ul class="follow-me list-inline">
                        <li><label class="custom-file-upload">
                          <form id="mybg" enctype="multipart/form-data">
                            <input type="file" name="bgpicture" id="bgpicture">
                          </form>
                          <font style="size: 8"><i class="ion-images"></i></font></label></li>
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
                       <?php include'postcreatebox.php'; ?>

            <!-- Post Content
              ================================================= -->
              <?php
              $postsquery=$db->prepare("SELECT * FROM posts where post_author=:author order by post_date DESC");
              $postsquery->execute(array('author'=> $showuser['user_id']));
              $countpost=$postsquery->rowCount();
              if ($countpost==0) {?>
                <div class="post-content">
                  <div class="post-container">
                    <div class="post-detail">
                      <h1><i class="fa fa-clock-o"></i> Nothing to show</h1>
                    </div>
                  </div>
                </div>
              <?php }
              else{

                while ($showposts=$postsquery->fetch(PDO::FETCH_ASSOC)) {

                  $postauthorquery=$db->prepare("SELECT * FROM users where user_id=:author");
                  $postauthorquery->execute(array(
                    'author' => $showposts['post_author']
                  ));
                  $showpostauthor=$postauthorquery->fetch(PDO::FETCH_ASSOC);

                  $likequery=$db->prepare("SELECT * FROM likes where user_id=:user_id and post_id=:id");
                  $likequery->execute(array('user_id'=>$showuser['user_id'] ,'id'=> $showposts['post_id']));
                  $showlike=$likequery->fetch(PDO::FETCH_ASSOC);
                  $count=$likequery->rowCount();
                  ?>
                  <div class="post-content">
                    <div class="post-date hidden-xs hidden-sm">
                      <h5><?php echo $showuser['user_name']; ?></h5>
                      <p class="text-grey">
                        <?php
                        $date = $showposts['post_date'];
                        echo timeConvert($date);?></p>
                      </div>
                      <?php
                      if (!empty($showposts['post_image'])) {?>
                        <a class="view" href="javascript:;" data-toggle="modal" data-target=".modal-1" id="<?php echo $showposts['post_id'];//Modal icin gonderdigim kisim ?>"><img src="<?php echo $showposts['post_image'] ?>" alt="post-image" class="img-responsive post-image" /></a>
                      <?php }
                      if (!empty($showposts['post_video'])) {?>
                        <iframe width="100%" height="300px" src="https://www.youtube.com/embed/<?php echo substr($showposts['post_video'],+32,+11);?>?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                      <?php }
                      if ($showuser['user_id']==$showpostauthor['user_id']) {
                        ?>
                        <div style="float: right">
                         <a class="btn" href="process/deletepost?pid=<?php echo $showposts['post_id']; ?>&un=<?php echo $showposts['post_image'] ?>"><i style="font-size: 20px" class="ion-close"></i></a>
                       </div>
                     <?php } ?>
                     <div class="post-container">
                       <img src="<?php echo $showpostauthor['user_picture'] ?>" alt="user" class="profile-photo-md pull-left" />
                       <div class="post-detail">
                        <div class="user-info">
                         <h5><a href="user_<?php echo seo($showpostauthor['user_name']).$showpostauthor['user_id']?>" class="profile-link"><?php echo $showpostauthor['user_name']." ".$showpostauthor['user_lastname'];  ?></a></h5>
                         <p class="text-muted">Published in <b>
                          <?php
                          $date = $showposts['post_date'];
                          echo timeConvert($date);
                          ?></b>
                        </p>
                      </div>
                      <div class="reaction">
                       <button style=" background: transparent;outline-color: #fff"
                       <?php
                       if($count==0){
                         ?> 
                         class="btn likebtn likebtn<?php echo $showposts["post_id"];  ?>" style="color: grey"
                       <?php }
                       else{?>
                        class="btn text-green likebtn likebtn<?php echo $showposts["post_id"];  ?>" style="color:green;"
                      <?php } 
                      ?>
                      id="<?php echo $showposts["post_likes"] ?>" pai="<?php echo $showposts['post_author']?>" pid="<?php echo $showposts['post_id'] ?>"><i class="ion-star mr-2" style="font-size: 15px"> <?php echo $showposts['post_likes']; ?></i></button>
                    </div>
                    <div class="line-divider"></div>
                    <div class="post-text">
                     <p><?php echo $showposts['post_text'] ?></p>
                   </div>
                   <?php
                   $commentsquery=$db->prepare("SELECT * FROM comments where post_id=:post_id");
                   $commentsquery->execute(array('post_id'=> $showposts['post_id']));
                   $commentscount=$commentsquery->rowCount();
                   ?>
                   <div class="line-divider"></div>
                   <a class="view" href="javascript:;" data-toggle="modal" data-target=".modal-1" id="<?php echo $showposts['post_id']; ?>">Comments(<?php echo $commentscount; ?>)</a>
                   <?php 
                   if (isset($_SESSION['otheruser_mail'])) {?>
                    <div class="post-comment">
                     <img src="<?php echo $showuser['user_picture'] ?>" alt="" class="profile-photo-sm" />
                     <!--Comment Form-->
                     <input type="text" id="comment<?php echo $showposts['post_id']; ?>" required="" class="form-control" placeholder="Post a comment">
                     <button id='addcomment' class='btn btn-primary btn-xs' post_id="<?php echo $showposts['post_id']; ?>"><i class="ion-android-send"></i></button>
                     <!--ENd--> 
                   </div>
                 <?php }?>
               </div>
             </div>
           </div>
         <?php }} ?>
       </div>

       <!-- Activitybar -->
       <?php include'activitybar.php'; ?> 

     </div>
   </div>
 </div>
</div>
<div class="modal fade modal-1" tabindex="-1" role="dialog" aria-hidden="true" id="post-detail">


</div>
<?php
require_once'footer.php';
?>