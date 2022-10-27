<?php
include'head.php';


$xeber_id=$_GET['xeber_id'];
$xeberler=@mysql_query("select * from xeberler where xeber_id='$xeber_id'");
$xeberal=@mysql_fetch_array($xeberler);

$xeber_hit=$xeberal['xeber_hit'];
$xeber_hit++;

$hitup=mysql_query("update xeberler set xeber_hit = '$xeber_hit' where xeber_id = '$xeber_id'");
?>

<section id="mainContent">
  <div class="content_bottom">
    <div class="col-lg-9 col-md-9">
      <div class="content_bottom_left">
        <div class="single_page_area">
          <h2 class="post_titile"><?php echo $xeberal['xeber_ad'];?></h2>
          <div class="single_page_content">
            <div class="post_commentbox"><i class="fa fa-calendar"></i><?php echo $xeberal['xeber_tarix'];?></span></div>
            <div class="col-lg-6 col-md-6 col-sm-6">
              <div class="slick_slider2">
                <div class="single_featured_slide"><img src="nasir/<?php echo $xeberal['xeber_img'];?>"></div>
                <?php
                $qalereya=@mysql_query("select * from xeber_qalereya where xeber_id='$xeber_id'");
                while ($qalereyaal=@mysql_fetch_array($qalereya)) {

                  ?>
                  <div class="single_featured_slide"><img src="nasir/uploads/xeber/terkib<?php echo $qalereyaal['xeber_terkibimg'];?>">
                  </div>
                  <?php
                }
                ?>
              </div>
            </div><p><?php echo $xeberal['xeber_terkib'];?></p>
            <?php 
            if($xeberal['xeber_tube']==''){}
              else{
                ?>
                <iframe width="100%" height="320px" src="https://www.youtube.com/embed/<?php echo substr($xeberal['xeber_tube'],-11);?>?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                <?php } ?>
                
                <hr>
                <?php 

                $sonraki=mysql_query("SELECT * FROM xeberler WHERE xeber_id > '$xeber_id' ORDER BY '$xeber_id' ASC LIMIT 1");
                $sonrakial=mysql_fetch_assoc($sonraki);
                $evvelki=mysql_query("SELECT * FROM xeberler WHERE xeber_id < '$xeber_id' ORDER BY '$xeber_id' DESC LIMIT 1");
                $evvelkial=mysql_fetch_assoc($evvelki);
                ?>
                <ul>
                </div>
              </div>
            </div>
            <div class="post_pagination">
              <div class="prev"> <a class="angle_left" href="xeber.php?xeber_id=<?php echo $evvelkial['xeber_id'];?>"><i class="fa fa-angle-double-left"></i></a>
                <div class="pagincontent"> <span>Əvvəlki xəbər</span> <a href="xeber.php?xeber_id=<?php echo $evvelkial['xeber_id'];?>"><?php echo $evvelkial['xeber_ad']; ?></a> </div>
              </div>
              <div class="next">
                <div class="pagincontent"> <span>Sonrakı xəbər</span> <a href="xeber.php?xeber_id=<?php echo $sonrakial['xeber_id'];?>"><?php echo $sonrakial['xeber_ad']; ?></a> </div>
                <a class="angle_right" href="xeber.php?xeber_id=<?php echo $sonrakial['xeber_id'];?>"><i class="fa fa-angle-double-right"></i></a> </div>
              </div>
            </div>

            <?php 
            include'sagbar.php';
            include'foot.php';
            ?>