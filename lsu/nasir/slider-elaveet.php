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
       <h1 class="page-head-line" style="font-family: blogger">Slayd əlavə et</h1>
       <?php
       if(isset($_GET['cavab'])) {

        if($_GET['cavab']=="ok") { ?>
        <h1 class="page-subhead-line" style="color: green">Slayd əlavə edildi</h1>

        <?php
      }
      
      if($_GET['cavab']=="no") { ?>
      <h1 class="page-subhead-line" style="color: red">Xəta baş verdi</h1>
      <b>Yenidən cəhd edin</b></h1>
      
      <?php
    }
  }

  else{ ?>
  <h1 class="page-subhead-line">Sayta buradan slayd əlavə edə bilərsiniz</h1>
  
  <?php
}
?>
<div class="col-md-12">
  <div class="col-md-6">

   <form action="procces/emel.php" enctype="multipart/form-data" method="post">

    <div class="form-group">
      <label class="control-label col-lg-4">Slayd fotosu</label>
      <div class="">
        <div class="fileupload fileupload-new" data-provides="fileupload">
          <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="assets/img/demoUpload.jpg" alt="" /></div>
          <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
          <div>
            <span class="btn btn-file btn-primary"><span class="fileupload-new">Şəkil seç</span><span class="fileupload-exists">Dəyişdir</span><input type="file" required="" name="slidesekil"></span>
            <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Sil</a>
          </div>
        </div>
      </div>
    </div>
    <b>Youtube videosu</b><br>
    <textarea name="slider_tube" class="form-control" style="height: 115px"></textarea>
    <b>
    Slaydın adı</b><br>
    <input class="form-control" type="text" name="slider_ad" required="" placeholder="Slaydın adını bura daxil edin">
  </div>
  <div class="col-md-12">
    Slayd tərkibi<br>
    <script src="../ckeditor/ckeditor.js"></script>
    <body>
      <textarea name="slider_terkib" id="editor1" rows="10" cols="80">
        
      </textarea>
      <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1' );
              </script>
            </body>
                        <!--<b>Slayd sırası</b>(varolan üçün boş saxlayın):
                        <input type="number" name="slider_sira" style="width: 50px">
                        <br>-->
                        <br>
                        <input class="btn btn-sm btn-success" style="width: 300px" type="submit" name="slider_elaveet" value="Yadda saxla">
                      </form>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <?php
      include'foot.php';
      ?>