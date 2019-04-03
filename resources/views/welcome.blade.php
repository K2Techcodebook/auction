@include('sitelayout.header')

 @include('sitelayout.nav')
   @yield('content')
 

    <!-- BANNER -->
    <div class="banner-wrap">
        <section class="banner">
            <h5>Welcome to</h5>
            <h1>The Biggest <span>Marketplace</span></h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
            <img src="images/top_items.png" alt="banner-img">

            <!-- SEARCH WIDGET -->
            <div class="search-widget">
                <form class="search-widget-form">
                    <input type="text" name="category_name" placeholder="Search goods or services here...">
                    <label for="categories" class="select-block">
                        <select name="categories" id="categories">
                            <option value="0">All Categories</option>
                            <option value="1">PSD Templates</option>
                            <option value="2">Hero Images</option>
                            <option value="3">Shopify</option>
                            <option value="4">Icon Packs</option>
                            <option value="5">Graphics</option>
                            <option value="6">Flyers</option>
                            <option value="7">Backgrounds</option>
                            <option value="8">Social Covers</option>
                        </select>
                        <!-- SVG ARROW -->
                        <svg class="svg-arrow">
                            <use xlink:href="#svg-arrow"></use>
                        </svg>
                        <!-- /SVG ARROW -->
                    </label>
                    <button class="button medium dark">Search Now!</button>
                </form>
            </div>
            <!-- /SEARCH WIDGET -->
        </section>
    </div>
    <!-- /BANNER -->

    <!-- SERVICES -->
    <div id="services-wrap">
        <section id="services">
            <!-- SERVICE LIST -->
            <div class="service-list column4-wrap">
                <!-- SERVICE ITEM -->
                <div class="service-item column">
                    <div class="circle medium gradient"></div>
                    <div class="circle white-cover"></div>
                    <div class="circle dark">
                        <span class="icon-present"></span>
                    </div>
                    <h3>Buy &amp; Sell Easily</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur sicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                <!-- /SERVICE ITEM -->

                <!-- SERVICE ITEM -->
                <div class="service-item column">
                    <div class="circle medium gradient"></div>
                    <div class="circle white-cover"></div>
                    <div class="circle dark">
                        <span class="icon-lock"></span>
                    </div>
                    <h3>Secure Transaction</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur sicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                <!-- /SERVICE ITEM -->

                <!-- SERVICE ITEM -->
                <div class="service-item column">
                    <div class="circle medium gradient"></div>
                    <div class="circle white-cover"></div>
                    <div class="circle dark">
                        <span class="icon-like"></span>
                    </div>
                    <h3>Products Control</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur sicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                <!-- /SERVICE ITEM -->

                <!-- SERVICE ITEM -->
                <div class="service-item column">
                    <div class="circle medium gradient"></div>
                    <div class="circle white-cover"></div>
                    <div class="circle dark">
                        <span class="icon-diamond"></span>
                    </div>
                    <h3>Quality Platform</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur sicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                <!-- /SERVICE ITEM -->
            </div>
            <!-- /SERVICE LIST -->
            <div class="clearfix"></div>
        </section>
    </div>
    <!-- /SERVICES -->

    <!-- PROMO -->
    <div class="promo-banner dark left">
        <span class="icon-wallet"></span>
        <h5>Make money instantly!</h5>
        <h1>Start <span>Selling</span></h1>
        <a href="#" class="button medium primary">Open Your Shop!</a>
    </div>
    <!-- /PROMO -->

    <!-- PROMO -->
    <div class="promo-banner secondary right">
        <span class="icon-tag"></span>
        <h5>Find anything you want</h5>
        <h1>Start Buying</h1>
        <a href="#" class="button medium dark">Register Now!</a>
    </div>
    <!-- /PROMO -->

    <div class="clearfix"></div>

    <!-- PRODUCT SIDESHOW -->
           @include('items')
    
            <!-- /PRODUCT SHOWCASE -->

          </div>

    

    <!-- SUBSCRIBE BANNER -->
    <div id="subscribe-banner-wrap">
        <div id="subscribe-banner">
            <!-- SUBSCRIBE CONTENT -->
            <div class="subscribe-content">
                <!-- SUBSCRIBE HEADER -->
                <div class="subscribe-header">
                    <figure>
                        <img src="images/news_icon.png" alt="subscribe-icon">
                    </figure>
                    <p class="subscribe-title">Subscribe to our Newsletter</p>
                    <p>And receive the latest news and offers</p>
                </div>
                <!-- /SUBSCRIBE HEADER -->

                <!-- SUBSCRIBE FORM -->
                <form class="subscribe-form">
                    <input type="text" name="subscribe_email" id="subscribe_email" placeholder="Enter your email here...">
                    <button class="button medium dark">Subscribe!</button>
                </form>
                <!-- /SUBSCRIBE FORM -->
            </div>
            <!-- /SUBSCRIBE CONTENT -->
        </div>
    </div>
    <!-- /SUBSCRIBE BANNER -->
      @yield('footer')


            @include('sitelayout.footer')

@include('sitelayout.footerscript')