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
       <h1 class="page-head-line" style="font-family: blogger">MENYULAR</h1>
       <?php
       if(isset($_GET['cavab'])) {

        if($_GET['cavab']=="ok") { ?>
        <h1 class="page-subhead-line" style="color: green">Menyuda düzəliş edildi</h1>

        <?php
      }
      
      if($_GET['cavab']=="no") { ?>
      <h1 class="page-subhead-line" style="color: red">Xəta baş verdi</h1>
      <b>Yenidən cəhd edin</b>
      
      <?php
    }
  }

  else{ ?>
  <h1 class="page-subhead-line">Bu bölmədə siz saytdaki menyuları idarə edə bilrəsiniz<br></h1>
  
  <?php

}
?>

<br>
<div class="col-md-12">
  <center>
    <a href="menyu-elaveet.php"><button type="button" style="width: 300px" class="btn btn-sm btn-success"><i class="glyphicon glyphicon-plus" aria-hidden="true"></i> Əlavə et</button></a></center>
    <br>
  </div>
  <div class="row">
    <div class="col-md-12">
     <!--    Menyular -->
     <div class="panel panel-default">
      <div class="panel-heading">
        Əlavə edilmiş menyular
      </div>
      <div class="panel-body">
        <div class="table-responsive">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>#</th>
                <th style="width: 400px">Menyu adı</th>
                <th>Menyu ünvanı</th>
                <th style="width: 20px"></th>
                <th style="width: 20px"></th>
              </tr>
            </thead>
            <?php 
            $menyu=@mysql_query("select * from menyular");
            while ($menyual=@mysql_fetch_assoc($menyu)) {
             ?>
             <tbody>
              <tr>
               <td><?php echo $menyual['menyu_id']; ?></td>
               <td><?php echo $menyual['menyu_ad']; ?></td>
               <td><?php echo $menyual['menyu_url']; ?></td>
               <td><a href="menyu-duzelis.php?menyu_id=<?php echo $menyual['menyu_id']; ?>"><button type="button" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Düzəliş  et</button></a></td>
               <td><a href="procces/emel.php?menyu_id=<?php echo $menyual['menyu_id']; ?>&menyu_sil=ok"><button type="button" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Sil</button></a></td>
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
</div>
<?php
include'foot.php';
?>