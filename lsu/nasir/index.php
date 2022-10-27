<?php

include'head.php';
include'solbar.php';
$xeber=@mysql_query("select * from xeberler");
$xs=@mysql_num_rows($xeber);

$elan=@mysql_query("select * from sehifeler");
$es=@mysql_num_rows($elan);
?>
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
               <h1 class="page-head-line" style="font-family: blogger">İDARƏETMƏ PANELİNƏ XOŞ GƏLDİNİZ</h1>
               <h1 class="page-subhead-line">Bu panel vasitəsilə saytı rahatlıqla idarə edə biləcəksiniz.<br>
                  Uyğun bölmələri menyuda görə bilərsiniz.
              </h1>
              <h3>Sayta əlavə edilən xəbərlərin sayı:<?php echo $xs;?></h3>
              <h3>Sayta əlavə edilən elanların sayı:<?php echo $es;?></h3>
              <hr>
              <?php 

              $umumi=@mysql_query("select * from umumi");
              $logoal=@mysql_fetch_assoc($umumi);
              ?>
          </div>
          <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>
                        Loqotip parametrləri
                    </h4>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Hazırkı loqotip</th>
                                    <th style="width: 40px">Dəyişdir</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><img width="100px" src="<?php echo $logoal['logo'];?>"></td>
                                    <td>
                                        <form action="procces/emel.php?umumi_id=1" method="post" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <div class="">
                                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                                        <span class="btn btn-file btn-default">
                                                            <span class="fileupload-new">Seç</span>
                                                            <span class="fileupload-exists">Dəyiş</span>
                                                            <input type="file" required="" name="logo">
                                                        </span>
                                                        <span class="fileupload-preview"></span>
                                                        <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">×</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <input type="submit"  class="btn btn-success" name="logoduzelis" value="Yadda saxla">
                                        </form>
                                    </td>
                                </tr>
                            </form>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-8">
       <?php 

       $socmysql=@mysql_query("select * from social");
       $social=@mysql_fetch_assoc($socmysql);

       if(isset($_GET['cavab'])) {

        if($_GET['cavab']=="ok") { ?>
        <h1 class="page-subhead-line" style="color: green">Dəyişiklik qeyd edildi</h1>

        <?php
    }

    if($_GET['cavab']=="no") { ?>
    <h1 class="page-subhead-line" style="color: red">Xəta baş verdi</h1>
    <b>Yenidən cəhd edin</b></h1>

    <?php
}
}

else{ ?>

<?php
}
?>
<!--    Context Classes  -->
<div class="panel panel-default">

    <div class="panel-heading">
        <h4>
           Sosial şəbəkə profilləri
       </h4>
   </div>

   <div class="panel-body">
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th style="width: 200px">Sosial şəbəkə</th>
                    <th style="width: 200px">Ünvan</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr class="success">
                    <td><img src="../images/fbicon.png"></td>
                    <td><h4>Facebook</h4></td>
                    <form action="procces/emel.php" method="post">
                        <td><input class="form-control" style="width: 200px" type="text" name="facebook" value="<?php echo $social['facebook'];?>"></td>
                        <td><input class="btn btn-primary" name="fbdeyis" type="submit" value="Dəyiş"></td>
                    </form>
                </tr>
                <tr class="danger">
                    <td><img src="../images/yticon.png"></td>
                    <td><h4>Youtube</h4></td>
                    <form action="procces/emel.php" method="post">
                        <td><input class="form-control" style="width: 200px" type="text" name="youtube" value="<?php echo $social['youtube'];?>"></td>
                        <td><input class="btn btn-primary" name="ytdeyis" type="submit" value="Dəyiş"></td>
                    </form>
                </tr>
                <tr class="success">
                    <td><img src="../images/tticon.png"></td>
                    <td><h4>Twitter</h4></td>
                    <form action="procces/emel.php" method="post">
                        <td><input class="form-control" style="width: 200px" type="text" name="twitter" value="<?php echo $social['twitter'];?>"></td>
                        <td><input class="btn btn-primary" name="ttdeyis" type="submit" value="Dəyiş"></td>
                    </form>
                </tr>
                <tr class="danger">
                    <td><img src="../images/insicon.png"></td>
                    <td><h4>Instagram</h4></td>
                    <form action="procces/emel.php" method="post">
                        <td><input class="form-control" style="width: 200px" type="text" name="instagram" value="<?php echo $social['instagram'];?>"></td>
                        <td><input class="btn btn-primary" name="insdeyis" type="submit" value="Dəyiş"></td>
                    </form>
                </tr>
            </tbody>
        </table>
    </div>
