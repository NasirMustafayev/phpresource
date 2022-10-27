<?php

include'head.php';
include'solbar.php';

$mailmyssql=@mysql_query("select * from mail");
$mail=@mysql_fetch_assoc($mailmyssql);

if(!isset($_SESSION['iadi'])) {
	header('location:login.php');
}

?>
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
             <h1 class="page-head-line" style="font-family: blogger">MAİL PARAMETRLƏRİ</h1>
             <?php
             if(isset($_GET['cavab'])) {

                if($_GET['cavab']=="ok") { ?>
                <h1 class="page-subhead-line" style="color: green">YENİ MAİL PARAMETRLƏRİ QEYD EDİLDİ</h1>

                <?php
            }
            
            if($_GET['cavab']=="no") { ?>
            <h1 class="page-subhead-line" style="color: red">Xəta baş verdi</h1>
            <b>Yenidən cəhd edin</b></h1>
            
            <?php
        }
    }

    else{ ?>
    <h1 class="page-subhead-line">Mail parametrlərini idarə edin</h1><h1 class="page-subhead-line" style="color: red">DİQQƏT! ƏGƏR KƏNAR ŞƏXS İSƏNİZ VƏ YA BUNUN NƏ OLDUĞU HAQQINDA MƏLUMATINIZ YOXDURSA AŞAĞIDA HEÇ BİR ŞEYİ DƏYİŞMƏYİN VƏ BURANI TƏRK EDİN.</h1>

    
    <?php

}
?>
<div class="col-md-12">
    <div class="col-md-6">

        <form action="procces/emel.php" method="post">

         SMTP USER<br>
         <input class="form-control" type="text" name="smtpuser" value="<?php echo $mail['smtpuser']; ?>">
         SMTP HOST<br>
         <input type="text" name="smtphost" class="form-control" value="<?php echo $mail['smtphost']; ?>">
         SMTP PORT<br>
         <input type="number" name="smtpport" style="width: 120px" class="form-control" value="<?php echo $mail['smtpport']; ?>">
         SMTP PASSWORD<br>
         <input type="text" name="smtppass" class="form-control" value="<?php echo $mail['smtppass']; ?>">
         <br>
         <input class="btn btn-sm btn-success" type="submit" style="text-align: center;width: 300px" name="mailupdate" value="Yadda saxla">
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