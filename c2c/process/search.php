<?php
include'../admin/config/connect.php';
include'../function/seo-function.php';
include'../function/timeconvert.php';
ob_start();
session_start();
if (isset($_POST['query'])) {
	$searchtext=htmlspecialchars(strip_tags(trim($_POST['query'])));

	$userquery=$db->prepare("SELECT * FROM users where user_mail=:mail");
	$userquery->execute(array('mail' => $_SESSION['otheruser_mail']));
	$showuser=$userquery->fetch(PDO::FETCH_ASSOC);

	$searchuser=$db->prepare("SELECT * FROM users where user_authorization=:authorization and user_name LIKE '%$searchtext%' or user_lastname LIKE '%$searchtext%' or user_mail LIKE '%$searchtext%' order by user_name ASC");
	$searchuser->execute(array('authorization' => 0));
	$countuser=$searchuser->rowCount();

	$searchposts=$db->prepare("SELECT * FROM posts where post_text LIKE '%$searchtext%'");
	$searchposts->execute();
	$countpost=$searchposts->rowCount();

	//User axtarışı
	if ($countuser>0) {
		?>
		<div class="friend-list">
			<div class="row">
				<?php while ($showsearchuser=$searchuser->fetch(PDO::FETCH_ASSOC)) {
					?>
					<div class="col-md-6 col-sm-6">
						<div class="friend-card">
							<img src="<?php echo $showsearchuser['user_bgpicture'] ?>" alt="profile-cover" class="img-responsive cover" />
							<div class="card-info">
								<img src="<?php echo $showsearchuser['user_picture'] ?>" alt="user" class="profile-photo-lg" />
								<div class="friend-info">
									<h5><a href="user_<?php echo seo($showsearchuser['user_name'])."-".$showsearchuser['user_id'];?>" class="profile-link"><?php echo  $showsearchuser['user_name']." ".$showsearchuser['user_lastname']; ?></a></h5>
									<p><?php echo $showsearchuser['user_address']; ?></p>
								</div>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>

	<?php }
	//Media axtarışı
	elseif ($countpost>0) {?>
		<div class="media">
			<div class="row js-masonry" data-masonry='{ "itemSelector": ".grid-item", "columnWidth": ".grid-sizer", "percentPosition": true }'>
				<div class="grid-sizer col-md-6 col-sm-6"></div>

				<?php
				while ($showsearchposts=$searchposts->fetch(PDO::FETCH_ASSOC)) {

					$postid=$showsearchposts['post_id'];
					$postauthorquery=$db->prepare("SELECT * FROM users where user_id=:author");
					$postauthorquery->execute(array(
						'author' => $showsearchposts['post_author']
					));
					$showsearchpostauthor=$postauthorquery->fetch(PDO::FETCH_ASSOC);

					$likequery=$db->prepare("SELECT * FROM likes where user_id=:user_id and post_id=:id");
					$likequery->execute(array('user_id'=>$showuser['user_id'] ,'id'=> $showsearchposts['post_id']));
					$count=$likequery->rowCount();
					?>
					<div class="grid-item col-md-6 col-sm-6">
						<div class="media-grid">
							<div class="img-wrapper view" data-toggle="modal" data-target=".modal-1" id="<?php echo $postid; ?>">
								<?php
								if ($showsearchposts['post_type']=='2') { ?>
									<iframe width="100%" src="https://www.youtube.com/embed/<?php echo substr($showsearchposts['post_video'],+32,+11);?>?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
								<?php }
								else if($showsearchposts['post_type']=='1'){ ?>
									<img src="<?php echo $showsearchposts['post_image']; ?>" alt="" class="img-responsive post-image" />
								<?php }
								else{?>
									<div class="post-text">
										<p><?php echo $showsearchposts['post_text'] ?></p>
									</div>
								<?php } ?>
							</div>
							<div class="media-info">
								<div class="reaction">
									<button style=" background: transparent;outline-color: #fff"
									<?php
									if($count==0){
										?> 
										class="btn likebtn likebtn<?php echo $showsearchposts["post_id"];  ?>" style="color: grey"
									<?php }
									else{?>
										class="btn text-green likebtn likebtn<?php echo $showsearchposts["post_id"];  ?>" style="color:green;"
									<?php } 
									?>
									id="<?php echo $showsearchposts["post_likes"] ?>" pai="<?php echo $showsearchposts['post_author']?>" pid="<?php echo $showsearchposts['post_id'] ?>"><i class="ion-star mr-2" style="font-size: 15px"> <?php echo $showsearchposts['post_likes']; ?></i></button>
								</div>
								<div class="user-info">
									<img src="<?php echo $showsearchpostauthor['user_picture'] ?>" alt="" class="profile-photo-sm pull-left" />
									<div class="user">
										<h6><a href="user_<?php echo seo($showsearchpostauthor['user_name'])."-".$showsearchpostauthor['user_id']?>" class="profile-link"><?php echo $showsearchpostauthor['user_name']." ".$showsearchpostauthor['user_lastname']; ?></a></h6>
									</div>
								</div>
							</div>
						</div>
					</div>


				<?php }
				?>
			</div>
		</div>
	<?php }
	else{
		echo"<h2>No matching search results found</h2><hr>";
	}
}

?>
<script type="text/javascript">
	$(document).ready(function(){

		$('.view').click(function(){

			var post_id = $(this).attr("id");

			$( '#post-detail' ).empty();

			$.ajax({
				url : "process/select.php",
				method: "post",
				data: {post_id:post_id},
				success:function(data){
					$('#post-detail').append(data);

				}

			});

		});
	});
</script>