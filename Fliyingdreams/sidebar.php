            <div class="col-md-2 static">
            	<div class="suggestions" id="sticky-sidebar">
            		<h4 class="grey">Popular users</h4>
                <?php
                $userratingquery=$db->prepare("SELECT * FROM users where user_authorization=:authorization order by user_stars DESC limit 10");
                $userratingquery->execute(array('authorization'=> 0));

                while($showpopularuser=$userratingquery->fetch(PDO::FETCH_ASSOC)){
                  ?>
                  <div class="follow-user">
                    <img src="<?php echo $showpopularuser['user_picture'] ?>" alt="" class="profile-photo-sm pull-left" />
                    <div>
                      <h5><a href="user_<?php echo seo($showpopularuser['user_name'])."-".$showpopularuser['user_id'];?>" style="font-size: 18px"><?php echo $showpopularuser['user_name']; ?></a></h5>
                      <a href="#" class="text-green"><i class="icon ion-star" style="font-size: 15px"> <?php echo $showpopularuser['user_stars']; ?></i></a>
                    </div>
                  </div>
                <?php } ?>

              </div>
            </div>

            <!---------------------------------->
          </div>
        </div>
      </div>