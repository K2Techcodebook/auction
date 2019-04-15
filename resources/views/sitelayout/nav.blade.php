	<nav>
				<ul class="main-menu">
					<!-- MENU ITEM -->
					<li class="menu-item">
						<a href="{{ url('/') }}">Home</a>
					</li>
					<!-- /MENU ITEM -->

				<!-- MENU ITEM -->
					<li class="menu-item sub">
						<a href="#">
							Categories
							<!-- SVG ARROW -->
							<svg class="svg-arrow">
								<use xlink:href="#svg-arrow"></use>
							</svg>
							<!-- /SVG ARROW -->
						</a>
						<div class="content-dropdown">
							<!-- FEATURE LIST BLOCK -->
							<div class="feature-list-block">
								<!-- <h6 class="feature-list-title">Emerald Dragon</h6>
								<hr class="line-separator"> -->

							@include('layouts.navlist')

							</div>
							<!-- /FEATURE LIST BLOCK -->


						</div>
					</li>
					<!-- /MENU ITEM -->
				</ul>
			</nav>

			<form class="search-form">
				<input type="text" class="rounded" name="search" id="search_products" placeholder="Search products here...">
				<input type="image" src="images/search-icon.png" alt="search-icon">
			</form>

    </div>
    </div>
    <!-- /MAIN MENU -->

    	<!-- SECTION HEADLINE -->
	<div class="section-headline-wrap">
		<div class="section-headline">
			<h2>@yield('title') -     @auth {{ Auth::user()->username }}     @endauth</h2>
			<p>Home<span class="separator">/</span><span class="current-section">@yield('title') </span></p>
		</div>
	</div>
	<!-- /SECTION HEADLINE -->
