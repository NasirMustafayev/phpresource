<?php 
require_once'header.php';
if (!isset($_SESSION['otheruser_mail'])) {

    header("Location:login");
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
                    <li><a href="#Acdetail" data-toggle="tab" aria-expanded="false">Account detail</a></li>
                    <li><a href="#Password" data-toggle="tab" aria-expanded="false">Password</a></li>
                    <li><a href="#Recourse" data-toggle="tab" aria-expanded="false">Become a seller</a></li>
                    <li><a href="#Profile" data-toggle="tab" aria-expanded="false">Profile</a></li>
                    <li><a href="#Social" data-toggle="tab" aria-expanded="false">Social Network</a></li>
                </ul>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12"> 
              <?php
              if($_GET['res']==ok){
                ?>
                <div class="alert alert-success col-xs"><i class="fa fa-check"></i> Məlumatlar yeniləndi</div>
            <?php } ?>
            <div class="form-horizontal" id="personal-info-form">
                <div class="settings-details tab-content">
                    <div class="tab-pane fade active in" id="Personal">
                        <h2 class="title-section">Personal Information</h2>
                        <div class="personal-info inner-page-padding">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">E-mail</label>
                                <div class="col-sm-9">
                                    <input class="form-control" id="email" disabled required="" name="email" value="<?php echo $showuser['user_mail'] ?>" type="text">
                                    <ul class="autosuffix" style="border-width: 2px"></ul>
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
                                        <button class="update-btn" name="update" id="updateinfo">Yenilə</button>
                                    </div>
                                </div>
                            </div> 
                        </div> 
                        <!-- Profile settings tab -->
                        <?php include'profile_settings.php'; ?>
                        <!-- Profile settings tab end-->

                        <!-- Account detail tab -->
                        <?php include'account_detail.php'; ?>
                        <!-- Account detail tab end-->

                        <!-- Password tab -->
                        <?php include'password_setting.php'; ?>
                        <!-- Password tab end-->

                        <!-- Recourse tab -->
                        <?php include'recourse_setting.php'; ?>
                        <!-- Recourse tab end-->

                        <!-- Social network settings tab-->
                        <?php include'social_setting.php'; ?>
                        <!-- Social network setting end -->                                      
                    </div> 

                </div> 
            </div>  
        </div>  
    </div>  
</div> 
<!-- Settings Page End Here -->
<?php include'footer.php'; ?>
<script>
//Country phone code 
$(document).ready(function(){
    $('#country').change(function(){

        var country_id = $(this).attr("value");

        $( '#countryphonecode' ).empty();

        $.ajax({
            url : "process/selectphonecode.php",
            method: "post",
            data: {country_id:$('.select2 option:selected').val()},
            success:function(data){
                $('#countryphonecode').append(data);
            }
        });
    });
});

//Update info
$(document).ready(function(){
    $(document).on('click','#updateinfo',function(){
        var update=$('#updateinfo').val();
        var email=$('#email').val();
        var name=$('#first-name').val();
        var lastname=$('#last-name').val();
        var country=$('#country').val();
        var gsm=$('#phone').val();
        var address=$('#address').val();
        if(email,name,lastname==''){
            swal("Lütfən xanaları doldurun", "", "warning");
        }
        else{
            $.ajax({
                url:'process/editprofile.php',
                type:'POST',
                data:{'update':update,'email':email,'name':name,'lastname':lastname,'country':country,'gsm':gsm,'address':address},
                success:function(response){
                    swal("Dəyişiklik qeyd edildi", "", "success");
                }
            });
        }

    });

});

//Update pass

$(document).ready(function(){
    $(document).on('click','#updatepass',function(){
        var updatepass=$('#updatepass').val();
        var lastpassword=$('#lastpassword').val();
        var password=$('#password').val();
        var rpassword=$('#rpassword').val();

        var justpassword=$('#justpassword').val();
        var lastpasswordmd5= MD5(lastpassword);
        var length = password.length;

        if(lastpassword,password,rpassword==''){
            swal("Lütfən xanaları doldurun", "", "warning");
        }
        else{
            if (justpassword!=lastpasswordmd5){
                swal("Köhnə şifrə yalnışdır", "", "error");

            }
            else{
                if(length<6){
                    swal("Şifrə çox qısadır", "", "error");

                }
                else{
                    if(password != rpassword){
                        swal("Şifrələr fərqlidir", "", "error");

                    }
                    else{
                        $.ajax({
                            url:'process/editprofile.php?p=2',
                            type:'POST',
                            data:{'updatepass':updatepass,'lastpassword':lastpassword,'password':password,'rpassword':rpassword},
                            success:function(response){
                                swal("Şifrə uğurla dəyişdirildi", "", "success");
                                setTimeout(function() {
                                  location.reload();
                              }, 2000);
                            },
                            error:function(){
                                swal("Səhv baş verdi", "", "success");
                            }
                        });
                    }
                }
            }
        }
    });

});

//Account type 
$(document).ready(function(){
    $('#accounttype').change(function(){

        var accounttype=$('#accounttype').val();

        if(accounttype==0){
            $('#cdetail').hide();
            $('#pdetail').hide();
            $('#updatedetail').hide();

        }
        if(accounttype=="PRIVATE_COMPANY"){
            $('#updatedetail').show();
            $('#cdetail').show();
            $('#pdetail').hide();
        }

        else if(accounttype=="PERSONAL"){
            $('#updatedetail').show();
            $('#cdetail').hide();
            $('#pdetail').show();
        }
    }).change();

//Update account detail
$(document).on('click','#updatedetail',function(){
    var accounttype=$('#accounttype').val();
    var updatedetail=$('#updatedetail').val();
    var company_name=$('#company_name').val();
    var company_address=$('#company_address').val();

    if(company_name,company_address==''){

        swal("Lütfən xanaları doldurun", "", "warning");
    }
    else{

        $.ajax({
            url:'process/accountdetail-process.php',
            type:'POST',
            data:{'updatedetail':updatedetail,'accounttype':accounttype,'company_name':company_name,'company_address':company_address},
            success:function(response){
                swal("Dəyişiklik uğurla qeyd edildi", "", "success");
            },
            error:function(){
                swal("Səhv baş verdi", "", "error");
            }

        });
    }
});

});
</script>