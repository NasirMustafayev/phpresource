<?php
include'header.php';
$username=$_SESSION['username'];
$user_id=$_SESSION['user_id'];

$userimg_mysql=mysql_query("select userimg,userbg from users where user_id='$user_id'");
$userimg=mysql_fetch_array($userimg_mysql);
$userpost=mysql_query("select * from posts where post_author='$username'");
$userpost_control=mysql_num_rows($userpost);
?>
<center>
	<div class="demo_head" style="background: url('<?php echo $userimg['userbg'] ?>');background-repeat: no-repeat;background-size:cover;">
		<a href="<?php echo $userimg['userimg']; ?>"><img src="<?php echo $userimg['userimg']; ?>" style="border-radius: 100%;max-width: 150px;height: 150px"></a><h1><?php echo $_SESSION['username']?></h1>
	</div>
</center>
<div id="blog-section">
	<?php
	//include'sidebar.php';
	?>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-8">
				<div class="posts-section">
					<?php 
					while ($userpost_show=mysql_fetch_array($userpost)) {?>


					<article class="post-entry" style="border-radius: 5px">
						<div class="post-media">
							<img src="<?php echo $userpost_show['author_img']; ?>" style="border-radius: 100%;width: 50px;height: 50px">
							<span><b><a href="userinfo.php?profile=<?php echo $userpost_show['post_author'];?>"><big><?php echo $userpost_show['post_author'];?></big></a></b></span><i><span style="float: right;"><?php echo $userpost_show['post_date'];?></span></i>
							<?php
							$aut=$userpost_show['post_author'];
							if ($_SESSION['username']==$aut) { ?>

							<font style="float: right;" color="red"><a href="procces/post-procces.php?procces=delete&post_id=<?php echo $userpost_show['post_id'];?>"><h4>Delete&nbsp</h4></a></font> <font style="float: right;" color="red"><a href="post-update.php?post_id=<?php echo $userpost_show['post_id'];?>"><h4>Edit&nbsp</h4></a></font>
							<?php
						}
						?>
						<?php
						if (!$userpost_show['post_img']==0) {
							?>
							<img src="<?php echo $userpost_show['post_img']; ?>" alt="post thumb" class="img-responsive">
							<?php
						}
						else{ ?>
						<hr>
						<?php }
						?>
					</div>
					<div class="post-excerpt">
						<h2><a href="post.php?post=<?php echo $userpost_show['post_id'];?>"><?php echo $userpost_show['post_title'];?></a></h2>
						<p><?php echo substr($userpost_show['post'],0,500)."...";?></p>
						<div class="excerpt-btn">
							<a href="post.php?post=<?php echo $userpost_show['post_id'];?>">Read More</a>
						</div>
					</div>
				</article>
				<?php }
				if ($userpost_control==0) {?>
				<div style="background-color: white;height: 800px;border-radius: 5px">
					<center><h3>No shared post.</h3><hr>
						<img src="images/empty.png" style="width: 200px"><i><h4>Your profile is empty</h4></i>
					</center>
				</div>
				<br>
				<?php
			}
			?>
		</div>
	</div>
	<?php
	include'sidebar.php';
	include'footer.php';
	?>