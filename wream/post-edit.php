<?php
include'header.php';

$post_id=base64_decode($_GET['post_id']);
$postmysql=mysql_query("SELECT * from posts where post_id=$post_id");
$postshow=mysql_fetch_assoc($postmysql);
if ($postshow['post_author']==$_SESSION['username']) {
    ?>
    <div id="blog-section">
        <div class="container">
            <div class="row">
                <?php
                include'sidebar_post.php';
                ?>
                <div class="col-xs-12 col-md-6">
                    <div class="posts-section">
                        <div class="comment_form_box">
                            <div style="background-color: white;border-radius: 5px">
                                <form class="form-horizontal" role="form" method="post" action="procces/post-process.php?process=update" enctype="multipart/form-data">
                                    <input type="hidden" name="post_author" value="<?php echo $_SESSION['username'];?>">
                                    <input type="hidden" name="author_img" value="<?php echo $_SESSION['userimg'];?>">
                                    <input type="hidden" name="post_id" value="<?php echo base64_encode($post_id); ?>">
                                    <div class="row">
                                        <div errortext="This field is required" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 error"><br>
                                            <h3>Edit post</h3><hr>
                                            <input type="text" required="" maxlength="100" class="form-control" id="name" placeholder="Enter post title" value="<?php echo $postshow['post_title']; ?>" name="post_title">
                                        </div>
                                        <div errortext="This field is required" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 error"><br>
                                            <input class="form-control" type="file" name="postimg">
                                        </div>
                                        <div errortext="This field is required" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <textarea required="" maxlength="2500" class="form-control" id="message" placeholder="Type your post" rows="4" name="post" style="max-width: 100%"><?php echo $postshow['post']; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6" style="float: right">
                                            <button class="btn btn-blue" type="submit" style="width: 100%;border-radius: 5px" name="update">Save</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <br>
                        </div>
                    </div>
                </div>
                <?php
            }
            else{
                header('location:index.php');
            }
            include'sidebar.php';
            include'footer.php';
            ?>