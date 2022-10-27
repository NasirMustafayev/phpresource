<?php
include'head.php';


$slider_id=$_GET['slider_id'];
$slider=@mysql_query("select * from slider where slider_id='$slider_id'");
$slideral=@mysql_fetch_array($slider);

$slider_view=$slideral['slider_view'];
$slider_view++;

$viewup=mysql_query("update slider set slider_view = '$slider_view' where slider_id = '$slider_id'");
?>

<section id="mainContent">
  <div class="content_bottom">
    <div class="col-lg-9 col-md-9">
      <div class="content_bottom_left">
        <div class="single_page_area">
          <h2 class="post_titile"><?php echo $slideral['slider_ad'];?></h2>
          <div class="single_page_content">
            <div class="post_commentbox"><span class="meta_date"><i class="fa fa-calendar"></i><?php echo $slideral['slider_tarix'];?></span>
              <i class="fa fa-eye"></i><?php echo $slideral['slider_view'];?></div>
              <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="single_iteam">
                  <img src="nasir/<?php echo $slideral['slider_imgurl'];?>"></div><br><font style="font-size: 20px"><?php echo $slideral['slider_terkib'];?></font>
                  <?php 
                  if($slideral['slider_tube']==''){}
                    else{
                      ?>
                      <iframe width="100%" height="320px" src="https://www.youtube.com/embed/<?php echo substr($slideral['slider_tube'],-11);?>?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                      <?php } ?>
                      <hr>
                      <ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <?php 
              include'sagbar.php';
              include'foot.php';
              ?>