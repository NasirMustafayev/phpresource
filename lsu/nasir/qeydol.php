<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>LSU registry</title>

  <!-- BOOTSTRAP STYLES-->
  <link href="assets/css/bootstrap.css" rel="stylesheet" />
  <!-- FONTAWESOME STYLES-->
  <link href="assets/css/font-awesome.css" rel="stylesheet" />
  <!-- GOOGLE FONTS-->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

  <style>
  body{
    background-image: url(assets/img/bg.jpg);
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100% 100%;
    -moz-background-size:100% 100%;
    -o-background-size: 100% 100%;
    -webkit-background-size: 100% 100%;
    
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

      <div class="panel-body" style="background-color:#D8D8D8;border-radius: 20px;opacity: 0.8">
        <h1>Qeydiyyat</h1>
        <?php
        if(isset($_GET['reg'])) {

          if($_GET['reg']=="no") { ?>
          
          <h5 style="color: red"><u>Səhv baş verdi</u>
            <b>Yenidən cəhd edin</b></h5>
            <?php
            echo mysql_error();
          }
          else{?>
          <h5 style="color:green">Siz uğurla qeyd oldunuz</h5>
          <b>Buradan <a href="login.php"><u>giriş</u></a> edə bilərsiniz</b>
          <?php
          }
        }
        ?>
        <form action="procces/qeydiyyat.php" method="post">
          <hr/>
          <br />
          <div class="form-group input-group">
            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
            <input type="text" class="form-control" name="iadi" placeholder="İstifadəçi adı" />
          </div>
          <div class="form-group input-group">
            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
            <input type="password" class="form-control" name="sifre" placeholder="Şifrə" />
          </div>
          <div class="form-group input-group">
            <span class="input-group-addon"><i class="fa fa-envelope"  ></i></span>
            <input type="text" class="form-control" name="email" placeholder="E-mail" />
          </div>
          <input type="submit" name="reg" class="btn btn-primary" style="width: 100%" value="Qeyd Ol">
          <hr>
          
        </form>
      </div>

    </div>


  </div>
</div>

</body>
</html>