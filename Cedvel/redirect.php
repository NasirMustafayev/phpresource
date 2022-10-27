<?php
if ($_GET['material']=='sec') { ?>
	<meta http-equiv="refresh" content="0; url=index.php" />
<?php }
else{
	$Material = array(
		'budce' => "https://drive.google.com/drive/folders/1yS5atSA0ilF8NDtQpJfSW6BNCtTdG2po?usp=sharing",
		'idareetme' => "https://drive.google.com/drive/folders/1LtQj7MRAbBecykBZDFk8CpOnimxUxAzM?usp=sharing",
		'qiymet' => "https://drive.google.com/drive/folders/15JuzOpgUfufohTN3zsxw_eSD0XexfUuT?usp=sharing",
		'valyuta' => "https://drive.google.com/drive/folders/19Xy7i1TSlwoIgrsEZ2xtC9pJ7FMeT-dV?usp=sharing",
		'vergi' => "https://drive.google.com/file/d/1eeYdnd98Fq2Vmq_ENZ5suKi5envY6TsB/view?usp=sharing",
		'marketinq' => "https://drive.google.com/drive/folders/1brEaQ6BXgSElBGsDuEendrFz-WWXxDjy?usp=sharing");

	$Materialfound = $Material[$_GET['material']];

	?>
	<meta http-equiv="refresh" content="0; url=<?php echo $Materialfound; ?>" />
<?php } ?>
