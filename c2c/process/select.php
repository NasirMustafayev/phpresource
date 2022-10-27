<?php 
include'../admin/config/connect.php';
include'../function/seo-function.php';
include'../function/timeconvert.php';
ob_start();
session_start();

if (isset($_POST['post_id'])) {

	$postdetailquery=$db->prepare("SELECT * FROM posts where post_id=:post_id");
	$postdetailquery->execute(array(
		'post_id'=>$_POST['post_id']));
	$showpostdetail=$postdetailquery->fetch(PDO:: FETCH_ASSOC);
	
	//İstifadəçi məlumatları
	$userquery=$db->prepare("SELECT * FROM users where user_mail=:mail");
	$userquery->execute(array('mail' => $_SESSION['otheruser_mail']));
	$showuser=$userquery->fetch(PDO::FETCH_ASSOC);

	$postauthorquery=$db->prepare("SELECT * FROM users where user_id=:id");
	$postauthorquery->execute(array('id' => $showpostdetail['post_author']));
	$showpostauthor=$postauthorquery->fetch(PDO::FETCH_ASSOC);

	$likequery=$db->prepare("SELECT * FROM likes where user_id=:user_id and post_id=:id");
	$likequery->execute(array(
		'user_id'=>$showuser['user_id'] ,
		'id'=> $showpostdetail['post_id']));
	$count=$likequery->rowCount();
	?>
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="post-content">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
				<?php
				if ($showpostdetail['post_type']==2) { ?>
					<iframe width="100%" style="min-height: 300px" src="https://www.youtube.com/embed/<?php echo substr($showpostdetail['post_video'],+32,+11);?>?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
				<?php }
				else if($showpostdetail['post_type']==1){ ?>
					<img src="<?php echo $showpostdetail['post_image']; ?>" alt="" class="img-responsive post-image" />
				<?php }
				if ($showuser['user_id']==$showpostauthor['user_id']) {
					?>
					<div style="float: right">
						<a class="btn" href="process/deletepost?pid=<?php echo $showposts['post_id']; ?>&un=<?php echo $showposts['post_image'] ?>"><i style="font-size: 20px" class="ion-close"></i></a>
					</div>
				<?php } ?>
				<div class="post-container">
					<img src="<?php echo $showpostauthor['user_picture'];?>" alt="user" class="profile-photo-md pull-left" />
					<div class="post-detail">
						<div class="user-info">
							<h5 id="post_detail"><a href="user_<?php echo seo($showpostauthor['user_name'])."-".$showpostauthor['user_id'];?>" class="profile-link"> <?php echo $showpostauthor['user_name']." ".$showpostauthor['user_lastname']; ?></a></h5>
							<p class="text-muted"><i class="fa fa-clock-o"></i> Published in <b>
								<?php
								$date = $showpostdetail['post_date'];
								echo timeConvert($date);
								?></b></p>
							</div>
							<div class="reaction">
								<button style=" background: transparent;outline-color: #fff"
								<?php
								if($count==0){
									?> 
									class="btn likebtn likebtn<?php echo $showpostdetail["post_id"];  ?>" style="color: grey"
								<?php }
								else{?>
									class="btn text-green likebtn likebtn<?php echo $showpostdetail["post_id"];  ?>" style="color:green;"
								<?php } 
								?>
								id="<?php echo $showpostdetail["post_likes"] ?>" pai="<?php echo $showpostdetail['post_author']?>" pid="<?php echo $showpostdetail['post_id'] ?>"><i class="ion-star mr-2" style="font-size: 15px"> <?php echo $showpostdetail['post_likes']; ?></i></button>
							</div>
							<div class="line-divider"></div>
							<div class="post-text">
								<p style="font-size: 15px"><?php echo $showpostdetail['post_text']; ?></p>
							</div>
							<div class="line-divider"></div>
							<?php
							$commentsquery=$db->prepare("SELECT * FROM comments where post_id=:post_id");
							$commentsquery->execute(array(
								'post_id'=> $showpostdetail['post_id']));

							while ($showcomments=$commentsquery->fetch(PDO::FETCH_ASSOC)) {
								$commentauthorquery=$db->prepare("SELECT * FROM users where user_id=:author");
								$commentauthorquery->execute(array(
									'author' => $showcomments['comment_author']
								));
								$showcommentauthor=$commentauthorquery->fetch(PDO::FETCH_ASSOC);
								?>
								<div class="post-comment" <?php if($showuser['user_id']==$showcomments['comment_author']){?>
									style="background: #fefefe"
									<?php } ?>>
									<img src="<?php echo $showcommentauthor['user_picture'] ?>" alt="" class="profile-photo-sm" />
									<p><a href="user_<?php echo seo($showcommentauthor['user_name'])."-".$showcommentauthor['user_id']?>" class="profile-link"><?php echo $showcommentauthor['user_name'].$showcommentauthor['user_lastname']; ?></a> <?php echo $showcomments['comment']; ?></p>
								</div>
							<?php } ?>
							<?php 
							if (isset($_SESSION['otheruser_mail'])) {?>
								<div class="post-comment">
									<img src="<?php echo $showuser['user_picture'] ?>" alt="" class="profile-photo-sm" />
									<!--Comment Form-->
									<input type="text" id="comment<?php echo $showpostdetail['post_id']; ?>" required="" class="form-control" placeholder="Post a comment">
									<button id='addcomment' class='btn btn-primary btn-xs' post_id="<?php echo $showpostdetail['post_id']; ?>"><i class="ion-android-send"></i></button>
									<!--ENd--> 
								</div>
							<?php }?>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php }
	?>