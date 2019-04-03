@extends('layouts.site')

@section('title') Update Profile @endsection

@section('content')
    <!-- AUTHOR PROFILE BANNER -->
    <div class="author-profile-banner"></div>
    <!-- /AUTHOR PROFILE BANNER -->
 <!-- AUTHOR PROFILE META -->
    <div class="author-profile-meta-wrap">
        <div class="author-profile-meta">
            <!-- AUTHOR PROFILE INFO -->
            <div class="author-profile-info">
                <!-- AUTHOR PROFILE INFO ITEM -->
                <div class="author-profile-info-item">
                    <p class="text-header">Member Since:</p>
                    <p>December 26th, 2013</p>
                </div>
                <!-- /AUTHOR PROFILE INFO ITEM -->

                <!-- AUTHOR PROFILE INFO ITEM -->
                <div class="author-profile-info-item">
                    <p class="text-header">Total Sales:</p>
                    <p>820</p>
                </div>
                <!-- /AUTHOR PROFILE INFO ITEM -->

                <!-- AUTHOR PROFILE INFO ITEM -->
                <div class="author-profile-info-item">
                    <p class="text-header">Freelance Work:</p>
                    <p>Available</p>
                </div>
                <!-- /AUTHOR PROFILE INFO ITEM -->

                <!-- AUTHOR PROFILE INFO ITEM -->
                <div class="author-profile-info-item">
                    <p class="text-header">Website:</p>
                    <p><a href="http://www.odindesign-themes.com/" class="primary">www.odindesign-themes.com</a></p>
                </div>
                <!-- /AUTHOR PROFILE INFO ITEM -->
            </div>
            <!-- /AUTHOR PROFILE INFO -->
        </div>
    </div>
    <!-- /AUTHOR PROFILE META -->

    <!-- SECTION -->
    <div class="section-wrap">
        <div class="section overflowable">
            <!-- SIDEBAR -->
            <div class="sidebar left author-profile">
                <!-- SIDEBAR ITEM -->
                <div class="sidebar-item author-bio">
                    <!-- USER AVATAR -->
                    <a href="user-profile.html" class="user-avatar-wrap medium">
                        <figure class="user-avatar medium">
                            <img src="images/avatars/avatar_09.jpg" alt="">
                        </figure>
                    </a>
                    <!-- /USER AVATAR -->
                    <p class="text-header">Odin_Design</p>
                    <p class="text-oneline">Super Samurai Developers<br>Los Angeles, Usa</p>
                    <!-- SHARE LINKS -->
                    <ul class="share-links">
                        <li><a href="#" class="fb"></a></li>
                        <li><a href="#" class="twt"></a></li>
                        <li><a href="#" class="db"></a></li>
                    </ul>
                    <!-- /SHARE LINKS -->
                    <a href="#" class="button mid dark spaced">Add to <span class="primary">Followers</span></a>
                    <a href="#" class="button mid dark-light">Send a Private Message</a>
                </div>
                <!-- /SIDEBAR ITEM -->

                <!-- DROPDOWN -->
                <ul class="dropdown hover-effect">
                    <li class="dropdown-item active">
                        <a href="author-profile.html">Profile Page</a>
                    </li>
                    <li class="dropdown-item">
                        <a href="author-profile-items.html">Author's Items (103)</a>
                    </li>
                    <li class="dropdown-item">
                        <a href="author-profile-messages.html">Message Board</a>
                    </li>
                    <li class="dropdown-item">
                        <a href="author-profile-reviews.html">Customer Reviews (42)</a>
                    </li>
                    <li class="dropdown-item">
                        <a href="author-profile-followers.html">Followers (5)</a>
                    </li>
                    <li class="dropdown-item">
                        <a href="author-profile-following.html">Following (2)</a>
                    </li>
                    <li class="dropdown-item">
                        <a href="author-badges.html">Author Badges (16)</a>
                    </li>
                </ul>
                <!-- /DROPDOWN -->

                <!-- SIDEBAR ITEM -->
                <div class="sidebar-item author-reputation full">
                    <h4>Author's Reputation</h4>
                    <hr class="line-separator">
                    <!-- PIE CHART -->
                    <div class="pie-chart pie-chart1">
                        <p class="text-header percent">86<span>%</span></p>
                        <p class="text-header percent-info">Recommended</p>
                        <!-- RATING -->
                        <ul class="rating">
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item empty">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                        </ul>
                        <!-- /RATING -->
                    </div>
                    <!-- /PIE CHART -->
                    <a href="#" class="button mid dark-light">Read all the Customer Reviews</a>
                </div>
                <!-- /SIDEBAR ITEM -->
            </div>
            <!-- /SIDEBAR -->

            <!-- CONTENT -->
            <div class="content right">
                <!-- HEADLINE -->
                <div class="headline buttons primary">
                    <h4>Latest Items</h4>
                    <a href="author-profile-items.html" class="button mid-short dark-light">See all the items</a>
                </div>
                <!-- /HEADLINE -->

                <!-- PRODUCT LIST -->
                <div class="product-list grid column3-4-wrap">
                    <!-- PRODUCT ITEM -->
                    <div class="product-item column">
                        <!-- PRODUCT PREVIEW ACTIONS -->
                        <div class="product-preview-actions">
                            <!-- PRODUCT PREVIEW IMAGE -->
                            <figure class="product-preview-image">
                                <img src="images/items/miniverse_m.jpg" alt="product-image">
                            </figure>
                            <!-- /PRODUCT PREVIEW IMAGE -->

                            <!-- PREVIEW ACTIONS -->
                            <div class="preview-actions">
                                <!-- PREVIEW ACTION -->
                                <div class="preview-action">
                                    <a href="item-v1.html">
                                        <div class="circle tiny primary">
                                            <span class="icon-tag"></span>
                                        </div>
                                    </a>
                                    <a href="item-v1.html">
                                        <p>Go to Item</p>
                                    </a>
                                </div>
                                <!-- /PREVIEW ACTION -->

                                <!-- PREVIEW ACTION -->
                                <div class="preview-action">
                                    <a href="#">
                                        <div class="circle tiny secondary">
                                            <span class="icon-heart"></span>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <p>Favourites +</p>
                                    </a>
                                </div>
                                <!-- /PREVIEW ACTION -->
                            </div>
                            <!-- /PREVIEW ACTIONS -->
                        </div>
                        <!-- /PRODUCT PREVIEW ACTIONS -->

                        <!-- PRODUCT INFO -->
                        <div class="product-info">
                            <a href="item-v1.html">
                                <p class="text-header">Miniverse - Hero Image Composer</p>
                            </a>
                            <p class="product-description">Lorem ipsum dolor sit urarde...</p>
                            <a href="shop-gridview-v1.html">
                                <p class="category primary">Hero Images</p>
                            </a>
                            <p class="price"><span>$</span>12</p>
                        </div>
                        <!-- /PRODUCT INFO -->
                        <hr class="line-separator">

                        <!-- USER RATING -->
                        <div class="user-rating">
                            <a href="author-profile.html">
                                <figure class="user-avatar small">
                                    <img src="images/avatars/avatar_09.jpg" alt="user-avatar">
                                </figure>
                            </a>
                            <a href="author-profile.html">
                                <p class="text-header tiny">Odin_Design</p>
                            </a>
                            <ul class="rating tooltip" title="Author's Reputation">
                                <li class="rating-item">
                                    <!-- SVG STAR -->
                                    <svg class="svg-star">
                                        <use xlink:href="#svg-star"></use>
                                    </svg>
                                    <!-- /SVG STAR -->
                                </li>
                                <li class="rating-item">
                                    <!-- SVG STAR -->
                                    <svg class="svg-star">
                                        <use xlink:href="#svg-star"></use>
                                    </svg>
                                    <!-- /SVG STAR -->
                                </li>
                                <li class="rating-item">
                                    <!-- SVG STAR -->
                                    <svg class="svg-star">
                                        <use xlink:href="#svg-star"></use>
                                    </svg>
                                    <!-- /SVG STAR -->
                                </li>
                                <li class="rating-item">
                                    <!-- SVG STAR -->
                                    <svg class="svg-star">
                                        <use xlink:href="#svg-star"></use>
                                    </svg>
                                    <!-- /SVG STAR -->
                                </li>
                                <li class="rating-item">
                                    <!-- SVG STAR -->
                                    <svg class="svg-star">
                                        <use xlink:href="#svg-star"></use>
                                    </svg>
                                    <!-- /SVG STAR -->
                                </li>
                            </ul>
                        </div>
                        <!-- /USER RATING -->
                    </div>
                    <!-- /PRODUCT ITEM -->

                    <!-- PRODUCT ITEM -->
                    <div class="product-item column">
                        <!-- PIN -->
                        <span class="pin featured">Featured</span>
                        <!-- /PIN -->

                        <!-- PRODUCT PREVIEW ACTIONS -->
                        <div class="product-preview-actions">
                            <!-- PRODUCT PREVIEW IMAGE -->
                            <figure class="product-preview-image">
                                <img src="images/items/flat_m.jpg" alt="product-image">
                            </figure>
                            <!-- /PRODUCT PREVIEW IMAGE -->

                            <!-- PREVIEW ACTIONS -->
                            <div class="preview-actions">
                                <!-- PREVIEW ACTION -->
                                <div class="preview-action">
                                    <a href="item-v1.html">
                                        <div class="circle tiny primary">
                                            <span class="icon-tag"></span>
                                        </div>
                                    </a>
                                    <a href="item-v1.html">
                                        <p>Go to Item</p>
                                    </a>
                                </div>
                                <!-- /PREVIEW ACTION -->

                                <!-- PREVIEW ACTION -->
                                <div class="preview-action">
                                    <a href="#">
                                        <div class="circle tiny secondary">
                                            <span class="icon-heart"></span>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <p>Favourites +</p>
                                    </a>
                                </div>
                                <!-- /PREVIEW ACTION -->
                            </div>
                            <!-- /PREVIEW ACTIONS -->
                        </div>
                        <!-- /PRODUCT PREVIEW ACTIONS -->

                        <!-- PRODUCT INFO -->
                        <div class="product-info">
                            <a href="item-v1.html">
                                <p class="text-header">Flatland - Hero Image Composer</p>
                            </a>
                            <p class="product-description">Lorem ipsum dolor sit urarde...</p>
                            <a href="shop-gridview-v1.html">
                                <p class="category primary">Hero Images</p>
                            </a>
                            <p class="price"><span>$</span>12</p>
                        </div>
                        <!-- /PRODUCT INFO -->
                        <hr class="line-separator">

                        <!-- USER RATING -->
                        <div class="user-rating">
                            <a href="author-profile.html">
                                <figure class="user-avatar small">
                                    <img src="images/avatars/avatar_09.jpg" alt="user-avatar">
                                </figure>
                            </a>
                            <a href="author-profile.html">
                                <p class="text-header tiny">Odin_Design</p>
                            </a>
                            <ul class="rating tooltip" title="Author's Reputation">
                                <li class="rating-item">
                                    <!-- SVG STAR -->
                                    <svg class="svg-star">
                                        <use xlink:href="#svg-star"></use>
                                    </svg>
                                    <!-- /SVG STAR -->
                                </li>
                                <li class="rating-item">
                                    <!-- SVG STAR -->
                                    <svg class="svg-star">
                                        <use xlink:href="#svg-star"></use>
                                    </svg>
                                    <!-- /SVG STAR -->
                                </li>
                                <li class="rating-item">
                                    <!-- SVG STAR -->
                                    <svg class="svg-star">
                                        <use xlink:href="#svg-star"></use>
                                    </svg>
                                    <!-- /SVG STAR -->
                                </li>
                                <li class="rating-item">
                                    <!-- SVG STAR -->
                                    <svg class="svg-star">
                                        <use xlink:href="#svg-star"></use>
                                    </svg>
                                    <!-- /SVG STAR -->
                                </li>
                                <li class="rating-item">
                                    <!-- SVG STAR -->
                                    <svg class="svg-star">
                                        <use xlink:href="#svg-star"></use>
                                    </svg>
                                    <!-- /SVG STAR -->
                                </li>
                            </ul>
                        </div>
                        <!-- /USER RATING -->
                    </div>
                    <!-- /PRODUCT ITEM -->

                    <!-- PRODUCT ITEM -->
                    <div class="product-item column">
                        <!-- PRODUCT PREVIEW ACTIONS -->
                        <div class="product-preview-actions">
                            <!-- PRODUCT PREVIEW IMAGE -->
                            <figure class="product-preview-image">
                                <img src="images/items/phantom_m.jpg" alt="product-image">
                            </figure>
                            <!-- /PRODUCT PREVIEW IMAGE -->

                            <!-- PREVIEW ACTIONS -->
                            <div class="preview-actions">
                                <!-- PREVIEW ACTION -->
                                <div class="preview-action">
                                    <a href="item-v1.html">
                                        <div class="circle tiny primary">
                                            <span class="icon-tag"></span>
                                        </div>
                                    </a>
                                    <a href="item-v1.html">
                                        <p>Go to Item</p>
                                    </a>
                                </div>
                                <!-- /PREVIEW ACTION -->

                                <!-- PREVIEW ACTION -->
                                <div class="preview-action">
                                    <a href="#">
                                        <div class="circle tiny secondary">
                                            <span class="icon-heart"></span>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <p>Favourites +</p>
                                    </a>
                                </div>
                                <!-- /PREVIEW ACTION -->
                            </div>
                            <!-- /PREVIEW ACTIONS -->
                        </div>
                        <!-- /PRODUCT PREVIEW ACTIONS -->

                        <!-- PRODUCT INFO -->
                        <div class="product-info">
                            <a href="item-v1.html">
                                <p class="text-header">Phantom Cloud Illustration Shop</p>
                            </a>
                            <p class="product-description">Lorem ipsum dolor sit urarde...</p>
                            <a href="shop-gridview-v1.html">
                                <p class="category primary">PSD Templates</p>
                            </a>
                            <p class="price"><span>$</span>14</p>
                        </div>
                        <!-- /PRODUCT INFO -->
                        <hr class="line-separator">

                        <!-- USER RATING -->
                        <div class="user-rating">
                            <a href="author-profile.html">
                                <figure class="user-avatar small">
                                    <img src="images/avatars/avatar_09.jpg" alt="user-avatar">
                                </figure>
                            </a>
                            <a href="author-profile.html">
                                <p class="text-header tiny">Odin_Design</p>
                            </a>
                            <ul class="rating tooltip" title="Author's Reputation">
                                <li class="rating-item">
                                    <!-- SVG STAR -->
                                    <svg class="svg-star">
                                        <use xlink:href="#svg-star"></use>
                                    </svg>
                                    <!-- /SVG STAR -->
                                </li>
                                <li class="rating-item">
                                    <!-- SVG STAR -->
                                    <svg class="svg-star">
                                        <use xlink:href="#svg-star"></use>
                                    </svg>
                                    <!-- /SVG STAR -->
                                </li>
                                <li class="rating-item">
                                    <!-- SVG STAR -->
                                    <svg class="svg-star">
                                        <use xlink:href="#svg-star"></use>
                                    </svg>
                                    <!-- /SVG STAR -->
                                </li>
                                <li class="rating-item">
                                    <!-- SVG STAR -->
                                    <svg class="svg-star">
                                        <use xlink:href="#svg-star"></use>
                                    </svg>
                                    <!-- /SVG STAR -->
                                </li>
                                <li class="rating-item">
                                    <!-- SVG STAR -->
                                    <svg class="svg-star">
                                        <use xlink:href="#svg-star"></use>
                                    </svg>
                                    <!-- /SVG STAR -->
                                </li>
                            </ul>
                        </div>
                        <!-- /USER RATING -->
                    </div>
                    <!-- /PRODUCT ITEM -->
                </div>
                <!-- /PRODUCT LIST -->

                <div class="clearfix"></div>

                <!-- HEADLINE -->
                <div class="headline buttons primary">
                    <h4>Latest Messages</h4>
                    <a href="author-profile-messages.html" class="button mid-short dark-light">See all the Messages</a>
                </div>
                <!-- /HEADLINE -->

                <!-- COMMENTS -->
                <div class="comment-list">
                    <!-- COMMENT -->
                    <div class="comment-wrap">
                        <!-- USER AVATAR -->
                        <a href="user-profile.html">
                            <figure class="user-avatar medium">
                                <img src="images/avatars/avatar_02.jpg" alt="">
                            </figure>
                        </a>
                        <!-- /USER AVATAR -->
                        <div class="comment">
                            <p class="text-header">MeganV.</p>
                            <!-- PIN -->
                            <span class="pin greyed">Purchased</span>
                            <!-- /PIN -->
                            <p class="timestamp">5 Hours Ago</p>
                            <a href="#" class="report">Report</a>
                            <p>I’ve recently bought your theme and let me say it’s fantastic! I have a small question regarding the main files and how to install the theme. Could you help me? Thanks!</p>
                        </div>
                    </div>
                    <!-- /COMMENT -->

                    <!-- LINE SEPARATOR -->
                    <hr class="line-separator">
                    <!-- /LINE SEPARATOR -->

                    <!-- COMMENT -->
                    <div class="comment-wrap">
                        <!-- USER AVATAR -->
                        <a href="user-profile.html">
                            <figure class="user-avatar medium">
                                <img src="images/avatars/avatar_19.jpg" alt="">
                            </figure>
                        </a>
                        <!-- /USER AVATAR -->
                        <div class="comment">
                            <p class="text-header">Cloud Templates</p>
                            <p class="timestamp">8 Hours Ago</p>
                            <a href="#" class="report">Report</a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magnada. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                        </div>
                    </div>
                    <!-- /COMMENT -->
                </div>
                <!-- /COMMENTS -->
            </div>
            <!-- CONTENT -->

            <div class="clearfix"></div>
        </div>
    </div>
    <!-- /SECTION -->


  @endsection


  @section ('footer')


@endsection
