                    <div class="col-xs-12 col-md-3">
                        <div class="right-sidebar">

                            <aside class="sidebar" style="border-radius: 5px">
                                <form action="search.php" method="post" class="blog-search">
                                    <input type="text" name="text" class="search-input" placeholder="Search Here...">
                                    <button type="submit" name="search" class="search-sub">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </form>
                            </aside>
                            <aside class="sidebar" style="border-radius: 5px">
                                <h4 class="widget-title">Most Popular</h4>
                                <?php 

                                $postview=mysql_query("select * from posts order by post_view DESC limit 5");
                                while ($show_sidebar=mysql_fetch_assoc($postview)) {
                                    ?>
                                    <div class="pp-item clearfix">
                                     <?php
                                     if (!$show_sidebar['post_img']==0) {
                                        ?>
                                        <a href="post.php?post=<?php echo $show_sidebar['post_id'];?>">
                                            <img src="<?php echo $show_sidebar['post_img']; ?>" alt="post thumb" class="img-responsive">
                                            <?php
                                        }
                                        ?>
                                    </a>
                                    <div class="pp-media">
                                        <span><?php echo $show_sidebar['post_date'];?></span>
                                        <i class="fa fa-eye"><?php echo $show_sidebar['post_view'];?></i>
                                        <i> By <?php echo $show_sidebar['post_author']; ?></i>
                                        <h4><a href="post.php?post=<?php echo $show_sidebar['post_id'];?>"><?php echo $show_sidebar['post_title'];?></a></h4>
                                    </div>
                                </div>
                                <?php }
                                ?>
                            </aside>
                            <!-- end .sidebar -->
                            <br>
                            <!-- end .sidebar -->
                        </div>
                    </div>