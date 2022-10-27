<?php

include'head.php';

          //SEYFELEME

$seyfede=9;

$smysql=mysql_query("select * from egun");
$butun_egun=mysql_num_rows($smysql);

$butun_egun=ceil($butun_egun / $seyfede);

$egun=isset($_GET['egun']) ? (int) $_GET['egun'] : 1;

if($egun < 1) $egun = 1;

if($egun > $butun_egun) $egun=$butun_egun;

$limit=($egun - 1)*$seyfede;

          //SEYFELEME BİTİŞ
?>
<section id="mainContent">
  <div class="content_bottom">
    <div class="col-lg-9 col-md-9">
      <div class="single_page_area">
        <h2 class="post_title">Əlamətdar günlər</h2></div>
        <?php
        $egunler=@mysql_query("select * from egun order by egun_id desc");
        while($egunal=@mysql_fetch_array($egunler)) {
          ?>         
          <center>
            <div class="single_iteam" style="margin: 20px">
              <img style="max-width: 100%;max-height: 350px" src="nasir/<?php echo $egunal['egun_img'];?>">
              <div class="title_caption"><a href="egun.php?egun_id=<?php echo $egunal['egun_id'];?>"><h4 style="color: white"><?php echo $egunal['egun_ad'];?></h4></div></div>
              </center>
              
              <?php } ?>
              <div class="header_top_right">
                <div class="header_top_right">
                  <ul class="top_nav">
                    <?php 
                    $s=0;

                    while ($s<$butun_egun) {
                      
                     $s++; ?>
                     
                     <li>
                      <a href="butun_elanlar.php?egun=<?php echo $s;?>"><?php echo $s; ?></a> 
                    </li>
                    <?php } ?>
                  </ul>
                </div>
              </div>
            </div>
            <?php
            include'sagbar.php';
            include'foot.php';
            ?>