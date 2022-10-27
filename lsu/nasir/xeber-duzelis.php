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
               <h1 class="page-head-line" style="font-family: blogger">Xəbərdə düzəliş edirsiniz</h1>
               <?php
               if(isset($_GET['cavab'])) {

                if($_GET['cavab']=="ok") { ?>
                <h1 class="page-subhead-line" style="color: green">Xəbərdə düzəliş edildi</h1>

                <?php
            }
            
            if($_GET['cavab']=="no") { ?>
            <h1 class="page-subhead-line" style="color: red">Xəta baş verdi</h1>
            <b>Yenidən cəhd edin</b></h1>
            
            <?php
        }
    }

    else{ ?>
    <h1 class="page-subhead-line">Xəbərlərə buradan düzəliş edə bilərsiniz</h1>
    
    <?php
}
?>
<div class="col-md-12">
    <div class="col-md-6">
       <form action="procces/emel.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label class="control-label col-lg-4">Başlıq fotosu</label>
            <div class="">
                <div class="fileupload fileupload-new" data-provides="fileupload">
                    <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="<?php echo $xeberal['xeber_img'];?>"></div>
                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                    <div>
                        <span class="btn btn-file btn-primary"><span class="fileupload-new">Şəkil seç</span><span class="fileupload-exists">Dəyişdir</span><input type="file" required="" name="basliqfoto-duzelis" value="<?php echo $xeberal['xeber_imgurl'];?>"></span>
                        <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Sil</a>
                    </div>
                </div>
            </div>
        </div>
        <b>Youtube videosu</b><br>
        <textarea name="xeber_tube" class="form-control" style="height: 115px"><?php echo $xeberal['xeber_tube'];?></textarea>
        <input type="hidden" value="<?php echo $xeberal['xeber_id'];?>" name="xeber_id">
        Xəbər adı<br>
        <input class="form-control" type="text" name="xeber_ad" required="" value="<?php echo $xeberal['xeber_ad'];?>"></div>
        <div class="col-md-12">
          Xəbər tərkibi<br>
          <script src="../ckeditor/ckeditor.js"></script>
          <body>
            <textarea name="xeber_terkib" id="editor1" rows="10" cols="80">
                <?php echo $xeberal['xeber_terkib'];?>
            </textarea>
            <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1' );
            </script>
        </body><br>
                        <!--<b>Xəbər sırası</b>(varolan üçün boş saxlayın):
                        <input type="number" class="form-control" name="xeber_sira" value="<?php echo $xeberal['xeber_sira'];?>" style="width: 80px">

                    Ana səhifədə göstərilsin?
                    <div class="form-group" style="width: 150px">
                        <select name="xeber_anaxeber" class="form-control">
                            <option value="0">Xeyr</option>
                            <option value="1" >Bəli</option>
                        </select>
                    </div>--><br>
                    <input class="btn btn-sm btn-success" type="submit" style="width: 300px" name="xeber_duzeliset" value="Yadda saxla">
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