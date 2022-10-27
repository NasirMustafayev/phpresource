<?php

include'head.php';

$egun_id=$_GET['egun_id'];
$egun=@mysql_query("select * from egun where egun_id='$egun_id'");
$egunal=@mysql_fetch_array($egun);
?>
<section id="mainContent">
  <div class="content_bottom">
    <div class="col-lg-9 col-md-9">
      <div class="content_bottom_left">
        <div class="single_page_area" style="text-align: center">
          <h2 class="post_titile  wow fadeInLeft"><?php echo $egunal['egun_ad']; ?></h2>
          <img style="width: 70%;max-height: 250px" class=" wow fadeInRight" src="nasir/<?php echo $egunal['egun_img']?>">
          <div class="single_page_content  wow fadeInUp"><center>
            <blockquote>
              <h5><ul><?php echo $egunal['egun_terkib'];?></ul></h5></blockquote></center>
            </div>
          </div>
        </div>
      </div>
      <?php
      include'sagbar.php';
      include'foot.php';
      ?>