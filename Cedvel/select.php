<?php
require_once('connect.php');
include'weekselect.php';

$Daynames = array("Bütün günlər", "Bazar ertəsi", "Çərşəmbə axşamı", "Çərşəmbə", "Cümə axşamı", "Cümə");
$Day = $Daynames[$_POST['ders_gun']];

if ($_POST['ders_gun']==0) {
	$dersquery = $db->prepare("SELECT * FROM dersler
		where ders_hefte =:hefte_tip
		order by ders_gun");

	$dersquery->execute(
		array(
			'hefte_tip' => $Weekselect));
}
else{
	$dersquery = $db->prepare("SELECT * FROM dersler
		where ders_gun = :ders_gun 
		and ders_hefte =:hefte_tip
		order by ders_saat");

	$dersquery->execute(
		array(
			'ders_gun' => $_POST['ders_gun'],
			'hefte_tip' => $Weekselect));
}
?>

<link rel="stylesheet" type="text/css" href="animate.css">
<br>
<h2 class="animated fadeInUp lucida"><?php echo ($Weekselect=="0") ? "Alt həftə" : "Üst həftə"; ?></h2><hr>
<h4 class="animated fadeInDown"><?php echo ($_POST['ders_gun']==0) ? "" : $Day; ?></h4>
<?php

//Bütün günlər
if ($_POST['ders_gun']==0) { ?>
	<table id="cedvel" border="1" cellpadding="5" class="animated fadeInUp tablesmooth">
		<tr>
			<th class="tsml">
				Gün
			</th>
			<th width="5%">
				#
			</th>
			<th width="100%">
				Dərs
			</th>
			<th width="10%">
				Otaq
			</th>
		</tr>
		<?php
		while ($showders = $dersquery->fetch(PDO::FETCH_ASSOC)) {

			$gunquery = $db->prepare("SELECT * FROM gunler where gun_id = :ders_gun");
			$gunquery->execute(array('ders_gun' => $showders['ders_gun']));
			?>
			<tr>
				<td>
					<?php 
					while($showgun = $gunquery->fetch(PDO::FETCH_ASSOC)){
						echo "<b>".$showgun['gun']."</b>"; 
					}
					?>
				</td>
				<td>
					<?php
					echo $showders['ders_saat'];
					?>
				</td>
				<td>
					<?php
					echo $showders['ders_ad'];
					if ($showders['ders_tip']=="M") { ?>
						<font style="background-color:#AED6F1">(Mühazirə)</font>
					<? }
					elseif ($showders['ders_tip']=="S") { ?>
						<font style="background-color: #F5B7B1">(Seminar)</font>
						<?php
					}
					echo "[<b>".$showders['ders_muellim']."</b>]";
					?>
				</td>
				<td>
					<?php
					echo $showders['ders_otaq'];
					?>
				</td>
			</tr>
		<?php } ?>
	</table>
<?php }
else{
	?>
	<table id="cedvel" border="1" cellpadding="5" class="animated fadeInUp tablesmooth">
		<tr>
			<th class="tsml" width="5%">
			</th>
			<th width="100%">
				Dərs
			</th>
			<th width="10%">
				Otaq
			</th>
		</tr>

		<?php 
		while($showders=$dersquery->fetch(PDO:: FETCH_ASSOC)){
			?>
			<tr>
				<td>
					<?php
					echo $showders['ders_saat'];
					?>
				</td>
				<td>
					<?php
					echo $showders['ders_ad'];
					if ($showders['ders_tip']=="M") { ?>
						<font style="background-color:#AED6F1">(Mühazirə)</font>
					<? }
					elseif ($showders['ders_tip']=="S") { ?>
						<font style="background-color: #F5B7B1">(Seminar)</font>
					<?php }
					echo "[<b>".$showders['ders_muellim']."</b>]";
					?>
				</td>
				<td>
					<?php
					echo $showders['ders_otaq'];
					?>
				</td>
			</tr>
		<?php }
		?>
	</table>
	<?php } ?>