</div>
</div>
<!--  end  Context Classes  -->
</div>
<div class="col-md-8">
   <!--    Menyular -->
   <div class="panel panel-default">
    <div class="panel-heading">
        Keçidlər
    </div>
    <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th style="width: 200px">İkon</th>
                        <th></th>
                        <th>Url</th>
                        <th>Adı</th>
                        <th style="width: 20px"></th>
                    </tr>
                </thead>
                <?php 
                $kecid=@mysql_query("select * from kecidler");
                while ($kecidal=@mysql_fetch_assoc($kecid)) {
                    ?>
                    <tbody>
                        <tr>
                            <td><img width="200px" src="<?php echo $kecidal['kecid_img'];?>"></td>
                            <td>
                                <form action="procces/emel.php" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="kecid_id" value="<?php echo $kecidal['kecid_id']; ?>">
                                    <div class="form-group">
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                            <span class="btn btn-file btn-default">
                                                <span class="fileupload-new">Seç</span>
                                                <span class="fileupload-exists">Dəyiş</span>
                                                <input type="file" required="" name="kecidikon">
                                            </span>
                                            <span class="fileupload-preview"></span>
                                            <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">×</a>
                                            <input type="submit"  class="btn btn-primary" name="kecidimg_duzelis" value="Yenilə">
                                        </div>
                                    </div>
                                </form>
                            </td>
                            <form action="procces/emel.php" method="post">
                                <input type="hidden" value="<?php echo $kecidal['kecid_id']; ?>" name="kecid_id">
                                <td><input type="text" class="form-control" value="<?php echo $kecidal['kecid_url'];?>" name="kecid_url" ><input type="submit" name="kecid_urldeyis" class="btn btn-primary" value="Dəyiş"><br></td></form>
                                <form action="procces/emel.php" method="post">
                                    <input type="hidden" value="<?php echo $kecidal['kecid_id']; ?>" name="kecid_id">
                                    <td><input type="text" class="form-control" value="<?php echo $kecidal['kecid_ad'];?>" name="kecid_ad" ><input type="submit" name="kecid_addeyis" class="btn btn-primary" value="Dəyiş"><br></td></form>
                                    <td><a href="procces/emel.php?kecid_id=<?php echo $kecidal['kecid_id']; ?>&kecid_sil=ok&keciddelimg=<?php echo $kecidal['kecid_img'];?>"><button type="button" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i>Sil</button></a></td>
                                </tr>
                                
                            </tbody>
                            <?php }
                            ?>
                        </table>
                    </div>
                </div>
            </div>
            <!-- End  Hover Rows  -->
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>
                        Keçid əlavə et
                    </h4>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <tbody>
                                <tr>
                                    Keçid ikonu
                                    <form action="procces/emel.php" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <div class="">
                                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                                    <span class="btn btn-file btn-default">
                                                        <span class="fileupload-new">Seç</span>
                                                        <span class="fileupload-exists">Dəyiş</span>
                                                        <input type="file" required="" name="kecidikon">
                                                    </span>
                                                    <span class="fileupload-preview"></span>
                                                    <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">×</a>
                                                </div>
                                            </div>
                                        </div>
                                        Url
                                        <input type="text" name="kecid_url" class="form-control" placeholder="http://">
                                        Adı
                                        <input type="text" name="kecid_ad" class="form-control">
                                    </tr>
                                </tbody>
                            </table>
                            <i class="glyphicon glyphicon-plus"></i><input type="submit"  class="btn btn-success" name="kecid_elaveet" value="Əlavə et">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

</div>
<?php
include'foot.php';
?>