<!-- header-search_container  end -->
<!-- wishlist-wrap-->
<div class="header-modal novis_wishlist">
    <!-- header-modal-container-->
    <div class="header-modal-container scrollbar-inner fl-wrap" data-simplebar="init">
        <div class="simplebar-wrapper" style="margin: -10px -20px;">
            <div class="simplebar-height-auto-observer-wrapper">
                <div class="simplebar-height-auto-observer"></div>
            </div>
            <div class="simplebar-mask">
                <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                    <div class="simplebar-content" style="padding: 10px 20px; height: auto; overflow: hidden;">
                        <!--widget-posts-->
                        <div class="widget-posts  fl-wrap">
                            <ul class="no-list-style">
                                <li>

                                    <div class="widget-posts-img"><a href="listing-single.html"><img src="<?php echo base_url(); ?>assets/images/gallery/thumbnail/1.png" alt=""></a>
                                    </div>



                                    <div class="widget-posts-descr">
                                        <h4><a href="listing-single.html">Iconic Cafe</a></h4>
                                        <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i> 40 Journal Square Plaza, NJ, USA</a></div>
                                        <div class="widget-posts-descr-link"><a href="listing.html">Restaurants </a> <a href="listing.html">Cafe</a></div>
                                        <div class="widget-posts-descr-score">4.1</div>
                                        <div class="clear-wishlist"><i class="fal fa-times-circle"></i></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="widget-posts-img"><a href="listing-single.html"><img src="<?php echo base_url(); ?>assets/images/gallery/thumbnail/2.png" alt=""></a>
                                    </div>
                                    <div class="widget-posts-descr">
                                        <h4><a href="listing-single.html">MontePlaza Hotel</a></h4>
                                        <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i> 70 Bright St New York, USA </a></div>
                                        <div class="widget-posts-descr-link"><a href="listing.html">Hotels </a> </div>
                                        <div class="widget-posts-descr-score">5.0</div>
                                        <div class="clear-wishlist"><i class="fal fa-times-circle"></i></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="widget-posts-img"><a href="listing-single.html"><img src="<?php echo base_url(); ?>assets/images/gallery/thumbnail/3.png" alt=""></a>
                                    </div>
                                    <div class="widget-posts-descr">
                                        <h4><a href="listing-single.html">Rocko Band in Marquee Club</a></h4>
                                        <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i>75 Prince St, NY, USA</a></div>
                                        <div class="widget-posts-descr-link"><a href="listing.html">Events</a> </div>
                                        <div class="widget-posts-descr-score">4.2</div>
                                        <div class="clear-wishlist"><i class="fal fa-times-circle"></i></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="widget-posts-img"><a href="listing-single.html"><img src="<?php echo base_url(); ?>assets/images/gallery/thumbnail/4.png" alt=""></a>
                                    </div>
                                    <div class="widget-posts-descr">
                                        <h4><a href="listing-single.html">Premium Fitness Gym</a></h4>
                                        <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i> W 85th St, New York, USA</a></div>
                                        <div class="widget-posts-descr-link"><a href="listing.html">Fitness</a> <a href="listing.html">Gym</a> </div>
                                        <div class="widget-posts-descr-score">5.0</div>
                                        <div class="clear-wishlist"><i class="fal fa-times-circle"></i></div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- widget-posts end-->
                    </div>
                </div>
            </div>
            <div class="simplebar-placeholder" style="width: 0px; height: 0px;"></div>
        </div>
        <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
            <div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); visibility: hidden;"></div>
        </div>
        <div class="simplebar-track simplebar-vertical" style="visibility: hidden;">
            <div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); visibility: hidden;"></div>
        </div>
    </div>
    <!-- header-modal-container end-->
    <div class="header-modal-top fl-wrap">
        <h4>Your Wishlist : <span><strong>4</strong> Locations</span></h4>
        <div class="close-header-modal"><i class="far fa-times"></i></div>
    </div>
