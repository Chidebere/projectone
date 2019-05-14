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

<body>

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
					<a href="index-2.html"><img src="images/logo.webp" alt=""></a>
					<a href="index-2.html" class="dashboard-logo"><img src="images/logo2.webp" alt=""></a>
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
						<div class="user-name"><span><img src="images/dashboard-avatar.webp" alt=""></span>Tom Perrin</div>
						<ul>


                            <li><a href="uprofile"><i class="sl sl-icon-user"></i> My Profile</a></li>
                            <li><a href="change_mypassword"><i class="sl sl-icon-lock"></i> Set Password</a></li>
							<li><a href="ulogout"><i class="sl sl-icon-power"></i> Logout</a></li>
						</ul>
					</div>

					<a href="dashboard-add-listing.html" class="button border with-icon">Create Post <i class="sl sl-icon-plus"></i></a>
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
				<li class="active"><a href="dashboard"><i class="im im-icon-Pantheon"></i> Dashboard</a></li>

			</ul>

			<ul data-submenu-title="Members">
				<li><a><i class="sl sl-icon-layers"></i> Users</a>
					<ul>
						<li><a href="create_new_invoice"><i class="sl sl-icon-plus"></i> Create New User</a></li>
						<li><a href="invoice_history"><i class="fa fa-archive"></i> All Users</a></li>

					</ul>
				</li>
            </ul>

            <ul data-submenu-title="Posts">
				<li><a><i class="sl sl-icon-layers"></i> Posts</a>
					<ul>
						<li><a href="create_new_invoice"><i class="sl sl-icon-plus"></i> Create Post</a></li>
						<li><a href="invoice_history"><i class="fa fa-archive"></i> All Posts</a></li>

					</ul>
				</li>
            </ul>

            <ul data-submenu-title="Categoires">
				<li><a><i class="sl sl-icon-layers"></i> Category</a>
					<ul>
						<li><a href="create_new_invoice"><i class="sl sl-icon-plus"></i> Create Category</a></li>
						<li><a href="invoice_history"><i class="fa fa-archive"></i> All Categories</a></li>

					</ul>
				</li>
            </ul>

		</div>
	</div>
	<!-- Navigation / End -->

	<!-- Content
	================================================== -->
	<div class="dashboard-content">


		<!-- Content -->
		<div class="row">

			<!-- Item -->
			<div class="col-lg-3 col-md-6">
				<div class="dashboard-stat color-1">
					<div class="dashboard-stat-content"><h4>6</h4> <span>Active Listings</span></div>
					<div class="dashboard-stat-icon"><i class="im im-icon-Map2"></i></div>
				</div>
			</div>

			<!-- Item -->
			<div class="col-lg-3 col-md-6">
				<div class="dashboard-stat color-2">
					<div class="dashboard-stat-content"><h4>726</h4> <span>Total Views</span></div>
					<div class="dashboard-stat-icon"><i class="im im-icon-Line-Chart"></i></div>
				</div>
			</div>


			<!-- Item -->
			<div class="col-lg-3 col-md-6">
				<div class="dashboard-stat color-3">
					<div class="dashboard-stat-content"><h4>95</h4> <span>Total Reviews</span></div>
					<div class="dashboard-stat-icon"><i class="im im-icon-Add-UserStar"></i></div>
				</div>
			</div>

			<!-- Item -->
			<div class="col-lg-3 col-md-6">
				<div class="dashboard-stat color-4">
					<div class="dashboard-stat-content"><h4>126</h4> <span>Times Bookmarked</span></div>
					<div class="dashboard-stat-icon"><i class="im im-icon-Heart"></i></div>
				</div>
			</div>
		</div>


		<div class="row">

			<!-- Recent Activity -->
			<div class="col-lg-6 col-md-12">
				<div class="dashboard-list-box with-icons margin-top-20">
					<h4>Recent Activities</h4>
					<ul>
						<li>
							<i class="list-box-icon sl sl-icon-layers"></i> Your listing <strong><a href="#">Hotel Govendor</a></strong> has been approved!
							<a href="#" class="close-list-item"><i class="fa fa-close"></i></a>
						</li>

						<li>
							<i class="list-box-icon sl sl-icon-star"></i> Kathy Brown left a review <div class="numerical-rating" data-rating="5.0"></div> on <strong><a href="#">Burger House</a></strong>
							<a href="#" class="close-list-item"><i class="fa fa-close"></i></a>
						</li>

						<li>
							<i class="list-box-icon sl sl-icon-heart"></i> Someone bookmarked your <strong><a href="#">Burger House</a></strong> listing!
							<a href="#" class="close-list-item"><i class="fa fa-close"></i></a>
						</li>

						<li>
							<i class="list-box-icon sl sl-icon-star"></i> Kathy Brown left a review <div class="numerical-rating" data-rating="3.0"></div> on <strong><a href="#">Airport</a></strong>
							<a href="#" class="close-list-item"><i class="fa fa-close"></i></a>
						</li>

						<li>
							<i class="list-box-icon sl sl-icon-heart"></i> Someone bookmarked your <strong><a href="#">Burger House</a></strong> listing!
							<a href="#" class="close-list-item"><i class="fa fa-close"></i></a>
						</li>

						<li>
							<i class="list-box-icon sl sl-icon-star"></i> John Doe left a review <div class="numerical-rating" data-rating="4.0"></div> on <strong><a href="#">Burger House</a></strong>
							<a href="#" class="close-list-item"><i class="fa fa-close"></i></a>
						</li>

						<li>
							<i class="list-box-icon sl sl-icon-star"></i> Jack Perry left a review <div class="numerical-rating" data-rating="2.5"></div> on <strong><a href="#">Tom's Restaurant</a></strong>
							<a href="#" class="close-list-item"><i class="fa fa-close"></i></a>
						</li>
					</ul>
				</div>
			</div>

			<!-- Invoices -->
			<div class="col-lg-6 col-md-12">
				<div class="dashboard-list-box invoices with-icons margin-top-20">
					<h4>Invoices</h4>
					<ul>

						<li><i class="list-box-icon sl sl-icon-doc"></i>
							<strong>Professional Plan</strong>
							<ul>
								<li class="unpaid">Unpaid</li>
								<li>Order: #00124</li>
								<li>Date: 20/07/2017</li>
							</ul>
							<div class="buttons-to-right">
								<a href="dashboard-invoice.html" class="button gray">View Invoice</a>
							</div>
						</li>

						<li><i class="list-box-icon sl sl-icon-doc"></i>
							<strong>Extended Plan</strong>
							<ul>
								<li class="paid">Paid</li>
								<li>Order: #00108</li>
								<li>Date: 14/07/2017</li>
							</ul>
							<div class="buttons-to-right">
								<a href="dashboard-invoice.html" class="button gray">View Invoice</a>
							</div>
						</li>

						<li><i class="list-box-icon sl sl-icon-doc"></i>
							<strong>Extended Plan</strong>
							<ul>
								<li class="paid">Paid</li>
								<li>Order: #00097</li>
								<li>Date: 10/07/2017</li>
							</ul>
							<div class="buttons-to-right">
								<a href="dashboard-invoice.html" class="button gray">View Invoice</a>
							</div>
						</li>

						<li><i class="list-box-icon sl sl-icon-doc"></i>
							<strong>Basic Plan</strong>
							<ul>
								<li class="paid">Paid</li>
								<li>Order: #00091</li>
								<li>Date: 30/06/2017</li>
							</ul>
							<div class="buttons-to-right">
								<a href="dashboard-invoice.html" class="button gray">View Invoice</a>
							</div>
						</li>

					</ul>
				</div>
			</div>


			<!-- Copyrights -->
			<div class="col-md-12">
				<div class="copyrights">© 2017 Listeo. All Rights Reserved.</div>
			</div>
		</div>

	</div>
	<!-- Content / End -->


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
