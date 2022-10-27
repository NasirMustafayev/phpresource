<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>LSU login panel</title>

  <!-- BOOTSTRAP STYLES-->
  <link href="assets/css/bootstrap.css" rel="stylesheet" />
  <!-- FONTAWESOME STYLES-->
  <link href="assets/css/font-awesome.css" rel="stylesheet" />
  <!-- GOOGLE FONTS-->
  <!--<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />-->

  <style>
  body{
    background-image: url(assets/img/bg1.jpg) width:100%;
    background-repeat: no-repeat;
    animation:image 30s infinite alternate;
    -webkit-animation:image 30s infinite alternate;
    -moz-animation:image 30s infinite alternate;
    background-attachment: fixed;
    background-size: 100% 100%;
    -moz-background-size:100% 100%;
    -o-background-size: 100% 100%;
    -webkit-background-size: 100% 100%;
  }
  @keyframes image{
    0%{
      background:url("assets/img/bg1.jpg") no-repeat;
      background-size: 100%;
    }
    
    25%{
      background:url("assets/img/bg2.jpg") no-repeat;
      background-size: 100%;
    }
    
    50%{
      background:url("assets/img/bg-3.jpg") no-repeat;
      background-size: 100%;
    }
    
    75%{
      background:url("assets/img/bg4.jpg") no-repeat;
      background-size: 100%;
    }
    
    100%{
      background:url("assets/img/bg-5.jpg") no-repeat;
      background-size: 100%;
    }
  }
</style>
</head>
<body >
  <div class="container">
    <div class="row text-center " style="padding-top:120px">
    </div>
  </div>
  <div class="row">

    <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">

      <div class="panel-body" style="background-color:#D8D8D8;border-radius: 20px; border-color: blue;opacity: 0.8;max-width: 420px">
        <h1 style="text-align: center">İdarəetmə paneli</h1>
        <form action="procces/emel.php" method="post">
          <hr/>
          <?php
          if(isset($_GET['cavab'])) {

            if($_GET['cavab']=="no") { ?>
            
            <h5>İstifadəçi adı və ya şifrə səhvdir</h5>
            <?php
          }
        }
        if(isset($_GET['reg'])) {

          if($_GET['cavab']=="ok") { ?>
          
          <h5 style="color: green"><u>Siz uğurla qeydiyyatdan keçdiniz</u>
            <b>Daxil ola bilərsiniz</b></h5>
            <?php
          }
        }
        ?>
        <br />
        <div class="form-group input-group">
          <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
          <input type="text" class="form-control" name="iadi" placeholder="İstifadəçi adı" />
        </div>
        <div class="form-group input-group">
          <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
          <input type="password" class="form-control" name="sifre" placeholder="Şifrə" />
        </div>
        <input type="submit" name="giris" class="btn btn-primary" style="width: 100%" value="Daxil Ol">
        <!--<br><br>
        <a href="qeydol.php"><button type="button" class="btn btn-success" style="width: 100%">Qeydiyyat</button></a>
        <hr>-->
                    
                       Qeydiyyatdan keçməmisiniz ? <a href="qeydol.php" >buraya klikləyərək </a> qeyd olun və ya <a href="../index.php">Ana səhifəyə</a> qayıdın<hr>
                     </form>
                   </div>

                 </div>


               </div>
             </div>

           </body>
           </html>