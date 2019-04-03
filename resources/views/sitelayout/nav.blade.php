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
								<h6 class="feature-list-title">Emerald Dragon</h6>
								<hr class="line-separator">
								<!-- FEATURE LIST -->
								<ul class="feature-list">
									<!-- FEATURE LIST ITEM -->
									<li class="feature-list-item">
										<a href="{{ url('/') }}">Homepage V1</a>
									</li>
									<!-- /FEATURE LIST ITEM -->

									<!-- FEATURE LIST ITEM -->
									<li class="feature-list-item">
										<a href="home-v2.html">Homepage V2</a>
									</li>
									<!-- /FEATURE LIST ITEM -->

									<!-- FEATURE LIST ITEM -->
									<li class="feature-list-item">
										<a href="itemview-versions.html">Item View Versions</a>
									</li>
									<!-- /FEATURE LIST ITEM -->

									<!-- FEATURE LIST ITEM -->
									<li class="feature-list-item">
										<a href="shop-gridview-v1.html">Shop Grid View V1</a>
									</li>
									<!-- /FEATURE LIST ITEM -->

									<!-- FEATURE LIST ITEM -->
									<li class="feature-list-item">
										<a href="shop-gridview-v2.html">Shop Grid View V2</a>
									</li>
									<!-- /FEATURE LIST ITEM -->

									<!-- FEATURE LIST ITEM -->
									<li class="feature-list-item">
										<a href="shop-listview-v1.html">Shop List View V1</a>
									</li>
									<!-- /FEATURE LIST ITEM -->

									<!-- FEATURE LIST ITEM -->
									<li class="feature-list-item">
										<a href="shop-listview-v2.html">
											Shop List View V2
											<!-- PIN -->
											<span class="pin primary">hot</span>
											<!-- /PIN -->
										</a>
									</li>
									<!-- /FEATURE LIST ITEM -->

									<li class="feature-list-item">
										<a href="author-profile.html">Profile Page</a>
									</li>
									<!-- /FEATURE LIST ITEM -->
								</ul>
								<!-- /FEATURE LIST -->

								<!-- FEATURE LIST -->
								<ul class="feature-list">
									<!-- FEATURE LIST ITEM -->
									<li class="feature-list-item">
										<a href="blog-v1.html">Blog Page V1</a>
									</li>
									<!-- /FEATURE LIST ITEM -->

									<!-- FEATURE LIST ITEM -->
									<li class="feature-list-item">
										<a href="blog-v2.html">Blog Page V2</a>
									</li>
									<!-- /FEATURE LIST ITEM -->

									<!-- FEATURE LIST ITEM -->
									<li class="feature-list-item">
										<a href="open-post.html">Open Post</a>
									</li>
									<!-- /FEATURE LIST ITEM -->

									<!-- FEATURE LIST ITEM -->
									<li class="feature-list-item">
										<a href="forum.html">Forum Board</a>
									</li>
									<!-- /FEATURE LIST ITEM -->

									<!-- FEATURE LIST ITEM -->
									<li class="feature-list-item">
										<a href="subforum.html">Subforum</a>
									</li>
									<!-- /FEATURE LIST ITEM -->

									<!-- FEATURE LIST ITEM -->
									<li class="feature-list-item">
										<a href="open-topic.html">Open Topic</a>
									</li>
									<!-- /FEATURE LIST ITEM -->

									<!-- FEATURE LIST ITEM -->
									<li class="feature-list-item">
										<a href="login-register.html">Login and Register</a>
									</li>
									<!-- /FEATURE LIST ITEM -->

									<!-- FEATURE LIST ITEM -->
									<li class="feature-list-item">
										<a href="menu-dropdowns.html">Menu and Dropdowns</a>
									</li>
									<!-- /FEATURE LIST ITEM -->
								</ul>
								<!-- /FEATURE LIST -->
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

