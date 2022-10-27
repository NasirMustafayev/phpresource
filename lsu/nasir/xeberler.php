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
               <h1 class="page-head-line" style="font-family: blogger">Xəbərlər</h1>
               <h1 class="page-subhead-line">Bu bölmə vasitəsilə siz saytdaki xəbərləri idarə edə bilrəsiniz<br>
                  <br>
                  <div class="col-md-12">
                    <center>
                      <a href="xeber-elaveet.php"><button type="button" style="width: 300px" class="btn btn-sm btn-success"><i class="glyphicon glyphicon-plus" aria-hidden="true"></i> Əlavə et</button></a></center>
                      <br>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                       <!--    Menyular -->
                       <div class="panel panel-default">
                        <div class="panel-heading">
                            Əlavə edilmiş xəbərlər
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th style="width: 330px">Xəbər adı</th>
                                            <th>Tarixi</th>
                                            <th>Başlıq şəkli</th>
                                            <th style="width: 15px"></th>
                                            <th style="width: 15px"></th>
                                            <th style="width: 15px"></th>
                                        </tr>
                                    </thead>
                                    <?php 
                                    $xeber=@mysql_query("select * from xeberler order by xeber_id desc");
                                    while ($xeberal=@mysql_fetch_assoc($xeber)) {
                                    	?>
                                        <tbody>
                                            <tr>
                                               <td><?php echo $xeberal['xeber_id']; ?></td>
                                               <td><?php echo $xeberal['xeber_ad']; ?></td>
                                               <td><?php echo $xeberal['xeber_tarix']; ?></td>
                                               <td><img width="180px" src="<?php echo $xeberal['xeber_img']; ?>"></td>
                                               <td><a href="xeber-qalereya.php?xeber_id=<?php echo $xeberal['xeber_id'];?>"><button type="button" class="btn btn-success"><i class="fa fa-picture-o" aria-hidden="true"></i> Foto artır</button></a></td>
                                               <td><a href="xeber-duzelis.php?xeber_id=<?php echo $xeberal['xeber_id'];?>"><button type="button" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Düzəliş et</button></a></td>
                                               <td><a href="procces/emel.php?xeber_id=<?php echo $xeberal['xeber_id'];?>&xeber_sil=ok&xeberdelimg=<?php echo $xeberal['xeber_img'];?>"><button type="button" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Sil</button></a></td>
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
<?php
include'foot.php';
?>