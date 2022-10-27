<section id="mainContent">
  <div class="content_top">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm12">
        <?php
        include 'slider.php';
        ?>
        <hr size="1px">
          <!--<div class="latest_slider">
            <div class="slick_slider">
              <?php 

          $slider=@mysql_query("select * from slider order by slider_id DESC");
          while ($slideral=@mysql_fetch_array($slider)) {

          ?>
              <div class="single_iteam-slider"><img src="nasir/<?php echo $slideral["slider_imgurl"];?>" alt="<?php echo $slideral["slider_ad"];?>">
                <h2><a class="slider_tittle" href="slider-xeber.php?slider_id=<?php echo $slideral['slider_id'];?>"><?php echo $slideral["slider_ad"];?></a></h2>
              </div>
              <?php

               }

              ?>
            </div>
          </div>-->
        </div>

        <div class="col-lg-12 col-md-12 col-sm12">
          <div class="content_top_right">
            <ul class="featured_nav wow fadeInLeft">
              <center>
                <?php 

                $slider=@mysql_query("select * from slider order by slider_id DESC limit 5");
                while ($slideral=@mysql_fetch_array($slider)) {

                  ?>
                  <li><img src="nasir/<?php echo $slideral["slider_imgurl"];?>" alt="">
                    <div class="title_caption"><a href="slider-xeber.php?slider_id=<?php echo $slideral['slider_id']; ?>"><?php echo $slideral["slider_ad"];?></a></div>
                  </li>
                  <?php } ?>
                </center>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="scrollToTop"><i class="fa fa-chevron-up" aria-hidden="true"></i></div>
      <div class="content_middle">
        <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="single_category wow slideInLeft">
            <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span> <a class="title_text">Elanlar</a></h2>
            
            
            <?php 

            $sehifeler=@mysql_query("select * from sehifeler order by sehife_id DESC limit 3");
            while ($sehifeal=@mysql_fetch_array($sehifeler)) {

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
              <?php }?>
              
              
            </div>
            <a style="float: left; color: teal" href="butun_elanlar.php"><h4><u><i class="fa fa-arrow-circle-right"></i>BÜTÜN ELANLAR</u></h4></a>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="content_middle_rightbar">
              <div class="single_category wow slideInRight">
                <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span> <a class="title_text">Əlamətdar günlər</a> </h2>

                <?php

                $egun=@mysql_query("select * from egun order by egun_id desc limit 1");
                while ($egunal=@mysql_fetch_assoc($egun)) {

                  ?>
                  <center>
                    <div class="single_iteam">
                      <img style="max-width: 100%;max-height: 250px" src="nasir/<?php echo $egunal['egun_img'];?>">
                      <div class="title_caption"><a href="egun.php?egun_id=<?php echo $egunal['egun_id'];?>"><h4 style="color: white"><?php echo $egunal['egun_ad'];?></h4></div></div>
                        <a style="float: right;color: teal" href="butun_egunler.php"><h4><u>HAMISI<i class="fa fa-arrow-circle-left"></i></u></h4></a>
                      </center>
                      <?php 
                    }
                    ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="content_bottom">
            <div class="col-lg-9 col-md-9">
              <div class="content_bottom_left">
                <div class="single_category wow fadeInDown">
                  <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span><a class="title_text">Xəbərlər</a></h2>
                </div>
                <div class="games_fashion_area">

                  <?php

          //SEYFELEME

                  $seyfede=6;

                  $smysql=mysql_query("select * from xeberler");
                  $butun_xeber=mysql_num_rows($smysql);

                  $butun_sehife=ceil($butun_xeber / $seyfede);

                  $sehife=isset($_GET['sehife']) ? (int) $_GET['sehife'] : 1;

                  if($sehife < 1) $sehife = 1;

                  if($sehife > $butun_sehife) $sehife=$butun_sehife;

                  $limit=($sehife - 1)*$seyfede;

          //SEYFELEME BİTİŞ

                  $xeber=@mysql_query("select * from xeberler order by xeber_id DESC limit $limit,$seyfede");
                  while ($xeberal=@mysql_fetch_array($xeber)) {

                    ?>
                    <div class="games_category" style="margin-left: 15px">
                      <div class="single_category wow fadeInUp">
                        <ul class="fashion_catgnav wow fadeInUp">
                          <li>
                            <div class="catgimg2_container"> <a href="xeber.php?xeber_id=<?php echo $xeberal['xeber_id'];?>"><img alt="" src="nasir/<?php echo $xeberal['xeber_img'];?>"></a></div>
                            <h3 class="catg_titile"><a href="xeber.php?xeber_id=<?php echo $xeberal['xeber_id'];?>"><?php echo $xeberal['xeber_ad'];?></a></h3>
                            <div class="comments_box"> <span class="meta_date"><?php echo $xeberal['xeber_tarix'];?></span><span class="meta_more"><a  href="xeber.php?xeber_id=<?php echo $xeberal['xeber_id'];?>">Ətraflı...</a></span></div>
                            <p><?php echo substr($xeberal['xeber_terkib'],0,180); echo"...";?></p>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <?php }?>
                  </div>
                  
                  <ul style="text-align: right" class="labels_nav">
                    <?php 
                    $s=0;

                    while ($s<$butun_sehife) {
                      
                      $s++; ?>
                      
                      <li>
                        <a href="index.php?sehife=<?php echo $s;?>"><big><?php echo $s; ?></big></a> 
                      </li>
                      <?php }

                      ?>
                    </div>
                  </ul>
                  
                  

                </div>