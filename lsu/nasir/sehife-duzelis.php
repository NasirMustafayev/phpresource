<?php

include'head.php';
include'solbar.php';

$sehife_id=$_GET['sehife_id'];
$sehife=@mysql_query("select * from sehifeler where sehife_id='$sehife_id'");
$sehifeal=@mysql_fetch_assoc($sehife);

if(!isset($_SESSION['iadi'])) {
	header('location:login.php');
}

?>
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
               <h1 class="page-head-line" style="font-family: blogger">Elanda düzəliş edirsiniz</h1>
               <?php
               if(isset($_GET['cavab'])) {

                if($_GET['cavab']=="ok") { ?>
                <h1 class="page-subhead-line" style="color: green">Elanda düzəliş edildi</h1>

                <?php
            }
            
            if($_GET['cavab']=="no") { ?>
            <h1 class="page-subhead-line" style="color: red">Xəta baş verdi</h1>
            <b>Yenidən cəhd edin</b></h1>
            
            <?php
        }
    }

    else{ ?>
    <h1 class="page-subhead-line">Elanlara buradan düzəliş edə bilərsiniz</h1>
    
    <?php
}
?>
<div class="col-md-12">
    <div class="col-md-6">
       <form action="procces/emel.php" method="post">
        <input type="hidden" value="<?php echo $sehifeal['sehife_id'];?>" name="sehife_id">
        Elan adı<br>
        <input class="form-control" type="text" name="sehife_ad" required="" value="<?php echo $sehifeal['sehife_ad'];?>"></div>
        <div class="col-md-12">
          Elan tərkibi<br>
          <script src="../ckeditor/ckeditor.js"></script>
          <body>
            <textarea name="sehife_terkib" id="editor1" rows="10" cols="80">
                <?php echo $sehifeal['sehife_terkib'];?>
            </textarea>
            <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1' );
            </script>
        </body><br>
        <b>Elanın yerləşdirilmə tarixi</b>(varolan üçün boş saxlayın):
        <input type="text" value="<?php echo $sehifeal['sehife_tarix'];?>" class="form-control" name="sehife_tarix" style="width: 110px">
        <b>Elan sırası</b>(varolan üçün boş saxlayın):
        <input type="number" class="form-control" name="sehife_sira" value="<?php echo $sehifeal['sehife_sira'];?>" style="width: 80px">

                    <!--Ana səhifədə göstərilsin?
                    <div class="form-group" style="width: 150px">
                        <select name="sehife_anasehife" class="form-control">
                            <option value="0">Xeyr</option>
                            <option value="1" >Bəli</option>
                        </select>
                    </div>--><br>
                    <input class="btn btn-sm btn-success" type="submit" style="width: 300px" name="sehife_duzeliset" value="Yadda saxla">
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