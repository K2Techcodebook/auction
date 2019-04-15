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
                    <img src="{{URL::asset('images/logo.png')}}" alt="logo">
                </figure>
            </a>
            <!-- /LOGO -->

            <!-- MOBILE MENU HANDLER -->
            <div class="mobile-menu-handler left primary">
                <img src="{{URL::asset('images/pull-icon.png')}}" alt="pull-icon">
            </div>
            <!-- /MOBILE MENU HANDLER -->

            <!-- LOGO MOBILE -->
            <a href="{{ url('/') }}">
                <figure class="logo-mobile">
                    <img src="{{URL::asset('images/logo_mobile.png')}}" alt="logo-mobile">
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
                            <img src="{{URL::asset('images/avatars/avatar_01.jpg')}}" alt="avatar">
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
                              <a href="{{route('add-items')}}">Upload Item</a>
                          </li>
                          <li class="dropdown-item">
                              <a href="{{route('manage-items')}}">Manage Items</a>
                          </li>
                        @elseif(checkPermission(['superadmin']))

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
                <img src="{{URL::asset('images/logo.png')}}" alt="logo">
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
            <li class="dropdown-item interactive">
                <a href="#">
                  Category
                    <!-- SVG ARROW -->
                    <svg class="svg-arrow">
                        <use xlink:href="#svg-arrow"></use>
                    </svg>
                    <!-- /SVG ARROW -->
                </a>

                <!-- INNER DROPDOWN -->
                <ul class="inner-dropdown">
                    <!-- INNER DROPDOWN ITEM -->
                  	@include('layouts.navlist')
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
                        <img src="{{URL::asset('images/avatars/avatar_01.jpg')}}" alt="avatar">
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
