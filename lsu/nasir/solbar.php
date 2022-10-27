
<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <li>
                <div class="user-img-div">
                    <div class="inner-text">
                        <h3>
                            İstifadəçi: <?php echo $_SESSION['iadi']; ?>
                        </h3>
                        <br/>
                        <?php 
                        date_default_timezone_set('Asia/Baku');
                        ?>
                        <body onload="startTime()"><h2><div id="txt">00:00:00</div></h2></body>
                    </div>
                </div>

            </li>
            <li>
                <a <?php if("http://".$_SERVER['HTTP_HOST']."".$_SERVER['REQUEST_URI'].""=='http://localhost/lsu/nasir/index.php'){?> class="active-menu" <?php } ?> href="index.php"><i class="fa fa-dashboard "></i>Əsas səhifə</a>
            </li>
            <li>
                <a <?php if("http://".$_SERVER['HTTP_HOST']."".$_SERVER['REQUEST_URI'].""=='http://localhost/lsu/nasir/menyular.php'){?> class="active-menu" <?php } ?> href="menyular.php"><i class="fa fa-bars "></i>Menyular</a>
            </li>
            <li>
                <a <?php if("http://".$_SERVER['HTTP_HOST']."".$_SERVER['REQUEST_URI'].""=='http://localhost/lsu/nasir/sliders.php'){?> class="active-menu" <?php } ?> href="sliders.php"><i class="fa fa-sliders "></i>Slaydlar</a>
            </li>
            <li>
                <a <?php if("http://".$_SERVER['HTTP_HOST']."".$_SERVER['REQUEST_URI'].""=='http://localhost/lsu/nasir/sehifeler.php'){?> class="active-menu" <?php } ?> href="sehifeler.php"><i class="fa fa-bullhorn"></i>Elanlar</a>
            </li>
            <li>
                <a <?php if("http://".$_SERVER['HTTP_HOST']."".$_SERVER['REQUEST_URI'].""=='http://localhost/lsu/nasir/xeberler.php'){?> class="active-menu" <?php } ?> href="xeberler.php"><i class="fa fa-file-text "></i>Xəbərlər</a>
            </li>
            <li>
                <a <?php if("http://".$_SERVER['HTTP_HOST']."".$_SERVER['REQUEST_URI'].""=='http://localhost/lsu/nasir/egunler.php'){?> class="active-menu" <?php } ?> href="egunler.php"><i class="fa fa-flag "></i>Əlamətdar günlər</a>
            </li>
            <li>
                <a <?php if("http://".$_SERVER['HTTP_HOST']."".$_SERVER['REQUEST_URI'].""=='http://localhost/lsu/nasir/mail_parametr.php'){?> class="active-menu" <?php } ?> href="mail_parametr.php"><i class="fa fa-at "></i>Mail parametrləri</a>
            </li>
        </ul>
    </div>
</nav>