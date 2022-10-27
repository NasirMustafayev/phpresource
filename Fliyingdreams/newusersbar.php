    <div id="chat-block">
      <div class="title">New users</div>
      <ul class="online-users list-inline">
        <?php
        $newuserquery=$db->prepare("SELECT * FROM users where user_authorization=:authorization order by user_id DESC limit 9");
        $newuserquery->execute(array('authorization'=> 0));

        while($shownewuser=$newuserquery->fetch(PDO::FETCH_ASSOC)){?>
          <li><a href="user_<?php echo seo($shownewuser['user_name'])."-".$shownewuser['user_id'] ?>" title="Linda Lohan"><img src="<?php echo $shownewuser['user_picture'] ?>" alt="user" class="img-responsive profile-photo" /></a></li>
        <?php } ?>
      </ul>
    </div>
  </div>