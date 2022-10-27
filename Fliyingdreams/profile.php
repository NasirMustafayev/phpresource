<?php
require_once'header.php';

$profilequery=$db->prepare("SELECT * FROM users where user_id=:user_id");
$profilequery->execute(array('user_id' => $_GET['id']));
$showprofile=$profilequery->fetch(PDO::FETCH_ASSOC);
$coutuser=$profilequery->rowCount();

?>
<div class="container">
  <?php
  if ($coutuser==0) {?>
    <center><h1>User not found</h1></center>
  <?php }
  else{
    ?>

      <!-- Timeline
        ================================================= -->
        <div class="timeline">
          <div class="timeline-cover" style="background: url(<?php echo $showprofile['user_bgpicture']; ?>) no-repeat;background-size: 1030px 360px;">

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
                    <li><a href="user_<?php echo seo($showprofile['user_name'])."-".$showprofile['user_id'] ?>" class="active">Timeline</a></li>
                    <li><a href="<?php echo'about-'. seo($showprofile['user_name'])."-".$showprofile['user_id']; ?>">About</a></li>
                    <li><a href="album-<?php echo seo($showprofile['user_name'])."-".$showprofile['user_id'] ?>">Album</a></li>
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
                  <li><a href="user_<?php echo seo($showprofile['user_name'])."-".$showprofile['user_id'] ?>" class="active">Timeline</a></li>
                  <li><a href="<?php echo'about-'. seo($showprofile['user_name'])."-".$showprofile['user_id']; ?>">About</a></li>
                  <li><a href="album-<?php echo seo($showprofile['user_name'])."-".$showprofile['user_id'] ?>">Album</a></li>
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
               <?php 
               if(empty($_SESSION['otheruser_mail'])){
                ?>
                <div class="tab-content">
                  <div class="tab-pane active">
                    <h3>Login now</h3>
                    <form action="process/login" method="post" name="Login_form" id='Login_form' class="form-inline">
                      <div class="row">
                        <div class="form-group col-xs-4" style="float: right;">
                          <label for="password" class="sr-only">Password</label>
                          <input id="password" class="form-control input-group-lg" type="password" name="password" title="Enter Password" placeholder="Password"/>
                        </div>
                        <div class="form-group col-xs-4" style="float: right;">
                          <label for="email" class="sr-only">Email</label>
                          <input id="email" class="form-control input-group-lg" type="text" name="email" title="Email address" placeholder="Email address"/>
                        </div>
                      </div>
                      <button class="btn btn-primary" type="submit" name="login" style="float: right">Login</button>
                    </form>
                    <a href="registration"><button class="btn btn-primary" style="float: left">Registration</button></a>
                  </div>
                </div>
                <br>
                <h2><?php echo $showprofile['user_name']; ?>'s shared posts</h2>
                <hr>
              <?php }
              else{?>
                <h2><?php echo $showprofile['user_name']; ?>'s shared posts</h2>
                <hr>
              <?php } ?>

            <!-- Post Content
              ================================================= -->
              <?php
              $postsquery=$db->prepare("SELECT * FROM posts where post_author=:author order by post_date DESC");
              $postsquery->execute(array('author'=> $showprofile['user_id']));
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
                      <h5><?php echo $showprofile['user_name']; ?></h5>
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
<?php } ?>
<div class="modal fade modal-1" tabindex="-1" role="dialog" aria-hidden="true" id="post-detail">


</div>
<?php
require_once'footer.php';
?>