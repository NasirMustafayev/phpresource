<?php
include'header.php';
$user_id=$_GET['user_id'];
$default=mysql_query("select username,password,usermail,userimg,userbg from users where user_id='$user_id'");
$defaultinfo=mysql_fetch_assoc($default);

if (isset($user_id)) {
	?>
	<center>
		<div class="demo_head" style="background: url('<?php echo $defaultinfo['userbg']; ?>');background-repeat: no-repeat;background-size:cover;"><a href="<?php echo $defaultinfo['userimg'];?>"><img src="<?php echo $defaultinfo['userimg'];?>" style="border-radius: 50%;max-width: 150px;height: 140px"></a><h1><?php echo $_SESSION['username']?></h1>
			<a href="edit-profile.php">
				<h4 style="float: right;color: white">Edit profile</h4></a>
			</div>
		</center>
		<div class="blog-section">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-md-3"></div>
					<div class="col-xs-12 col-md-6">
						<form action="procces/profile-picture-procces.php" method="post" enctype="multipart/form-data">
							<input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id'];?>">
							<h2>Profile picture</h2><hr>
							Change picture
							<input type="file" name="userimg" class="form-control"><br>
							<input type="submit" name="profilepicture" class="btn btn-blue" style="width: 100%" value="Change">
						</form>
						<form action="procces/background-picture-procces.php" method="post" enctype="multipart/form-data">
							<input type="hidden" name="userid_bg" value="<?php echo $_SESSION['user_id']; ?>">
							<h2>Background picture</h2><hr>
							Change picture
							<input type="file" name="userbg" class="form-control"><br>
							<input type="submit" name="backgroundimg" class="btn btn-blue" style="width: 100%" value="Save">
						</form>
						<h2>User information</h2><hr>
						<form action="procces/edit-information-procces.php" method="post">
							<input type="hidden" name="user_id1" value="<?php echo $_SESSION['user_id'];?>">
							Password
							<input type="text" name="password" placeholder="Type new password" class="form-control">
							Email
							<input type="text" name="email" placeholder="Type new email adress" value="<?php echo $defaultinfo['usermail'];?>" class="form-control"><br>
							<input type="submit" class="btn btn-blue" name="editinfo" style="width: 100%" value="Save"><hr>
						</form>
						<br>
					</div>
				</div>
			</div>
		</div>
		<?php }
		else{

			header('location:index.php');
		}
		include'footer.php';
		?>