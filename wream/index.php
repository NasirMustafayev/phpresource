<?php
include'header.php';

?>
        <!--
        #blog-section
        ==================================== -->
        <div id="blog-section">
            <div class="container">
                <div class="row">
                    <?php
                    include'sidebar_post.php';
                    ?>
                    <div class="col-xs-12 col-md-6">
                        <div class="posts-section">
                            <?php
                    //SEYFELEME

                            $pages_limit=5;

                            $smysql=mysql_query("select * from posts");
                            $all_post=mysql_num_rows($smysql);

                            $all_pages=ceil($all_post / $pages_limit);

                            $page=isset($_GET['page']) ? (int) $_GET['page'] : 1;

                            if($page < 1) $page = 1;

                            if($page > $all_pages) $page=$all_pages;

                            $limit=($page - 1)*$pages_limit;

                 //SEYFELEME BİTİŞ

                            $posts=@mysql_query("select * from posts order by post_id DESC limit $limit,$pages_limit");
                            while ($post_show=@mysql_fetch_array($posts)) {?>


                            <article class="post-entry" style="border-radius: 5px">
                                <div class="post-media">
                                    <img src="<?php echo $post_show['author_img']; ?>" style="border-radius: 100%;width: 50px;height: 50px">
                                    <span><b><a href="userinfo.php?profile=<?php echo $post_show['post_author'];?>"><big><?php echo $post_show['post_author'];?></big></a></b></span>
                                    <span style="float: right;"><i><?php echo $post_show['post_date'];?></i></span>
                                    <?php
                                    $aut=$post_show['post_author'];
                                    if ($_SESSION['username']==$aut) { ?>

                                    <font style="float: right;" color="red"><a href="procces/post-process.php?process=delete&id=<?php echo base64_encode($post_show['post_id']);?>&i=<?php echo base64_encode($post_show['post_img']); ?>"><h4>Delete&nbsp</h4></a></font> <font style="float: right;" color="red"><a href="post-edit.php?post_id=<?php echo base64_encode($post_show['post_id']);?>"><h4>Edit&nbsp</h4></a></font>
                                    <?php
                                }
                                ?>
                                <?php
                                if (!$post_show['post_img']==0) {
                                    ?>
                                    <a href="post.php?post=<?php echo $post_show['post_id']; ?>"> <img src="<?php echo $post_show['post_img']; ?>" alt="post thumb" style="max-height: 400px" class="img-responsive"></a>
                                    <?php
                                }
                                else{ ?>
                                <hr>
                                <?php
                            }
                            ?>
                        </div>
                        <div class="post-excerpt">
                            <h2><a href="post.php?post=<?php echo $post_show['post_id'];?>"><?php echo $post_show['post_title'];?></a></h2>
                            <p><?php echo substr($post_show['post'],0,300)."...";?></p>
                            <div class="excerpt-btn">
                                <a href="post.php?post=<?php echo $post_show['post_id'];?>">Read More</a>
                            </div>
                            <h4><i style="float: right;" class="fa fa-eye"><?php echo $post_show['post_view']; ?></i></h4>
                        </div>
                    </article>
                    <?php }
                    ?>
                    <!-- end .post-entry -->
                    <nav class="post-pagination" style="background-color: white">
                        <ul>
                            <li>
                                <a href="index.php?page=<?php echo $prev; ?>">
                                    <span class="arrow">&#8592;</span>
                                    <span class="prev">Prev</span>
                                </a>
                            </li>
                            <?php 
                            $s=0;

                            while ($s<$all_pages) {

                                $s++; ?>
                                <li><a href="index.php?page=<?php echo $s; ?>"><?php echo $s;?></a></li>
                                <?php } ?>
                                <li>
                                    <a href="index.php?page=<?php echo $s; ?>">
                                        <span class="arrow">&#8594;</span>
                                        <span class="next">Next</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>


                    </div>
                </div>
                <?php
                include'sidebar.php';
                include'footer.php';
                ?>