       <div class="col-md-2 static">
        <div id="sticky-sidebar">
          <h4 class="grey">
            <?php 
            if ($_GET['username']) {
              echo $showprofile['user_name'];
            }
            else{
              echo $showuser['user_name'] ;
            }?>
            's activity
          </h4>

          <?php
          $logquery=$db->prepare("SELECT * FROM logs where process_author=:author order by log_id DESC");
          if ($_GET['username']) {
            $logquery->execute(array(
              'author'=> $showprofile['user_mail']));
          }
          else{
            $logquery->execute(array(
              'author'=> $showuser['user_mail']));
          }
          $countlog=$logquery->rowCount();
          if ($countlog==0) {?>
            <h4><i class="fa fa-clock-o"></i>Nothing activity</h4>
          <?php }
          while ($showlogs=$logquery->fetch(PDO::FETCH_ASSOC)) {
            ?>
            <div class="feed-item">
              <div class="live-activity">
                <p><a href="<?php if ($_GET['username']) {
                  echo 'user_'.seo($showprofile['user_name'])."-".$showprofile['user_id'];}else{ echo "my-profile"; }?>" class="profile-link">
                  <?php
                  if ($_GET['username']) {
                    echo $showprofile['user_name'];
                  }
                  else{
                   echo $showuser['user_name'];
                 } 
                 ?></a> <?php echo $showlogs['process_name'] ?></p>
                 <p class="text-muted">
                   <?php $date = $showlogs['process_time'];
                   echo timeConvert($date);
                   ?></p>
                 </div>
               </div>
             <?php } ?>
           </div>
         </div>