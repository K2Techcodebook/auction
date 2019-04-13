     <!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
 <title>@yield('title') - {{config('app.name')}}</title>
    <meta name="description" content=" ">
     <meta name="Author" content=" ">
<meta name="keywords" content=" " />
<meta name="author" content="metatags generator">
<meta name="robots" content="index, follow">
<meta name="revisit-after" content="3 days">
          <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap core CSS -->
   <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/fonts/fontawesome-webfont.woff2"> -->

    <!-- Styles -->
   <link href="{{ asset('home/css/all.css') }}" rel="stylesheet">
    <!-- Scripts -->


  </head>
    <body>
    <!-- HEADER -->
    <div class="header-wrap">
        <header>
            <!-- LOGO -->
            <a href="{{ url('/') }}">
                <figure class="logo">
                    <img src="images/logo.png" alt="logo">
                </figure>
            </a>
            <!-- /LOGO -->

            <!-- MOBILE MENU HANDLER -->
            <div class="mobile-menu-handler left primary">
                <img src="images/pull-icon.png" alt="pull-icon">
            </div>
            <!-- /MOBILE MENU HANDLER -->

            <!-- LOGO MOBILE -->
            <a href="{{ url('/') }}">
                <figure class="logo-mobile">
                    <img src="images/logo_mobile.png" alt="logo-mobile">
                </figure>
            </a>
            <!-- /LOGO MOBILE -->

            <!-- MOBILE ACCOUNT OPTIONS HANDLER -->
            <div class="mobile-account-options-handler right secondary">
                <span class="icon-user"></span>
            </div>
            <!-- /MOBILE ACCOUNT OPTIONS HANDLER -->

            <!-- USER BOARD -->
            <div class="user-board">
            @auth


                <!-- USER QUICKVIEW -->
                <div class="user-quickview">
                    <!-- USER AVATAR -->
                    <a href="author-profile.html">
                    <div class="outer-ring">
                        <div class="inner-ring"></div>
                        <figure class="user-avatar">
                            <img src="images/avatars/avatar_01.jpg" alt="avatar">
                        </figure>
                    </div>
                    </a>
                    <!-- /USER AVATAR -->

                    <!-- USER INFORMATION -->
                    <p class="user-name">{{ Auth::user()->username }}</p>
                    <!-- SVG ARROW -->
                    <svg class="svg-arrow">
                        <use xlink:href="#svg-arrow"></use>
                    </svg>
                    <!-- /SVG ARROW -->
                    <p class="user-money">{{ Auth::user()->token_balance }}</p>
                    <!-- /USER INFORMATION -->

                    <!-- DROPDOWN -->
                    <ul class="dropdown small hover-effect closed">
                        <li class="dropdown-item">
                            <div class="dropdown-triangle"></div>
                            <a href="{{route('profile') }}">Profile Page</a>
                        </li>
                              @if(checkPermission(['user']))
                        <li class="dropdown-item">
                            <a href="dashboard-settings.html">Account Settings</a>
                        </li>
                        <li class="dropdown-item">
                            <a href="dashboard-purchases.html">Your Purchases</a>
                        </li>
                        <li class="dropdown-item">
                            <a href="dashboard-statement.html">Sales Statement</a>
                        </li>
                            @elseif(checkPermission(['admin']))
                        <li class="dropdown-item">
                            <a href="{{route('Category') }}">Create Category</a>
                        </li>
                        <li class="dropdown-item">
                            <a href="dashboard-withdrawals.html">Withdrawals</a>
                        </li>
                        @elseif(checkPermission(['superadmin']))
                      <li class="dropdown-item">
                            <a href="{{route('add-items')}}">Upload Item</a>
                        </li>
                        <li class="dropdown-item">
                            <a href="{{route('manage-items')}}">Manage Items</a>
                        </li>
                        <li class="dropdown-item">
                            <a href="{{route('logout') }}" class="button secondary">Logout</a>
                        </li>
                        @else
                        I don't have any records!
                    @endif
                    </ul>
                    <!-- /DROPDOWN -->
                </div>
                <!-- /USER QUICKVIEW -->

            @endauth


