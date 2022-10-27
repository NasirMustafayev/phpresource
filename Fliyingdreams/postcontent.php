    <?php
    $postsquery=$db->prepare("SELECT * FROM posts order by post_date DESC");
    $postsquery->execute();

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
           <h5><a href="user_<?php echo seo($showpostauthor['user_name'])."-".$showpostauthor['user_id']?>" class="profile-link"><?php echo $showpostauthor['user_name']." ".$showpostauthor['user_lastname'];  ?></a></h5>
           <p class="text-muted"><i class="fa fa-clock-o"></i> Published in <b>
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
       <p style="font-size: 15px"><?php echo $showposts['post_text'] ?></p>
     </div>
     <?php
     $commentsquery=$db->prepare("SELECT * FROM comments where post_id=:post_id");
     $commentsquery->execute(array('post_id'=> $showposts['post_id']));
     $commentscount=$commentsquery->rowCount();
     ?>
     <div class="line-divider"></div>
     <a class="view" href="" data-toggle="modal" data-target=".modal-1" id="<?php echo $showposts['post_id']; ?>">Comments(<?php echo $commentscount; ?>)</a>
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
<?php } ?>