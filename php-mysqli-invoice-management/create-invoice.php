<?php
require_once('inc/autoload.php');
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>Adminbook&reg; | Create Invoice</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
<link href="assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
<link href="assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
<link rel="stylesheet" type="text/css" href="assets/global/plugins/clockface/css/clockface.css"/>
<link rel="stylesheet" type="text/css" href="assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css"/>
<link rel="stylesheet" type="text/css" href="assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css"/>
<link rel="stylesheet" type="text/css" href="assets/global/plugins/bootstrap-colorpicker/css/colorpicker.css"/>
<link rel="stylesheet" type="text/css" href="assets/global/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css"/>
<link rel="stylesheet" type="text/css" href="assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css"/>
<link rel="stylesheet" type="text/css" href="assets/global/plugins/select2/select2.css"/>
<link rel="stylesheet" type="text/css" href="assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="assets/global/plugins/bootstrap-select/bootstrap-select.min.css"/>
<link rel="stylesheet" type="text/css" href="assets/global/plugins/jquery-multi-select/css/multi-select.css"/>
<!-- Admin stylesheet -->
<link href="assets/global/plugins/invoice/css/invoiceFormAdmin.css" rel="stylesheet" type="text/css"/>
<!-- Create new invoice stylesheet -->
<link href="assets/global/plugins/invoice/css/invoiceform.css" rel="stylesheet">
<!-- Footable stylesheet -->
<link href="assets/global/plugins/fooTable/css/footable.core.css" rel="stylesheet" type="text/css" />
<!-- Typeahead plugin stylesheet -->
<link href="https://raw.github.com/jharding/typeahead.js-bootstrap.css/master/typeahead.js-bootstrap.css" rel="stylesheet" media="screen">
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME STYLES -->
<link href="assets/global/css/components.css" id="style_components" rel="stylesheet" type="text/css"/>
<link href="assets/global/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="assets/admin/layout/css/layout.css" rel="stylesheet" type="text/css"/>
<link id="style_color" href="assets/admin/layout/css/themes/darkblue.css" rel="stylesheet" type="text/css"/>
<link href="assets/admin/layout/css/custom.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-header-fixed page-quick-sidebar-over-content page-sidebar-closed-hide-logo">
<!-- BEGIN HEADER -->
<div class="page-header navbar navbar-fixed-top">
	<!-- BEGIN HEADER INNER -->
	<div class="page-header-inner">
		<!-- BEGIN LOGO -->
		<div class="page-logo">
			<a href="index.php">
			<img src="assets/admin/layout/img/logo.png" alt="logo" class="logo-default"/>
			</a>
			<div class="menu-toggler sidebar-toggler">
			</div>
		</div>
		<!-- END LOGO -->
		<!-- BEGIN HEADER SEARCH BOX -->
		<form class="search-form" action="extra_search.html" method="GET">
			<div class="input-group">
				<input type="text" class="form-control" placeholder="Search..." name="query">
				<span class="input-group-btn">
				<a href="javascript:;" class="btn submit"><i class="icon-magnifier"></i></a>
				</span>
			</div>
		</form>
		<!-- END HEADER SEARCH BOX -->
		<!-- BEGIN RESPONSIVE MENU TOGGLER -->
		<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
		</a>
		<!-- END RESPONSIVE MENU TOGGLER -->
		<!-- BEGIN TOP NAVIGATION MENU -->
		<div class="top-menu">
			<ul class="nav navbar-nav pull-right">
				<!-- BEGIN NOTIFICATION DROPDOWN -->
				<li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
					<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
					<i class="icon-bell"></i>
					<span class="badge badge-default">
					7 </span>
					</a>
					<ul class="dropdown-menu">
						<li class="external">
							<h3><span class="bold">12 pending</span> notifications</h3>
							<a href="extra_profile.html">view all</a>
						</li>
						<li>
							<ul class="dropdown-menu-list scroller" style="height: 250px;" data-handle-color="#637283">
								<li>
									<a href="javascript:;">
									<span class="time">just now</span>
									<span class="details">
									<span class="label label-sm label-icon label-success">
									<i class="fa fa-plus"></i>
									</span>
									New user registered. </span>
									</a>
								</li>
								<li>
									<a href="javascript:;">
									<span class="time">3 mins</span>
									<span class="details">
									<span class="label label-sm label-icon label-danger">
									<i class="fa fa-bolt"></i>
									</span>
									Server #12 overloaded. </span>
									</a>
								</li>
								<li>
									<a href="javascript:;">
									<span class="time">10 mins</span>
									<span class="details">
									<span class="label label-sm label-icon label-warning">
									<i class="fa fa-bell-o"></i>
									</span>
									Server #2 not responding. </span>
									</a>
								</li>
								<li>
									<a href="javascript:;">
									<span class="time">14 hrs</span>
									<span class="details">
									<span class="label label-sm label-icon label-info">
									<i class="fa fa-bullhorn"></i>
									</span>
									Application error. </span>
									</a>
								</li>
								<li>
									<a href="javascript:;">
									<span class="time">2 days</span>
									<span class="details">
									<span class="label label-sm label-icon label-danger">
									<i class="fa fa-bolt"></i>
									</span>
									Database overloaded 68%. </span>
									</a>
								</li>
								<li>
									<a href="javascript:;">
									<span class="time">3 days</span>
									<span class="details">
									<span class="label label-sm label-icon label-danger">
									<i class="fa fa-bolt"></i>
									</span>
									A user IP blocked. </span>
									</a>
								</li>
								<li>
									<a href="javascript:;">
									<span class="time">4 days</span>
									<span class="details">
									<span class="label label-sm label-icon label-warning">
									<i class="fa fa-bell-o"></i>
									</span>
									Storage Server #4 not responding dfdfdfd. </span>
									</a>
								</li>
								<li>
									<a href="javascript:;">
									<span class="time">5 days</span>
									<span class="details">
									<span class="label label-sm label-icon label-info">
									<i class="fa fa-bullhorn"></i>
									</span>
									System Error. </span>
									</a>
								</li>
								<li>
									<a href="javascript:;">
									<span class="time">9 days</span>
									<span class="details">
									<span class="label label-sm label-icon label-danger">
									<i class="fa fa-bolt"></i>
									</span>
									Storage server failed. </span>
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</li>
				<!-- END NOTIFICATION DROPDOWN -->
				<!-- BEGIN INBOX DROPDOWN -->
				<li class="dropdown dropdown-extended dropdown-inbox" id="header_inbox_bar">
					<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
					<i class="fa fa-comments-o"></i>
					<span class="badge badge-default">
					4</span>
					</a>
					<ul class="dropdown-menu">
						<li class="external">
							<h3>You have <span class="bold">7 New</span> Messages</h3>
							<a href="page_inbox.html">view all</a>
						</li>
						<li>
							<ul class="dropdown-menu-list scroller" style="height: 275px;" data-handle-color="#637283">
								<li>
									<a href="inbox.html?a=view">
									<span class="photo">
									<img src="assets/admin/layout3/img/avatar2.jpg" class="img-circle" alt="">
									</span>
									<span class="subject">
									<span class="from">
									Lisa Wong </span>
									<span class="time">Just Now </span>
									</span>
									<span class="message">
									Vivamus sed auctor nibh congue nibh. auctor nibh auctor nibh... </span>
									</a>
								</li>
								<li>
									<a href="inbox.html?a=view">
									<span class="photo">
									<img src="assets/admin/layout3/img/avatar3.jpg" class="img-circle" alt="">
									</span>
									<span class="subject">
									<span class="from">
									Richard Doe </span>
									<span class="time">16 mins </span>
									</span>
									<span class="message">
									Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
									</a>
								</li>
								<li>
									<a href="inbox.html?a=view">
									<span class="photo">
									<img src="assets/admin/layout3/img/avatar1.jpg" class="img-circle" alt="">
									</span>
									<span class="subject">
									<span class="from">
									Bob Nilson </span>
									<span class="time">2 hrs </span>
									</span>
									<span class="message">
									Vivamus sed nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
									</a>
								</li>
								<li>
									<a href="inbox.html?a=view">
									<span class="photo">
									<img src="assets/admin/layout3/img/avatar2.jpg" class="img-circle" alt="">
									</span>
									<span class="subject">
									<span class="from">
									Lisa Wong </span>
									<span class="time">40 mins </span>
									</span>
									<span class="message">
									Vivamus sed auctor 40% nibh congue nibh... </span>
									</a>
								</li>
								<li>
									<a href="inbox.html?a=view">
									<span class="photo">
									<img src="assets/admin/layout3/img/avatar3.jpg" class="img-circle" alt="">
									</span>
									<span class="subject">
									<span class="from">
									Richard Doe </span>
									<span class="time">46 mins </span>
									</span>
									<span class="message">
									Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</li>
				<!-- END INBOX DROPDOWN -->
				<!-- BEGIN TODO DROPDOWN -->
				<li class="dropdown dropdown-extended dropdown-tasks" id="header_task_bar">
					<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
					<i class="icon-calendar"></i>
					<span class="badge badge-default">
					3 </span>
					</a>
					<ul class="dropdown-menu extended tasks">
						<li class="external">
							<h3>You have <span class="bold">12 pending</span> tasks</h3>
							<a href="page_todo.html">view all</a>
						</li>
						<li>
							<ul class="dropdown-menu-list scroller" style="height: 275px;" data-handle-color="#637283">
								<li>
									<a href="javascript:;">
									<span class="task">
									<span class="desc">New release v1.2 </span>
									<span class="percent">30%</span>
									</span>
									<span class="progress">
									<span style="width: 40%;" class="progress-bar progress-bar-success" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">40% Complete</span></span>
									</span>
									</a>
								</li>
								<li>
									<a href="javascript:;">
									<span class="task">
									<span class="desc">Application deployment</span>
									<span class="percent">65%</span>
									</span>
									<span class="progress">
									<span style="width: 65%;" class="progress-bar progress-bar-danger" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">65% Complete</span></span>
									</span>
									</a>
								</li>
								<li>
									<a href="javascript:;">
									<span class="task">
									<span class="desc">Mobile app release</span>
									<span class="percent">98%</span>
									</span>
									<span class="progress">
									<span style="width: 98%;" class="progress-bar progress-bar-success" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">98% Complete</span></span>
									</span>
									</a>
								</li>
								<li>
									<a href="javascript:;">
									<span class="task">
									<span class="desc">Database migration</span>
									<span class="percent">10%</span>
									</span>
									<span class="progress">
									<span style="width: 10%;" class="progress-bar progress-bar-warning" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">10% Complete</span></span>
									</span>
									</a>
								</li>
								<li>
									<a href="javascript:;">
									<span class="task">
									<span class="desc">Web server upgrade</span>
									<span class="percent">58%</span>
									</span>
									<span class="progress">
									<span style="width: 58%;" class="progress-bar progress-bar-info" aria-valuenow="58" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">58% Complete</span></span>
									</span>
									</a>
								</li>
								<li>
									<a href="javascript:;">
									<span class="task">
									<span class="desc">Mobile development</span>
									<span class="percent">85%</span>
									</span>
									<span class="progress">
									<span style="width: 85%;" class="progress-bar progress-bar-success" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">85% Complete</span></span>
									</span>
									</a>
								</li>
								<li>
									<a href="javascript:;">
									<span class="task">
									<span class="desc">New UI release</span>
									<span class="percent">38%</span>
									</span>
									<span class="progress progress-striped">
									<span style="width: 38%;" class="progress-bar progress-bar-important" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">38% Complete</span></span>
									</span>
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</li>
				<!-- END TODO DROPDOWN -->
				<!-- BEGIN USER LOGIN DROPDOWN -->
				<li class="dropdown dropdown-user">
					<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
					<img alt="" class="img-circle" src="assets/admin/layout/img/avatar11.jpg"/>
					<span class="username username-hide-on-mobile">
					Hassan Amin </span>
					<i class="fa fa-angle-down"></i>
					</a>
					<ul class="dropdown-menu dropdown-menu-default">
						<li>
							<a href="extra_profile.html">
							<i class="icon-user"></i> My Profile </a>
						</li>
						<li>
							<a href="page_calendar.html">
							<i class="icon-calendar"></i> My Calendar </a>
						</li>
						<li>
							<a href="inbox.html">
							<i class="icon-envelope-open"></i> My Inbox <span class="badge badge-danger">
							3 </span>
							</a>
						</li>
						<li>
							<a href="page_todo.html">
							<i class="icon-rocket"></i> My Tasks <span class="badge badge-success">
							7 </span>
							</a>
						</li>
						<li class="divider">
						</li>
						<li>
							<a href="extra_lock.html">
							<i class="icon-lock"></i> Lock Screen </a>
						</li>
						<li>
							<a href="login.html">
							<i class="icon-key"></i> Log Out </a>
						</li>
					</ul>
				</li>
				<!-- END USER LOGIN DROPDOWN -->
				<!-- BEGIN QUICK SIDEBAR TOGGLER -->
				<li class="dropdown dropdown-quick-sidebar-toggler">
					<a href="javascript:;" class="dropdown-toggle">
					<i class="icon-logout"></i>
					</a>
				</li>
				<!-- END QUICK SIDEBAR TOGGLER -->
			</ul>
		</div>
		<!-- END TOP NAVIGATION MENU -->
	</div>
	<!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<div class="clearfix">