</div>
<!--wishlist-wrap end -->
</header>
<!-- header end-->
<!-- wrapper-->
<div id="wrapper">
    <!-- content-->
    <div class="col-md-6">

        <div class="geodir_status_date gsd_open">
            <?php echo $this->session->flashdata('done'); ?>
            <?php echo $this->session->flashdata('fail'); ?>
        </div>
    </div>

    <div class="content">
        <section class="listing-hero-section hidden-section" data-scrollax-parent="true" id="sec1">
            <div class="bg-parallax-wrap">
                <div class="bg par-elem " data-bg="<?php echo base_url() . "../companylogin/uploads/" . $fetch_images['landing_image']; ?>" data-scrollax="properties: { translateY: '30%' }" style="background-image: url(&quot;images/bg/6.jpg&quot;); transform: translateZ(0px) translateY(-3%);"></div>
                <div class="overlay"></div>
            </div>



            <div class="container">
                <div class="list-single-header-item  fl-wrap">
                    <div class="row">


                        <div class="col-md-9">

                            <h1><?php echo $fetch_basic_data['company_name']; ?> <span class="verified-badge"><i class="fal fa-check"></i></span></h1>
                            <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i> <?php echo $fetch_basic_data['location']; ?></a> <a href="#"> <i class="fal fa-phone"></i><?php echo $fetch_basic_data['mobile']; ?></a> <a href="#"><i class="fal fa-envelope"></i> <?php echo $fetch_basic_data['email']; ?></a></div>
                        </div>
                        <div class="col-md-3">
                            <a class="fl-wrap list-single-header-column custom-scroll-link " href="#sec5">
                                <div class="listing-rating-count-wrap single-list-count">
                                    <div class="review-score">4.1</div>
                                    <div class="listing-rating card-popup-rainingvis" data-starrating2="4"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                        <div class="card-popup-rainingvis_bg"><span class="card-popup-rainingvis_bg_item"></span><span class="card-popup-rainingvis_bg_item"></span><span class="card-popup-rainingvis_bg_item"></span><span class="card-popup-rainingvis_bg_item"></span><span class="card-popup-rainingvis_bg_item"></span>
                                            <div></div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="reviews-count">2 reviews</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="list-single-header_bottom fl-wrap">
                    <a class="listing-item-category-wrap" href="#">
                        <div class="listing-item-category  red-bg"><i class="fal fa-cheeseburger" style="margin: 11px 2px;"></i></div>
                        <span>Restaurants</span>
                    </a>
                    <div class="list-single-author"> <a href=""><span class="author_avatar"> <img alt="" src="<?php echo base_url() . "../companylogin/uploads/" . $fetch_images['pics']; ?>"> </span>By <?php echo $fetch_basic_data['owner']; ?></a></div>
                    <div class="geodir_status_date gsd_open"><i class="fal fa-lock-open"></i>Open Now</div>
                    <div class="list-single-stats">
                        <ul class="no-list-style">
                            <li><span class="viewed-counter"><i class="fas fa-eye"></i> Viewed - 156 </span></li>
                            <li><span class="bookmark-counter"><i class="fas fa-heart"></i> Bookmark - 24 </span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- scroll-nav-wrapper-->
        <div class="scroll-nav-wrapper fl-wrap" style="z-index: 1112;">
            <div class="container">
                <nav class="scroll-nav scroll-init">
                    <ul class="no-list-style">
                        <li><a class="act-scrlink" href="#sec1"><i class="fal fa-images"></i> Top</a></li>
                        <li><a href="#sec2"><i class="fal fa-info"></i>Details</a></li>
                        <li><a href="#sec3"><i class="fal fa-image"></i>Gallery</a></li>

                        <li><a href="#sec5"><i class="fal fa-comments-alt"></i>Reviews</a></li>
                    </ul>
                </nav>
                <div class="scroll-nav-wrapper-opt">
                    <a href="#" class="scroll-nav-wrapper-opt-btn"> <i class="fas fa-heart"></i> Save </a>
                    <a href="#" class="scroll-nav-wrapper-opt-btn showshare"> <i class="fas fa-share"></i> Share </a>
                    <div class="share-holder hid-share">
                        <div class="share-container  isShare"><a href="http://www.facebook.com/share.php?u=file%3A%2F%2F%2FC%3A%2FUsers%2FRohan%2520Kush%2FDesktop%2Fall%2520themes%2Ftownhub%2Flisting-single.html" title="Share this page on facebook" class="pop share-icon share-icon-facebook"></a><a href="http://pinterest.com/pin/create/button/?url=file%3A%2F%2F%2FC%3A%2FUsers%2FRohan%2520Kush%2FDesktop%2Fall%2520themes%2Ftownhub%2Flisting-single.html&amp;media=&amp;description=" title="Share this page on pinterest" class="pop share-icon share-icon-pinterest"></a><a href="https://plusone.google.com/_/+1/confirm?hl=en&amp;url=file%3A%2F%2F%2FC%3A%2FUsers%2FRohan%2520Kush%2FDesktop%2Fall%2520themes%2Ftownhub%2Flisting-single.html" title="Share this page on googleplus" class="pop share-icon share-icon-googleplus"></a><a href="https://twitter.com/share?via=in1.com&amp;text=Townhub - Directory Listing Template" title="Share this page on twitter" class="pop share-icon share-icon-twitter"></a><a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=file%3A%2F%2F%2FC%3A%2FUsers%2FRohan%2520Kush%2FDesktop%2Fall%2520themes%2Ftownhub%2Flisting-single.html&amp;title=Townhub - Directory Listing Template&amp;summary=&amp;source=in1.com" title="Share this page on linkedin" class="pop share-icon share-icon-linkedin"></a></div>
                    </div>
                    <div class="show-more-snopt"><i class="fal fa-ellipsis-h"></i></div>
                    <div class="show-more-snopt-tooltip">
                        <a href="#"> <i class="fas fa-comment-alt"></i> Write a review</a>
                        <a href="#"> <i class="fas fa-flag-alt"></i> Report </a>
                    </div>
                </div>
            </div>
        </div>
        <div></div>
        <!-- scroll-nav-wrapper end-->
        <section class="gray-bg no-top-padding">
            <div class="container">

                <div class="clearfix"></div>
                <div class="row">
                    <!-- list-single-main-wrapper-col -->
                    <div class="col-md-9">
                        <!-- list-single-main-wrapper -->
                        <div class="list-single-main-wrapper fl-wrap" id="sec2">
                            <div class="col-md-12">
                                <div class="ab_text-title fl-wrap">
                                    <h3>Get in Touch</h3>
                                    <span class="section-separator fl-sec-sep"></span>
                                </div>
                                <!--box-widget-item -->
                                <div class="box-widget-item fl-wrap block_box">
                                    <div class="box-widget">
                                        <div class="box-widget-content bwc-nopad">
                                            <div class="list-author-widget-contacts list-item-widget-contacts bwc-padside">
                                                <ul class="no-list-style">
                                                    <li><span><i class="fal fa-map-marker"></i> Adress :</span> <a href="#singleMap" class="custom-scroll-link"><?php echo $fetch_basic_data['location']; ?></a></li>
                                                    <li><span><i class="fal fa-phone"></i> Phone :</span><a href=""><?php echo $fetch_basic_data['mobile']; ?></a></li>
                                                    <li><span><i class="fal fa-envelope"></i> Mail :</span> <a href=""><?php echo $fetch_basic_data['email']; ?></a></li>
                                                    <li><span><i class="fal fa-cart-arrow-down"></i> GST :</span> <a href=""><?php echo $fetch_basic_data['gst']; ?></a></li>
                                                </ul>
                                            </div>
                                            <div class="list-widget-social bottom-bcw-box  fl-wrap">
                                                <ul class="no-list-style">
                                                    <li><a href="#" target="_blank"><i class="fab fa-facebook-f" style="padding: 8px 2px;"></i></a></li>
                                                    <li><a href="#" target="_blank"><i class="fab fa-twitter" style="padding: 8px 2px;"></i></a></li>
                                                    <li><a href="#" target="_blank"><i class="fab fa-vk" style="padding: 8px 2px;"> </i></a></li>
                                                    <li><a href="#" target="_blank"><i class="fab fa-instagram" style="padding: 8px 2px;"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--box-widget-item end -->
                                <!--box-widget-item -->
                                <div class="box-widget-item fl-wrap" style="margin-top:20px;">
                                    <div class="banner-wdget fl-wrap">
                                        <div class="overlay op4"></div>
                                        <div class="bg" data-bg="images/bg/18.jpg" style="background-image: url(&quot;images/bg/18.jpg&quot;);"></div>

                                    </div>
                                </div>
                                <!--box-widget-item end -->
                            </div>
                            <!-- list-single-main-item -->
                            <div class="list-single-main-item fl-wrap block_box">
                                <div class="list-single-main-item-title">
                                    <h3>Description</h3>
                                </div>
                                <div class="list-single-main-item_content fl-wrap">
                                    <p><?= $fetch_basic_data['description'] ?></p>
                                    <a href="#" class="btn color2-bg    float-btn">Visit Website<i class="fal fa-chevron-right"></i></a>
                                </div>
                            </div>
                            <!-- list-single-main-item end -->
                            <!-- list-single-main-item -->

                            <!-- list-single-main-item end -->
                            <!-- list-single-main-item-->
                            <div class="list-single-main-item fl-wrap block_box" id="sec3">
                                <div class="list-single-main-item-title">
                                    <h3>Gallery / Photos</h3>
                                </div>
                                <div class="list-single-main-item_content fl-wrap">
                                    <div class="single-carousel-wrap fl-wrap lightgallery">
                                        <div class="sc-next sc-btn color2-bg" tabindex="0" role="button" aria-label="Next slide" aria-disabled="false">
                                            <i class="fas fa-caret-right" style="margin: 10px 2px;">

                                            </i></div>
                                        <div class="sc-prev sc-btn color2-bg swiper-button-disabled" tabindex="0" role="button" aria-label="Previous slide" aria-disabled="true"><i class="fas fa-caret-left"style="margin: 10px 2px;"></i></div>
                                        <div class="single-carousel fl-wrap full-height">
                                            <div class="swiper-container swiper-container-horizontal swiper-container-free-mode" style="cursor: grab;">
                                                <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
                                                    <!-- swiper-slide-->
                                                    <?php foreach ($gallery_imagess as $class) { ?>

                                                    <div class="swiper-slide swiper-slide-active" style="margin-right: 10px;">
                                                        <div class="box-item">
                                                            <img src="<?php echo base_url() . "gallery_images/". $class->gallery_images; ?>" alt="">
                                                            <a href="<?php echo base_url() . "gallery_images/" . $class->gallery_images; ?>" class="gal-link popup-image"><i class="fa fa-search" style="margin: 14px 2px;"></i></a>
                                                        </div>
                                                    </div>
                                                    <?php } ?>
                                                    <!-- swiper-slide end-->
                                                    <!-- swiper-slide-->
                                               
                                                    <!-- swiper-slide end-->
                                                    <!-- swiper-slide-->
                                                    
                                                    <!-- swiper-slide end-->
                                                    <!-- swiper-slide-->
                                                
                                                    <!-- swiper-slide end-->
                                                </div>
                                                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- list-single-main-item end -->
                            <!-- list-single-facts -->
                            <div class="list-single-facts fl-wrap">
                                <div class="row">
                                    <div class="col-md-4">
                                        <!-- inline-facts -->
                                        <div class="inline-facts-wrap gradient-bg " style="height: 113px;">
                                            <div class="inline-facts">
                                                <i class="fal fa-smile-plus"></i>
                                                <div class="milestone-counter">
                                                    <div class="stats animaper">
                                                        <div class="num" data-content="0" data-num="245">0</div>
                                                    </div>
                                                </div>
                                                <h6>New Visiters Every Week</h6>
                                            </div>
                                            <div class="stat-wave">
                                                <svg viewBox="0 0 100 25">
                                                    <path fill="#fff" d="M0 30 V12 Q30 17 55 2 T100 11 V30z"></path>
                                                </svg>
                                            </div>
                                        </div>
                                        <!-- inline-facts end -->
                                    </div>
                                    <div class="col-md-4">
                                        <!-- inline-facts  -->
                                        <div class="inline-facts-wrap gradient-bg " style="height: 113px;">
                                            <div class="inline-facts">
                                                <i class="fal fa-users"></i>
                                                <div class="milestone-counter">
                                                    <div class="stats animaper">
                                                        <div class="num" data-content="0" data-num="2557">0</div>
                                                    </div>
                                                </div>
                                                <h6>Happy customers every year</h6>
                                            </div>
                                            <div class="stat-wave">
                                                <svg viewBox="0 0 100 25">
                                                    <path fill="#fff" d="M0 30 V12 Q30 17 55 12 T100 11 V30z"></path>
                                                </svg>
                                            </div>
                                        </div>
                                        <!-- inline-facts end -->
                                    </div>
                                    <div class="col-md-4">
                                        <!-- inline-facts  -->
                                        <div class="inline-facts-wrap gradient-bg " style="height: 113px;">
                                            <div class="inline-facts">
                                                <i class="fal fa-award"></i>
                                                <div class="milestone-counter">
                                                    <div class="stats animaper">
                                                        <div class="num" data-content="0" data-num="25">0</div>
                                                    </div>
                                                </div>
                                                <h6>Won Awards</h6>
                                            </div>
                                            <div class="stat-wave">
                                                <svg viewBox="0 0 100 25">
                                                    <path fill="#fff" d="M0 30 V12 Q30 12 55 5 T100 11 V30z"></path>
                                                </svg>
                                            </div>
                                        </div>
                                        <!-- inline-facts end -->
                                    </div>
                                </div>
                            </div>
                            <!-- list-single-facts end -->
                            <!-- list-single-main-item-->

                            <!-- list-single-main-item end -->
                            <!-- list-single-main-item -->
                            <div class="list-single-main-item fl-wrap block_box" id="sec5">
                                <div class="list-single-main-item-title">
                                    <h3>Item Reviews - <span> 2 </span></h3>
                                </div>
                                <!--reviews-score-wrap-->
                                <div class="reviews-score-wrap fl-wrap">
                                    <div class="review-score-total">
                                        <span class="review-score-total-item">
                                            4.1
                                        </span>
                                        <div class="listing-rating card-popup-rainingvis" data-starrating2="5"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                            <div class="card-popup-rainingvis_bg"><span class="card-popup-rainingvis_bg_item"></span><span class="card-popup-rainingvis_bg_item"></span><span class="card-popup-rainingvis_bg_item"></span><span class="card-popup-rainingvis_bg_item"></span><span class="card-popup-rainingvis_bg_item"></span>
                                                <div></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="review-score-detail">
                                        <!-- review-score-detail-list-->
                                        <div class="review-score-detail-list">
                                            <!-- rate item-->
                                            <div class="rate-item">
                                                <div class="rate-item-title"><span>Quality</span></div>
                                                <div class="rate-item-bg" data-percent="100%">
                                                    <div class="rate-item-line gradient-bg" style="width: 100%;"></div>
                                                </div>
                                                <div class="rate-item-percent">5.0</div>
                                            </div>
                                            <!-- rate item end-->
                                            <!-- rate item-->
                                            <div class="rate-item">
                                                <div class="rate-item-title"><span>Location</span></div>
                                                <div class="rate-item-bg" data-percent="90%">
                                                    <div class="rate-item-line gradient-bg" style="width: 90%;"></div>
                                                </div>
                                                <div class="rate-item-percent">4.0</div>
                                            </div>
                                            <!-- rate item end-->
                                            <!-- rate item-->
                                            <div class="rate-item">
                                                <div class="rate-item-title"><span>Price</span></div>
                                                <div class="rate-item-bg" data-percent="60%">
                                                    <div class="rate-item-line gradient-bg" style="width: 60%;"></div>
                                                </div>
                                                <div class="rate-item-percent">3.0</div>
                                            </div>
                                            <!-- rate item end-->
                                            <!-- rate item-->
                                            <div class="rate-item">
                                                <div class="rate-item-title"><span>Service</span></div>
                                                <div class="rate-item-bg" data-percent="80%">
                                                    <div class="rate-item-line gradient-bg" style="width: 80%;"></div>
                                                </div>
                                                <div class="rate-item-percent">4.0</div>
                                            </div>
                                            <!-- rate item end-->
                                        </div>
                                        <!-- review-score-detail-list end-->
                                    </div>
                                </div>
                                <!-- reviews-score-wrap end -->
                                <div class="list-single-main-item_content fl-wrap">
                                    <div class="reviews-comments-wrap">
                                        <!-- reviews-comments-item -->
                                        <div class="reviews-comments-item">
                                            <div class="review-comments-avatar">
                                                <img src="<?php echo base_url(); ?>assets/images/avatar/4.jpg" alt="">
                                            </div>
                                            <div class="reviews-comments-item-text fl-wrap">
                                                <div class="reviews-comments-header fl-wrap">
                                                    <h4><a href="#">Liza Rose</a></h4>
                                                    <div class="review-score-user">
                                                        <span class="review-score-user_item">4.2</span>
                                                        <div class="listing-rating card-popup-rainingvis" data-starrating2="4"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                                            <div class="card-popup-rainingvis_bg"><span class="card-popup-rainingvis_bg_item"></span><span class="card-popup-rainingvis_bg_item"></span><span class="card-popup-rainingvis_bg_item"></span><span class="card-popup-rainingvis_bg_item"></span><span class="card-popup-rainingvis_bg_item"></span>
                                                                <div></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p>" Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. "</p>
                                                <div class="reviews-comments-item-footer fl-wrap">
                                                    <div class="reviews-comments-item-date"><span><i class="far fa-calendar-check"></i>12 April 2018</span></div>
                                                    <a href="#" class="rate-review"><i class="fal fa-thumbs-up"></i> Helpful Review <span>2</span> </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!--reviews-comments-item end-->
                                        <!-- reviews-comments-item -->

                                        <!--reviews-comments-item end-->
                                    </div>
                                </div>
                            </div>
                            <!-- list-single-main-item end -->
                            <!-- list-single-main-item -->

                            <!-- list-single-main-item end -->
                        </div>
                    </div>
                    <!-- list-single-main-wrapper-col end -->
                    <!-- list-single-sidebar -->
                    <div class="col-md-3">
                        <div class="fl-wrap lws_mobile vishidelem">
                            <!--box-widget-item -->
                            <div class="box-widget-item fl-wrap block_box">
                                <div class="box-widget-item-header">
                                    <h3>Search Products</h3>
                                </div>
                                <div class="box-widget fl-wrap">
                                    <div class="box-widget-content">
                                        <div class="search-widget">
                                            <form class="fl-wrap" action="<?= base_url() ?>index.php/search" method="GET">
                                                <input type="text" placeholder="Search" name="search" value="">

                                                <button class="search-submit color2-bg" id="submit_btn" type="submit"><i class="fal fa-search"></i> </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--box-widget-item end -->
                            <!--box-widget-item -->

                            <!--box-widget-item end -->
                            <!--box-widget-item -->
                            <div class="box-widget-item fl-wrap block_box">
                                <div class="box-widget-item-header">
                                    <h3>Product Categories</h3>
                                </div>
                                <div class="box-widget fl-wrap">
                                    <div class="box-widget-content">
                                        <?php foreach ($view_category as $class) { ?>
                                            <div class="box-widget-item fl-wrap block_box">
                                                <div class="box-widget-item-header">


                                                    <h3 style="margin: -9px 0px;">
                                                    <a href="<?php echo base_url(); ?>index.php/sign_up/category?category_id=<?php echo $class->category_id; ?>&category_name=<?= $class->category_name; ?>"><?php echo $class->category_name; ?></a> 
                                                </h3>
                                                </div>
                                                <div class="box-widget fl-wrap">
                                                    <div class="box-widget-content" style="padding: 12px 30 6px;">
                                                        <ul class="cat-item no-list-style">
                                                            <?php foreach ($category as $sub_category) { ?>

                                                                <?php if ($class->category_id == $sub_category->category_id) { ?>
                                                                    <li style="margin: 1px -3px;">
                                                                        <a href="<?php echo base_url(); ?>index.php/sign_up/sub_category?sub_category_id=<?php echo $sub_category->sub_category_id ?>&category_id=<?= $class->category_id; ?>&sub_category_name=<?= $sub_category->sub_category; ?>"><?php echo $sub_category->sub_category; ?></a> </li>
                                                                <?php } ?>



                                                            <?php } ?>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                            <!--box-widget-item end -->
                            <!--box-widget-item -->

                            <!--box-widget-item end -->
                            <!--box-widget-item -->
                            <!-- <div class="box-widget-item fl-wrap block_box">
                                                <div class="box-widget-item-header">
                                                    <h3>Product Tags</h3>
                                                </div>
                                                <div class="box-widget fl-wrap">
                                                    <div class="box-widget-content">
                                                        <div class="list-single-tags tags-stylwrap">
                                                            <a href="#">Market</a>
                                                            <a href="#">Hot</a>
                                                            <a href="#">Drinks</a>
                                                            <a href="#">Coffee</a>
                                                            <a href="#">Restourant</a>                                                                             
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> -->
                            <!--box-widget-item end -->
                        </div>
                    </div>
                    <!-- list-single-sidebar end -->
                </div>
            </div>
        </section>
        <div class="limit-box fl-wrap"></div>
    </div>
    <!--content end-->
</div>
<!-- wrapper end-->
<!--footer -->
<footer class="main-footer fl-wrap">
    <!-- footer-header-->

    <!-- footer-header end-->
    <!--footer-inner-->

    <!--footer-inner end -->
    <!--sub-footer-->
    <div class="sub-footer  fl-wrap">
        <div class="container">
            <div class="copyright"> © Townhub 2019 . All rights reserved.</div>
            <div class="lang-wrap">
                <div class="show-lang"><span><i class="fal fa-globe-europe"></i><strong>En</strong></span><i class="fa fa-caret-down arrlan"></i></div>
                <ul class="lang-tooltip lang-action no-list-style">
                    <li><a href="#" class="current-lan" data-lantext="En">English</a></li>
                    <li><a href="#" data-lantext="Fr">Français</a></li>
                    <li><a href="#" data-lantext="Es">Español</a></li>
                    <li><a href="#" data-lantext="De">Deutsch</a></li>
                </ul>
            </div>
            <div class="subfooter-nav">
                <ul class="no-list-style">
                    <li><a href="#">Terms of use</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Blog</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!--sub-footer end -->
</footer>
<!--footer end -->
<!--register form -->
<div class="main-register-wrap modal">
    <div class="reg-overlay"></div>
    <div class="main-register-holder tabs-act">
        <div class="main-register fl-wrap  modal_main">
            <div class="main-register_title">Welcome to <span><strong>Town</strong>Hub<strong>.</strong></span></div>
            <div class="close-reg"><i class="fal fa-times" style="margin: 16px 3px;"></i></div>
            
            <ul class="tabs-menu fl-wrap no-list-style">
                <li class="current"><a href="#tab-1"><i class="fal fa-sign-in-alt"></i>Login</a></li>
                <li><a href="#tab-2"><i class="fal fa-user-plus"></i>Sign Up</a></li>
            </ul>
            <!--tabs -->
            <div class="tabs-container">
                <div class="tab">
                    <!--tab -->

                    <div class="tab">
                                    <div id="tab-1" class="tab-content first-tab">
                                        <div class="custom-form">
                                            <form method="post" action="<?= base_url(); ?>index.php/individual" class="main-register-form" id="main-register-form2">
                                                <div class="filter-tags ft-list">
            
            
                                                </div>
                                                <!-- <label>Full Name <span>*</span> </label>
                                                <input name="name" type="text" onclick="this.select()" value=""> -->
            
                                                <label><?php echo form_error('name'); ?> <span></span> </label>
            
                                                <label>Email Address <span>*</span></label>
                                                <input name="email" type="text" onclick="this.select()" value="">
                                                <label><?php echo form_error('email'); ?> <span></span> </label>
                                                <label>Password <span>*</span></label>
                                                <input name="password" type="password" onclick="this.select()" value="">
                                                <label><?php echo form_error('password'); ?> <span></span> </label>
                                                <div class="clearfix"></div>
            
                                                <div class="clearfix"></div>
                                                <button type="submit" class="btn float-btn color2-bg"> Login <i class="fas fa-caret-right"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>


                    <div id="tab-2" class="tab-content ">
                        <div class="custom-form">
                            <form method="post" action="<?= base_url(); ?>index.php/home" class="main-register-form" id="main-register-form2">
                                <div class="filter-tags ft-list">
                                    <!-- <input id="check-a2" type="radio" checked value="individual" name="check"> -->
                                    <!-- <label for="check-a2">Individual</label> -->
                                    <input id="check-a2" type="radio" checked value="0" name="check">
                                    <label for="check-a2">Individual</label>
                                    <input id="check-a2" type="radio"  value="1" name="check">
                                    <label for="check-a2">Company</label>

                                </div>
                                <label>Full Name <span>*</span> </label>
                                <input name="name" type="text" onclick="this.select()" value="">

                                <label><?php echo form_error('name'); ?> <span></span> </label>

                                <label>Email Address <span>*</span></label>
                                <input name="email" type="text" onclick="this.select()" value="">
                                <label><?php echo form_error('email'); ?> <span></span> </label>
                                <label>Password <span>*</span></label>
                                <input name="password" type="password" onclick="this.select()" value="">
                                <label><?php echo form_error('password'); ?> <span></span> </label>
                                <div class="clearfix"></div>

                                <div class="clearfix"></div>
                                <button type="submit" class="btn float-btn color2-bg"> Sign Up <i class="fas fa-caret-right"></i></button>
                            </form>
                            <div class="lost_password">
                                <!-- <a href="#">Lost Your Password?</a> -->
                            </div>
                        </div>
                    </div>
                    <!--tab end -->
                  
                    <!--tab -->
                    <!--tab end -->
                </div>
                <!--tabs end -->


                <div class="wave-bg">
                    <div class="wave -one"></div>
                    <div class="wave -two"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--register form end -->
<a class="to-top"><i class="fas fa-caret-up"></i></a>
<!--chat-widget -->


<!--chat-widget end -->
</div>
<!-- Main end -->
<!--=============== scripts  ===============-->
<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins.js"></script>
<script src="<?php echo base_url(); ?>assets/js/scripts.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwJSRi0zFjDemECmFl9JtRj1FY7TiTRRo&amp;libraries=places&amp;callback=initAutocomplete"></script>
<script src="<?php echo base_url(); ?>assets/js/map-single.js"></script>


<!-- Mirrored from townhub.kwst.net/listing-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 08 Feb 2020 16:50:15 GMT -->
<div class="pac-container pac-logo" style="display: none; width: 256px; position: absolute; left: 388px; top: 170px;"></div>
</body>

</html>