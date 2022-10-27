<?php

include'head.php';
include'solbar.php';

$slider_id=$_GET['slider_id'];
$slider=@mysql_query("select * from slider where slider_id='$slider_id'");
$slideral=@mysql_fetch_assoc($slider);

if(!isset($_SESSION['iadi'])) {
	header('location:login.php');
}

?>
<div id="page-wrapper">
  <div id="page-inner">
    <div class="row">
      <div class="col-md-12">
       <h1 class="page-head-line" style="font-family: blogger">Slaydda düzəliş edirsiniz</h1>
       <?php
       if(isset($_GET['cavab'])) {

        if($_GET['cavab']=="ok") { ?>
        <h1 class="page-subhead-line" style="color: green">Slaydda düzəliş edildi</h1>

        <?php
      }
      
      if($_GET['cavab']=="no") { ?>
      <h1 class="page-subhead-line" style="color: red">Xəta baş verdi</h1>
      <b>Yenidən cəhd edin</b></h1>
      
      <?php
    }
  }

  else{ ?>
  <h1 class="page-subhead-line">Slaydlara buradan düzəliş edə bilərsiniz</h1>
  
  <?php
}
?>
<div class="col-md-12">
  <div class="col-md-6">
   <form action="procces/emel.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label class="control-label col-lg-4">Slayd fotosu</label>
      <div class="">
        <div class="fileupload fileupload-new" data-provides="fileupload">
          <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="<?php echo $slideral['slider_imgurl'];?>"></div>
          <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
          <div>
            <span class="btn btn-file btn-primary"><span class="fileupload-new">Şəkil seç</span><span class="fileupload-exists">Dəyişdir</span><input type="file" required="" name="slidesekil-duzelis" value="<?php echo $slideral['slider_imgurl'];?>"></span>
            <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Sil</a>
          </div>
        </div>
      </div>
    </div>
    <b>Youtube videosu</b><br>
    <textarea name="slider_tube" class="form-control" style="height: 115px"><?php echo $slideral['slider_tube']; ?></textarea>
    <input type="hidden" value="<?php echo $slideral['slider_id'];?>" name="slider_id">
    Slayd adı<br>
    <input class="form-control" type="text" name="slider_ad" required="" value="<?php echo $slideral['slider_ad'];?>"></div>
    <div class="col-md-12">
      Slayd tərkibi<br>
      <script src="../ckeditor/ckeditor.js"></script>
      <body>
        <textarea name="slider_terkib" id="editor1" rows="10" cols="80">
          <?php echo $slideral['slider_terkib'];?>
        </textarea>
        <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1' );
              </script>
            </body><br>
                        <!--<b>Slayd sırası</b>(varolan üçün boş saxlayın):
                        <input type="number" class="form-control" name="slider_sira" value="<?php echo $slideral['slider_sira'];?>" style="width: 80px">

                    Ana səhifədə göstərilsin?
                    <div class="form-group" style="width: 150px">
                        <select name="slider_anaslider" class="form-control">
                            <option value="0">Xeyr</option>
                            <option value="1" >Bəli</option>
                        </select>
                      </div>--><br>
                      <input class="btn btn-sm btn-success" type="submit" style="width: 300px" name="slider_duzeliset" value="Yadda saxla">
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