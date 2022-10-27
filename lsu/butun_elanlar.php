<?php

include'head.php';

          //SEYFELEME

$seyfede=9;

$smysql=mysql_query("select * from sehifeler");
$butun_elan=mysql_num_rows($smysql);

$butun_sehife=ceil($butun_elan / $seyfede);

$sehife=isset($_GET['sehife']) ? (int) $_GET['sehife'] : 1;

if($sehife < 1) $sehife = 1;

if($sehife > $butun_sehife) $sehife=$butun_sehife;

$limit=($sehife - 1)*$seyfede;

          //SEYFELEME BİTİŞ
?>
<section id="mainContent">
  <div class="content_bottom">
    <div class="col-lg-9 col-md-9">
      <div class="single_page_area">
        <h2 class="post_title">Bütün Elanlar</h2></div>
        <?php
        $sehifeler=@mysql_query("select * from sehifeler order by sehife_tarix desc");
        while($sehifeal=@mysql_fetch_array($sehifeler)) {
          ?>         
          <div class="games_category wow fadeInLeft" style="height: 200px">
            <ul class="catg1_nav wow fadeInLeft">
              <li><span class="date-cube"><?php echo substr($sehifeal['sehife_tarix'],0,6); ?></span>
                <h1 style="background-color: white;color:teal;margin-top: 20px;font-size: 17px" class="post_titile"><a href="elanlar.php?sehife_id=<?php echo $sehifeal['sehife_id']?>"><?php echo $sehifeal['sehife_ad'];?></a></h1><hr>
                <div class="comments_box"><span class="meta_more"><a  href="elanlar.php?sehife_id=<?php echo $sehifeal['sehife_id']?>">Ətraflı...</a></span></div>
                <!--<?php echo substr($sehifeal['sehife_terkib'],0,120); echo "..."; ?>-->
              </li>
            </ul>
          </div>
          <?php } ?>

          <!--<ul style="text-align: right" class="labels_nav">
            <?php 
            $s=0;

            while ($s<$butun_sehife) {

              $s++; ?>

              <li>
                <a href="butun_elanlar.php?sehife=<?php echo $s;?>"><big><?php echo $s; ?></big></a> 
              </li>
              <?php }

              ?>
            </ul>-->
          </div>
          <?php
          include'sagbar.php';
          include'foot.php';
          ?>