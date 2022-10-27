<?php 
require_once('header.php');
//Messages query
$messagessidequery=$db->prepare("SELECT * FROM messages where message_receiver or message_author =:user_id");
$messagessidequery->execute(array('user_id'=>$showuser['user_id']));

$messagesquery=$db->prepare("SELECT * FROM messages where message_receiver or message_author =:user_id");
$messagesquery->execute(array('user_id'=>$showuser['user_id']));

?>
<div id="page-contents">
  <div class="container">
    <div class="row">

  <!-- Newsfeed Common Side Bar Left
    ================================================= -->
    <!--Profile card-->
    <?php
    include'profile_card.php';
    include'newusersbar.php';

    ?>

    <div class="col-md-7">
      <div id='result'>
      </div>
  <!-- Post Create Box
    ================================================= -->
    <?php include'postcreatebox.php'; ?>
    <!-- Post Create Box End -->

  <!-- Chat Room
    ================================================= -->
    <div class="chat-room">
      <div  class="row">
        <div class="col-md-5">

          <!-- Contact List in Left-->
          <ul class="nav nav-tabs contact-list scrollbar-wrapper scrollbar-outer">
            <?php 
            while($showmessagescontact=$messagessidequery->fetch(PDO::FETCH_ASSOC)){

              //Messages author query
              $messagesauthorquery=$db->prepare("SELECT * FROM users where user_id=:message_author");
              $messagesauthorquery->execute(array('message_author'=>$showmessagescontact['message_author']));
              $showmessagescontactside=$messagesauthorquery->fetch(PDO::FETCH_ASSOC);
              ?>
              <li class="active">
                <a href="#contact-1" data-toggle="tab">
                  <div class="contact">
                    <img src="<?php echo $showmessagescontactside['user_picture']; ?>" alt="" class="profile-photo-sm pull-left"/>
                    <div class="msg-preview">
                      <h6><?php echo $showmessagescontactside['user_name'].' '.$showmessagescontactside['user_lastname']; ?></h6>
                      <p class="text-muted"><?php echo $showmessagescontact['message']; ?></p>
                      <small class="text-muted">a min ago</small>
                      <?php
                      if($showmessagescontact['message_status']==0){
                        ?>
                        <div class="chat-alert">-</div>
                      <?php }
                      else{}
                        ?>
                    </div>
                  </div>
                </a>
              </li>
            <?php } ?>
          </ul><!--Contact List in Left End-->

        </div>
        <div class="col-md-7">

          <!--Chat Messages in Right-->
          <div class="tab-content scrollbar-wrapper wrapper scrollbar-outer">
            <div class="tab-pane active" id="contact-1">
              <div class="chat-body">
                <ul class="chat-message">
                  <?php 
                  while($showmessages=$messagesquery->fetch(PDO::FETCH_ASSOC)){
                    ?>
                    <li class="<?php echo ($showmessages['message_author']==$showuser['user_id']) ? 'right' : 'left'; ?>">
                      <img src="<?php  ?>" alt="" class="profile-photo-sm pull-left" />
                      <div class="chat-item">
                        <div class="chat-item-header">
                          <h5>Linda Lohan</h5>
                          <small class="text-muted"><?php echo timeConvert($showmessages['message_date']); ?></small>
                        </div>
                        <p><?php echo $showmessages['message']; ?></p>
                      </div>
                    </li>
                  <?php } ?>
                </ul>
              </div>
            </div>
          </div><!--Chat Messages in Right End-->

          <div class="send-message">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Type your message">
              <span class="input-group-btn">
                <button class="btn btn-default" type="button">Send</button>
              </span>
            </div>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>

                        <!-- Newsfeed Common Side Bar Right
                          ================================================= -->
                          <?php include'sidebar.php'; ?>
                        </div>
                      </div>
                    </div>

                        <!-- Footer
                          ================================================= -->
                          <?php include'footer.php'; ?>
