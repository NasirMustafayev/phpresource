<?php
$title="Edit profile | FliyingDreams";
require_once'header.php';

if (empty($_SESSION['otheruser_mail'])) {
  header("Location:index");}
  ?>
  <div class="container">

      <!-- Timeline
        ================================================= -->
        <div class="timeline">
          <div class="timeline-cover" style="background: url(<?php echo $showuser['user_bgpicture']; ?>) no-repeat; background-size: 100% 100%;">

            <!--Timeline Menu for Large Screens-->
            <div class="timeline-nav-bar hidden-sm hidden-xs">
              <div class="row">
                <div class="col-md-3">
                  <div class="profile-info">
                    <img src="<?php echo $showuser['user_picture']; ?>" alt="" class="img-responsive profile-photo" />
                    <h3><?php echo $showuser['user_name']." ".$showuser['user_lastname'];  ?></h3>
                    <label class="custom-file-upload">
                      <form id="mypp" enctype="multipart/form-data">
                        <input type="file" name="ppicture" id="ppicture">
                      </form>
                      <font style="size: 8"><i class="fa fa-camera"></i></font></label>
                    </div>
                  </div>
                  <div class="col-md-9">
                    <ul class="list-inline profile-menu">
                      <li><a href="<?php echo'user_'. seo($showuser['user_name'])."-".$showuser['user_id']; ?>" class="active">Timeline</a></li>
                      <li><a href="<?php echo'about-'. seo($showuser['user_name'])."-".$showuser['user_id']; ?>">About</a></li>
                      <li><a href="<?php echo'album-'. seo($showuser['user_name'])."-".$showuser['user_id']; ?>">Album</a></li>
                    </ul>
                    <ul class="follow-me list-inline">
                      <li><label class="custom-file-upload">
                        <form id="mybg" enctype="multipart/form-data">
                          <input type="file" name="bgpicture" id="bgpicture">
                        </form>
                        <font style="size: 8"><i class="ion-images"></i></font></label></li>
                      </ul>
                    </div>
                  </div>
                </div><!--Timeline Menu for Large Screens End-->

                <!--Timeline Menu for Small Screens-->
                <div class="navbar-mobile hidden-lg hidden-md">
                  <div class="profile-info">
                    <img src="<?php echo $showuser['user_picture']; ?>" alt="" class="img-responsive profile-photo" />
                    <label class="custom-file-upload">
                      <form id="mypp" enctype="multipart/form-data">
                        <input type="file" name="ppicture" id="ppicture">
                      </form>
                      <font style="size: 8"><i class="fa fa-camera"></i></font></label>
                      <h4><?php echo $showuser['user_name']." ".$showuser['user_lastname'];  ?></h4>
                    </div>
                    <div class="mobile-menu">
                      <ul class="list-inline">
                        <li><a href="<?php echo'user_'. seo($showuser['user_name'])."-".$showuser['user_id']; ?>" class="active">Timeline</a></li>
                        <li><a href="<?php echo'about-'. seo($showuser['user_name'])."-".$showuser['user_id']; ?>">About</a></li>
                        <li><a href="<?php echo'album-'. seo($showuser['user_name'])."-".$showuser['user_id']; ?>">Album</a></li>
                      </ul>
                      <ul class="follow-me list-inline">
                        <li><label class="custom-file-upload">
                          <form id="mybg" enctype="multipart/form-data">
                            <input type="file" name="bgpicture" id="bgpicture">
                          </form>
                          <font style="size: 8"><i class="ion-images"></i></font></label></li>
                        </ul>
                      </div>
                    </div><!--Timeline Menu for Small Screens End-->

                  </div>
                  <div id="page-contents">
                    <div class="row">
                      <div class="col-md-3">

                        <!--Edit Profile Menu-->
                        <ul class="edit-menu">
                          <li class="active"><i class="icon ion-ios-information-outline"></i><a href="edit-profile-basic.html">Basic Information</a></li>
                          <li><i class="icon ion-ios-locked-outline"></i><a href="editpass">Change Password</a></li>
                        </ul>
                      </div>
                      <div class="col-md-7">
                       <!-- Sarch result show-->
                       <div id="result">



                       </div>
                       <!-- Search result end-->
              <!-- Basic Information
                ================================================= -->
                <div class="edit-profile-container">
                  <?php
                  if($_GET['res']==ok){
                    ?>
                    <div class="alert alert-success col-xs">Save information</div>
                  <?php } ?>
                  <div class="block-title">
                    <h4 class="grey"><i class="icon ion-android-checkmark-circle"></i>Edit basic information</h4>
                    <div class="line"></div>
                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate</p>
                    <div class="line"></div>
                  </div>
                  <div class="edit-block">
                    <form name="basic-info" id="basic-info" class="form-inline" action="process/editprofile" method="post">
                      <div class="row">
                        <div class="form-group col-xs-6">
                          <label for="firstname">First name</label>
                          <input id="firstname" class="form-control input-group-lg" type="text" name="name" title="Enter first name" placeholder="First name" required="" value="<?php echo $showuser['user_name'] ?>"/>
                        </div>
                        <div class="form-group col-xs-6">
                          <label for="lastname" class="">Last name</label>
                          <input id="lastname" class="form-control input-group-lg" type="text" name="lastname" title="Enter last name" placeholder="Last name" required="" value="<?php echo $showuser['user_lastname'] ?>" />
                        </div>
                      </div>
                      <div class="row">
                        <div class="form-group col-xs-6">
                          <label for="email">My email</label>
                          <input id="email" class="form-control input-group-lg" type="text" name="email" title="Enter Email" placeholder="My Email" required="" value="<?php echo $showuser['user_mail']; ?>" />
                        </div>
                        <div class="form-group col-xs-6">
                          <label for="email">Phone number</label>
                          <input id="gsm" class="form-control input-group-lg" type="text" name="gsm" title="Enter phone" placeholder="My phone" value="<?php echo $showuser['user_gsm']; ?>" />
                        </div>
                      </div>
                      <div class="row">
                        <div class="form-group col-xs-12">
                          <label for="city"> Address</label>
                          <input id="address" class="form-control input-group-lg" type="text" name="address" title="Enter address" placeholder="Your address" value="<?php echo $showuser['user_address'] ?>"/>
                        </div>
                      </div>
                      <div class="row">
                        <div class="form-group col-xs-12">
                          <label for="my-info">About me</label>
                          <textarea id="my-info" name="about" class="form-control" placeholder="Some texts about me" rows="4" cols="400"><?php echo $showuser['user_about']; ?></textarea>
                        </div>
                      </div>
                      <button type="submit" name="save" class="btn btn-primary">Save Changes</button>
                    </form>
                  </div>
                </div>
              </div>

              <!-- Activitybar-->
              <?php include'activitybar.php'; ?>

            </div>
          </div>
        </div>
      </div>


    <!-- Footer
      ================================================= -->
      <?php include'footer.php'; ?>