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
               <h1 class="page-head-line" style="font-family: blogger">Menyu əlavə et</h1>
               <?php
               if(isset($_GET['cavab'])) {

                if($_GET['cavab']=="ok") { ?>
                <h1 class="page-subhead-line" style="color: green">Menyu əlavə edildi</h1>

                <?php
            }
            
            if($_GET['cavab']=="no") { ?>
            <h1 class="page-subhead-line" style="color: red">Xəta baş verdi</h1>
            <b>Yenidən cəhd edin</b></h1>
            
            <?php
        }
    }

    else{ ?>
    <h1 class="page-subhead-line">Sayta buradan menyu əlavə edə bilərsiniz</h1>
    
    <?php
}
?>
<div class="col-md-12">
    <div class="col-md-6">
       <form action="procces/emel.php" method="post">
           Menyunun adı<br>
           <input class="form-control" type="text" name="menyu_ad" required="" placeholder="Menyu adını bura daxil edin">
           Menyunun ünvanı<br>
           <input type="text" name="menyu_url" class="form-control" value="http://">
           <br>
           <input class="btn btn-sm btn-success" type="submit" style="width: 300px" name="menyu_elaveet" value="Yadda saxla">
       </div>
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