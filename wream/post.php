<?php
include'header.php';

$post_id=$_GET['post'];
$posts=mysql_query("select * from posts where post_id='$post_id'");
$post_show=mysql_fetch_assoc($posts);

$post_view=$post_show['post_view'];
$post_view++;

$viewup=mysql_query("update posts set post_view = '$post_view' where post_id = '$post_id'");
?>
<div id="blog-section">
	<?php
	//include'sidebar.php';
	?>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-8">
				<div class="posts-section">
					<article class="post-entry" style="border-radius: 5px">
						<div class="post-media">
							<img src="<?php echo $post_show['author_img']; ?>" style="border-radius: 100%;width: 50px;height: 50px">
							<span><b><a href="userinfo.php?profile=<?php echo $post_show['post_author'];?>"><big><?php echo $post_show['post_author'];?></big></a></b></span><span style="float: right;"><?php echo $post_show['post_date'];?></span>
							<?php
							if (!$post_show['post_img']==0) {
								?>
								<center>
									<img src="<?php echo $post_show['post_img']; ?>" alt="post thumb" style="width: 95%" class="img-responsive">
								</center>
								<?php
							}
							?>
						</div>
						<div class="post-excerpt">
							<h2><a href="#"><?php echo $post_show['post_title'];?></a></h2>
							<p><?php echo $post_show['post'];?></p>
						</div>
					</article>
				</div>
				<?php
				$comment_mysql=mysql_query("SELECT * FROM comments where post_id='$post_id'");
				$comment_num_show=mysql_num_rows($comment_mysql);
				?>
				<div class="post_comment_area style2" style="border-radius: 5px">
					<h2><?php echo  $comment_num_show;?> Comments</h2>
					<div class="single_comment">
						<form action="procces/comment-process.php" method="post">
							<input type="hidden" value="<?php echo $_GET['post']; ?>" name="post_id">
							<input type="hidden" name="comment_author" value="<?php echo $_SESSION['username']; ?>">
							<input type="hidden" name="comment_author_img" value="<?php echo $_SESSION['userimg'] ?>">

							<textarea name="comment" placeholder="Type your comment..." class="form-control"></textarea><button type="submit" name="comment-button" class="btn btn-blue" style="border-radius: 5px;float: right;">Send</button>
						</form>
						<?php
						while ($comment_show=mysql_fetch_assoc($comment_mysql)) {
							?>
							<div class="comment">
								<div class="coment_text">
									<div class="author-meta">
										<img alt="" class="author_picture" src="<?php echo $comment_show['comment_author_img'];?>" style="border-radius: 100%;width: 50px;height: 50px">
										<div>
											<h2><a href="userinfo.php?profile=<?php echo $comment_show['comment_author']; ?>"><?php echo $comment_show['comment_author'];?></a></h2>
											<span><?php echo $comment_show['comment_date']; ?></span><a class="fa  fa-reply" href="#"></a>
										</div>
									</div>
									<div class="author-replay">
										<p><?php echo $comment_show['comment'];?></p>
									</div>
								</div>
							</div>
							<?php
						}
						?>
					</div>
				</div>

			</div>

			<?php
			include'sidebar.php';
			include'footer.php';
			?>