@unless (Auth::check())
<div class="account-actions">
    <a href="{{ route('register') }}" class="button primary">Register</a>
    <a href="{{ route('login') }}" class="button secondary">Login</a>
</div>


@endunless
    </div>
            <!-- /USER BOARD -->
        </header>
    </div>
    <!-- /HEADER -->

    <!-- SIDE MENU -->
    <div id="mobile-menu" class="side-menu left closed">
        <!-- SVG PLUS -->
        <svg class="svg-plus">
            <use xlink:href="#svg-plus"></use>
        </svg>
        <!-- /SVG PLUS -->

        <!-- SIDE MENU HEADER -->
        <div class="side-menu-header">
            <figure class="logo small">
                <img src="images/logo.png" alt="logo">
            </figure>
        </div>
        <!-- /SIDE MENU HEADER -->

        <!-- SIDE MENU TITLE -->
        <p class="side-menu-title">Main Links</p>
        <!-- /SIDE MENU TITLE -->

        <!-- DROPDOWN -->
        <ul class="dropdown dark hover-effect interactive">
            <!-- DROPDOWN ITEM -->
            <li class="dropdown-item">
                <a href="{{ url('/') }}">Home</a>
            </li>
            <!-- /DROPDOWN ITEM -->

            <!-- DROPDOWN ITEM -->
            <li class="dropdown-item">
                <a href="how-to-shop.html">How to Shop</a>
            </li>
            <!-- /DROPDOWN ITEM -->

            <!-- DROPDOWN ITEM -->
            <li class="dropdown-item">
                <a href="products.html">Products</a>
            </li>
            <!-- /DROPDOWN ITEM -->

            <!-- DROPDOWN ITEM -->
            <li class="dropdown-item">
                <a href="services.html">Services</a>
            </li>
            <!-- /DROPDOWN ITEM -->

            <!-- DROPDOWN ITEM -->
            <li class="dropdown-item">
                <a href="shop-gridview-v1.html">Online Goods</a>
            </li>
            <!-- /DROPDOWN ITEM -->

            <!-- DROPDOWN ITEM -->
            <li class="dropdown-item interactive">
                <a href="#">
                    Features
                    <!-- SVG ARROW -->
                    <svg class="svg-arrow">
                        <use xlink:href="#svg-arrow"></use>
                    </svg>
                    <!-- /SVG ARROW -->
                </a>

                <!-- INNER DROPDOWN -->
                <ul class="inner-dropdown">
                    <!-- INNER DROPDOWN ITEM -->
                    <li class="inner-dropdown-item">
                        <p>Emerald Dragon</p>
                    </li>
                    <!-- /INNER DROPDOWN ITEM -->

                    <!-- INNER DROPDOWN ITEM -->
                    <li class="inner-dropdown-item">
                        <a href="{{ url('/') }}">Homepage V1</a>
                    </li>
                    <!-- /INNER DROPDOWN ITEM -->

                    <!-- INNER DROPDOWN ITEM -->
                    <li class="inner-dropdown-item">
                        <a href="home-v2.html">Homepage V2</a>
                    </li>
                    <!-- /INNER DROPDOWN ITEM -->

                    <!-- INNER DROPDOWN ITEM -->
                    <li class="inner-dropdown-item">
                        <a href="itemview-versions.html">Item View Versions</a>
                    </li>
                    <!-- /INNER DROPDOWN ITEM -->

                    <!-- INNER DROPDOWN ITEM -->
                    <li class="inner-dropdown-item">
                        <a href="shop-gridview-v1.html">Shop Grid View V1</a>
                    </li>
                    <!-- /INNER DROPDOWN ITEM -->

                    <!-- INNER DROPDOWN ITEM -->
                    <li class="inner-dropdown-item">
                        <a href="shop-gridview-v2.html">Shop Grid View V2</a>
                    </li>
                    <!-- /INNER DROPDOWN ITEM -->

                    <!-- INNER DROPDOWN ITEM -->
                    <li class="inner-dropdown-item">
                        <a href="shop-listview-v1.html">Shop List View V1</a>
                    </li>
                    <!-- /INNER DROPDOWN ITEM -->

                    <!-- INNER DROPDOWN ITEM -->
                    <li class="inner-dropdown-item">
                        <a href="shop-listview-v2.html">Shop List View V2</a>
                        <!-- PIN -->
                        <span class="pin soft-edged primary">hot</span>
                        <!-- /PIN -->
                    </li>
                    <!-- /INNER DROPDOWN ITEM -->

                    <!-- INNER DROPDOWN ITEM -->
                    <li class="inner-dropdown-item">
                        <a href="author-profile.html">Profile Page</a>
                    </li>
                    <!-- /INNER DROPDOWN ITEM -->

                    <!-- INNER DROPDOWN ITEM -->
                    <li class="inner-dropdown-item">
                        <a href="blog-v1.html">Blog Page V1</a>
                    </li>
                    <!-- /INNER DROPDOWN ITEM -->

                    <!-- INNER DROPDOWN ITEM -->
                    <li class="inner-dropdown-item">
                        <a href="blog-v2.html">Blog Page V2</a>
                    </li>
                    <!-- /INNER DROPDOWN ITEM -->

                    <!-- INNER DROPDOWN ITEM -->
                    <li class="inner-dropdown-item">
                        <a href="open-post.html">Open Post</a>
                    </li>
                    <!-- /INNER DROPDOWN ITEM -->

                    <!-- INNER DROPDOWN ITEM -->
                    <li class="inner-dropdown-item">
                        <a href="forum.html">Forum Board</a>
                    </li>
                    <!-- /INNER DROPDOWN ITEM -->

                    <!-- INNER DROPDOWN ITEM -->
                    <li class="inner-dropdown-item">
                        <a href="subforum.html">Subforum</a>
                    </li>
                    <!-- /INNER DROPDOWN ITEM -->

                    <!-- INNER DROPDOWN ITEM -->
                    <li class="inner-dropdown-item">
                        <a href="open-topic.html">Open Topic</a>
                    </li>
                    <!-- /INNER DROPDOWN ITEM -->

                    <!-- INNER DROPDOWN ITEM -->
                    <li class="inner-dropdown-item">
                        <a href="login-register.html">Login and Register</a>
                    </li>
                    <!-- /INNER DROPDOWN ITEM -->

                    <!-- INNER DROPDOWN ITEM -->
                    <li class="inner-dropdown-item">
                        <a href="menu-dropdowns.html">Menu and Dropdowns</a>
                    </li>
                    <!-- /INNER DROPDOWN ITEM -->

                    <!-- INNER DROPDOWN ITEM -->
                    <li class="inner-dropdown-item">
                        <p>Product Pages</p>
                    </li>
                    <!-- /INNER DROPDOWN ITEM -->

                    <!-- INNER DROPDOWN ITEM -->
                    <li class="inner-dropdown-item">
                        <a href="item-v1.html">Item Page V1</a>
                    </li>
                    <!-- /INNER DROPDOWN ITEM -->

                    <!-- INNER DROPDOWN ITEM -->
                    <li class="inner-dropdown-item">
                        <a href="item-v2.html">Item Page V2</a>
                        <!-- PIN -->
                        <span class="pin soft-edged secondary">new</span>
                        <!-- /PIN -->
                    </li>
                    <!-- /INNER DROPDOWN ITEM -->

                    <!-- INNER DROPDOWN ITEM -->
                    <li class="inner-dropdown-item">
                        <a href="product-page.html">Product Page</a>
                    </li>
                    <!-- /INNER DROPDOWN ITEM -->

                    <!-- INNER DROPDOWN ITEM -->
                    <li class="inner-dropdown-item">
                        <a href="auction-page.html">Auction Page</a>
                    </li>
                    <!-- /INNER DROPDOWN ITEM -->

                    <!-- INNER DROPDOWN ITEM -->
                    <li class="inner-dropdown-item">
                        <a href="service-page.html">Service Page</a>
                    </li>
                    <!-- /INNER DROPDOWN ITEM -->

                    <!-- INNER DROPDOWN ITEM -->
                    <li class="inner-dropdown-item">
                        <a href="favourites.html">Favourite Products Grid View</a>
                    </li>
                    <!-- /INNER DROPDOWN ITEM -->

                    <!-- INNER DROPDOWN ITEM -->
                    <li class="inner-dropdown-item">
                        <a href="favourites-listview.html">Favourite Products List View</a>
                    </li>
                    <!-- /INNER DROPDOWN ITEM -->

                    <!-- INNER DROPDOWN ITEM -->
                    <li class="inner-dropdown-item">
                        <a href="alerts-notifications.html">Alerts &amp; Notifications</a>
                        <!-- PIN -->
                        <span class="pin soft-edged violet">new</span>
                        <!-- /PIN -->
                    </li>
                    <!-- /INNER DROPDOWN ITEM -->

                    <!-- INNER DROPDOWN ITEM -->
                    <li class="inner-dropdown-item">
                        <p>Dashboard</p>
                    </li>
                    <!-- /INNER DROPDOWN ITEM -->

                    <!-- INNER DROPDOWN ITEM -->
                    <li class="inner-dropdown-item">
                        <a href="dashboard-settings.html">Account Settings</a>
                    </li>
                    <!-- /INNER DROPDOWN ITEM -->

                    <!-- INNER DROPDOWN ITEM -->
                    <li class="inner-dropdown-item">
                        <a href="dashboard-statistics.html">Statistics Page</a>
                    </li>
                    <!-- /INNER DROPDOWN ITEM -->

                    <!-- INNER DROPDOWN ITEM -->
                    <li class="inner-dropdown-item">
                        <a href="dashboard-statement.html">Sales Statement</a>
                    </li>
                    <!-- /INNER DROPDOWN ITEM -->

                    <!-- INNER DROPDOWN ITEM -->
                    <li class="inner-dropdown-item">
                        <a href="dashboard-inbox.html">Inbox Page</a>
                    </li>
                    <!-- /INNER DROPDOWN ITEM -->

                    <!-- INNER DROPDOWN ITEM -->
                    <li class="inner-dropdown-item">
                        <a href="dashboard-openmessage.html">Open Message</a>
                    </li>
                    <!-- /INNER DROPDOWN ITEM -->

                    <!-- INNER DROPDOWN ITEM -->
                    <li class="inner-dropdown-item">
                        <a href="dashboard-uploaditem.html">Upload Page</a>
                    </li>
                    <!-- /INNER DROPDOWN ITEM -->

                    <!-- INNER DROPDOWN ITEM -->
                    <li class="inner-dropdown-item">
                        <p>Gamification</p>
                    </li>
                    <!-- /INNER DROPDOWN ITEM -->

                    <!-- INNER DROPDOWN ITEM -->
                    <li class="inner-dropdown-item">
                        <a href="community-badges.html">Author Badges Page</a>
                    </li>
                    <!-- /INNER DROPDOWN ITEM -->

                    <!-- INNER DROPDOWN ITEM -->
                    <li class="inner-dropdown-item">
                        <a href="badges.html">All Badges (Big and Small)</a>
                    </li>
                    <!-- /INNER DROPDOWN ITEM -->

                    <!-- INNER DROPDOWN ITEM -->
                    <li class="inner-dropdown-item">
                        <a href="flag-badges.html">Flag Badges (Big and Small)</a>
                    </li>
                    <!-- /INNER DROPDOWN ITEM -->

                    <!-- INNER DROPDOWN ITEM -->
                    <li class="inner-dropdown-item">
                        <a href="badges-boxes.html">Badge Boxes Versions</a>
                    </li>
                    <!-- /INNER DROPDOWN ITEM -->

                    <!-- INNER DROPDOWN ITEM -->
                    <li class="inner-dropdown-item">
                        <a href="author-badges.html">Public Author Badges</a>
                    </li>
                    <!-- /INNER DROPDOWN ITEM -->
                </ul>
                <!-- /INNER DROPDOWN -->
            </li>
            <!-- /DROPDOWN ITEM -->
        </ul>
        <!-- /DROPDOWN -->
    </div>
    <!-- /SIDE MENU -->
    @auth

    <!-- SIDE MENU -->
    <div id="account-options-menu" class="side-menu right closed">
        <!-- SVG PLUS -->
        <svg class="svg-plus">
            <use xlink:href="#svg-plus"></use>
        </svg>
        <!-- /SVG PLUS -->

        <!-- SIDE MENU HEADER -->
        <div class="side-menu-header">
            <!-- USER QUICKVIEW -->
            <div class="user-quickview">
                <!-- USER AVATAR -->
                <a href="author-profile.html">
                <div class="outer-ring">
                    <div class="inner-ring"></div>
                    <figure class="user-avatar">
                        <img src="images/avatars/avatar_01.jpg" alt="avatar">
                    </figure>
                </div>
                </a>
                <!-- /USER AVATAR -->

                <!-- USER INFORMATION -->
                <p class="user-name">{{ Auth::user()->username }}</p>
                <p class="user-money">{{ Auth::user()->token_balance }}</p>
                <!-- /USER INFORMATION -->
            </div>
            <!-- /USER QUICKVIEW -->
        </div>
        <!-- /SIDE MENU HEADER --> 


        <!-- SIDE MENU TITLE -->
        <p class="side-menu-title">Your Account</p>
        <!-- /SIDE MENU TITLE -->


        <!-- SIDE MENU TITLE -->
        <p class="side-menu-title">Dashboard</p>
        <!-- /SIDE MENU TITLE -->

        <!-- DROPDOWN -->
        <ul class="dropdown dark hover-effect">
            <!-- DROPDOWN ITEM -->
            <li class="dropdown-item">
                <a href="author-profile.html">Profile Page</a>
            </li>
            <!-- /DROPDOWN ITEM -->
    @if(checkPermission(['user']))
            <!-- DROPDOWN ITEM -->
            <li class="dropdown-item">
                <a href="dashboard-settings.html">Account Settings</a>
            </li>
            <!-- /DROPDOWN ITEM -->

            <!-- DROPDOWN ITEM -->
            <li class="dropdown-item">
                <a href="dashboard-purchases.html">Your Purchases</a>
            </li>
            <!-- /DROPDOWN ITEM -->

            <!-- DROPDOWN ITEM -->
            <li class="dropdown-item">
                <a href="dashboard-statement.html">Sales Statement</a>
            </li>
            <!-- /DROPDOWN ITEM -->
            @elseif(checkPermission(['admin']))
            <!-- DROPDOWN ITEM -->
            <li class="dropdown-item">
            <a href="{{route('Category') }}">Create Category</a>
            </li>
            <!-- /DROPDOWN ITEM -->

            <!-- DROPDOWN ITEM -->
            <li class="dropdown-item">
                <a href="dashboard-withdrawals.html">Withdrawals</a>
            </li>
            <!-- /DROPDOWN ITEM -->
      @elseif(checkPermission(['superadmin']))
            <!-- DROPDOWN ITEM -->
            <li class="dropdown-item">
                <a href="dashboard-uploaditem.html">Upload Item</a>
            </li>
            <!-- /DROPDOWN ITEM -->

            <!-- DROPDOWN ITEM -->
            <li class="dropdown-item">
                <a href="dashboard-manageitems.html">Manage Items</a>
            </li>
            <!-- /DROPDOWN ITEM -->
            @else
            I don't have any records!
        @endif
        </ul>
        <!-- /DROPDOWN -->

        <a href="#" class="button medium secondary">Logout</a>
        <a href="#" class="button medium primary">Become a Seller</a>
    </div>
    <!-- /SIDE MENU -->

@endauth

    <!-- MAIN MENU -->
    <div class="main-menu-wrap">
        <div class="menu-bar">


