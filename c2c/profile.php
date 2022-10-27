﻿<?php
require_once('header.php');
if (!isset($_SESSION['otheruser_mail'])) {

    header("Location:login");
}

?>
<!-- Main Banner 1 Area Start Here -->
<div class="inner-banner-area">
    <div class="container">
        <div class="inner-banner-wrapper">
            <p>Premium WordPress Themes, Web Templates and Many More ...</p>
            <div class="banner-search-area input-group">
                <input class="form-control" placeholder="Search Your Keywords . . ." type="text">
                <span class="input-group-addon">
                    <button type="submit">
                        <span class="glyphicon glyphicon-search"></span>
                    </button>  
                </span>
            </div>
        </div>
    </div>
</div>
<!-- Main Banner 1 Area End Here --> 
<!-- Inner Page Banner Area Start Here -->
<div class="pagination-area bg-secondary" id="scrollhere">
    <div class="container">
        <div class="pagination-wrapper">
            <ul>
                <li><a href="index.htm">Home</a><span> -</span></li>
                <li>My Profile</li>
            </ul>
        </div>
    </div>  
</div> 
<!-- Inner Page Banner Area End Here -->          
<!-- Profile Page Start Here -->
<div class="profile-page-area bg-secondary section-space-bottom">                
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 col-lg-push-3 col-md-push-4 col-sm-push-4">
                <div class="inner-page-main-body">
                    <div class="single-banner">
                        <img src="img\banner\1.jpg" alt="product" class="img-responsive">
                    </div>                                
                    <div class="author-summery">
                        <div class="single-item">
                            <div class="item-title">Country:</div>
                            <div class="item-details"><?php echo $showusercountry['country']; ?></div>                                       
                        </div>
                        <div class="single-item">
                            <div class="item-title">Member Since:</div>
                            <div class="item-details"><?php echo $showuser['user_time']; ?></div>                                       
                        </div>
                        <div class="single-item">
                            <div class="item-title">Author Rating:</div>
                            <div class="item-details">
                                <ul class="default-rating">
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li>(<span> 05</span> )</li>
                                </ul>
                            </div>                                       
                        </div>
                        <div class="single-item">
                            <div class="item-title">Total Sales:</div>
                            <div class="item-name">$ 5,030</div>                                       
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 col-lg-pull-9 col-md-pull-8 col-sm-pull-8">
                <div class="fox-sidebar">
                    <div class="sidebar-item">
                        <div class="sidebar-item-inner">
                            <h3 class="sidebar-item-title">Product Author</h3>
                            <div class="sidebar-author-info">
                                <div class="sidebar-author-img">
                                    <img src="<?php echo $showuser['user_picture']; ?>" alt="product" class="img-responsive">
                                </div>
                                <div class="sidebar-author-content">
                                    <h3><?php  echo $showuser['user_name'].' '.$showuser['user_lastname']; ?></h3>
                                    <a href="#" class="view-profile"><i class="fa fa-circle" aria-hidden="true"></i>Online</a>
                                </div>
                            </div>
                            <ul class="sidebar-badges-item">
                                <li><img src="img\profile\badges1.png" alt="badges" class="img-responsive"></li>
                                <li><img src="img\profile\badges2.png" alt="badges" class="img-responsive"></li>
                                <li><img src="img\profile\badges3.png" alt="badges" class="img-responsive"></li>
                                <li><img src="img\profile\badges4.png" alt="badges" class="img-responsive"></li>
                                <li><img src="img\profile\badges5.png" alt="badges" class="img-responsive"></li>
                            </ul>
                        </div>
                    </div>
                    <ul class="social-default">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                    </ul>                                
                    <ul class="sidebar-product-btn">
                        <li><a href="contact.htm" class="buy-now-btn" id="buy-button"><i class="fa fa-envelope-o" aria-hidden="true"></i> Send Message</a></li>
                        <li><a href="#" class="add-to-cart-btn" id="cart-button">Following</a></li>
                    </ul>

                </div>
            </div>                                                
        </div>
        <div class="row profile-wrapper">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <ul class="profile-title">
                    <li class="active"><a href="#Profile" data-toggle="tab" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i> About Me</a></li>
                    <li><a href="#Products" data-toggle="tab" aria-expanded="false"><i class="fa fa-briefcase" aria-hidden="true"></i> Products ( 10 )</a></li>
                    <li><a href="#Message" data-toggle="tab" aria-expanded="false"><i class="fa fa-envelope-o" aria-hidden="true"></i> Message Box</a></li>
                    <li><a href="#Reviews" data-toggle="tab" aria-expanded="false"><i class="fa fa-comments-o" aria-hidden="true"></i> Customer Reviews ( 20 )</a></li>
                    <li><a href="#Followers" data-toggle="tab" aria-expanded="false"><i class="fa fa-users" aria-hidden="true"></i> Followers (100 )</a></li>
                </ul>
            </div>
            <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12"> 
                <div class="tab-content">
                    <div class="tab-pane fade active in" id="Profile">
                        <div class="inner-page-details inner-page-content-box">
                            <h3>About Me:</h3>
                            <p>Bimply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic.</p>
                            <h3>Skills:</h3>
                            <div class="skill-area">
                                <div class="progress">
                                    <div class="lead">Graphic Design</div>
                                    <div data-wow-delay="1.2s" data-wow-duration="1.5s" style="width: 90%; visibility: visible; animation-duration: 1.5s; animation-delay: 1.2s; animation-name: fadeInLeft;" data-progress="100%" class="progress-bar wow fadeInLeft   animated"></div>
                                </div>
                                <div class="progress">
                                    <div class="lead">WordPress</div>
                                    <div data-wow-delay="1.2s" data-wow-duration="1.5s" style="width: 80%; visibility: visible; animation-duration: 1.5s; animation-delay: 1.2s; animation-name: fadeInLeft;" data-progress="80%" class="progress-bar wow fadeInLeft   animated"></div>
                                </div>
                                <div class="progress">
                                    <div class="lead">Joomla</div>
                                    <div data-wow-delay="1.2s" data-wow-duration="1.5s" style="width: 60%; visibility: visible; animation-duration: 1.5s; animation-delay: 1.2s; animation-name: fadeInLeft;" data-progress="60%" class="progress-bar wow fadeInLeft   animated"></div> 
                                </div>
                            </div>
                        </div> 
                    </div> 
                    <div class="tab-pane fade" id="Products">
                        <h3 class="title-inner-section">My Products</h3>
                        <div class="inner-page-main-body"> 
                           <div class="row more-product-item-wrapper">
                            <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6">
                                <div class="more-product-item">
                                    <div class="more-product-item-img">
                                        <img src="img\product\more1.jpg" alt="product" class="img-responsive">
                                    </div>
                                    <div class="more-product-item-details">
                                        <h4><a href="#">Grand Ballet - Dance</a></h4>
                                        <div class="p-title">PSD Template</div>
                                        <div class="p-price">$12</div>
                                    </div>
                                </div>
                            </div>  
                            <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6">
                                <div class="more-product-item">
                                    <div class="more-product-item-img">
                                        <img src="img\product\more2.jpg" alt="product" class="img-responsive">
                                    </div>
                                    <div class="more-product-item-details">
                                        <h4><a href="#">Grand Ballet - Dance</a></h4>
                                        <div class="p-title">PSD Template</div>
                                        <div class="p-price">$20</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6">
                                <div class="more-product-item">
                                    <div class="more-product-item-img">
                                        <img src="img\product\more3.jpg" alt="product" class="img-responsive">
                                    </div>
                                    <div class="more-product-item-details">
                                        <h4><a href="#">Grand Ballet - Dance</a></h4>
                                        <div class="p-title">PSD Template</div>
                                        <div class="p-price">$49</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6">
                                <div class="more-product-item">
                                    <div class="more-product-item-img">
                                        <img src="img\product\more4.jpg" alt="product" class="img-responsive">
                                    </div>
                                    <div class="more-product-item-details">
                                        <h4><a href="#">Grand Ballet - Dance</a></h4>
                                        <div class="p-title">PSD Template</div>
                                        <div class="p-price">$18</div>
                                    </div>
                                </div>
                            </div>                                  
                            <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6">
                                <div class="more-product-item">
                                    <div class="more-product-item-img">
                                        <img src="img\product\more5.jpg" alt="product" class="img-responsive">
                                    </div>
                                    <div class="more-product-item-details">
                                        <h4><a href="#">Grand Ballet - Dance</a></h4>
                                        <div class="p-title">PSD Template</div>
                                        <div class="p-price">$59</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6">
                                <div class="more-product-item">
                                    <div class="more-product-item-img">
                                        <img src="img\product\more6.jpg" alt="product" class="img-responsive">
                                    </div>
                                    <div class="more-product-item-details">
                                        <h4><a href="#">Grand Ballet - Dance</a></h4>
                                        <div class="p-title">PSD Template</div>
                                        <div class="p-price">$48</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6">
                                <div class="more-product-item">
                                    <div class="more-product-item-img">
                                        <img src="img\product\more7.jpg" alt="product" class="img-responsive">
                                    </div>
                                    <div class="more-product-item-details">
                                        <h4><a href="#">Grand Ballet - Dance</a></h4>
                                        <div class="p-title">PSD Template</div>
                                        <div class="p-price">$48</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6">
                                <div class="more-product-item">
                                    <div class="more-product-item-img">
                                        <img src="img\product\more8.jpg" alt="product" class="img-responsive">
                                    </div>
                                    <div class="more-product-item-details">
                                        <h4><a href="#">Grand Ballet - Dance</a></h4>
                                        <div class="p-title">PSD Template</div>
                                        <div class="p-price">$48</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6">
                                <div class="more-product-item">
                                    <div class="more-product-item-img">
                                        <img src="img\product\more9.jpg" alt="product" class="img-responsive">
                                    </div>
                                    <div class="more-product-item-details">
                                        <h4><a href="#">Grand Ballet - Dance</a></h4>
                                        <div class="p-title">PSD Template</div>
                                        <div class="p-price">$48</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <ul class="pagination-align-left">
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                </ul>
                            </div>  
                        </div>
                    </div> 
                </div>
                <div class="tab-pane fade" id="Message">
                    <h3 class="title-inner-section">Message Box</h3>
                    <div class="message-wrapper">
                        <div class="single-item-message">
                            <div class="single-item-inner">
                                <img src="img\profile\3.jpg" alt="profile" class="img-responsive">
                                <div class="item-content">
                                    <h4>Richi Rose</h4>
                                    <span>2 days ago</span>
                                    <p>Tmply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                                </div> 
                            </div> 
                        </div>
                        <div class="single-item-message">
                            <div class="single-item-inner">
                                <img src="img\profile\4.jpg" alt="profile" class="img-responsive">
                                <div class="item-content">
                                    <h4>Richi Rose</h4>
                                    <span>2 days ago</span>
                                    <p>Tmply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                                </div> 
                            </div> 
                            <div class="single-item-inner-author">
                                <img src="img\profile\5.jpg" alt="profile" class="img-responsive">
                                <div class="item-content">
                                    <h4>Richi Rose<span> Author</span></h4>
                                    <span>2 days ago</span>
                                    <p>Tmply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                                </div> 
                            </div>
                        </div>
                        <div class="single-item-message">
                            <div class="single-item-inner">
                                <img src="img\profile\6.jpg" alt="profile" class="img-responsive">
                                <div class="item-content">
                                    <h4>Richi Rose</h4>
                                    <span>2 days ago</span>
                                    <p>Tmply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                                </div> 
                            </div> 
                        </div>
                        <div class="single-item-message">
                            <ul class="pagination-profile-align-center">
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                            </ul> 
                        </div>
                        <div class="single-item-message">
                            <h3>Leave A Comment</h3>
                            <div class="leave-comments-message">
                                <img src="img\profile\5.jpg" alt="profile" class="img-responsive">
                                <div class="leave-comments-box">
                                    <textarea placeholder="Write your comment here ...*" class="textarea form-control" name="message"></textarea>
                                    <button type="submit" class="update-btn">Post Comment</button>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="tab-pane fade" id="Reviews">
                    <h3 class="title-inner-section">Customer Reviews  ( 20 )</h3>
                    <div class="reviews-wrapper">
                        <div class="single-item-message">
                            <div class="single-item-inner">
                                <img src="img\profile\3.jpg" alt="profile" class="img-responsive">
                                <div class="item-content">
                                    <h4>Richi Rose<span>WordPress</span></h4>
                                    <span>2 days ago</span>
                                    <p>Tmply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1n printer took a galley.</p>
                                    <div class="profile-rating">
                                        <ul>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        </ul>
                                    </div>
                                </div>                                                 
                            </div> 
                        </div>
                        <div class="single-item-message">
                            <div class="single-item-inner">
                                <img src="img\profile\4.jpg" alt="profile" class="img-responsive">
                                <div class="item-content">
                                    <h4>Richi Rose<span>WordPress</span></h4>
                                    <span>2 days ago</span>
                                    <p>Tmply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1n printer took a galley.</p>
                                    <div class="profile-rating">
                                        <ul>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        </ul>
                                    </div>
                                </div>                                                 
                            </div> 
                        </div>
                        <div class="single-item-message">
                            <div class="single-item-inner">
                                <img src="img\profile\5.jpg" alt="profile" class="img-responsive">
                                <div class="item-content">
                                    <h4>Richi Rose<span>WordPress</span></h4>
                                    <span>2 days ago</span>
                                    <p>Tmply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1n printer took a galley.</p>
                                    <div class="profile-rating">
                                        <ul>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        </ul>
                                    </div>
                                </div>                                                 
                            </div> 
                        </div>
                        <div class="single-item-message">
                            <div class="single-item-inner">
                                <img src="img\profile\6.jpg" alt="profile" class="img-responsive">
                                <div class="item-content">
                                    <h4>Richi Rose<span>WordPress</span></h4>
                                    <span>2 days ago</span>
                                    <p>Tmply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1n printer took a galley.</p>
                                    <div class="profile-rating">
                                        <ul>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        </ul>
                                    </div>
                                </div>                                                 
                            </div> 
                        </div>
                        <div class="single-item-message">
                            <div class="single-item-inner">
                                <img src="img\profile\7.jpg" alt="profile" class="img-responsive">
                                <div class="item-content">
                                    <h4>Richi Rose<span>WordPress</span></h4>
                                    <span>2 days ago</span>
                                    <p>Tmply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1n printer took a galley.</p>
                                    <div class="profile-rating">
                                        <ul>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        </ul>
                                    </div>
                                </div>                                                 
                            </div> 
                        </div>
                        <div class="single-item-message">
                            <div class="single-item-inner">
                                <img src="img\profile\8.jpg" alt="profile" class="img-responsive">
                                <div class="item-content">
                                    <h4>Richi Rose<span>WordPress</span></h4>
                                    <span>2 days ago</span>
                                    <p>Tmply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1n printer took a galley.</p>
                                    <div class="profile-rating">
                                        <ul>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        </ul>
                                    </div>
                                </div>                                                 
                            </div> 
                        </div>
                        <div class="single-item-message">
                            <ul class="pagination-profile-align-center">
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                            </ul>
                        </div> 
                    </div> 
                </div>
                <div class="tab-pane fade" id="Followers">
                    <h3 class="title-inner-section">Followers</h3>
                    <div class="inner-page-main-body"> 
                       <div class="row more-product-item-wrapper">
                        <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6">
                            <div class="more-product-item">
                                <div class="more-product-item-img">
                                    <img src="img\profile\5.jpg" alt="product" class="img-responsive">
                                </div>
                                <div class="more-product-item-details">
                                    <h4><a href="#">Psdart</a></h4>
                                    <div class="a-item">516 Items</div>
                                    <div class="a-followers">406 Followers</div>
                                </div>
                            </div>
                        </div>  
                        <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6">
                            <div class="more-product-item">
                                <div class="more-product-item-img">
                                    <img src="img\profile\6.jpg" alt="product" class="img-responsive">
                                </div>
                                <div class="more-product-item-details">
                                    <h4><a href="#">RadiusTheme</a></h4>
                                    <div class="a-item">516 Items</div>
                                    <div class="a-followers">406 Followers</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6">
                            <div class="more-product-item">
                                <div class="more-product-item-img">
                                    <img src="img\profile\7.jpg" alt="product" class="img-responsive">
                                </div>
                                <div class="more-product-item-details">
                                    <h4><a href="#">Maxbox</a></h4>
                                    <div class="a-item">516 Items</div>
                                    <div class="a-followers">406 Followers</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6">
                            <div class="more-product-item">
                                <div class="more-product-item-img">
                                    <img src="img\profile\8.jpg" alt="product" class="img-responsive">
                                </div>
                                <div class="more-product-item-details">
                                    <h4><a href="#">Dancty</a></h4>
                                    <div class="a-item">516 Items</div>
                                    <div class="a-followers">406 Followers</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6">
                            <div class="more-product-item">
                                <div class="more-product-item-img">
                                    <img src="img\profile\9.jpg" alt="product" class="img-responsive">
                                </div>
                                <div class="more-product-item-details">
                                    <h4><a href="#">Austonea</a></h4>
                                    <div class="a-item">516 Items</div>
                                    <div class="a-followers">406 Followers</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6">
                            <div class="more-product-item">
                                <div class="more-product-item-img">
                                    <img src="img\profile\10.jpg" alt="product" class="img-responsive">
                                </div>
                                <div class="more-product-item-details">
                                    <h4><a href="#">Branadom</a></h4>
                                    <div class="a-item">516 Items</div>
                                    <div class="a-followers">406 Followers</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6">
                            <div class="more-product-item">
                                <div class="more-product-item-img">
                                    <img src="img\profile\11.jpg" alt="product" class="img-responsive">
                                </div>
                                <div class="more-product-item-details">
                                    <h4><a href="#">Grand Balle</a></h4>
                                    <div class="a-item">516 Items</div>
                                    <div class="a-followers">406 Followers</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6">
                            <div class="more-product-item">
                                <div class="more-product-item-img">
                                    <img src="img\profile\12.jpg" alt="product" class="img-responsive">
                                </div>
                                <div class="more-product-item-details">
                                    <h4><a href="#">Akkas</a></h4>
                                    <div class="a-item">516 Items</div>
                                    <div class="a-followers">406 Followers</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6">
                            <div class="more-product-item">
                                <div class="more-product-item-img">
                                    <img src="img\profile\13.jpg" alt="product" class="img-responsive">
                                </div>
                                <div class="more-product-item-details">
                                    <h4><a href="#">Moinar ma</a></h4>
                                    <div class="a-item">516 Items</div>
                                    <div class="a-followers">406 Followers</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <ul class="pagination-align-left">
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                            </ul>
                        </div>  
                    </div>
                </div> 
            </div>                                        
        </div> 
    </div>  
</div>
</div>
</div>
<!-- Profile Page End Here -->            
<?php
include'footer.php';
?>