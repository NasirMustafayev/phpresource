<?php

include'head.php';
include'solbar.php';

$xeber_id=$_GET['xeber_id'];
$xeber=@mysql_query("select * from xeberler where xeber_id='$xeber_id'");
$xeberal=@mysql_fetch_assoc($xeber);

if(!isset($_SESSION['iadi'])) {
	header('location:login.php');
}

?>
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
               <h1 class="page-head-line" style="font-family: blogger"><?php echo $xeberal['xeber_ad']; ?></h1>
               <?php
               if(isset($_GET['cavab'])) {

                if($_GET['cavab']=="ok") { ?>
                <h1 class="page-subhead-line" style="color: green">Xəbərə foto əlavə edildi</h1>

                <?php
            }
            
            if($_GET['cavab']=="no") { ?>
            <h1 class="page-subhead-line" style="color: red">Xəta baş verdi</h1>
            <b>Yenidən cəhd edin</b></h1>
            
            <?php
        }
    }

    else{ ?>
    <h1 class="page-subhead-line">Xəbər tərkibinə buradan foto əlavə edə bilərsiniz</h1>
    
    <?php
}
?>
<div class="col-md-12">
    <div class="col-md-6">
       <form action="procces/emel.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label class="control-label col-lg-4">Tərkib fotosu(1)</label>
            <div class="">
                <div class="fileupload fileupload-new" data-provides="fileupload">
                    <span class="btn btn-file btn-default">
                        <span class="fileupload-new">Seç</span>
                        <span class="fileupload-exists">Dəyiş</span>
                        <input type="file"  required="" name="terkibfoto1">
                    </span>
                    <span class="fileupload-preview"></span>
                    <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">×</a>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-lg-4">Tərkib fotosu(2)</label>
            <div class="">
                <div class="fileupload fileupload-new" data-provides="fileupload">
                    <span class="btn btn-file btn-default">
                        <span class="fileupload-new">Seç</span>
                        <span class="fileupload-exists">Dəyiş</span>
                        <input type="file"  required="" name="terkibfoto2">
                    </span>
                    <span class="fileupload-preview"></span>
                    <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">×</a>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-lg-4">Tərkib fotosu(3)</label>
            <div class="">
                <div class="fileupload fileupload-new" data-provides="fileupload">
                    <span class="btn btn-file btn-default">
                        <span class="fileupload-new">Seç</span>
                        <span class="fileupload-exists">Dəyiş</span>
                        <input type="file"  required="" name="terkibfoto3">
                    </span>
                    <span class="fileupload-preview"></span>
                    <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">×</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6" style="float: right">
        <div class="form-group">
            <label class="control-label col-lg-4">Tərkib fotosu(4)</label>
            <div class="">
                <div class="fileupload fileupload-new" data-provides="fileupload">
                    <span class="btn btn-file btn-default">
                        <span class="fileupload-new">Seç</span>
                        <span class="fileupload-exists">Dəyiş</span>
                        <input type="file"  required="" name="terkibfoto4">
                    </span>
                    <span class="fileupload-preview"></span>
                    <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">×</a>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-lg-4">Tərkib fotosu(5)</label>
            <div class="">
                <div class="fileupload fileupload-new" data-provides="fileupload">
                    <span class="btn btn-file btn-default">
                        <span class="fileupload-new">Seç</span>
                        <span class="fileupload-exists">Dəyiş</span>
                        <input type="file"  required="" name="terkibfoto5">
                    </span>
                    <span class="fileupload-preview"></span>
                    <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">×</a>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-lg-4">Tərkib fotosu(6)</label>
            <div class="">
                <div class="fileupload fileupload-new" data-provides="fileupload">
                    <span class="btn btn-file btn-default">
                        <span class="fileupload-new">Seç</span>
                        <span class="fileupload-exists">Dəyiş</span>
                        <input type="file"  required="" name="terkibfoto6">
                    </span>
                    <span class="fileupload-preview"></span>
                    <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">×</a>
                </div>
            </div>
        </div>
    </div>
    <input type="hidden" value="<?php echo $xeberal['xeber_id'];?>" required="" name="xeber_id">
    <input class="btn btn-sm btn-success" type="submit" style="width: 300px" required="" name="xeber_addphoto" value="Yadda saxla">
</div>
</div>
</div>
</div>
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
</div>
<?php
include'foot.php';
?>