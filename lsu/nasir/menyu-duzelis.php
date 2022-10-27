<?php

include'head.php';
include'solbar.php';

$menyu_id=$_GET['menyu_id'];
$menyu=@mysql_query("select * from menyular where menyu_id='$menyu_id'");
$menyual=@mysql_fetch_assoc($menyu);

if(!isset($_SESSION['iadi'])) {
	header('location:login.php');
}

?>
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
               <h1 class="page-head-line" style="font-family: blogger">Menyuda düzəliş et</h1>
               <?php
               if(isset($_GET['cavab'])) {

                if($_GET['cavab']=="ok") { ?>
                <h1 class="page-subhead-line" style="color: green">Menyuda düzəliş edildi</h1>

                <?php
            }
            
            if($_GET['cavab']=="no") { ?>
            <h1 class="page-subhead-line" style="color: red">Xəta baş verdi</h1>
            <b>Yenidən cəhd edin</b></h1>
            
            <?php
        }
    }

    else{ ?>
    <h1 class="page-subhead-line">Menyulara buradan düzəliş edə bilərsiniz</h1>
    
    <?php

}
?>
<div class="col-md-12">
    <div class="col-md-6">

        <form action="procces/emel.php" method="post">

            <input type="hidden" name="menyu_id" value="<?php echo $menyual['menyu_id'];?>">
            Menyunun adı<br>
            <input class="form-control" type="text" name="menyu_ad" value="<?php echo $menyual['menyu_ad']; ?>">
            Menyunun ünvanı<br>
            <input type="text" name="menyu_url" class="form-control" value="<?php echo $menyual['menyu_url']; ?>">
            <br>
            <input class="btn btn-sm btn-success" type="submit" name="menyu_duzeliset" value="Düzəliş et">
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