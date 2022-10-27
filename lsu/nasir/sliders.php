<?php

include'head.php';
include'solbar.php';
if(!isset($_SESSION['iadi'])) {
	header('location:login.php');
}

?>
<div id="page-wrapper">
  <div id="page-inner">
    <div class="row">
      <div class="col-md-12">
       <h1 class="page-head-line" style="font-family: blogger">SLAYDLAR</h1>
       <?php
       if(isset($_GET['cavab'])) {

        if($_GET['cavab']=="ok") { ?>
        <h1 class="page-subhead-line" style="color: green">Əməliyyat yerinə yetirildi</h1>

        <?php
      }
      
      if($_GET['cavab']=="no") { ?>
      <h1 class="page-subhead-line" style="color: red">Xəta baş verdi</h1>
      <b>Yenidən cəhd edin</b>
      
      <?php
    }
  }

  else{ ?>
  

  <h1 class="page-subhead-line">Bu bölmədə siz saytdaki slaydları idarə edə bilrəsiniz<br></h1>
  <?php
  }
?>
<br>
<div class="col-md-12">
  <center>
    <a href="slider-elaveet.php"><button type="button" style="width: 300px" class="btn btn-sm btn-success"><i class="glyphicon glyphicon-plus" aria-hidden="true"></i> Əlavə et</button></a></center>
    <br>
  </div>
  <div class="row">
    <div class="col-md-12">
     <!--    Menyular -->
     <div class="panel panel-default">
      <div class="panel-heading">
        Əlavə edilmiş slaydlar
      </div>
      <div class="panel-body">
        <div class="table-responsive">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>#</th>
                <th style="width: 350px">Slayd adı</th>
                <th>Slayd fotosu</th>
                <th>Tarix</th>
                <th></th>
                <th style="width: 20px"></th>
                <th style="width: 20px"></th>
              </tr>
            </thead>
            <?php 
            $slider=@mysql_query("select * from slider order by slider_id DESC");
            while ($slideral=@mysql_fetch_assoc($slider)) {
             ?>
             <tbody>
              <tr>
               <td><?php echo $slideral['slider_id']; ?></td>
               <td><?php echo $slideral['slider_ad']; ?></td>
               <td><img width="200px" src="<?php echo $slideral['slider_imgurl'];?>"></td>
               <td><?php echo $slideral['slider_tarix']; ?></td>
               <td><a href="slider-duzelis.php?slider_id=<?php echo $slideral['slider_id'];?>"><button type="button" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Düzəliş et</button></a></td>
                                            <!--<form action="procces/emel.php" method="post">
                                            <input type="hidden" value="<?php echo $slideral['slider_id']; ?>" name="slider_id">
                                            <td><input type="number" style="width: 70px" value="<?php echo $slideral['slider_sira'];?>" name="slider_sira" ><input type="submit" name="slider_siradeyis" class="btn btn-primary" value="Dəyiş"><br>(Boşdursa sonuncudur)</td></form>-->
                                            <td><a href="procces/emel.php?slider_id=<?php echo $slideral['slider_id']; ?>&slider_sil=ok&sliderdelimg=<?php echo $slideral['slider_imgurl'];?>"><button type="button" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Sil</button></a></td>
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
                            </h1>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                    <?php
                    include'foot.php';
                    ?>