</div><!-- BEGIN CONTAINER -->
<div class="page-container">
	<!-- BEGIN SIDEBAR -->
	<div class="page-sidebar-wrapper">
		<div class="page-sidebar navbar-collapse collapse">
			<!-- BEGIN SIDEBAR MENU -->
			<ul class="page-sidebar-menu" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="margin-top:25px;">
				<li class="start">
					<a href="javascript:;">
						<i class="icon-home"></i>
						<span class="title">Home</span>
						<span class="selected"></span>
						<span class="arrow"></span>
					</a>
					<ul class="sub-menu">
						<li class="active">
							<a href="index.php">
							<i class="icon-bar-chart"></i> Analytics</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:;">
						<i class="icon-envelope"></i>
						<span class="title">Business Messaging</span>
						<span class="selected"></span>
						<span class="arrow"></span>
					</a>
					<ul class="sub-menu">
						<li><a href="email.php"><i class="fa fa-envelope"></i> Business E-mail</a></li>
						<li><a href="email.php"><i class="fa fa-check-square"></i> Product Inquiries</a></li>
						<li><a href="email.php"><i class="fa fa-globe"></i> Online Contacts</a></li>
						<li><a href="email.php"><i class="fa fa-book"></i> Catalogue Requests</a></li>
						<li><a href="email.php"><i class="fa fa-thumbs-up"></i> Customer Feedback</a></li>
						<li><a href="email.php"><i class="fa fa-sitemap"></i> Distribution Requests</a></li>
						<li><a href="product-reviews.php"><i class="fa fa-comments"></i> Product Reviews</a></li>
						<li><a href="#"><i class="icon-settings"></i> Account Settings</a></li>
					</ul>
				</li>
				<li>
					<a href="javascript:;">
						<i class="icon-notebook"></i>
						<span class="title">Contacts Management</span>
						<span class="arrow"></span>
					</a>
					<ul class="sub-menu">
						<li><a href="customer-contacts.php"><i class="fa fa-user-plus"></i> Customer Contacts</a></li>
						<li><a href="supplier-contacts.php"><i class="fa fa-user-plus"></i> Supplier Contacts</a></li>
						<li><a href="calendar.php"><i class="icon-calendar"></i> Calendar &amp; Events</a></li>
						<li><a href="notes.php"><i class="icon-note"></i> Notes</a></li>
						<li><a href="cms-settings.php"><i class="fa fa-sliders"></i> Pre-Configuration</a>
							<ul class="sub-menu">
								<li><a href="contacts-title.php"><i class="fa fa-plus-square-o"></i> Add Title</a></li>
								<li><a href="contacts-job-title.php"><i class="fa fa-plus-square-o"></i> Add Job Title</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:;">
						<i class="fa fa-database"></i>
						<span class="title">Resource Management</span>
						<span class="arrow"></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="javascript:;"><span class="arrow"></span><i class="fa fa-book"></i> Online Catalogue</a>
							<ul class="sub-menu">
								<li><a href="categories.php"><i class="icon-list"></i> Categories</a></li>
								<li><a href="products.php"><i class="icon-diamond"></i> Products</a></li>
								<li><a href="products-videos.php"><i class="fa fa-youtube-play"></i> Product Videos</a></li>
								<li><a href="products-url-tags.php"><i class="fa fa-tags"></i> Url Tags</a></li>
								<li><a href="competitor-reference.php"><i class="fa fa-leanpub"></i> Competitor Reference</a></li>
							</ul>
						</li>
						<li>
							<a href="javascript:;">
								<i class="fa fa-puzzle-piece"></i>
								<span class="title">Sales Strategies</span>
								<span class="selected"></span>
								<span class="arrow"></span>
							</a>
							<ul class="sub-menu">
								<li><a href="promotional-products.php"><i class="fa fa-gift"></i> Promotional Products</a></li>
								<li><a href="hot-products.php"><i class="fa fa-gift"></i> Best Selling Products</a></li>
							</ul>
						</li>
						<li>
							<a href="javascript:;">
								<i class="fa fa-newspaper-o"></i>
								<span class="title">Marketing Material</span>
								<span class="selected"></span>
								<span class="arrow"></span>
							</a>
							<ul class="sub-menu">
								<li><a href="e-catalogue.php"><i class="fa fa-book"></i> E-Catalogues</a></li>
								<li><a href="e-brochure.php"><i class="fa fa-file-image-o"></i> E-Brochures</a></li>
							</ul>
						</li>
						<li>
							<a href="javascript:;"><span class="arrow"></span><i class="icon-basket-loaded"></i> Sales</a>
							<ul class="sub-menu">
								<li><a href="quotation.php"><i class="fa fa-file-text-o"></i> Quotations</a></li>
								<li><a href="proforma-invoice.php"><i class="fa fa-file-text-o"></i> Proforma Invoice</a></li>
								<li><a href="sales-invoice.php"><i class="fa fa-file-text-o"></i> Sales Invoice</a></li>
								<li><a href="commercial-invoice.php"><i class="fa fa-file-text-o"></i> Commercial Invoice</a></li>
							</ul>
						</li>
						<li>
							<a href="javascript:;"><span class="arrow"></span><i class="fa fa-cubes"></i> Purchases</a>
							<ul class="sub-menu">
								<li><a href="request-quotation.php"><i class="fa fa-file-text-o"></i> Request Quotation</a></li>
								<li><a href="purchase-order.php"><i class="fa fa-file-text-o"></i> Purchase Order</a></li>
							</ul>
						</li>
						<li>
							<a href="javascript:;"><span class="arrow"></span><i class="fa fa-cogs"></i> Manufacturing</a>
							<ul class="sub-menu">
								<li><a href="manufacturing-order.php"><i class="fa fa-file-text-o"></i> Manufacturing Order</a></li>
							</ul>
						</li>
						<li>
							<a href="javascript:;"><span class="arrow"></span><i class="fa fa-truck"></i> Shipping &amp; Handling</a>
							<ul class="sub-menu">
								<li><a href="packing-list.php"><i class="fa fa-file-text-o"></i> Packing List</a></li>
								<li><a href="delivery-note.php"><i class="fa fa-file-text-o"></i> Delivery Note</a></li>
								<li><a href="coo.php"><i class="fa fa-file-text-o"></i> Certificate of Origin</a></li>
								<li><a href="gsp.php"><i class="fa fa-file-text-o"></i> GSP Certificate</a></li>
								<li><a href="gsp.php"><i class="fa fa-file-text-o"></i> FORM "E"</a></li>
								<li><a href="gsp.php"><i class="fa fa-file-text-o"></i> Valuation Form "A"</a></li>
								<li><a href="gsp.php"><i class="fa fa-file-text-o"></i> Exchange Draft</a></li>
								<li><a href="gsp.php"><i class="fa fa-file-text-o"></i> Shipping Instructions</a></li>
								<li><a href="gsp.php"><i class="fa fa-file-text-o"></i> Export Statement</a></li>
								<li><a href="gsp.php"><i class="fa fa-file-text-o"></i> Covering Letter</a></li>
								<li><a href="undertaking.php"><i class="fa fa-file-text-o"></i> Undertaking Letter</a></li>
							</ul>
						</li>
						<li>
							<a href="javascript:;"><span class="arrow"></span><i class="fa fa-building"></i> Warehouse</a>
							<ul class="sub-menu">
								<li><a href="current-inventory.php"><i class="fa fa-bar-chart-o"></i> Current Inventory</a></li>
								<li><a href="inventory-adjustment.php"><i class="fa fa-refresh"></i> Inventory Adjustment</a></li>
							</ul>
						</li>
						<li>
							<a href="javascript:;"><span class="arrow"></span><i class="icon-calculator"></i> Cost Accounting</a>
							<ul class="sub-menu">
								<li><a href="cost-analysis.php"><i class="fa fa-line-chart"></i> Cost Analysis</a></li>
								<li><a href="cost-calculator.php"><i class="fa fa-calculator"></i> Cost Calculator</a></li>
								<li><a href="manufacturing-cost.php"><i class="fa fa-plus"></i> Manufacturing Cost</a></li>
								<li><a href="finishing-cost.php"><i class="fa fa-plus"></i> Finishing Cost</a></li>
								<li><a href="stamping-cost.php"><i class="fa fa-plus"></i> Stamping Cost</a></li>
								<li><a href="insurance-rates.php"><i class="fa fa-plus"></i> Insurance Rates</a></li>
								<li><a href="documentation-cost.php"><i class="fa fa-plus"></i> Documentation Cost</a></li>
								<li><a href="shipping-cost.php"><i class="fa fa-plus"></i> Shipping Cost</a></li>
								<li><a href="other-cost.php"><i class="fa fa-plus"></i> Other Cost</a></li>
							</ul>
						</li>
						<li>
							<a href="javascript:;"><span class="arrow"></span><i class="fa fa-sliders"></i> Pre-Configuration</a>
							<ul class="sub-menu">
								<li><a href="crm-logo.php"><i class="fa fa-file-photo-o"></i> Company Logo</a></li>
								<li><a href="crm-cd.php"><i class="fa fa-building-o"></i> Company Details</a></li>
								<li><a href="crm-bd.php"><i class="fa fa-bank"></i> Bank Details</a></li>
								<li><a href="crm-currency.php"><i class="fa fa-money"></i> Currency</a></li>
								<li><a href="crm-tax.php"><i class="fa fa-pie-chart"></i> Taxes</a></li>
								<li><a href="crm-insurance.php"><i class="fa fa-bar-chart"></i> Insurance</a></li>
								<li><a href="crm-discount.php"><i class="fa fa-line-chart"></i> Discount</a></li>
								<li><a href="crm-payment-types.php"><i class="fa fa-cc-visa"></i> Payment Types</a></li>
								<li><a href="crm-incoterms.php"><i class="fa fa-newspaper-o"></i> Incoterms &reg; 2010</a></li>
								<li><a href="crm-transport-mode.php"><i class="fa fa-ship"></i> Mode of Transport</a></li>
								<li><a href="crm-exporting-carrier.php"><i class="fa fa-plane"></i> Exporting Carrier</a></li>
								<li><a href="crm-signature.php"><i class="icon-user-following"></i> Authorized Signature</a></li>
								<li><a href="crm-barcode.php"><i class="fa fa-barcode"></i> Bar code</a></li>
								<li><a href="crm-invoice-types.php"><i class="fa fa-check-square-o"></i> Invoice Types</a></li>
								<li><a href="crm-invoice-status.php"><i class="fa fa-check-square-o"></i> Invoice Status</a></li>
								<li><a href="crm-shipping-ports.php"><i class="fa fa-road"></i> Shipment Ports</a></li>
								<li><a href="crm-destination-ports.php"><i class="fa fa-road"></i> Destination Ports</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:;">
						<i class="icon-user"></i>
						<span class="title">Customer Management</span>
						<span class="arrow"></span>
					</a>
					<ul class="sub-menu">
						<li><a href="cmr-dashboard.php"><i class="fa fa-bar-chart-o"></i> Dashboard</a></li>
						<li><a href="cmr-support.php"><i class="fa fa-envelope"></i> Customer Support</a></li>
						<li><a href="cmr-sp.php"><i class="fa fa-share-square-o"></i> Share Products</a></li>
						<li><a href="cmr-sv.php"><i class="icon-social-youtube"></i> Share Videos</a></li>
						<li><a href="cmr-sd.php"><i class="fa fa-slideshare"></i> Share Documents</a></li>
						<li><a href="cmr-sl.php"><i class="icon-link"></i> Share Links</a></li>
						<li><a href="cmr-st.php"><i class="fa fa-truck"></i> Shipment Tracking</a></li>
						<li><a href="cmr-nu.php"><i class="fa fa-newspaper-o"></i> News &amp; Updates</a></li>
						<li><a href="cmr-an.php"><i class="fa fa-bullhorn"></i> Announcement</a></li>
						<li><a href="cmr-bei.php"><i class="fa fa-calendar"></i> Business Event Invitation</a></li>
						<li><a href="cmr-bea.php"><i class="fa fa-picture-o"></i> Business Events Album</a></li>
						<li><a href="cmr-account.php"><i class="fa fa-user-plus"></i> Customer Account</a></li>
					</ul>
				</li>
				<li>
					<a href="javascript:;">
						<i class="icon-user"></i>
						<span class="title">Supplier Management</span>
						<span class="arrow"></span>
					</a>
					<ul class="sub-menu">
						<li><a href="srm-dashboard.php"><i class="fa fa-bar-chart-o"></i> Dashboard</a></li>
						<li><a href="srm-supplier-selection.php"><i class="fa fa-user-plus"></i> Supplier Selection</a></li>
						<li><a href="srm-purchase-orders.php"><i class="fa fa-cart-plus"></i> Purchase Orders</a></li>
						<li><a href="srm-supply-schedules.php"><i class="fa fa-calendar"></i> Supply Schedules</a></li>
					</ul>
				</li>
				<li>
					<a href="javascript:;">
						<i class="icon-grid"></i>
						<span class="title">Office Applications</span>
						<span class="arrow"></span>
					</a>
					<ul class="sub-menu">
						<li><a href="word.php"><i class="fa fa-folder-open-o"></i> Files Manager</a></li>
						<li><a href="word.php"><i class="fa fa-file-word-o"></i> PHPWord</a></li>
						<li><a href="excel.php"><i class="fa fa-file-excel-o"></i> PHPExcel</a></li>
						<li><a href="power-point.php"><i class="fa fa-file-powerpoint-o"></i> PHPPowerPoint</a></li>
						<li><a href="visio.php"><i class="fa fa-file-code-o"></i> PHPVisio</a></li>
						<li><a href="project.php"><i class="fa fa-file-code-o"></i> PHPProject</a></li>
						<li><a href="pdf.php"><i class="fa fa-file-pdf-o"></i> PDF Viewer</a></li>
						<li><a href="pdf-generator.php"><i class="fa fa-file-pdf-o"></i> PDF Generator</a></li>
						<li><a href="picture-manager.php"><i class="fa fa-file-photo-o"></i> Picture Manager</a></li>
						<li><a href="calculator.php"><i class="icon-calculator"></i> Calculator</a></li>
						<li><a href="maps.php"><i class="icon-map"></i> Maps</a></li>
					</ul>
				</li>
				<li>
					<a href="javascript:;">
						<i class="icon-globe"></i>
						<span class="title">Website CMS</span>
						<span class="arrow"></span>
					</a>
					<ul class="sub-menu">
						<li><a href="cms-web-theme-selector.php"><i class="fa fa-html5"></i> Theme Selector</a></li>
						<li><a href="cms-web-theme-styler.php"><i class="fa fa-css3"></i> Theme Styler</a></li>
						<li><a href="cms-web-logo.php"><i class="fa fa-apple"></i> Company Logo</a></li>
						<li><a href="cms-web-main-menu.php"><i class="glyphicon glyphicon-menu-hamburger"></i> Main Menu</a></li>
						<li><a href="cms-web-slider.php"><i class="fa fa-file-image-o"></i> Slider Images</a></li>
						<li><a href="cms-web-footer.php"><i class="glyphicon glyphicon-object-align-bottom"></i> Footer Menu</a></li>
						<li><a href="cms-web-about-us.php"><i class="fa fa-group"></i> About Us</a></li>
						<li><a href="cms-web-contact-us.php"><i class="fa fa-street-view"></i> Contact Us</a></li>
						<li><a href="cms-web-management-message.php"><i class="glyphicon glyphicon-king"></i> Management Messages</a></li>
						<li><a href="cms-web-vision-mission.php"><i class="glyphicon glyphicon-screenshot"></i> Vision &amp; Mission</a></li>
						<li><a href="cms-web-privacy.php"><i class="fa fa-user-secret"></i> Privacy Statement</a></li>
						<li><a href="cms-web-faqs.php"><i class="fa fa-question-circle"></i> FAQs</a></li>
						<li><a href="cms-web-news.php"><i class="fa fa-newspaper-o"></i> News &amp; Updates</a></li>
						<li><a href="cms-web-jobs.php"><i class="fa fa-bullhorn"></i> Jobs Announcement</a></li>
						<li><a href="cms-web-certificates.php"><i class="fa fa-certificate"></i> Quality Certificates</a></li>
					</ul>
				</li>
				<li>
					<a href="javascript:;">
						<i class="fa fa-wordpress"></i>
						<span class="title">Blog CMS</span>
						<span class="arrow"></span>
					</a>
					<ul class="sub-menu">
						<li><a href="cms-blog-theme-selector.php"><i class="fa fa-html5"></i> Theme Selector</a></li>
						<li><a href="cms-blog-theme-styler.php"><i class="fa fa-css3"></i> Theme Styler</a></li>
						<li><a href="cms-blog-"><i class="glyphicon glyphicon-menu-hamburger"></i> Main Menu</a></li>
						<li><a href="cms-blog-"><i class="fa fa-file-image-o"></i> Slider Images</a></li>
						<li><a href="cms-blog-"><i class="glyphicon glyphicon-object-align-bottom"></i> Footer Menu</a></li>
						<li><a href="cms-blog-"><i class="fa fa-list-alt"></i> New Post</a></li>
					</ul>
				</li>
				<li>
					<a href="javascript:;">
						<i class="icon-envelope-letter"></i>
						<span class="title">Newsletter</span>
						<span class="arrow"></span>
					</a>
					<ul class="sub-menu">
						<li><a href="newsletter-builder.php"><i class="fa fa-list-alt"></i> Template Builder</a></li>
						<li><a href="newsletter-selector.php"><i class="glyphicon glyphicon-check"></i> Select Template</a></li>
						<li><a href="newsletter-editor.php"><i class="glyphicon glyphicon-edit"></i> Template Editor</a></li>
						<li><a href="newsletter-subscribers.php"><i class="icon-users"></i> Newsletter Subscribers</a></li>
						<li><a href="newsletter-send.php"><i class="fa fa-send-o"></i> Send Newsletter</a></li>
						<li><a href="newsletter-settings.php"><i class="icon-settings"></i> Newsletter Settings</a></li>
					</ul>
				</li>
				<li>
					<a href="javascript:;">
						<i class="icon-settings"></i>
						<span class="title">Advanced Configuration</span>
						<span class="arrow"></span>
					</a>
					<ul class="sub-menu">
						<li><a href="company-profile.php"><i class="fa fa-slideshare"></i> Company Profile</a></li>
						<li><a href="user-account.php"><i class="fa fa-user-plus"></i> Staff User Account</a></li>
						<li><a href="cms-web-social-media-links.php"><i class="fa fa-share-alt"></i> Social Media Links</a></li>
						<li><a href="cms-web-google-analytics.php"><i class="fa fa-google"></i> Google Analytics Key</a></li>
						<li><a href="cms-web-website-verification.php"><i class="fa fa-html5"></i> Website Verification</a></li>
						<li><a href="cms-web-xml-sitemap.php"><i class="fa fa-sitemap"></i> Sitemap.xml</a></li>
						<li><a href="cms-web-robots-text.php"><i class="fa fa-android"></i> Robots.txt</a></li>
						<li><a href="cms-web-website-verification.php"><i class="fa fa-database"></i> Backup & Restore</a></li>
						<li><a href="cms-php-info.php"><i class="fa fa-server"></i> System Information</a></li>
					</ul>
				</li>
				<li>
					<a href="javascript:;">
						<i class="fa fa-life-ring"></i>
						<span class="title">My Support Services</span>
						<span class="selected"></span>
						<span class="arrow"></span>
					</a>
					<ul class="sub-menu">
						<li><a href="#"><i class="fa fa-tags"></i> My Support Tickets</a></li>
						<li><a href="#"><i class="fa fa-tag"></i> Generate Tickets</a></li>
						<li><a href="#"><i class="fa fa-phone-square"></i> Callback Request</a></li>
					</ul>
				</li>
				<li>
					<a href="store.php">
						<i class="icon-handbag"></i>
						<span class="title">Application Store</span>
					</a>
				</li>
				<li>
					<a href="#">
						<i class="icon-info"></i>
						<span class="title">About Adminbook &trade;</span>
					</a>
				</li>
				<li>
					<a href="#">
						<i class=""></i>
						<span class="title">About Mind Works IT Solutions</span>
					</a>
				</li>
			</ul>
			<!-- END SIDEBAR MENU -->
		</div>
	</div>
	<!-- END SIDEBAR -->	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">Sales Invoice <small>(Create)</small></h3>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="index.php">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">Resource Management</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">Sales</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">Sales Invoice</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">Create Sales Invoice</a>
					</li>
				</ul>
			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box blue-chambray" id="form_invoice"><!-- form_invoice -->
						<div class="portlet-title">
							<div class="caption">
								<i class="icon-layers"></i> Create New Sales Invoice Step by Step Wizard
							</div>
						</div>
						<div class="portlet-body">
							<div class="portlet-body form">
								<form action="process.php" class="form-horizontal" name="invoice_form" id="invoice_form" method="post" enctype="multipart/form-data" autocomplete="off">
									<div class="form-wizard">
										<div class="form-body">
											<ul class="nav nav-pills nav-justified steps">
												<li>
													<a href="#tab1" data-toggle="tab" class="step">
													<span class="number">
													1 </span>
													<span class="desc">
													<i class="fa fa-check"></i> Contract Details </span>
													</a>
												</li>
												<li>
													<a href="#tab2" data-toggle="tab" class="step">
													<span class="number">
													2 </span>
													<span class="desc">
													<i class="fa fa-check"></i> Billing & Shipping </span>
													</a>
												</li>
												<li>
													<a href="#tab3" data-toggle="tab" class="step active">
													<span class="number">
													3 </span>
													<span class="desc">
													<i class="fa fa-check"></i> Invoice Items </span>
													</a>
												</li>
												<li>
													<a href="#tab4" data-toggle="tab" class="step">
													<span class="number">
													4 </span>
													<span class="desc">
													<i class="fa fa-check"></i> Confirm / Save Invoice </span>
													</a>
												</li>
											</ul>
											<div id="bar" class="progress progress-striped" role="progressbar">
												<div class="progress-bar progress-bar-success">
												</div>
											</div>
											<div class="tab-content">
												<div class="alert alert-danger display-none">
													<button class="close" data-dismiss="alert"></button>
													Please fill all required fields!
												</div>
												<div class="alert alert-success display-none">
													<button class="close" data-dismiss="alert"></button>
													Your form validation is successful!
												</div>
												<div class="tab-pane active" id="tab1">
													<h3 class="block font-green">Contract Details:</h3>
													<input type="hidden" name="currency_symbol" id="currency_symbol" value="<?php $invoice->select_currency(); ?>" readonly>
													<div class="form-group">
														<label class="control-label col-md-3">Invoice Type <span class="required">
														* </span></label>
														<div class="col-md-4">
															<select name="invoice_type" id="invoice_type" class="form-control select2me" data-placeholder="Select Invoice Type...">
																<option value=""></option>
																	<?php $invoice->select_invoice_type(); ?>
															</select>
															<span class="help-block font-green-seagreen">
															Examples: Normal Invoice or Recurring Invoice</span>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3">Invoice Status <span class="required">
														* </span></label>
														<div class="col-md-4">
															<select name="invoice_status" id="invoice_status" class="form-control select2me" data-placeholder="Select Invoice Status...">
																<option value=""></option>
																	<?php $invoice->select_invoice_status(); ?>
															</select>
															<span class="help-block font-green-seagreen">
															Examples: Paid, Cancelled, Unpaid or Partially Paid</span>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3">Invoice Number <span class="required">
														* </span>
														</label>
														<div class="col-md-4">
															<input type="text" class="form-control" name="invoice_number" id="invoice_number" placeholder="" onkeyup="check_invoice_number();"/>
															<span class="help-block font-green-seagreen">Example: INV-16-008311</span>
															<span class="help-block font-green-seagreen">Note: If Invoice Number already exist will update you.</span>
														</div>
														<span class="help-block font-green-seagreen" id="checked_invoice_status"></span>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3">Invoice Date <span class="required">
														* </span>
														</label>
														<div class="col-md-4">
															<input type="text" class="form-control date-picker" name="invoice_date" id="invoice_date"/>
															<span class="help-block font-green-seagreen">
															Select invoice date </span>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3">Due Date <span class="required">
														* </span>
														</label>
														<div class="col-md-4">
															<input type="text" class="form-control date-picker" name="invoice_due_date" id="invoice_due_date"/>
															<span class="help-block font-green-seagreen">
															Select invoice due date </span>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3">Invoice Prepared By <span class="required">
														* </span></label>
														<div class="col-md-4">
															<select name="invoice_prepared_by" id="invoice_prepared_by" class="form-control select2me" data-placeholder="Select Invoice Prepared By...">
																<option value=""></option>
																	<?php $invoice->select_prepared_by(); ?>
															</select>
															<span class="help-block font-green-seagreen">
															Example of invoice prepared by: Sales Dept. </span>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3">Purchase Order Number </label>
														<div class="col-md-4">
															<input type="text" class="form-control" name="purchase_order" placeholder="" id="purchase_order"/>
															<span class="help-block font-green-seagreen">Purchase order provided by your customer.</span>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3">Country of Origin <span class="required">
														* </span></label>
														<div class="col-md-4">
															<select name="country_origin" id="country_origin" class="form-control select2me" data-placeholder="Select Country of Origin...">
																<option value=""></option>
																	<?php $invoice->select_origin_country(); ?>
															</select>
															<span class="help-block font-green-seagreen">
															Example: Pakistan </span>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3">Port of Shipment <span class="required">
														* </span></label>
														<div class="col-md-4">
															<select name="shipment_port" id="shipment_port" class="form-control select2me" data-placeholder="Select Port of Shipment...">
																<option value=""></option>
																	<?php $invoice->select_shipment_port(); ?>
															</select>
															<span class="help-block font-green-seagreen">
															Example: Sialkot, Pakistan </span>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3">Port of Destination <span class="required">
														* </span></label>
														<div class="col-md-4">
															<select name="destination_port" id="destination_port" class="form-control select2me" data-placeholder="Select Port of Destination...">
																<option value=""></option>
																	<?php $invoice->select_destination_port(); ?>
															</select>
															<span class="help-block font-green-seagreen">
															Example: Lisbon, Portugal </span>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3">Terms of Sale / Incoterms &reg; 2010 <span class="required">
														* </span></label>
														<div class="col-md-4">
															<select name="sales_terms" id="sales_terms" class="form-control select2me" data-placeholder="Select Terms of Sale / Incoterms &reg; 2010...">
																<option value=""></option>
																	<?php $invoice->select_incoterms(); ?>
															</select>
															<span class="help-block font-green-seagreen">
															Example: COST AND FREIGHT (CFR) </span>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3">Terms of Payment <span class="required">
														* </span></label>
														<div class="col-md-4">
															<select name="payment_terms" id="payment_terms" class="form-control select2me" data-placeholder="Select Terms of Payment...">
																<option value=""></option>
																	<?php $invoice->select_payment_terms(); ?>
															</select>
															<span class="help-block font-green-seagreen">
															Example: Cash in Advance </span>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3">Mode of Transport <span class="required">
														* </span></label>
														<div class="col-md-4">
															<select name="transport_mode" id="transport_mode" class="form-control select2me" data-placeholder="Select Mode of Transport...">
																<option value=""></option>
																	<?php $invoice->select_transport_mode(); ?>
															</select>
															<span class="help-block font-green-seagreen">
															Example: Airway Shipment </span>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3">Exporting Carrier <span class="required">
														* </span></label>
														<div class="col-md-4">
															<select name="exporting_carier" id="exporting_carier" class="form-control select2me" data-placeholder="Select Exporting Carrier...">
																<option value=""></option>
																	<?php $invoice->select_exporting_carier(); ?>
															</select>
															<span class="help-block font-green-seagreen">
															Example: Fedex </span>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3">Freight <span class="required">
														* </span></label>
														<div class="col-md-4">
															<select name="freight" id="freight" class="form-control select2me" data-placeholder="Select Freight...">
																<option value=""></option>
																	<?php $invoice->select_freight(); ?>
															</select>
															<span class="help-block font-green-seagreen">
															Example: Prepaid </span>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3">Shipment Date <span class="required">
														* </span></label>
														<div class="col-md-4">
															<input type="text" class="form-control date-picker" id="shipment_date" name="shipment_date"/>
															<span class="help-block font-green-seagreen">
															Select shipment date </span>
														</div>
													</div>
												</div>
												<div class="tab-pane" id="tab2">
													<h3 class="block font-green">Consignee / Customer Details:</h3>
													<div class="form-group" id="address">
														<label class="control-label col-md-3">Select Customer <span class="required">
														* </span></label>
														<div class="col-md-7">
															<select name="customer_details" id="customer_details" class="form-control select2me" data-placeholder="Select Customer Details...">
															<option></option>
																<?php $invoice->select_customer(); ?>
															</select>
															<input type="hidden" id="customer_id" name="customer_id" readonly>
															<span class="help-block font-green"><strong>Important!</strong> Customer's contact details will load automatically after Customer selection.</span>
														</div>
													</div>
												</div>
												<div class="tab-pane" id="tab3">
													<h3 class="block font-green">Invoice Details:</h3>
													<div class="col-md-12">
														<div class="table-responsive">
														  <table id="items" class="table">
															  <tr class="invoice-items-th">
																  <th width="20%">Article / Reference #</th>
																  <th width="40%">Description of Goods &amp; Services</th>
																  <th width="15%">Unit Price <?php $invoice->select_currency(); ?></th>
																  <th width="10%">Quantity</th>
																  <th width="15%" align="right"><font class="pull-right">Total</font></th>
															  </tr>
															  <tr class="item-row">
																  <td class="item-name">
																	  <div class="delete-wpr">
																		  <input type="text" class="form-control item-name" placeholder="Article / Reference" name="product_name[]">
																	  </div>
																  </td>
																  <td class="description">
                                    <textarea class="form-control" rows="1" placeholder="Description of Goods &amp; Services" name="product_description[]" id="ProductDescription"></textarea>
																  </td>
																  <td>
                                    <input type="text" class="cost form-control" placeholder="0.00" name="product_price[]" id="ProductPrice">
																  </td>
																  <td>
                                    <input type="text" class="qty form-control" placeholder="0" name="product_qty[]" id="ProductQuantity">
                                  </td>
																  <td align="right"><span class="price">0.00</span></td>
															  </tr>
															  <tr id="hiderow">
																  <td colspan="5">
                                    <a id="addrow" class="btn btn-success" href="javascript:;" title="Add a row"><span class="glyphicon glyphicon-plus-sign"></span> Add more products</a>
                                  </td>
															  </tr>
															  <tr>
																  <td colspan="2" class="blank"> </td>
																  <td colspan="2" class="total-line" align="right">Subtotal <?php $invoice->select_currency(); ?>:</td>
																  <td class="total-value" align="right"><div id="sub_total">0.00</div></td>
															  </tr>
															  <tr>
																  <td colspan="2" class="blank"> </td>
																  <td colspan="2" class="total-line" align="right">
																 <span style="padding-right:5px;">VAT</span><span class="pull-right" style="padding-left:5px;"><?php $invoice->select_currency(); ?> :</span>
																  <select id="invoice_tax_rate" name="invoice_tax_rate" class="form-control pull-right" style="max-width:130px;">
																	<option value="1.0">None</option>
																		<?php $invoice->select_tax(); ?>
																  </select>
																  </td>
																  <td class="total-value" align="right">
																	<div id="tax_total">0.00</div>
																	<input type="hidden" id="tax_total" name="tax_total" value="">
																  </td>
															  </tr>
															  <tr class="item-tax">
																  <td colspan="2" class="blank"> </td>
																  <td colspan="2" class="total-line" align="right">After VAT / Tax Total <?php $invoice->select_currency(); ?>:</td>
																  <td class="total-value" align="right"><div id="after_tax_total">0.00</div></td>
															  </tr>
															  <tr>
																  <td colspan="2" class="blank"> </td>
																  <td colspan="2" class="total-line" align="right">
																 <span style="padding-right:5px;">Discount</span><span class="pull-right" style="padding-left:5px;"><?php $invoice->select_currency(); ?> :</span>
																  <select id="invoice_discount_rate" name="invoice_discount_rate" class="form-control pull-right" style="max-width:130px;">
																	<option value="1.0">None</option>
																		<?php $invoice->select_discount(); ?>
																  </select>
																  </td>
																  <td class="total-value" align="right">
																	<div id="discount_total">0.00</div>
																	<input type="hidden" id="discount_total" name="discount_total" value="">
																  </td>
															  </tr>
															  <tr>
																  <td colspan="2" class="blank"> </td>
																  <td colspan="2" class="total-line" align="right">After Discount Total <?php $invoice->select_currency(); ?>:</td>
																  <td class="total-value" align="right"><div id="after_discount_total">0.00</div></td>
															  </tr>
															  <tr>
																  <td colspan="2" class="blank"> </td>
																  <td colspan="2" class="total-line" align="right" style="line-height:35px;">Insurance <?php $invoice->select_currency(); ?>:</td>
																  <td class="total-value">
																	  <div style="margin-right:-5px;">
																		<input type="text" id="insurance" class="form-control text-align-right" placeholder="0.00" name="invoice_insurance" value="0.00"/>
																	  </div>
																  </td>
															  </tr>
															  <tr>
																  <td colspan="2" class="blank"> </td>
																  <td colspan="2" class="total-line" align="right">After Insurance Total <?php $invoice->select_currency(); ?>:</td>
																  <td class="total-value" align="right"><div id="after_insurance_total">0.00</div></td>
															  </tr>
															  <tr>
																  <td colspan="2" class="blank"> </td>
																  <td colspan="2" class="total-line" align="right" style="line-height:35px;">Shipping &amp; Handling <?php $invoice->select_currency(); ?>:</td>
																  <td class="total-value">
																	  <div style="margin-right:-5px;">
																		  <input type="text" id="shipping_handling" class="form-control text-align-right" placeholder="0.00" name="shipping_handling"  value="0.00"/>
																	  </div>
																  </td>
															  </tr>
															  <tr>
																  <td colspan="2" class="blank"> </td>
																  <td colspan="2" class="total-line" align="right">After Shipping &amp; Handling Total <?php $invoice->select_currency(); ?>:</td>
																  <td class="total-value" align="right"><div id="after_shipping_total">0.00</div></td>
															  </tr>
															  <tr>
																  <td colspan="2" class="blank"> </td>
																  <td colspan="2" class="total-line" align="right">Total <?php $invoice->select_currency(); ?>:</td>
																  <td class="total-value" align="right"><div id="total">0.00</div></td>
															  </tr>
															  <tr>
																  <td colspan="2" class="blank"> </td>
																  <td colspan="2" class="total-line" align="right" style="line-height:35px;">Total Paid <?php $invoice->select_currency(); ?>:</td>
																  <td class="total-value">
																	  <div style="margin-right:-5px;">
																		<input type="text" id="paid" class="form-control text-align-right" placeholder="0.00" name="paid">
																	  </div>
																  </td>
															  </tr>
															  <tr>
																  <td colspan="2" class="blank"> </td>
																  <td colspan="2" class="total-line balance" align="right"><font class="invoice-total"><h2>Total Due <?php $invoice->select_currency(); ?>:</h2></font></td>
																  <td class="total-value balance" align="right"><h2><div class="due">0.00</div></h2></td>
															  </tr>
														  </table>
														</div>
														<h4>Amount in Words <?php $invoice->select_currency(); ?>:</h4>
														<hr>
														<div class="col-md-12">
															<input type="text" class="form-control" name="amount_due" id="amount_due" placeholder="Insert Amount in words here" />
														</div>
														<div class="col-md-12">
															<span class="help-block font-green-seagreen">&nbsp;</span>
														</div>
														<h4>Comments or Special Instructions:</h4>
														<hr>
														<div class="col-md-12">
															<textarea class="form-control" name="invoice_note" id="invoice_note" rows="3"></textarea>
															<span class="help-block font-green-seagreen">
															Example for Comments or Special Instructions: Total amount should be paid within 14 working days from invoice date.</span>
														</div>
														<div class="col-md-12">
															<span class="help-block font-green-seagreen">&nbsp;</span>
														</div>
													</div>
												</div>
												<div class="tab-pane" id="tab4">
													<h3 class="inline font-green">Confirm Details For Sales Invoice# <span class="font-green" id="info_invoice_number"></span></h3>
													<h4 class="form-section">Customer Details:</h4>
													<div class="form-group">
														<label class="control-label col-md-3">Customer Service Identification #</label>
														<div>
															<input class="form-control-static col-md-9" name="csid" id="csid" data-display="csid" style="border: 0; overflow: hidden; outline:none; resize: none;" readonly>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3">Company Name:</label>
														<div>
															<input class="form-control-static col-md-9" name="company_name" id="company_name" data-display="company_name" style="border: 0; overflow: hidden; outline:none; resize: none;" readonly>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3">Customer Title:</label>
														<div>
															<input class="form-control-static col-md-9" name="title" id="title" data-display="title" style="border: 0; overflow: hidden; outline:none; resize: none;" readonly>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3">Customer Name:</label>
														<div>
															<input class="form-control-static col-md-9" name="customer_name" id="customer_name" data-display="customer_name" style="border: 0; overflow: hidden; outline:none; resize: none;" readonly>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3">Customer Job Title:</label>
														<div>
															<input class="form-control-static col-md-9" name="job_title" id="job_title" data-display="job_title" style="border: 0; overflow: hidden; outline:none; resize: none;" readonly>
														</div>
													</div>
													<h4 class="form-section">Customer Billing Details:</h4>
													<div class="form-group">
														<label class="control-label col-md-3">Customer Billing Address:</label>
														<div class="col-md-9">
															<textarea class="form-control-static" name="billing_address" id="billing_address" data-display="billing_address" rows="1" cols="99" style="border: 0; overflow: hidden; outline:none; resize: none;" readonly>
															</textarea>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3">Billing City:</label>
														<div>
															<input class="form-control-static col-md-9" name="billing_city" id="billing_city" data-display="billing_city" style="border: 0; overflow: hidden; outline:none; resize: none;" readonly>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3">Billing State:</label>
														<div>
															<input class="form-control-static col-md-9" name="billing_state" id="billing_state" data-display="billing_state" style="border: 0; overflow: hidden; outline:none; resize: none;" readonly>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3">Billing Zipcode:</label>
														<div>
															<input class="form-control-static col-md-9" name="billing_zip" id="billing_zip" data-display="billing_zip" style="border: 0; overflow: hidden; outline:none; resize: none;" readonly>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3">Billing Country:</label>
														<div>
															<input class="form-control-static col-md-9" name="billing_country" id="billing_country" data-display="billing_country" style="border: 0; overflow: hidden; outline:none; resize: none;" readonly>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3">Billing Phone 1:</label>
														<div>
															<input class="form-control-static col-md-9" name="billing_phone1" id="billing_phone1" data-display="billing_phone1" style="border: 0; overflow: hidden; outline:none; resize: none;" readonly>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3">Billing Phone 2:</label>
														<div>
															<input class="form-control-static col-md-9" name="billing_phone2" id="billing_phone2" data-display="billing_phone2" style="border: 0; overflow: hidden; outline:none; resize: none;" readonly>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3">Billing Mobile:</label>
														<div>
															<input class="form-control-static col-md-9" name="billing_mobile" id="billing_mobile" data-display="billing_mobile" style="border: 0; overflow: hidden; outline:none; resize: none;" readonly>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3">Billing Fax:</label>
														<div>
															<input class="form-control-static col-md-9" name="billing_fax" id="billing_fax" data-display="billing_fax" style="border: 0; overflow: hidden; outline:none; resize: none;" readonly>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3">Billing Email 1:</label>
														<div>
															<input class="form-control-static col-md-9" name="billing_email1" id="billing_email1" data-display="billing_email1" style="border: 0; overflow: hidden; outline:none; resize: none;" readonly>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3">Billing Email 2:</label>
														<div>
															<input class="form-control-static col-md-9" name="billing_email2" id="billing_email2" data-display="billing_email2" style="border: 0; overflow: hidden; outline:none; resize: none;" readonly>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3">Billing Email 3:</label>
														<div>
															<input class="form-control-static col-md-9" name="billing_email3" id="billing_email3" data-display="billing_email3" style="border: 0; overflow: hidden; outline:none; resize: none;" readonly>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3">Billing Website:</label>
														<div>
															<input class="form-control-static col-md-9" name="billing_website" id="billing_website" data-display="billing_website" style="border: 0; overflow: hidden; outline:none; resize: none;" readonly>
														</div>
													</div>
													<h4 class="form-section">Customer Shipping Details:</h4>
													<div class="form-group">
														<label class="control-label col-md-3">Customer Shipping Address:</label>
														<div class="col-md-9">
															<textarea class="form-control-static" name="shipping_address" id="shipping_address" data-display="shipping_address" rows="1" cols="99" style="border: 0; overflow: hidden; outline:none; resize: none;" readonly>
															</textarea>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3">Shipping City:</label>
														<div>
															<input class="form-control-static col-md-9" name="shipping_city" id="shipping_city" data-display="shipping_city" style="border: 0; overflow: hidden; outline:none; resize: none;" readonly>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3">Shipping State:</label>
														<div>
															<input class="form-control-static col-md-9" name="shipping_state" id="shipping_state" data-display="shipping_state" style="border: 0; overflow: hidden; outline:none; resize: none;" readonly>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3">Shipping Zipcode:</label>
														<div>
															<input class="form-control-static col-md-9" name="shipping_zip" id="shipping_zip" data-display="shipping_zip" style="border: 0; overflow: hidden; outline:none; resize: none;" readonly>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3">Shipping Country:</label>
														<div>
															<input class="form-control-static col-md-9" name="shipping_country" id="shipping_country" data-display="shipping_country" style="border: 0; overflow: hidden; outline:none; resize: none;" readonly>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3">Shipping Phone 1:</label>
														<div>
															<input class="form-control-static col-md-9" name="shipping_phone1" id="shipping_phone1" data-display="shipping_phone1" style="border: 0; overflow: hidden; outline:none; resize: none;" readonly>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3">Shipping Phone 2:</label>
														<div>
															<input class="form-control-static col-md-9" name="shipping_phone2" id="shipping_phone2" data-display="shipping_phone2" style="border: 0; overflow: hidden; outline:none; resize: none;" readonly>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3">Shipping Mobile:</label>
														<div>
															<input class="form-control-static col-md-9" name="shipping_mobile" id="shipping_mobile" data-display="shipping_mobile" style="border: 0; overflow: hidden; outline:none; resize: none;" readonly>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3">Shipping Fax:</label>
														<div>
															<input class="form-control-static col-md-9" name="shipping_fax" id="shipping_fax" data-display="shipping_fax" style="border: 0; overflow: hidden; outline:none; resize: none;" readonly>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3">Shipping Email 1:</label>
														<div>
															<input class="form-control-static col-md-9" name="shipping_email1" id="shipping_email1" data-display="shipping_email1" style="border: 0; overflow: hidden; outline:none; resize: none;" readonly>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3">Shipping Email 2:</label>
														<div>
															<input class="form-control-static col-md-9" name="shipping_email2" id="shipping_email2" data-display="shipping_email2" style="border: 0; overflow: hidden; outline:none; resize: none;" readonly>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3">Shipping Email 3:</label>
														<div>
															<input class="form-control-static col-md-9" name="shipping_email3" id="shipping_email3" data-display="shipping_email3" style="border: 0; overflow: hidden; outline:none; resize: none;" readonly>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3">Shipping Website:</label>
														<div>
															<input class="form-control-static col-md-9" name="shipping_website" id="shipping_website" data-display="shipping_website" style="border: 0; overflow: hidden; outline:none; resize: none;" readonly>
														</div>
													</div>
													<h4 class="form-section">Contract Details:</h4>
													<div class="form-group">
														<label class="control-label col-md-3">Invoice Type:</label>
														<div class="col-md-9">
															<p class="form-control-static" id="info_invoice_type" data-display="info_invoice_type">
															</p>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3">Invoice Status:</label>
														<div class="col-md-9">
															<p class="form-control-static" id="info_invoice_status" data-display="info_invoice_status">
															</p>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3">Invoice Date:</label>
														<div class="col-md-9">
															<p class="form-control-static" id="info_invoice_date" data-display="info_invoice_date">
															</p>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3">Due Date:</label>
														<div class="col-md-9">
															<p class="form-control-static" id="info_invoice_due_date" data-display="info_invoice_due_date">
															</p>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3">Invoice Prepared By:</label>
														<div class="col-md-9">
															<p class="form-control-static" id="info_invoice_prepared_by" data-display="info_invoice_prepared_by">
															</p>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3">Purchase Order Number:</label>
														<div class="col-md-9">
															<p class="form-control-static" id="info_purchase_order" data-display="info_purchase_order">
															</p>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3">Country of Origin:</label>
														<div class="col-md-9">
															<p class="form-control-static" id="info_country_origin" data-display="info_country_origin">
															</p>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3">Port of Shipment:</label>
														<div class="col-md-9">
															<p class="form-control-static" id="info_shipment_port" data-display="info_shipment_port">
															</p>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3">Port of Destination:</label>
														<div class="col-md-9">
															<p class="form-control-static" id="info_destination_port" data-display="info_destination_port">
															</p>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3">Terms of Sale / Incoterms &reg; 2010:</label>
														<div class="col-md-9">
															<p class="form-control-static" id="info_sales_terms" data-display="info_sales_terms">
															</p>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3">Terms of Payment:</label>
														<div class="col-md-9">
															<p class="form-control-static" id="info_payment_terms" data-display="info_payment_terms">
															</p>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3">Mode of Transport:</label>
														<div class="col-md-9">
															<p class="form-control-static" id="info_transport_mode" data-display="info_transport_mode">
															</p>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3">Exporting Carrier:</label>
														<div class="col-md-9">
															<p class="form-control-static" id="info_exporting_carier" data-display="info_exporting_carier">
															</p>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3">Freight:</label>
														<div class="col-md-9">
															<p class="form-control-static" id="info_freight" data-display="info_freight">
															</p>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3">Shipment Date:</label>
														<div class="col-md-9">
															<p class="form-control-static" id="info_shipment_date" data-display="info_shipment_date">
															</p>
														</div>
													</div>
													<h4 class="form-section">Invoice Details:</h4>
													<div class="form-group">
														<label class="control-label col-md-3">Subtotal <?php $invoice->select_currency(); ?>:</label>
														<div class="col-md-9">
															<p class="form-control-static" id="info_sub_total" data-display="info_sub_total">
															</p>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3">VAT / TAX <?php $invoice->select_currency(); ?>:</label>
														<div class="col-md-9">
															<p class="form-control-static" id="info_tax" data-display="info_tax">
															</p>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3">Discount <?php $invoice->select_currency(); ?>:</label>
														<div class="col-md-9">
															<p class="form-control-static" id="info_discount" data-display="info_discount">
															</p>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3">Insurance <?php $invoice->select_currency(); ?>:</label>
														<div class="col-md-9">
															<p class="form-control-static" id="info_insurance" data-display="info_insurance">
															</p>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3">Shipping &amp; Handling <?php $invoice->select_currency(); ?>:</label>
														<div class="col-md-9">
															<p class="form-control-static" id="info_shipping_handling" data-display="info_shipping_handling">
															</p>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3">Total <?php $invoice->select_currency(); ?>:</label>
														<div class="col-md-9">
															<p class="form-control-static" id="info_total" data-display="info_total">
															</p>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3">Amount Paid <?php $invoice->select_currency(); ?>:</label>
														<div class="col-md-9">
															<p class="form-control-static" id="info_paid" data-display="info_paid">
															</p>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3">Total Amount Due <?php $invoice->select_currency(); ?>:</label>
														<div class="col-md-9">
															<b><p class="form-control-static" id="info_due" data-display="info_due">
															</p></b>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3">Total Amount Words <?php $invoice->select_currency(); ?>:</label>
														<div class="col-md-9">
															<b><p class="form-control-static" id="info_amount_due" data-display="info_amount_due">
															</p></b>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3">Comments or Special Instructions:</label>
														<div class="col-md-9">
															<p class="form-control-static" id="info_invoice_note" data-display="info_invoice_note"></p>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="form-actions">
											<div class="row">
												<div class="col-md-offset-3 col-md-9">
													<a href="javascript:;" class="btn default button-previous">
													<i class="fa fa-arrow-circle-left"></i> Back </a>
													<a href="javascript:;" class="btn blue button-next">
													Continue <i class="fa fa-arrow-circle-right"></i>
													</a>
													<button type="submit" name="Submit" class="btn green button-submit" value="create"><i class="fa fa-check-circle"></i> Save Sales Invoice</button>
												</div>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
					<!-- END EXAMPLE TABLE PORTLET-->
				</div>
			</div>
			<!-- END PAGE CONTENT-->
		</div>
	</div>
	<!-- END CONTENT -->	<!-- BEGIN QUICK SIDEBAR -->
	<a href="javascript:;" class="page-quick-sidebar-toggler"><i class="icon-close"></i></a>
	<div class="page-quick-sidebar-wrapper">
		<div class="page-quick-sidebar">
			<div class="nav-justified">
				<ul class="nav nav-tabs nav-justified">
					<li class="active">
						<a href="#quick_sidebar_tab_1" data-toggle="tab">
						Users <span class="badge badge-danger">2</span>
						</a>
					</li>
					<li>
						<a href="#quick_sidebar_tab_2" data-toggle="tab">
						Alerts <span class="badge badge-success">7</span>
						</a>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
						More<i class="fa fa-angle-down"></i>
						</a>
						<ul class="dropdown-menu pull-right" role="menu">
							<li>
								<a href="#quick_sidebar_tab_3" data-toggle="tab">
								<i class="icon-bell"></i> Alerts </a>
							</li>
							<li>
								<a href="#quick_sidebar_tab_3" data-toggle="tab">
								<i class="icon-info"></i> Notifications </a>
							</li>
							<li>
								<a href="#quick_sidebar_tab_3" data-toggle="tab">
								<i class="icon-speech"></i> Activities </a>
							</li>
							<li class="divider">
							</li>
							<li>
								<a href="#quick_sidebar_tab_3" data-toggle="tab">
								<i class="icon-settings"></i> Settings </a>
							</li>
						</ul>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active page-quick-sidebar-chat" id="quick_sidebar_tab_1">
						<div class="page-quick-sidebar-chat-users" data-rail-color="#ddd" data-wrapper-class="page-quick-sidebar-list">
							<h3 class="list-heading">Staff</h3>
							<ul class="media-list list-items">
								<li class="media">
									<div class="media-status">
										<span class="badge badge-success">8</span>
									</div>
									<img class="media-object" src="assets/admin/layout/img/avatar3.jpg" alt="...">
									<div class="media-body">
										<h4 class="media-heading">Bob Nilson</h4>
										<div class="media-heading-sub">
											 Project Manager
										</div>
									</div>
								</li>
								<li class="media">
									<img class="media-object" src="assets/admin/layout/img/avatar1.jpg" alt="...">
									<div class="media-body">
										<h4 class="media-heading">Nick Larson</h4>
										<div class="media-heading-sub">
											 Art Director
										</div>
									</div>
								</li>
								<li class="media">
									<div class="media-status">
										<span class="badge badge-danger">3</span>
									</div>
									<img class="media-object" src="assets/admin/layout/img/avatar4.jpg" alt="...">
									<div class="media-body">
										<h4 class="media-heading">Deon Hubert</h4>
										<div class="media-heading-sub">
											 CTO
										</div>
									</div>
								</li>
								<li class="media">
									<img class="media-object" src="assets/admin/layout/img/avatar2.jpg" alt="...">
									<div class="media-body">
										<h4 class="media-heading">Ella Wong</h4>
										<div class="media-heading-sub">
											 CEO
										</div>
									</div>
								</li>
							</ul>
							<h3 class="list-heading">Customers</h3>
							<ul class="media-list list-items">
								<li class="media">
									<div class="media-status">
										<span class="badge badge-warning">2</span>
									</div>
									<img class="media-object" src="assets/admin/layout/img/avatar6.jpg" alt="...">
									<div class="media-body">
										<h4 class="media-heading">Lara Kunis</h4>
										<div class="media-heading-sub">
											 CEO, Loop Inc
										</div>
										<div class="media-heading-small">
											 Last seen 03:10 AM
										</div>
									</div>
								</li>
								<li class="media">
									<div class="media-status">
										<span class="label label-sm label-success">new</span>
									</div>
									<img class="media-object" src="assets/admin/layout/img/avatar7.jpg" alt="...">
									<div class="media-body">
										<h4 class="media-heading">Ernie Kyllonen</h4>
										<div class="media-heading-sub">
											 Project Manager,<br>
											 SmartBizz PTL
										</div>
									</div>
								</li>
								<li class="media">
									<img class="media-object" src="assets/admin/layout/img/avatar8.jpg" alt="...">
									<div class="media-body">
										<h4 class="media-heading">Lisa Stone</h4>
										<div class="media-heading-sub">
											 CTO, Keort Inc
										</div>
										<div class="media-heading-small">
											 Last seen 13:10 PM
										</div>
									</div>
								</li>
								<li class="media">
									<div class="media-status">
										<span class="badge badge-success">7</span>
									</div>
									<img class="media-object" src="assets/admin/layout/img/avatar9.jpg" alt="...">
									<div class="media-body">
										<h4 class="media-heading">Deon Portalatin</h4>
										<div class="media-heading-sub">
											 CFO, H&D LTD
										</div>
									</div>
								</li>
								<li class="media">
									<img class="media-object" src="assets/admin/layout/img/avatar10.jpg" alt="...">
									<div class="media-body">
										<h4 class="media-heading">Irina Savikova</h4>
										<div class="media-heading-sub">
											 CEO, Tizda Motors Inc
										</div>
									</div>
								</li>
								<li class="media">
									<div class="media-status">
										<span class="badge badge-danger">4</span>
									</div>
									<img class="media-object" src="assets/admin/layout/img/avatar11.jpg" alt="...">
									<div class="media-body">
										<h4 class="media-heading">Maria Gomez</h4>
										<div class="media-heading-sub">
											 Manager, Infomatic Inc
										</div>
										<div class="media-heading-small">
											 Last seen 03:10 AM
										</div>
									</div>
								</li>
							</ul>
						</div>
						<div class="page-quick-sidebar-item">
							<div class="page-quick-sidebar-chat-user">
								<div class="page-quick-sidebar-nav">
									<a href="javascript:;" class="page-quick-sidebar-back-to-list"><i class="icon-arrow-left"></i>Back</a>
								</div>
								<div class="page-quick-sidebar-chat-user-messages">
									<div class="post out">
										<img class="avatar" alt="" src="assets/admin/layout/img/avatar3.jpg"/>
										<div class="message">
											<span class="arrow"></span>
											<a href="javascript:;" class="name">Bob Nilson</a>
											<span class="datetime">20:15</span>
											<span class="body">
											When could you send me the report ? </span>
										</div>
									</div>
									<div class="post in">
										<img class="avatar" alt="" src="assets/admin/layout/img/avatar2.jpg"/>
										<div class="message">
											<span class="arrow"></span>
											<a href="javascript:;" class="name">Ella Wong</a>
											<span class="datetime">20:15</span>
											<span class="body">
											Its almost done. I will be sending it shortly </span>
										</div>
									</div>
									<div class="post out">
										<img class="avatar" alt="" src="assets/admin/layout/img/avatar3.jpg"/>
										<div class="message">
											<span class="arrow"></span>
											<a href="javascript:;" class="name">Bob Nilson</a>
											<span class="datetime">20:15</span>
											<span class="body">
											Alright. Thanks! :) </span>
										</div>
									</div>
									<div class="post in">
										<img class="avatar" alt="" src="assets/admin/layout/img/avatar2.jpg"/>
										<div class="message">
											<span class="arrow"></span>
											<a href="javascript:;" class="name">Ella Wong</a>
											<span class="datetime">20:16</span>
											<span class="body">
											You are most welcome. Sorry for the delay. </span>
										</div>
									</div>
									<div class="post out">
										<img class="avatar" alt="" src="assets/admin/layout/img/avatar3.jpg"/>
										<div class="message">
											<span class="arrow"></span>
											<a href="javascript:;" class="name">Bob Nilson</a>
											<span class="datetime">20:17</span>
											<span class="body">
											No probs. Just take your time :) </span>
										</div>
									</div>
									<div class="post in">
										<img class="avatar" alt="" src="assets/admin/layout/img/avatar2.jpg"/>
										<div class="message">
											<span class="arrow"></span>
											<a href="javascript:;" class="name">Ella Wong</a>
											<span class="datetime">20:40</span>
											<span class="body">
											Alright. I just emailed it to you. </span>
										</div>
									</div>
									<div class="post out">
										<img class="avatar" alt="" src="assets/admin/layout/img/avatar3.jpg"/>
										<div class="message">
											<span class="arrow"></span>
											<a href="javascript:;" class="name">Bob Nilson</a>
											<span class="datetime">20:17</span>
											<span class="body">
											Great! Thanks. Will check it right away. </span>
										</div>
									</div>
									<div class="post in">
										<img class="avatar" alt="" src="assets/admin/layout/img/avatar2.jpg"/>
										<div class="message">
											<span class="arrow"></span>
											<a href="javascript:;" class="name">Ella Wong</a>
											<span class="datetime">20:40</span>
											<span class="body">
											Please let me know if you have any comment. </span>
										</div>
									</div>
									<div class="post out">
										<img class="avatar" alt="" src="assets/admin/layout/img/avatar3.jpg"/>
										<div class="message">
											<span class="arrow"></span>
											<a href="javascript:;" class="name">Bob Nilson</a>
											<span class="datetime">20:17</span>
											<span class="body">
											Sure. I will check and buzz you if anything needs to be corrected. </span>
										</div>
									</div>
								</div>
								<div class="page-quick-sidebar-chat-user-form">
									<div class="input-group">
										<input type="text" class="form-control" placeholder="Type a message here...">
										<div class="input-group-btn">
											<button type="button" class="btn blue"><i class="icon-paper-clip"></i></button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane page-quick-sidebar-alerts" id="quick_sidebar_tab_2">
						<div class="page-quick-sidebar-alerts-list">
							<h3 class="list-heading">General</h3>
							<ul class="feeds list-items">
								<li>
									<div class="col1">
										<div class="cont">
											<div class="cont-col1">
												<div class="label label-sm label-info">
													<i class="fa fa-check"></i>
												</div>
											</div>
											<div class="cont-col2">
												<div class="desc">
													 You have 4 pending tasks. <span class="label label-sm label-warning ">
													Take action <i class="fa fa-share"></i>
													</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col2">
										<div class="date">
											 Just now
										</div>
									</div>
								</li>
								<li>
									<a href="javascript:;">
									<div class="col1">
										<div class="cont">
											<div class="cont-col1">
												<div class="label label-sm label-success">
													<i class="fa fa-bar-chart-o"></i>
												</div>
											</div>
											<div class="cont-col2">
												<div class="desc">
													 Finance Report for year 2013 has been released.
												</div>
											</div>
										</div>
									</div>
									<div class="col2">
										<div class="date">
											 20 mins
										</div>
									</div>
									</a>
								</li>
								<li>
									<div class="col1">
										<div class="cont">
											<div class="cont-col1">
												<div class="label label-sm label-danger">
													<i class="fa fa-user"></i>
												</div>
											</div>
											<div class="cont-col2">
												<div class="desc">
													 You have 5 pending membership that requires a quick review.
												</div>
											</div>
										</div>
									</div>
									<div class="col2">
										<div class="date">
											 24 mins
										</div>
									</div>
								</li>
								<li>
									<div class="col1">
										<div class="cont">
											<div class="cont-col1">
												<div class="label label-sm label-info">
													<i class="fa fa-shopping-cart"></i>
												</div>
											</div>
											<div class="cont-col2">
												<div class="desc">
													 New order received with <span class="label label-sm label-success">
													Reference Number: DR23923 </span>
												</div>
											</div>
										</div>
									</div>
									<div class="col2">
										<div class="date">
											 30 mins
										</div>
									</div>
								</li>
								<li>
									<div class="col1">
										<div class="cont">
											<div class="cont-col1">
												<div class="label label-sm label-success">
													<i class="fa fa-user"></i>
												</div>
											</div>
											<div class="cont-col2">
												<div class="desc">
													 You have 5 pending membership that requires a quick review.
												</div>
											</div>
										</div>
									</div>
									<div class="col2">
										<div class="date">
											 24 mins
										</div>
									</div>
								</li>
								<li>
									<div class="col1">
										<div class="cont">
											<div class="cont-col1">
												<div class="label label-sm label-info">
													<i class="fa fa-bell-o"></i>
												</div>
											</div>
											<div class="cont-col2">
												<div class="desc">
													 Web server hardware needs to be upgraded. <span class="label label-sm label-warning">
													Overdue </span>
												</div>
											</div>
										</div>
									</div>
									<div class="col2">
										<div class="date">
											 2 hours
										</div>
									</div>
								</li>
								<li>
									<a href="javascript:;">
									<div class="col1">
										<div class="cont">
											<div class="cont-col1">
												<div class="label label-sm label-default">
													<i class="fa fa-briefcase"></i>
												</div>
											</div>
											<div class="cont-col2">
												<div class="desc">
													 IPO Report for year 2013 has been released.
												</div>
											</div>
										</div>
									</div>
									<div class="col2">
										<div class="date">
											 20 mins
										</div>
									</div>
									</a>
								</li>
							</ul>
							<h3 class="list-heading">System</h3>
							<ul class="feeds list-items">
								<li>
									<div class="col1">
										<div class="cont">
											<div class="cont-col1">
												<div class="label label-sm label-info">
													<i class="fa fa-check"></i>
												</div>
											</div>
											<div class="cont-col2">
												<div class="desc">
													 You have 4 pending tasks. <span class="label label-sm label-warning ">
													Take action <i class="fa fa-share"></i>
													</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col2">
										<div class="date">
											 Just now
										</div>
									</div>
								</li>
								<li>
									<a href="javascript:;">
									<div class="col1">
										<div class="cont">
											<div class="cont-col1">
												<div class="label label-sm label-danger">
													<i class="fa fa-bar-chart-o"></i>
												</div>
											</div>
											<div class="cont-col2">
												<div class="desc">
													 Finance Report for year 2013 has been released.
												</div>
											</div>
										</div>
									</div>
									<div class="col2">
										<div class="date">
											 20 mins
										</div>
									</div>
									</a>
								</li>
								<li>
									<div class="col1">
										<div class="cont">
											<div class="cont-col1">
												<div class="label label-sm label-default">
													<i class="fa fa-user"></i>
												</div>
											</div>
											<div class="cont-col2">
												<div class="desc">
													 You have 5 pending membership that requires a quick review.
												</div>
											</div>
										</div>
									</div>
									<div class="col2">
										<div class="date">
											 24 mins
										</div>
									</div>
								</li>
								<li>
									<div class="col1">
										<div class="cont">
											<div class="cont-col1">
												<div class="label label-sm label-info">
													<i class="fa fa-shopping-cart"></i>
												</div>
											</div>
											<div class="cont-col2">
												<div class="desc">
													 New order received with <span class="label label-sm label-success">
													Reference Number: DR23923 </span>
												</div>
											</div>
										</div>
									</div>
									<div class="col2">
										<div class="date">
											 30 mins
										</div>
									</div>
								</li>
								<li>
									<div class="col1">
										<div class="cont">
											<div class="cont-col1">
												<div class="label label-sm label-success">
													<i class="fa fa-user"></i>
												</div>
											</div>
											<div class="cont-col2">
												<div class="desc">
													 You have 5 pending membership that requires a quick review.
												</div>
											</div>
										</div>
									</div>
									<div class="col2">
										<div class="date">
											 24 mins
										</div>
									</div>
								</li>
								<li>
									<div class="col1">
										<div class="cont">
											<div class="cont-col1">
												<div class="label label-sm label-warning">
													<i class="fa fa-bell-o"></i>
												</div>
											</div>
											<div class="cont-col2">
												<div class="desc">
													 Web server hardware needs to be upgraded. <span class="label label-sm label-default ">
													Overdue </span>
												</div>
											</div>
										</div>
									</div>
									<div class="col2">
										<div class="date">
											 2 hours
										</div>
									</div>
								</li>
								<li>
									<a href="javascript:;">
									<div class="col1">
										<div class="cont">
											<div class="cont-col1">
												<div class="label label-sm label-info">
													<i class="fa fa-briefcase"></i>
												</div>
											</div>
											<div class="cont-col2">
												<div class="desc">
													 IPO Report for year 2013 has been released.
												</div>
											</div>
										</div>
									</div>
									<div class="col2">
										<div class="date">
											 20 mins
										</div>
									</div>
									</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="tab-pane page-quick-sidebar-settings" id="quick_sidebar_tab_3">
						<div class="page-quick-sidebar-settings-list">
							<h3 class="list-heading">General Settings</h3>
							<ul class="list-items borderless">
								<li>
									 Enable Notifications <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="success" data-on-text="ON" data-off-color="default" data-off-text="OFF">
								</li>
								<li>
									 Allow Tracking <input type="checkbox" class="make-switch" data-size="small" data-on-color="info" data-on-text="ON" data-off-color="default" data-off-text="OFF">
								</li>
								<li>
									 Log Errors <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="danger" data-on-text="ON" data-off-color="default" data-off-text="OFF">
								</li>
								<li>
									 Auto Sumbit Issues <input type="checkbox" class="make-switch" data-size="small" data-on-color="warning" data-on-text="ON" data-off-color="default" data-off-text="OFF">
								</li>
								<li>
									 Enable SMS Alerts <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="success" data-on-text="ON" data-off-color="default" data-off-text="OFF">
								</li>
							</ul>
							<h3 class="list-heading">System Settings</h3>
							<ul class="list-items borderless">
								<li>
									 Security Level
									<select class="form-control input-inline input-sm input-small">
										<option value="1">Normal</option>
										<option value="2" selected>Medium</option>
										<option value="e">High</option>
									</select>
								</li>
								<li>
									 Failed Email Attempts <input class="form-control input-inline input-sm input-small" value="5"/>
								</li>
								<li>
									 Secondary SMTP Port <input class="form-control input-inline input-sm input-small" value="3560"/>
								</li>
								<li>
									 Notify On System Error <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="danger" data-on-text="ON" data-off-color="default" data-off-text="OFF">
								</li>
								<li>
									 Notify On SMTP Error <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="warning" data-on-text="ON" data-off-color="default" data-off-text="OFF">
								</li>
							</ul>
							<div class="inner-content">
								<button class="btn btn-success"><i class="icon-settings"></i> Save Changes</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- END QUICK SIDEBAR --></div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="page-footer-fixed page-footer-fixed-mobile page-footer">
	<div class="page-footer-inner" style="float: left;">
		<h5><strong>Business Management Systems <sup>&reg;</sup> Exporter's Edition <sup>&trade;</sup></strong></h5>
	</div>
	<div class="page-footer-inner" style="float: right;">
		<h5>&copy; 2011-{function="date('Y')"} Adminbook <sup>&trade;</sup>, Customerbook <sup>&trade;</sup> &amp; Bizzbook <sup>&trade;</sup> are registered trade marks of Mind Works IT Solutions.</h5>
	</div>
	<div class="scroll-to-top">
		<i class="icon-arrow-up"></i>
	</div>
