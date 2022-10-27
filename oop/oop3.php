<?php 
include'connect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>OOP3</title>
</head>
<body>
	<form action="" method="post">
		<input type="text" name="name" required="" style="width: 300px;height: 30px;font-size: 20px" placeholder="Type is name">
		<br>
		<br>
		<input type="text" name="lastname" required="" style="width: 300px;height: 30px;font-size: 20px" placeholder="Type is lastname">
		<br>
		<br>
		<input type="email" name="email" required="" style="width: 300px;height: 30px;font-size: 20px" placeholder="Type is email">
		<br>
		<br>
		<button type="submit" name="button" style="width: 200px;height: 30px;font-size: 20px">Send info</button>
	</form>
	<br>
	<h2>Articles</h2><hr>
	<table border="1" style="width: 600px;background-color: #f3f3f3">
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Lastname</th>
			<th>Email</th>
			<th width="10">Process</th>
		</tr>
		
		<?php
		$article=$db->prepare("SELECT * from article");
		$article->execute();
		while ($articleshow=$article->fetch(PDO::FETCH_ASSOC)) {?>
			<tr>
				<td><?php echo $articleshow['id']; ?></td>
				<td><?php echo $articleshow['name']; ?></td>
				<td><?php echo $articleshow['lastname']; ?></td>
				<td><?php echo $articleshow['email']; ?></td>
				<td><a href="update.php?id=<?php echo $articleshow['id'];?>"><button style="width: 50px">Edit</button></a><a href="process.php?id=<?php echo $articleshow['id'];?>&process=delete" style="float: right" ><button>Delete</button></a></td>
			</tr>
			<?php
		}

		include'functions.php';
		$new= new Crud;

		$new->name=$_POST['name'];
		$new->lastname=$_POST['lastname'];
		$new->email=$_POST['email'];

		$new->insert();
		?>
	</table>
</body>
</html>