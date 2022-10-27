<?php
$title="Giriş | C2C";
require_once'header.php';
if (isset($_SESSION['otheruser_mail'])) {

    header("Location:index");
}
$usermailcontrolquery=$db->prepare("SELECT * FROM users where user_mail=:mail");
$usermailcontrolquery->execute(array('mail' => base64_decode($_GET['ea'])));
$usermailcontrolcount=$usermailcontrolquery->rowCount();
$showcontrolmail=$usermailcontrolquery->fetch(PDO::FETCH_ASSOC);
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
<div id="scrollhere">
    <div class="pagination-area bg-secondary">
        <div class="container">
            <div class="pagination-wrapper">
                <ul>
                    <li><a href="index">Ana səhifə</a><span> -</span></li>
                    <li>Giriş</li>
                </ul>
            </div>
            <!--Xeberdarliqi -->
            <?php
            if (isset($_GET['res']) or isset($_GET['ea']) and $usermailcontrolcount==0) {
                ?>
                <div class="alert <?php if($_GET['res']=='ok') {echo'alert-success';}else{?>alert-danger<?php }?>">
                    <strong><?php
                    if ($_GET['res']=='1') { echo "Şifrələr fərqlidir! Yenidən cəhd edin<br>";}
                    if ($_GET['res']=='2') { echo "Şifrə ən az 6 simvoldan ibarət olmalıdır<br>";}
                    if ($_GET['res']=='3') { echo "Bu mail adresi ilə artıq qeydiyyatdan keçilib<br>";}
                    if(isset($_GET['ea']) and $usermailcontrolcount==0) { echo "Belə bir istifadəçi mövcud deyil"; }
                    if ($_GET['res']=='ok') { echo "Qeydiyyat uğurla həyata keçrildi";}
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
            <h2 class="title-section">Giriş</h2>
            <div class="registration-details-area inner-page-padding">
                <form action="process/login" method="post" id="personal-info-form">
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">                                          
                            <div class="form-group">
                                <?php
                                if ($usermailcontrolcount!=0 and $showcontrolmail['user_status']==1) {?>
                                  <div class="user-account-info">
                                    <div class="user-account-info-controler">
                                      <div class="user-account-img">
                                        <img class="img-responsive" style="border-radius: 100%;width: 100px" src="<?php echo $showcontrolmail['user_picture'] ?>" alt="profile">
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="email" value="<?php echo $showcontrolmail['user_mail'] ?>">
                            <h4><?php echo $showcontrolmail['user_name'].' '.$showcontrolmail['user_lastname']; ?></h4>
                            şifrənizi təkrar daxil edin
                        <?php }
                        else{
                            ?>
                            <label class="control-label" for="first-name">Email</label>
                            <input type="text" name="email" id="first-name" tabindex="1" class="form-control" required="">
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">                                          
                    <div class="form-group">
                        <label class="control-label" for="last-name">Şifrə</label>
                        <input type="password" name="password" id="last-name" tabindex="2" class="form-control" required="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">                                           
                    <div class="pLace-order">
                        <button class="update-btn disabled" name="login" type="submit" style="width: 100%" value="Login" tabindex="3">Giriş et</button>
                    </div>
                </div>
            </div>
        </form>
    </div> 
</div>
</div>
</div>
</div>
<!-- Registration Page Area End Here -->
<?php 
include'footer.php';
?>