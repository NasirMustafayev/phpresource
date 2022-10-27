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
          <div class="timeline-cover" style="background: url(<?php echo $showuser['user_bgpicture']; ?>) no-repeat;background-size: 100% 100%">

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
                        <input type="file" name="post_image" onchange="$('#post_image')[0].src = window.URL.createObjectURL(this.files[0])">
                        <font style="size: 8"><i class="ion-images"></i></font></label></li>
                      </ul>
                    </div>
                  </div>
                </div><!--Timeline Menu for Large Screens End-->

                <!--Timeline Menu for Small Screens-->
                <div class="navbar-mobile hidden-lg hidden-md">
                  <div class="profile-info">
                    <img src="<?php echo $showuser['user_picture']; ?>" alt="" class="img-responsive profile-photo" />
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
                       <li><i class="icon ion-ios-information-outline"></i><a href="editinfo">Basic Information</a></li>
                       <li class="active"><i class="icon ion-ios-locked-outline"></i><a href="#">Change Password</a></li>
                     </ul>
                   </div>
                   <div class="col-md-7">
                     <!-- Sarch result show-->
                     <div id="result">



                     </div>
                     <!-- Search result end-->
              <!-- Change Password
                ================================================= -->
                <div class="edit-profile-container">
                  <?php
                  if($_GET['res']==ok){
                    ?>
                    <div class="alert alert-success col-xs">Update password</div>
                  <?php } ?>
                  <!--Problem xeberdarliqi -->
                  <?php
                  if (isset($_GET['res'])) {
                    if ($_GET['res']=='1') { ?>
                      <div class="alert alert-danger">
                        Passwords are different! Try again
                      </div>
                      <?php
                    }
                    if ($_GET['res']=='2') { ?>
                      <div class="alert alert-danger">
                        Password must be at least 6 characters
                      </div>
                    <?php }
                    if ($_GET['res']=='3') { ?>
                      <div class="alert alert-danger">
                        Old password is invalid
                      </div>
                    <?php }
                  }
                  ?>

                  <!-- Xeberdarliq son-->
                  <div class="block-title">
                    <h4 class="grey"><i class="icon ion-ios-locked-outline"></i>Change Password</h4>
                    <div class="line"></div>
                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate</p>
                    <div class="line"></div>
                  </div>
                  <div class="edit-block">
                    <form name="update-pass" action="process/editprofile?p=2" method="post" id="education" class="form-inline">
                      <div class="row">
                        <div class="form-group col-xs-12">
                          <label for="my-password">Old password</label>
                          <input id="my-password" class="form-control input-group-lg" type="lastpassword" name="lastpassword" title="Enter password" placeholder="Old password"/>
                        </div>
                      </div>
                      <div class="row">
                        <div class="form-group col-xs-6">
                          <label>New password</label>
                          <input class="form-control input-group-lg" type="password" name="password" title="Enter password" placeholder="New password"/>
                        </div>
                        <div class="form-group col-xs-6">
                          <label>Confirm password</label>
                          <input class="form-control input-group-lg" type="password" name="rpassword" title="Enter password" placeholder="Confirm password"/>
                        </div>
                      </div>
                      <p><a href="#">Forgot Password?</a></p>
                      <button class="btn btn-primary" type="submit" name="updatepass">Update Password</button>
                    </form>
                  </div>
                </div>
              </div>

              <?php include 'activitybar.php'; ?>  

            </div>
          </div>
        </div>
      </div>


      <?php include'footer.php'; ?>