<div class="col-md-3 static">
 <?php
 if (isset($_SESSION['otheruser_mail'])) {
  ?>
  <div class="profile-card" style="background: url(<?php echo $showuser['user_bgpicture']; ?>);">
    <img src="<?php echo $showuser['user_picture'] ?>" alt="user" class="profile-photo" />
    <h4><a href="user_<?php echo seo($showuser['user_name'])."-".$showuser['user_id'] ?>" class="pname"><?php echo $showuser['user_name']." ".$showuser['user_lastname']; ?></a></h4>
    <!--<a href="#" class="text-white"><i class="ion ion-android-person-add"></i> 1,299 followers</a>-->
  </div>
  <!--profile card ends-->
<?php }
else{ ?>
 <div class="profile-card">
  <img src="images/default.png" alt="user" class="profile-photo" />
  <h5><a href="#" class="text-white">Guess</a></h5>
</div>
<!--profile card ends-->
<?php }
$videos='videos';
?>
<ul class="nav-news-feed">
  <li>
   <i class="icon ion-compose"></i>
   <div><a href="shared-articles">Articles</a></div>
 </li>
 <li>
   <i class="icon ion-images"></i>
   <div><a href="shared-images">Images</a></div>
 </li>
 <li>
   <i class="icon ion-ios-videocam"></i>
   <div><a href="shared-videos">Videos</a></div>
 </li>
</ul>
<!--news-feed links ends-->