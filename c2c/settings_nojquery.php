<?php 
require_once'header.php';
if (!isset($_SESSION['otheruser_mail'])) {

    header("Location:login");
}
//Ölkələr sorğusu
$countryquery=$db->prepare('SELECT * FROM countries');
$countryquery->execute();

//İstifadəçinin ölkəsi
$usercountryquery=$db->prepare('SELECT * FROM countries where country_id=:user_country');
$usercountryquery->execute(array('user_country'=>$showuser['user_country']));
$showusercountry=$usercountryquery->fetch(PDO::FETCH_ASSOC);
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
<div class="pagination-area bg-secondary">
    <div class="container">
        <div class="pagination-wrapper">
            <ul>
                <li><a href="index.htm">Home</a><span> -</span></li>
                <li>Settings</li>
            </ul>
        </div>
    </div>  
</div> 
<!-- Inner Page Banner Area End Here -->          
<!-- Settings Page Start Here -->
<div class="settings-page-area bg-secondary section-space-bottom">
    <div class="container">
        <div class="row settings-wrapper">
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                <ul class="settings-title">
                    <li class="active"><a href="#Personal" data-toggle="tab" aria-expanded="false">Personal Information</a></li>
                    <li><a href="#Profile" data-toggle="tab" aria-expanded="false">Profile</a></li>
                    <!--<li><a href="#Badges" data-toggle="tab" aria-expanded="false">Badges</a></li>-->
                    <li><a href="#E-mail" data-toggle="tab" aria-expanded="false">E-mail Settings</a></li>
                    <li><a href="#Social" data-toggle="tab" aria-expanded="false">Social Network</a></li>
                </ul>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12"> 
              <?php
              if($_GET['res']==ok){
                ?>
                <div class="alert alert-success col-xs"><i class="fa fa-check"></i> Məlumatlar yeniləndi</div>
            <?php } ?>
            <form class="form-horizontal" id="personal-info-form" action="process/editprofile" method="post">
                <div class="settings-details tab-content">
                    <div class="tab-pane fade active in" id="Personal">
                        <h2 class="title-section">Personal Information</h2>
                        <div class="personal-info inner-page-padding">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">E-mail</label>
                                <div class="col-sm-9">
                                    <input class="form-control" id="email" required="" name="email" value="<?php echo $showuser['user_mail'] ?>" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Name</label>
                                <div class="col-sm-9">
                                    <input class="form-control" id="first-name" name="name" value="<?php echo $showuser['user_name'] ?>" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Lastname</label>
                                <div class="col-sm-9">
                                    <input class="form-control" id="last-name" name="lastname" value="<?php echo $showuser['user_lastname'] ?>" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Counrty</label>
                                <div class="col-sm-9">
                                    <div class="custom-select">
                                        <select id="country" name="country" class='select2' style="height: 35px;border-radius:4px">
                                            <option value="0">Select your country</option>
                                            <?php
                                            while($showcountry=$countryquery->fetch(PDO::FETCH_ASSOC)){
                                                ?>
                                                <option <?php if($showcountry['country_id']==$showuser['user_country']){ ?> selected <?php } ?> value="<?php echo $showcountry['country_id']; ?>"><?php echo $showcountry['country']; }?></option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Phone</label>
                                    <div class="col-sm-1" id="countryphonecode">
                                        <input style="width: 60px" class="form-control" disabled="" value="<?php echo '+'.$showusercountry['country_phonecode']; ?>">
                                    </div>
                                    <div class="col-sm-4">
                                        <input class="form-control" id="phone" value="<?php echo $showuser['user_gsm']; ?>" name="gsm" type="number">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">City and other address information</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" name="address" placeholder="City,street,office..." value="<?php echo $showuser['user_address'] ?>" id="address" type="text">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-2" style="float: right;">
                                        <button class="update-btn" type="submit" name="update" id="login-update">Yenilə</button>
                                    </div>
                                </div>
                            </div> 
                        </div> 
                        <!-- Profile settings tab -->
                        <?php include'profile_settings.php'; ?>
                        <!-- Profile settings tab end-->

                        <!--- Email settings tab-->
                        <?php include'email_settings.php';  ?>
                        <!-- Email settings tab end-->

                        <!-- Social network settings tab-->
                        <?php include'social_setting.php'; ?>
                        <!-- Social network setting end -->                                      
                    </div> 

                </form> 
            </div>  
        </div>  
    </div>  
</div> 
<!-- Settings Page End Here -->
<?php include'footer.php'; ?>