<?php

include'head.php';

$sehife_id=$_GET['sehife_id'];
$sehifeler=@mysql_query("select * from sehifeler where sehife_id='$sehife_id'");
$sehifeal=@mysql_fetch_array($sehifeler);

$sehife_view=$sehifeal['sehife_view'];
$sehife_view++;

$viewup=mysql_query("update sehifeler set sehife_view = '$sehife_view' where sehife_id = '$sehife_id'");
?>
<section id="mainContent">
  <div class="content_bottom">
    <div class="col-lg-9 col-md-9">
      <div class="content_bottom_left">
        <div class="single_page_area">
          <h2 class="post_titile"><?php echo $sehifeal['sehife_ad']; ?></h2>
          <span class="meta_date">
            <?php echo $sehifeal['sehife_tarix']; ?>
          </span><i class="fa fa-eye"></i><?php echo $sehifeal['sehife_view'];?>
          <div class="single_page_content"><center>
            <p><ul><?php echo $sehifeal['sehife_terkib'];?></ul></p></center>
          </div>
        </div>
      </div>
    </div>
    <?php
    include'sagbar.php';
    include'foot.php';
    ?>