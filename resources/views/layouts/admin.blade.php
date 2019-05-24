<!DOCTYPE html>
<head>

<!-- Basic Page Needs
================================================== -->
<title>Dashboard | Post Manager</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->


 <!-- Bootstrap Core CSS -->
 {{-- <link href="{{asset('css/app.css')}}" rel="stylesheet"> --}}

 <link href="{{asset('css/libs.css')}}" rel="stylesheet">


        <meta name="description" content="Tag Invoice is a Cheapest online invoicing software system for small business, meduim and enterprise. Create and send invoices and accept online payments.">
        <meta name="author" content="Tag invoice">
        <meta name="keywords" content="online invoice software, invoice, create online invoice, cheapest invoice software,  free invoice software, invoice template, invoice creator, best nigerian invoice, best invoice software in Lagos, best invoice software in Abuja, nigerian online invoice, acuteinvoice,invoicing, accept payments online" />
<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
</head>

<body id="admin-page">


<!-- Wrapper -->
<div id="wrapper">

<!-- Header Container
================================================== -->
<header id="header-container" class="fixed fullwidth dashboard">

	<!-- Header -->
	<div id="header" class="not-sticky">
		<div class="container">

			<!-- Left Side Content -->
			<div class="left-side">

				<!-- Logo -->
				<div id="logo">
					<a href="/admin"><img src="{{url('images/logo.webp')}}"></a>
					<a href="/admin" class="dashboard-logo"><img src="{{url('images/logo2.webp')}}"></a>
				</div>


				<!-- Main Navigation -->
				<nav id="navigation" class="style-1">



				</nav>
				<div class="clearfix"></div>
				<!-- Main Navigation / End -->

			</div>
			<!-- Left Side Content / End -->

			<!-- Right Side Content / End -->
			<div class="right-side">
				<!-- Header Widget -->
				<div class="header-widget">

					<!-- User Menu -->
					<div class="user-menu">
						<div class="user-name"><span><img src="{{url('images/dashboard-avatar.webp')}}"></span>Chidiebere Ezeka</div>
						<ul>


                            <li><a href="/users/profile"><i class="fa fa-user"></i> My Profile</a></li>

							<li><a href="{{ url('/logout') }}"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
						</ul>
					</div>

					<a href="/posts/create" class="button border with-icon">Create Post <i class="sl sl-icon-plus"></i></a>
				</div>
				<!-- Header Widget / End -->
			</div>
			<!-- Right Side Content / End -->

		</div>
	</div>
	<!-- Header / End -->

</header>
<div class="clearfix"></div>
<!-- Header Container / End -->


<!-- Dashboard -->
<div id="dashboard">

	<!-- Navigation
	================================================== -->

	<!-- Responsive Navigation Trigger -->
	<a href="#" class="dashboard-responsive-nav-trigger"><i class="fa fa-reorder"></i> Dashboard Navigation</a>

	<div class="dashboard-nav">
		<div class="dashboard-nav-inner">

			<ul data-submenu-title="Main">
            <li class="active"><a href="{{route('admin.users.index')}}"><i class="im im-icon-Pantheon"></i> Dashboard</a></li>

			</ul>

			<ul data-submenu-title="Members">
				<li><a><i class="sl sl-icon-layers"></i> Users</a>
					<ul>
						<li><a href="{{route('admin.users.create')}}"><i class="sl sl-icon-plus"></i> Create New User</a></li>
						<li><a href="{{route('admin.users.index')}}"><i class="fa fa-archive"></i> All Users</a></li>

					</ul>
				</li>
            </ul>

            <ul data-submenu-title="Posts">
				<li><a><i class="sl sl-icon-layers"></i> Posts</a>
					<ul>
						<li><a href="{{route('admin.posts.create')}}"><i class="sl sl-icon-plus"></i> Create Post</a></li>
						<li><a href="{{route('admin.posts.index')}}"><i class="fa fa-archive"></i> All Posts</a></li>

					</ul>
				</li>
            </ul>

            <ul data-submenu-title="Categoires">
				<li><a><i class="sl sl-icon-layers"></i> Category</a>
					<ul>
						<li><a href="{{route('admin.categories.create')}}"><i class="sl sl-icon-plus"></i> Create Category</a></li>
						<li><a href="{{route('admin.categories.index')}}"><i class="fa fa-archive"></i> All Categories</a></li>

					</ul>
				</li>
            </ul>

		</div>
	</div>
	<!-- Navigation / End -->

	<!-- Content
	================================================== -->
 <div class="dashboard-content">

<div class="row">


@yield('content')


</div>



  </div>
  <!-- Dashboard / End -->


</div>
<!-- Wrapper / End -->


<!-- Scripts
================================================== -->
{{-- <script src="{{asset('js/libs.js')}}"></script> --}}
<script src="{{asset('js/scripts/jquery-2.2.0.min.js')}}"></script>
<script src="{{asset('js/scripts/jpanelmenu.min.js')}}"></script>
<script src="{{asset('js/scripts/chosen.min.js')}}"></script>
<script src="{{asset('js/scripts/slick.min.js')}}"></script>
<script src="{{asset('js/scripts/rangeslider.min.js')}}"></script>
<script src="{{asset('js/scripts/magnific-popup.min.js')}}"></script>
<script src="{{asset('js/scripts/waypoints.min.js')}}"></script>
<script src="{{asset('js/scripts/counterup.min.js')}}"></script>
<script src="{{asset('js/scripts/jquery-ui.min.js')}}"></script>
<script src="{{asset('js/scripts/tooltips.min.js')}}"></script>
<script src="{{asset('js/scripts/custom.js')}}"></script>


</body>
</html>
