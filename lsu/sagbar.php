
<div class="col-lg-3 col-md-3">
  <div class="content_bottom_right">

    <div class="single_bottom_rightbar">
      <ul role="tablist" class="nav nav-tabs custom-tabs">
        <li class="active" role="presentation"><a data-toggle="tab" role="tab" aria-controls="home" href="#mostPopular">Ən populyar</a></li>
        <li role="presentation"><a data-toggle="tab" role="tab" aria-controls="messages" href="#recentComent">Son yerləşdirmələr</a></li>
      </ul>
      <div class="tab-content">
        <div id="mostPopular" class="tab-pane fade in active" role="tabpanel">
          <ul class="small_catg popular_catg">
            <?php
            $xeber=@mysql_query("select * from xeberler order by xeber_hit DESC limit 4");
            while ($xeberal=@mysql_fetch_array($xeber)) { ?>

            <li>
              <div class="media wow fadeInRight"> <a class="media-left" href="xeber.php?xeber_id=<?php echo $xeberal['xeber_id'];?>"><img src="nasir/<?php echo $xeberal['xeber_img'];?>" alt=""></a>
                <div class="media-body">
                  <h4 class="media-heading"><a href="xeber.php?xeber_id=<?php echo $xeberal['xeber_id'];?>"><?php echo $xeberal['xeber_ad'];?></a></h4><i class="fa fa-eye" aria-hidden="true"></i><?php echo $xeberal['xeber_hit'];?>
                  <!--<p><?php echo substr($xeberal['xeber_terkib'],0,100); echo "..."; ?></p>-->
                </div>
              </div>
            </li>
            <?php } ?>

          </ul>
        </div>
        <div id="recentComent" class="tab-pane fade" role="tabpanel">
          <ul class="small_catg popular_catg">

            <?php
            $xeber=@mysql_query("select * from xeberler order by xeber_id DESC limit 4");
            while ($xeberal=@mysql_fetch_array($xeber)) { ?>

            <li>
              <div class="media wow fadeInDown"> <a class="media-left" href="xeber.php?xeber_id=<?php echo $xeberal['xeber_id'];?>"><img src="nasir/<?php echo $xeberal['xeber_img'];?>" alt=""></a>
                <div class="media-body">
                  <h4 class="media-heading"><a href="xeber.php?xeber_id=<?php echo $xeberal['xeber_id'];?>"><?php echo $xeberal['xeber_ad'];?></a></h4>
                  <span class="meta_date">
                    <?php echo $xeberal['xeber_tarix'];?></span>
                  </div>
                </div>
              </li>
              <?php } ?>

            </ul>
          </div>
        </div>
      </div>
      <!--<div class="single_bottom_rightbar">
        <h2>Xəbər arxivi</h2>
        <div class="blog_archive wow fadeInDown">
          <form action="#">
            <select>
              <option value="">Xəbər arxivi</option>
              <option value="">Noyabr</option>
            </select>
          </form>
        </div>
      </div>-->
      <div class="single_bottom_rightbar wow fadeInDown">
        <h2>Keçİdlər</h2>
        <div class="tab-content">
         <?php
         $kecidler=@mysql_query("select * from kecidler");
         while ($kecidal=@mysql_fetch_assoc($kecidler)) {

          ?>
          <div class="media wow fadeInRight">
            <center>
              <a href="<?php  echo $kecidal["kecid_url"]; ?>" target="_blank" ><img style="width: 225px;height: 61px"  src="nasir/<?php  echo $kecidal["kecid_img"];?>"
                alt="<?php echo $kecidal['kecid_ad'];?>"></a>
              </center>
            </div>
            <?php 

          }
          ?>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
</div>