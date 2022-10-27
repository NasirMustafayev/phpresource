<?php
$title="Qeydiyyat | C2C";
require_once'header.php';
if (isset($_SESSION['otheruser_mail'])) {

    header("Location:index");
}
?>
<!-- Main Banner 1 Area Start Here -->
<div class="inner-banner-area">
    <div class="container">
        <div class="inner-banner-wrapper">
            <p>Premium WordPress Themes, Web Templates and Many More ...</p>
            <div class="banner-search-area input-group">
                <input class="form-control" placeholder="Search Your Keywords . . ." type="text">
                <span class="input-group-addon">
                    <button type="submit">
                        <span class="glyphicon glyphicon-search"></span>
                    </button>  
                </span>
            </div>
        </div>
    </div>
</div>
<!-- Main Banner 1 Area End Here --> 
<!-- Inner Page Banner Area Start Here -->
<div class="pagination-area bg-secondary" id="scrollhere">
    <div class="container">
        <div class="pagination-wrapper">
            <ul>
                <li><a href="index">Ana səhifə</a><span> -</span></li>
                <li>Qeydiyyat</li>
            </ul>
        </div>
        <!--Problem xeberdarliqi -->
        <?php
        if (isset($_GET['res'])) {
            ?>
            <div class="alert <?php if($_GET['res']=='ok') {echo'alert-success';}else{?>alert-danger<?php }?>">
                <strong><?php
                if ($_GET['res']=='1') { echo "Şifrələr fərqlidir! Yenidən cəhd edin";}
                if ($_GET['res']=='2') { echo "Şifrə ən az 6 simvoldan ibarət olmalıdır";}
                if ($_GET['res']=='3') { echo "Bu mail adresi ilə artıq qeydiyyatdan keçilib";}
                ?></strong>
            </div>
            <?php
        }
        ?>

        <!-- Xeberdarliq son-->
    </div>  
</div> 
<!-- Inner Page Banner Area End Here -->          
<!-- Registration Page Area Start Here -->
<div class="registration-page-area bg-secondary section-space-bottom">
    <div class="container">
        <h2 class="title-section">Qeydiyyat</h2>
        <div class="registration-details-area inner-page-padding">
            <form action="process/registration" method="post" id="personal-info-form">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">                                          
                        <div class="form-group">
                            <label class="control-label" for="first-name">Adınız *</label>
                            <input type="text" name="name" id="first-name" class="form-control" required="" tabindex="1">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">                                          
                        <div class="form-group">
                            <label class="control-label" for="last-name">Soyadınız *</label>
                            <input type="text" name="lastname" id="last-name" class="form-control" required="" tabindex="2">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">                                          
                        <div class="form-group">
                            <label class="control-label" for="email">E-mail *</label>
                            <input type="text" name="email" id="email" class="form-control" required="" tabindex="3">
                            <ul class="autosuffix" style="border-width: 2px"></ul>
                        </div>
                    </div>
                </div> 
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">                                          
                        <div class="form-group">
                            <label class="control-label" for="first-name">Şifrə *</label>
                            <input type="password" name="password" id="first-name" class="form-control" required="" tabindex="4">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">                                          
                        <div class="form-group">
                            <label class="control-label" for="last-name">Təkrar şifrə *</label>
                            <input type="password" name="rpassword" id="last-name" class="form-control" required="" tabindex="5">
                        </div>
                    </div>
                </div>                                
                <div class="row">
                   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">                                           
                    <div class="pLace-order">
                        <button class="update-btn disabled" name="signup" type="submit" value="Login" tabindex="6">Qeyd ol</button>
                    </div>
                </div>
            </div>
        </div> 
    </form>                      
</div> 
</div>
</div>
<!-- Registration Page Area End Here -->
<?php 
include'footer.php';
?>