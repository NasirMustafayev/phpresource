<?php
require_once('connect.php');
include'weekselect.php';

$Daynames = array("Bütün günlər", "Bazar ertəsi", "Çərşəmbə axşamı", "Çərşəmbə", "Cümə axşamı", "Cümə");
$Day = $Daynames[$_POST['ders_gun']];

$dersquery = $db->prepare("SELECT * FROM dersler where ders_hefte =:hefte_tip order by ders_gun");
$dersquery->execute(array('hefte_tip' => $Weekselect)); ?>
<table id="cedvel" border="1" cellpadding="5" class="animated fadeInUp tablesmooth">
	<tr>
		<th class="tsml">
			Gün
		</th>
		<th width="5%">
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
					echo $showgun['gun']; 
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