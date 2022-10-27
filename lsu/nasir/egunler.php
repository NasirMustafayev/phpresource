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
               <h1 class="page-head-line" style="font-family: blogger">ƏLAMƏTDAR GÜNLƏR</h1>
               <h1 class="page-subhead-line">Əlamətdar günləri buradan idarə edə bilrəsiniz<br>
                  <br>
                  <div class="col-md-12">
                    <center>
                      <a href="egun-elaveet.php"><button type="button" style="width: 300px" class="btn btn-sm btn-success"><i class="glyphicon glyphicon-plus" aria-hidden="true"></i> Əlavə et</button></a></center>
                      <br>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                       <!--    Menyular -->
                       <div class="panel panel-default">
                        <div class="panel-heading">
                            Əlamətdar günlər
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Başlığı</th>
                                            <th>Əlaqədar foto</th>
                                            <th>Ay və gün</th>
                                            <th style="width: 20px"></th>
                                            <th style="width: 20px"></th>
                                        </tr>
                                    </thead>
                                    <?php 
                                    $egun=@mysql_query("select * from egun order by egun_id DESC");
                                    while ($egunal=@mysql_fetch_assoc($egun)) {
                                    	?>
                                        <tbody>
                                            <tr>
                                               <td><?php echo $egunal['egun_id']; ?></td>
                                               <td><?php echo $egunal['egun_ad']; ?></td>
                                               <td><img width="200px" src="<?php echo $egunal['egun_img'];?>"></td>
                                               <td><?php echo $egunal['egun_tarix']; ?></td>
                                            <!--<form action="procces/emel.php" method="post">
                                            <input type="hidden" value="<?php echo $egunal['egun_id']; ?>" name="egun_id">
                                            <td><input type="number" style="width: 70px" value="<?php echo $egunal['egun_sira'];?>" name="egun_sira" ><input type="submit" name="egun_siradeyis" class="btn btn-primary" value="Dəyiş"><br>(Boşdursa sonuncudur)</td></form>-->
                                            <td><a href="procces/emel.php?egun_id=<?php echo $egunal['egun_id']; ?>&egun_sil=ok&egundelimg=<?php echo $egunal['egun_img'];?>"><button type="button" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Sil</button></a></td>
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