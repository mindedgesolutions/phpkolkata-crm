<nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega" role="navigation">
		
	<div class="navbar-header">
		<button type="button" class="navbar-toggler hamburger hamburger-close navbar-toggler-left hided"
			data-toggle="menubar">
			<span class="sr-only">Toggle navigation</span>
			<span class="hamburger-bar"></span>
		</button>
		<button type="button" class="navbar-toggler collapsed" data-target="#site-navbar-collapse"
			data-toggle="collapse">
			<i class="icon wb-more-horizontal" aria-hidden="true"></i>
		</button>
		<a href="{{ route('dashboard') }}">
				<div class="navbar-brand navbar-brand-center" data-toggle="gridmenu">
				<img class="navbar-brand-logo" src="{{ asset('backend/assets/images/logo.png') }}" title="CRM - PHPKolkata">
				<span class="navbar-brand-text hidden-xs-down font-weight-500"> CRM - PHPKolkata</span>
			</div>
		</a>
	</div>

	<div class="navbar-container container-fluid">
		<!-- Navbar Collapse -->
		<div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
			<!-- Navbar Toolbar -->
			<ul class="nav navbar-toolbar">
				<li class="nav-item hidden-float" id="toggleMenubar">
					<a class="nav-link" data-toggle="menubar" href="#" role="button">
						<i class="icon hamburger hamburger-arrow-left">
							<span class="sr-only">Toggle menubar</span>
							<span class="hamburger-bar"></span>
						</i>
					</a>
				</li>
			</ul>
			<!-- End Navbar Toolbar -->

			<!-- Navbar Toolbar Right -->
			<ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">
				<li class="nav-item mt-20">Welcome <span class="font-weight-500">{{ strtoupper(Auth::user()->name) }}</span></li>

				<li class="nav-item dropdown mr-40">
					<a class="nav-link navbar-avatar" data-toggle="dropdown" href="#" aria-expanded="false"
						data-animation="scale-up" role="button">
						<span class="avatar avatar-online">
							<img src="{{ asset('backend/global/portraits/5.jpg') }}" alt="...">
							<i></i>
						</span>
					</a>
					<div class="dropdown-menu" role="menu">
						<a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-user" aria-hidden="true"></i> Profile</a>
						<div class="dropdown-divider" role="presentation"></div>
						<a class="dropdown-item" href="{{ route('admin.logout') }}" role="menuitem"><i class="icon wb-power" aria-hidden="true"></i> Logout</a>
					</div>
				</li>
			</ul>
			<!-- End Navbar Toolbar Right -->
		</div>
		<!-- End Navbar Collapse -->
	</div>
</nav>