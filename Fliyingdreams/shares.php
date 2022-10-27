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
  <?php
  include'profile_card.php';
  include'newusersbar.php';
  ?>
  <div class="col-md-7">
   <!-- Sarch result show-->
   <div id="result">



   </div>
   <!-- Search result end-->
   <?php include'postcreatebox.php';?>

            <!-- Media
              ================================================= -->
              <div class="media">
               <div class="row js-masonry" data-masonry='{ "itemSelector": ".grid-item", "columnWidth": ".grid-sizer", "percentPosition": true }'>
                <div class="grid-sizer col-md-6 col-sm-6"></div>

                <!-- SHARED==================-->
                <?php
                while($showposts=$postsquery->fetch(PDO::FETCH_ASSOC)){

                  $postid=$showposts['post_id'];
                  $postauthorquery=$db->prepare("SELECT * FROM users where user_id=:author");
                  $postauthorquery->execute(array(
                    'author' => $showposts['post_author']
                  ));
                  $showpostauthor=$postauthorquery->fetch(PDO::FETCH_ASSOC);

                  $likequery=$db->prepare("SELECT * FROM likes where user_id=:user_id and post_id=:id");
                  $likequery->execute(array('user_id'=>$showuser['user_id'] ,'id'=> $showposts['post_id']));
                  $count=$likequery->rowCount();
                  ?>

                  <div class="grid-item col-md-6 col-sm-6">
                    <div class="media-grid">
                      <div class="img-wrapper view" data-toggle="modal" data-target=".modal-1" id="<?php echo $postid; ?>">
                        <?php
                        if ($_GET['type']=='videos') { ?>
                          <iframe width="100%" src="https://www.youtube.com/embed/<?php echo substr($showposts['post_video'],+32,+11);?>?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                        <?php }
                        else if($_GET['type']=='images'){ ?>
                          <img src="<?php echo $showposts['post_image']; ?>" alt="" class="img-responsive post-image" />
                        <?php }
                        else{?>
                          <div class="post-text">
                            <p><?php echo $showposts['post_text'] ?></p>
                          </div>
                        <?php } ?>
                      </div>
                      <div class="media-info">
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
                      <div class="user-info">
                        <img src="<?php echo $showpostauthor['user_picture'] ?>" alt="" class="profile-photo-sm pull-left" />
                        <div class="user">
                          <h6><a href="user_<?php echo seo($showpostauthor['user_name'])."-".$showpostauthor['user_id']?>" class="profile-link"><?php echo $showpostauthor['user_name']." ".$showpostauthor['user_lastname']; ?></a></h6>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              <?php } ?>

              <!--Important modal component.This component not have can't open Modal-->

              <div class="modal fade modal-1" tabindex="-1" role="dialog" aria-hidden="true" id="post-detail">

              </div>
              <!-- End Modal component-->


              <!-- SHARED END==================-->

            </div>
          </div>
        </div>

                          <!-- Newsfeed Common Side Bar Right
                            ================================================= -->
                            <?php include'sidebar.php'; ?>

                          </div>
                        </div>
                      </div>

                      <?php require_once'footer.php'; ?>