<?php

include'head.php';
$metn=$_POST['metn'];
$axtar=@mysql_query("select * from xeberler where xeber_ad LIKE '%$metn%' or xeber_terkib LIKE '%$metn%' order by xeber_id desc");
$tap=@mysql_num_rows($axtar);
?>
<section id="mainContent">
  <div class="content_bottom">
    <div class="col-lg-9 col-md-9">
      <div class="content_bottom_left">
        <div class="single_page_area">
          <h2 class="post_titile"><center>
            <?php 
            if (empty($metn)) {
              echo "Xaiş olunur axtarış mətni daxil edəsiz";
            }
            else{
              ?>
              <?php echo'"' .$metn. '"'; echo '&nbsp;tapılan nəticə:'; echo $tap;}?></center></h2>
              <form action="" method="post">
                <input type="text" required="" style="width: 85%;height: 40px;font-size: 20px" name="metn" value="<?php echo $metn;?>">
                <input type="submit" style="width:110px;height:40px;background-color: teal;font-size: 20px;color: white" name="axtar" value="Axtar">
              </form>
              <hr>
              <div class="single_page_content">
                <?php
                if ($tap==0) {
                  echo "<h3>Sizin axtarışınıza uyğun nəticə tapılmadı</h3>";
                }
                while ($netice=@mysql_fetch_array($axtar)) {
                  ?>
                  <div class="media">
                    <p><ul><li><h4><a href="xeber.php?xeber_id=<?php echo $netice['xeber_id'];?>"><?php echo $netice['xeber_ad'];?></a></h4>
                      <?php echo substr($netice['xeber_terkib'],0,200); echo"..."; ?>
                    </li></ul></p>
                  </div>
                  <?php
                }
                ?>
              </div>
            </div>
          </div>
        </div>
        <?php
        include'sagbar.php';
        include'foot.php';
        ?>