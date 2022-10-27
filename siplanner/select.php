<?php
require_once('connect.php');
//Fenler
$fennquery=$db->prepare("SELECT * FROM fennler");
$fennquery->execute();
//Student
$studentquery1=$db->prepare("SELECT * FROM students where student_id=:student_id");
$studentquery1->execute(array('student_id'=> $_POST['student_id']));
$showstudent1=$studentquery1->fetch(PDO:: FETCH_ASSOC);
?>
<link rel="stylesheet" type="text/css" href="animate.css">
	<br>
	<h2 class="animated fadeInRight lucida"><?php echo $showstudent1['student_name']; ?></h2>
	<?php if(empty($_POST['student_id'])){?><h3>Nümunə</h3><?php }elseif($_POST['student_id']==0){?><h3>Nümunə</h3><?}?>
	<table id="si-detail" border="1" cellpadding="5" class="animated fadeInRight tablesmooth">
		<tr>
			<th class="tsml" width="20%">
				Fənn
			</th>
			<th width="5%">
				Hissə
			</th>
			<th class="tsmr" width="70%">
				Mövzular
			</th>
		</tr>

		<?
		while($showfenn=$fennquery->fetch(PDO:: FETCH_ASSOC)){

	//Movzular
			$movzuquery=$db->prepare("SELECT * FROM movzular where fenn_id=:fenn_id and student_id=:student_id");
			$movzuquery->execute(array('fenn_id' => $showfenn['fenn_id'],'student_id' => $_POST['student_id']));
			?>
			<tr style="border-radius: 20px">
				<th rowspan="2"><?php echo $showfenn['fenn_name']; ?></th>
				<td><font style="background-color: #AED6F1">Nəzəri</font></td>
				<td>
					<?php 
					while ($showmovzu=$movzuquery->fetch(PDO:: FETCH_ASSOC)) {
						if ($showmovzu['movzu_part']==0) {
							echo '<font style="background-color: #AED6F1">'.$showmovzu['movzu_name'].'</font><br>';}
							break; }
							?></td>
						</tr>
						<tr>
							<td><font style="background-color: #F5B7B1">Praktiki</font></td>
							<td><?php
							while ($showmovzu1=$movzuquery->fetch(PDO:: FETCH_ASSOC)) {
								if ($showmovzu1['movzu_part']==1) {
									echo '<font style="background-color: #F5B7B1">'.$showmovzu1['movzu_name'].'</font><br>';}
									break; }
									?></td>
								</tr>
							<?php }
							?>
						</table>
