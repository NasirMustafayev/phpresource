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
             <h1 class="page-head-line" style="font-family: blogger">ELANLAR</h1>
             <h1 class="page-subhead-line">Bu bölmədə siz saytdaki elanları idarə edə bilrəsiniz<br>
              <br>
              <div class="col-md-12">
                <center>
                  <a href="sehife-elaveet.php"><button type="button" style="width: 300px" class="btn btn-sm btn-success"><i class="glyphicon glyphicon-plus" aria-hidden="true"></i> Əlavə et</button></a></center>
                  <br>
              </div>
              <div class="row">
                <div class="col-md-12">
                 <!--    Menyular -->
                 <div class="panel panel-default">
                    <div class="panel-heading">
                        Əlavə edilmiş elanlar
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Elan adı</th>
                                        <th>Əlavə olunma tarixi</th>
                                        <!--<th>Ana səhifədə göstər</th>-->
                                        <th style="width: 20px"></th>
                                        <th style="width: 20px"></th>
                                    </tr>
                                </thead>
                                <?php 
                                $sehife=@mysql_query("select * from sehifeler order by sehife_id desc");
                                while ($sehifeal=@mysql_fetch_assoc($sehife)) {
                                   ?>
                                   <tbody>
                                    <tr>
                                     <td><?php echo $sehifeal['sehife_id']; ?></td>
                                     <td><?php echo $sehifeal['sehife_ad']; ?></td>
                                     <td><?php echo $sehifeal['sehife_tarix']; ?></td>
                                            <!--<?php 
                                            if($sehifeal['sehife_anasehife']==1){ ?>

                                            <td style="color: green">Bəli</td>
                                            <?php
                                            }
                                            else{?>
                                            <td style="color: red">Xeyr</td>
                                            <?php

                                            }

                                            ?>-->

                                            <td><a href="sehife-duzelis.php?sehife_id=<?php echo $sehifeal['sehife_id'];?>"><button type="button" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Düzəliş  et</button></a></td>
                                            <td><a href="procces/emel.php?sehife_id=<?php echo $sehifeal['sehife_id'];?>&sehife_sil=ok"><button type="button" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Sil</button></a></td>
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