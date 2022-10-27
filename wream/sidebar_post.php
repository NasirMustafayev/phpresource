                    <div class="col-xs-12 col-md-3">
                        <div class="right-sidebar">
                         <aside class="sidebar" style="border-radius: 5px">
                            <div class="comment_form_box">
                                <div style="background: url('<?php echo $usershow['userbg'] ?>');background-repeat: no-repeat;background-size:100%;
                                ">

                                <img src="<?php echo $usershow['userimg']?>" style="border-radius: 100%;width: 80px;height: 80px"><font style="font-size: 35px;color: white"><?php echo  $usershow['username']; ?></font>
                            </div>
                        </div>
                    </aside>
                    <aside class="sidebar" style="border-radius: 5px">
                        <div class="comment_form_box">
                            <div style="background-color: white;border-radius: 5px">
                                <?php
                                if (isset($_GET['result'])) {
                                    if ($_GET['result']=='ok') {
                                        ?>
                                        <h4 style="color: green">Your post successful share</h4>
                                        <?php }else{ ?>
                                        <h4 style="color: red">Don't successful share!</h4>
                                        <?php }}
                                        if (isset($_GET['update'])) {
                                            if ($_GET['update']=='ok') {
                                                ?>
                                                <h4 style="color: green">Your post successful <b>update</b></h4>
                                                <?php }else{ ?>
                                                <h4 style="color: red">Don't successful <b>update!</b></h4>
                                                <?php }}?>
                                                <form class="form-horizontal" role="form" method="post" action="procces/post-insert-procces.php" enctype="multipart/form-data">
                                                    <input type="hidden" name="post_author" value="<?php echo $_SESSION['username'];?>">
                                                    <input type="hidden" name="author_img" value="<?php echo $_SESSION['userimg'];?>">
                                                    <div class="row">
                                                        <div errortext="This field is required" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 error">
                                                            <input type="text" required="" maxlength="100" class="form-control" id="name" placeholder="Enter post title" name="post_title">
                                                        </div>
                                                        <br>
                                                        <br>
                                                        <div errortext="This field is required" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 error">
                                                            <input class="form-control" type="file" accept="image/*" name="postimg">
                                                        </div>
                                                        <div errortext="This field is required" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                            <textarea required="" maxlength="2500" class="form-control" id="message" placeholder="Type your post" rows="4" name="post" style="max-width: 100%"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <button class="btn btn-blue" type="submit" style="width: 100%;border-radius: 5px" name="write">Write</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </aside>
                                    <br>
                                </div>
                            </div>