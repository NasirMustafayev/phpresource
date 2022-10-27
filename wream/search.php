<?php
include'header.php';

if (isset($_POST['search'])) {

	$text=trim($_POST['text']);
	$text=strip_tags($_POST['text']);
	$text=htmlspecialchars($_POST['text']);

	$search=@mysql_query("select * from users where username LIKE '%$text%' or usermail LIKE '%$text%'");
	$find=@mysql_num_rows($search);
	?>
	<section id="blog-section">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-8">
					<div style="background-color: white;height: 100%;border-radius: 5px">
						<br>
						<form action="" method="post" class="blog-search">
							<input type="text" name="text" class="search-input" value="<?php echo $text; ?>" placeholder="Search Here...">
							<button type="submit" name="search" class="search-sub">
								<i class="fa fa-search"></i>
							</button>
						</form>
						<?php
						if (empty($text)) { 
							?>
							<center>
								<h3>Please enter search text.</h3>
								<br>
								<u>Enter users in username or email adress</u>
							</center>
							<?php
						}
						else{
							echo '<center>Found&nbsp'.$find.'&nbspresults for'; echo '&nbsp"<b>'.$text.'</b>"<hr></center>';
							if ($find==0) {
								echo "<center><h3>Not yet result your search.</h3></center>";
							}
							while ($user_show=mysql_fetch_assoc($search)) {
								?>
								<a href="<?php echo $user_show['userimg'];?>"><img src="<?php echo $user_show['userimg'];?>" style="width:82px;height: 80px;border-radius:100%"></a><a href="userinfo.php?profile=<?php echo $user_show['username']; ?>">&nbsp<font size="5px"><?php echo $user_show['username'];?></font></a><hr><br>
								<?php }}
								?>
							</div>
						</div>
						<?php include'sidebar.php'; ?>
					</div>
				</div>
			</section>
			<?php }

			include'footer.php';
			?>