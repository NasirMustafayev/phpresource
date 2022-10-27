    <?php 
    if (isset($_SESSION['otheruser_mail'])) {?>

            <!-- Post Create Box
              ================================================= -->
              <div class="create-post" style="background: #fefefe;border-radius: 10px">
                <div class="row">
                  <form action="process/post-process?p=1" method="post" enctype="multipart/form-data">
                    <div class="col-md-12 col-sm-12">
                      <div class="form-group">
                        <img src="<?php echo $showuser['user_picture'] ?>" alt="" class="profile-photo-md" />
                        <textarea name="texts" id="exampleTextarea" cols="100" rows="1" class="form-control" placeholder="Write what you wish" style="height: 50px"></textarea>
                      </div>
                      <br>
                      <!-- Youtube embed tab -->
                      <div id="ytab" style="display: none">
                        Youtube video url:
                        <input type="text" class="form-control yturl" name="yturl" placeholder="ex: https://www.youtube.com/watch?v=xxxxxxxx">
                      </div>

                      <!--Link tab-->
                      <div id="linktab" class="linktabadd" style="display: none">
                        <a href="javascript:void(0);" id="addlink"><i class="ion-plus"></i></a>
                        <br>
                        <div class="col-md-4">
                          Link title
                          <input type="text" placeholder="Type a title" name="linktitle" style="font-size: 15px" class="form-control"/>
                        </div>
                        <div class="col-md-8">
                          Link url
                          <input type="text" name="linkurl" placeholder="ex:http://fliyingdreams.us" class="form-control"/>
                        </div>
                      </div>
                      <!--Link tab end-->

                    </div>
                    <div class="col-md-12 col-sm-12">
                      <div class="tools">
                        <ul class="publishing-tools list-inline">
                          <label class="custom-file-upload">
                            <input type="file" name="post_image" accept="image/x-png,image/gif,image/jpeg" onchange="$('#post_image')[0].src = window.URL.createObjectURL(this.files[0])">
                            <font style="size: 8"><i class="ion-images"></i></font></label>
                            <li><a id="btn2"><i class="ion-ios-videocam"></i></a></li>
                            <li><a id="btn3"><i class="ion-link"></i></a></li>
                          </ul>
                          <input type="submit" value="Publish" name="publish" class="btn btn-primary pull-right"/>
                        </div>
                      </div>
                      <img id="post_image" width="100">
                    </form>
                  </div>
                </div><!-- Post Create Box End-->
              <?php }
              else{?>
                <div class="tab-content">
                  <div class="tab-pane active">
                    <h3>Login now</h3>
                    <form action="process/login" method="post" name="Login_form" id='Login_form' class="form-inline">
                      <div class="row">
                        <div class="form-group col-xs-4" style="float: right;">
                          <label for="password" class="sr-only">Password</label>
                          <input id="password" class="form-control input-group-lg" type="password" name="password" title="Enter Password" placeholder="Password" tabindex="2" />
                        </div>
                        <div class="form-group col-xs-4" style="float: right;">
                          <label for="email" class="sr-only">Email</label>
                          <input id="email" class="form-control input-group-lg" type="text" name="email" title="Email address" placeholder="Email address" tabindex="1" />
                        </div>
                      </div>
                      <button class="btn btn-primary" type="submit" name="login" style="float: right" tabindex="3">Login</button>
                    </form>
                    <a href="registration"><button class="btn btn-primary" style="float: left" tabindex="4">Registration</button></a>
                  </div>
                </div>
                <hr>
                <?php } ?>