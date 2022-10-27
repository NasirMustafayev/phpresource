</div>
</section>
<footer id="footer">
  <div class="footer_top">
    <div class="container">
      <div class="row">
        <?php 

        $socmysql=@mysql_query("select * from social");
        $social=@mysql_fetch_assoc($socmysql);

        ?>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="single_footer_top wow fadeInDown">
            <h2>ETİKETLƏR</h2>
            <ul class="labels_nav">
              <li><a href="#">Qalereya</a></li>
              <li><a href="#">Universitet</a></li>
              <li><a href="#">Xəbərlər</a></li>
              <li><a href="#">Elanlar</a></li>
              <li><a href="#">Kitabxanalar</a></li>
              <li><a href="#">Tədris korpusları</a></li>
              <li><a href="#">Bakalavriat</a></li>
              <li><a href="#">Magistratura</a></li>
              <li><a href="#">Dərs günləri</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="single_footer_top wow fadeInRight">
            <h2>Hakkında</h2>
            <p>Sayt Lənkəran Dövlət Universiteti üçün prototip kimi hazırlanmışdır</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="single_footer_top wow fadeInDown">
            <h2>BİZİ İZLƏYİN</h2>
             <div class="share_post">
            <a target="_blank" class="facebook" href="<?php echo $social['facebook'];?>">
             <i class="fa fa-facebook"></i>Facebook</a>
             <a target="_blank" class="googleplus" href="<?php echo $social['youtube'];?>">
               <i class="fa fa-youtube"></i>Youtube</a></a>
               <a target="_blank" class="twitter" href="<?php echo $social['twitter'];?>">
                 <i class="fa fa-twitter"></i>Twitter</a>
                 <a target="_blank" class="instagram" href="<?php echo $social['instagram'];?>">
                   <i class="fa fa-instagram"></i>Instagram</a></div>
                 </div>
               </div>
             </div>
           </div>
         </div>
         <div class="footer_bottom">
          <div class="container">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="footer_bottom_left">
                  <p>Müəllif hüquqları qorunur &copy; 2017 <a href="index.php">LANKARAN STATE UNIVERSITY</a></p>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="footer_bottom_right">
                  <?php
                  $str = 'PGg2Pk5hc2lyIE11c3RhZmF5ZXY8L2g2Pg==';
                  echo base64_decode($str);
                  ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>
      <script src="assets/js/jquery.min.js"></script> 
      <script src="assets/js/bootstrap.min.js"></script> 
      <script src="assets/js/wow.min.js"></script> 
      <script src="assets/js/slick.min.js"></script> 
      <script src="assets/js/custom.js"></script>
    </body>
    </html>