</div>
<!-- END FOOTER --><!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="assets/global/plugins/respond.min.js"></script>
<script src="assets/global/plugins/excanvas.min.js"></script>
<![endif]-->
<script src="assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="assets/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="assets/global/plugins/jquery-validation/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="assets/global/plugins/jquery-validation/js/additional-methods.min.js"></script>
<script type="text/javascript" src="assets/global/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript" src="assets/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
<script type="text/javascript" src="assets/global/plugins/clockface/js/clockface.js"></script>
<script type="text/javascript" src="assets/global/plugins/bootstrap-daterangepicker/moment.min.js"></script>
<script type="text/javascript" src="assets/global/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
<script type="text/javascript" src="assets/global/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
<script type="text/javascript" src="assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
<script type="text/javascript" src="assets/global/plugins/select2/select2.min.js"></script>
<script type='text/javascript' src="assets/global/plugins/invoice/js/invoiceFormAdmin.js"></script>
<script type="text/javascript" src="assets/global/plugins/datatables/media/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js"></script>
<script src="assets/global/plugins/fooTable/js/footable.js"></script>
<script type="text/javascript" src="assets/global/plugins/bootstrap-select/bootstrap-select.min.js"></script>
<script type="text/javascript" src="assets/global/plugins/jquery-multi-select/js/jquery.multi-select.js"></script>
<script type='text/javascript' src="resources/templates/assets/plugins/form-validator/jquery.form-validator.min.js"></script>
<script type='text/javascript' src="resources/templates/assets/js/invoiceForm.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
<script src="assets/admin/layout/scripts/quick-sidebar.js" type="text/javascript"></script>
<script src="assets/admin/layout/scripts/demo.js" type="text/javascript"></script>
<script src="assets/admin/pages/scripts/form-wizard-invoice.js"></script>
<script src="assets/admin/pages/scripts/components-pickers.js"></script>
<script src="assets/admin/pages/scripts/components-dropdowns.js"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() {
	Metronic.init();
	Layout.init();
	QuickSidebar.init();
	Demo.init();
	FormWizardInvoice.init();
	ComponentsPickers.init();
	ComponentsDropdowns.init();
});
</script>
<script>
	$(document).ready(function(){

		/***************************************/
			/* Add info to the last step */
		/***************************************/

		function formDetails (item) {
			$('#'+item+'').change(function () {
				$('#info_'+item+'').html($('#'+item+'').val());
			});
		};
		formDetails('invoice_type');
		formDetails('invoice_status');
		formDetails('invoice_number');
		formDetails('invoice_date');
		formDetails('invoice_due_date');
		formDetails('invoice_prepared_by');
		formDetails('purchase_order');
		formDetails('country_origin');
		formDetails('shipment_port');
		formDetails('destination_port');
		formDetails('sales_terms');
		formDetails('payment_terms');
		formDetails('transport_mode');
		formDetails('exporting_carier');
		formDetails('freight');
		formDetails('shipment_date');
		formDetails('customer_details');
		formDetails('insurance');
		formDetails('shipping_handling');
		formDetails('paid');
		formDetails('amount_due');
		formDetails('invoice_note');

		/***************************************/
		/* End Add info to the last step */
		/***************************************/
		});

		/***************************************/
		/* Start Customer Change Event Handler */
		/***************************************/

		$('#customer_details').change(function(event) {
            $.ajax({
                url     : 'ajaxClients.php',
                type    : 'POST',
                dataType: 'json',
                data    : $('#invoice_form').serialize(),
                success: function( data ) {
                       for(var id in data) {
                              $(id).val( data[id] );
                       }
                }
            });
        });


    /*$('#customer').change(function(event) {

       });*/

		/***************************************/
		/* End Customer Change Event Handler */
		/***************************************/
</script>
<script type="text/javascript">

    function check_invoice_number()
    {
	   var inum=document.getElementById( "invoice_number" ).value;
	   if(inum)
	   {
	        $.ajax({
			   type: 'post',
			   url: 'AjaxInvoiceNumber.php',
			   data: {
			   inv_num:inum,
			   },
			   success: function (response) {
			   $( '#checked_invoice_status' ).html(response);
  		          if(response=="OK")
                  {
                     return true;
                  }
                  else
                  {
                     return false;
                  }
                }
		      });
	   }
	   else
	   {
		   $( '#checked_invoice_status' ).html("");
		   return false;
	   }
	}
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>
