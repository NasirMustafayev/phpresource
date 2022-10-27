<?php
error_reporting(0);
$mysql=@mysql_connect('localhost','root','516458488');
$db=mysql_select_db('lsu');

if (!$mysql) {
  echo'<h2>MYSQL İLƏ  BAĞLANTI BAŞ TUTMADI!<br>';
  echo '<font color="red">'.mysql_error().'</font></h2>';
}
elseif (!$db) {
  echo '<h2>VERİLƏNLƏR BAZASI İLƏ BAĞLANTI KƏSİLDİ<br>';
  echo '<font color="red">'.mysql_error().'</font></h2>'; }
  else{
   ?>
   <!DOCTYPE html>
   <html>
   <head>
    <title>LANKARAN STATE UNIVERSITY</title>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css">
    <link rel="stylesheet" type="text/css" href="assets/css/theme.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

<!--[if lt IE 9]>
<script src="assets/js/html5shiv.min.js"></script>
<script src="assets/js/respond.min.js"></script>
<![endif]-->
</head>
<body>
  <div id="preloader">
    <div id="status">&nbsp;</div>
  </div>

  <header id="header"> 
    <div class="row" style="background-color: #004D40">
      <div class="col-lg-12 col-md-12">  
      </div>
      <?php

      $umumi=@mysql_query("select * from umumi");
      $logoal=@mysql_fetch_assoc($umumi);

      ?>
      <div class="col-lg-12 col-md-12 col-sm12">
        <div class="header_bottom_center" style="background-color: #004D40; background-size: 100%">
          <center>
            <a class="logo" href="index.php"><img style="border-radius: 100%" src="nasir/<?php echo $logoal['logo'];?>" width="100px"></a><h2 style="color:white;font-family: blogger">Lənkəran Dövlət Universiteti</h2></center>
            <div class="header_top_right">
              <form action="axtar.php" method="post" class="search_form">
                <input type="text" required="" name="metn" placeholder="Axtarış sözü daxil edin">
                <input type="submit" value="">
              </form>
            </div>
            <div id="navarea">
              <nav class="navbar navbar-default" role="navigation">
                <div class="container-fluid">
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                  </div>
                  <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav custom_nav">
                      <li class="dropdown"> <a href="index.php" class="" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-home" aria-hidden="true"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="elaqe.php"><h4>Əlaqə</h4></a></li>
                          <li><a href="axtar.php">Axtarış</a></li>
                        </ul>
                      </li>
                      <?php 

                      $menyu=@mysql_query("select * from menyular");
                      while ($menyual=@mysql_fetch_assoc($menyu)) {

                        ?>
                        <li class=""><a href="<?php  echo $menyual["menyu_url"]; ?>" target="_blank" ><?php  echo $menyual["menyu_ad"];?></a></li>
                        <?php 

                      }
                      ?>
                      <li class="dropdown"> <a href="index.php" class="" data-toggle="dropdown" role="button" aria-expanded="false">Rektorluq<i class="fa fa-arrow-circle-down"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="butun_elanlar.php">Rektor</a></li>
                          <li><a href="axtar.php">Tədris işləri üzrə prorektor</a></li>
                          <li><a href="axtar.php">Elmi işlər üzrə prorektor</a></li>
                          <li><a href="axtar.php">Ümumi işlər üzrə prorektor</a></li>
                          <li><a href="axtar.php">Təsərrüfat və iqtisadi məsələlər üzrə prorektor</a></li>
                          <li><a href="axtar.php">Tərbiyə işləri üzrə prorektor</a></li>
                          <li><a href="axtar.php">Rektor müşaviri</a></li>
                          <li><a href="axtar.php">Maliyyə və mühasibatlıq şöbəsi</a></li>
                          <li><a href="axtar.php">İnsan resursları və kargüzarlıq şöbəsi</a></li>
                          <li><a href="axtar.php">Elmi katib</a></li>
                          <li><a href="axtar.php">Rektor köməkçisi</a></li>
                        </ul>
                      </li>
                      <li class="dropdown"> <a href="index.php" class="" data-toggle="dropdown" role="button" aria-expanded="false">strukturlar<i class="fa fa-arrow-circle-down"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="butun_elanlar.php">Tədris işləri</a></li>
                          <li><a href="axtar.php">Elmi işlər</a></li>
                          <li><a href="axtar.php">Ümumi işlər</a></li>
                          <li><a href="axtar.php">Sosial məsələlər</a></li>
                          <li><a href="axtar.php">Təsərrüfat işləri</a></li>
                        </ul>
                      </li>
                      <li class="dropdown"> <a href="index.php" class="" data-toggle="dropdown" role="button" aria-expanded="false">FAKÜLTƏLƏR<i class="fa fa-arrow-circle-down"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="butun_elanlar.php">Aqrar&mühəndislik</a></li>
                          <li><a href="axtar.php">İqtisadiyyat&idarəetmə</a></li>
                          <li><a href="axtar.php">Humanitar</a></li>
                          <li><a href="axtar.php">Təbiyyat</a></li>
                        </ul>
                      </li>
                      <li class="dropdown"> <a href="index.php" class="" data-toggle="dropdown" role="button" aria-expanded="false">KAFEDRALAR<i class="fa fa-arrow-circle-down"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li style="background-color: white">Aqrar&mühəndislik fakültəsi</li>
                          <li><a href="butun_elanlar.php">Texnologiya&texniki fənnlər</a></li>
                          <li><a href="butun_elanlar.php">Baytarlıq&aqrar fənnlər</a></li>
                          <li style="background-color: white">İqtisadiyyat&idarəetmə fakültəsi</li>
                          <li><a href="butun_elanlar.php">Maliyyə,mühasibat və audit</a></li>
                          <li><a href="axtar.php">İqtisadiyyat&marketinq</a></li>
                          <li><a href="axtar.php">Biznes&idarəetmə</a></li>
                          <li><a href="axtar.php">Təbiyyat</a></li>
                        </ul>
                      </li>
                      <!--SAG MENU
                      <li class="dropdown" style="float: right;margin-right: 52px;font-size: 20px"><a href="index.php" class="" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-globe"></i>E-RESURSLAR</a>
                        <ul class="dropdown-menu" style="background-color: #004D40;width: 140%;float: right" role="menu">
                          <li style="font-size: 20px"><a href="http://e.lsu.edu.az"><i class="fa fa-list-alt"></i>E-Jurnal</a></li>
                          <li style="font-size: 20px"><a href="axtar.php"><i class="fa fa-book"></i>E-Kitabxana</a></li>
                          <li style="font-size: 18px"><a href="axtar.php"><i class="fa fa-language"></i>İngilis dili mərkəzi</a></li>
                        </ul>
                      </li>-->
                    </ul>
                  </div>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </header>
    <?php
  }
  ?>