<?php
include('inc/autoload.php');
// Load Invoice Removal Class.
require_once('classes/Delete.php');
// Initialise invoice Update class
$delete = new Delete();
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
<title>Adminbook&reg; | Sales Invoice</title>
<meta name="robots" content="noindex,nofollow">
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
<link rel="stylesheet" type="text/css" href="assets/global/plugins/select2/select2.css"/>
<link rel="stylesheet" type="text/css" href="assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="assets/global/plugins/bootstrap-datepicker/css/datepicker.css"/>
<link rel="stylesheet" type="text/css" href="assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css"/>
<link href="assets/global/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/bootstrap-dialog/css/bootstrap-dialog.css" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL STYLES -->
<!-- BEGIN THEME STYLES -->
<link href="assets/global/css/components.css" id="style_components" rel="stylesheet" type="text/css"/>
<link href="assets/global/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="assets/admin/layout/css/layout.css" rel="stylesheet" type="text/css"/>
<link id="style_color" href="assets/admin/layout/css/themes/darkblue.css" rel="stylesheet" type="text/css"/>
<link href="assets/admin/layout/css/custom.css" rel="stylesheet" type="text/css"/>
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
							<a href="#">view all</a>
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
							<a href="#">view all</a>
						</li>
						<li>
							<ul class="dropdown-menu-list scroller" style="height: 275px;" data-handle-color="#637283">
								<li>
									<a href="#">
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
									<a href="#">
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
									<a href="#">
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
								<li>blank
									<a href="#">
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
									<a href="#">
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
							<a href="#">view all</a>
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
							<a href="#">
							<i class="icon-user"></i> My Profile </a>
						</li>
						<li>
							<a href="#">
							<i class="icon-calendar"></i> My Calendar </a>
						</li>
						<li>
							<a href="#">
							<i class="icon-envelope-open"></i> My Inbox <span class="badge badge-danger">
							3 </span>
							</a>
						</li>
						<li>
							<a href="#">
							<i class="icon-rocket"></i> My Tasks <span class="badge badge-success">
							7 </span>
							</a>
						</li>
						<li class="divider">
						</li>
						<li>
							<a href="#">
							<i class="icon-lock"></i> Lock Screen </a>
						</li>
						<li>
							<a href="#">
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
<div class="clearfix"></div>
<!-- BEGIN CONTAINER -->
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
						<li><a href="#"><i class="fa fa-envelope"></i> Business E-mail</a></li>
						<li><a href="#"><i class="fa fa-check-square"></i> Product Inquiries</a></li>
						<li><a href="#"><i class="fa fa-globe"></i> Online Contacts</a></li>
						<li><a href="#"><i class="fa fa-book"></i> Catalogue Requests</a></li>
						<li><a href="#"><i class="fa fa-thumbs-up"></i> Customer Feedback</a></li>
						<li><a href="#"><i class="fa fa-sitemap"></i> Distribution Requests</a></li>
						<li><a href="#"><i class="fa fa-comments"></i> Product Reviews</a></li>
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
						<li><a href="#"><i class="fa fa-user-plus"></i> Customer Contacts</a></li>
						<li><a href="#"><i class="fa fa-user-plus"></i> Supplier Contacts</a></li>
						<li><a href="#"><i class="icon-calendar"></i> Calendar &amp; Events</a></li>
						<li><a href="#"><i class="icon-note"></i> Notes</a></li>
						<li><a href="#"><i class="fa fa-sliders"></i> Pre-Configuration</a>
							<ul class="sub-menu">
								<li><a href="#"><i class="fa fa-plus-square-o"></i> Add Title</a></li>
								<li><a href="#"><i class="fa fa-plus-square-o"></i> Add Job Title</a></li>
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
								<li><a href="#"><i class="icon-list"></i> Categories</a></li>
								<li><a href="#"><i class="icon-diamond"></i> Products</a></li>
								<li><a href="#"><i class="fa fa-youtube-play"></i> Product Videos</a></li>
								<li><a href="#"><i class="fa fa-tags"></i> Url Tags</a></li>
								<li><a href="#"><i class="fa fa-leanpub"></i> Competitor Reference</a></li>
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
								<li><a href="#"><i class="fa fa-gift"></i> Promotional Products</a></li>
								<li><a href="#"><i class="fa fa-gift"></i> Best Selling Products</a></li>
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
								<li><a href="#"><i class="fa fa-book"></i> E-Catalogues</a></li>
								<li><a href="#"><i class="fa fa-file-image-o"></i> E-Brochures</a></li>
							</ul>
						</li>
						<li>
							<a href="javascript:;"><span class="arrow"></span><i class="icon-basket-loaded"></i> Sales</a>
							<ul class="sub-menu">
								<li><a href="#"><i class="fa fa-file-text-o"></i> Quotations</a></li>
								<li><a href="#"><i class="fa fa-file-text-o"></i> Proforma Invoice</a></li>
								<li><a href="#"><i class="fa fa-file-text-o"></i> Sales Invoice</a></li>
								<li><a href="#"><i class="fa fa-file-text-o"></i> Commercial Invoice</a></li>
							</ul>
						</li>
						<li>
							<a href="javascript:;"><span class="arrow"></span><i class="fa fa-cubes"></i> Purchases</a>
							<ul class="sub-menu">
								<li><a href="#"><i class="fa fa-file-text-o"></i> Request Quotation</a></li>
								<li><a href="#"><i class="fa fa-file-text-o"></i> Purchase Order</a></li>
							</ul>
						</li>
						<li>
							<a href="javascript:;"><span class="arrow"></span><i class="fa fa-cogs"></i> Manufacturing</a>
							<ul class="sub-menu">
								<li><a href="#"><i class="fa fa-file-text-o"></i> Manufacturing Order</a></li>
							</ul>
						</li>
						<li>
							<a href="javascript:;"><span class="arrow"></span><i class="fa fa-truck"></i> Shipping &amp; Handling</a>
							<ul class="sub-menu">
								<li><a href="#"><i class="fa fa-file-text-o"></i> Packing List</a></li>
								<li><a href="#"><i class="fa fa-file-text-o"></i> Delivery Note</a></li>
								<li><a href="#"><i class="fa fa-file-text-o"></i> Certificate of Origin</a></li>
								<li><a href="#"><i class="fa fa-file-text-o"></i> GSP Certificate</a></li>
								<li><a href="#"><i class="fa fa-file-text-o"></i> FORM "E"</a></li>
								<li><a href="#"><i class="fa fa-file-text-o"></i> Valuation Form "A"</a></li>
								<li><a href="#"><i class="fa fa-file-text-o"></i> Exchange Draft</a></li>
								<li><a href="#"><i class="fa fa-file-text-o"></i> Shipping Instructions</a></li>
								<li><a href="#"><i class="fa fa-file-text-o"></i> Export Statement</a></li>
								<li><a href="#"><i class="fa fa-file-text-o"></i> Covering Letter</a></li>
								<li><a href="#"><i class="fa fa-file-text-o"></i> Undertaking Letter</a></li>
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
								<li><a href="#"><i class="fa fa-line-chart"></i> Cost Analysis</a></li>
								<li><a href="#"><i class="fa fa-calculator"></i> Cost Calculator</a></li>
								<li><a href="#"><i class="fa fa-plus"></i> Manufacturing Cost</a></li>
								<li><a href="#"><i class="fa fa-plus"></i> Finishing Cost</a></li>
								<li><a href="#"><i class="fa fa-plus"></i> Stamping Cost</a></li>
								<li><a href="#"><i class="fa fa-plus"></i> Insurance Rates</a></li>
								<li><a href="#"><i class="fa fa-plus"></i> Documentation Cost</a></li>
								<li><a href="#"><i class="fa fa-plus"></i> Shipping Cost</a></li>
								<li><a href="#"><i class="fa fa-plus"></i> Other Cost</a></li>
							</ul>
						</li>
						<li>
							<a href="javascript:;"><span class="arrow"></span><i class="fa fa-sliders"></i> Pre-Configuration</a>
							<ul class="sub-menu">
								<li><a href="#"><i class="fa fa-file-photo-o"></i> Company Logo</a></li>
								<li><a href="#"><i class="fa fa-building-o"></i> Company Details</a></li>
								<li><a href="#"><i class="fa fa-bank"></i> Bank Details</a></li>
								<li><a href="#"><i class="fa fa-money"></i> Currency</a></li>
								<li><a href="#"><i class="fa fa-pie-chart"></i> Taxes</a></li>
								<li><a href="#"><i class="fa fa-bar-chart"></i> Insurance</a></li>
								<li><a href="#"><i class="fa fa-line-chart"></i> Discount</a></li>
								<li><a href="#"><i class="fa fa-cc-visa"></i> Payment Types</a></li>
								<li><a href="#"><i class="fa fa-newspaper-o"></i> Incoterms &reg; 2010</a></li>
								<li><a href="#"><i class="fa fa-ship"></i> Mode of Transport</a></li>
								<li><a href="#"><i class="fa fa-plane"></i> Exporting Carrier</a></li>
								<li><a href="#"><i class="icon-user-following"></i> Authorized Signature</a></li>
								<li><a href="#"><i class="fa fa-barcode"></i> Bar code</a></li>
								<li><a href="#"><i class="fa fa-check-square-o"></i> Invoice Types</a></li>
								<li><a href="#"><i class="fa fa-check-square-o"></i> Invoice Status</a></li>
								<li><a href="#"><i class="fa fa-road"></i> Shipment Ports</a></li>
								<li><a href="#"><i class="fa fa-road"></i> Destination Ports</a></li>
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
						<li><a href="#"><i class="fa fa-bar-chart-o"></i> Dashboard</a></li>
						<li><a href="#"><i class="fa fa-envelope"></i> Customer Support</a></li>
						<li><a href="#"><i class="fa fa-share-square-o"></i> Share Products</a></li>
						<li><a href="#"><i class="icon-social-youtube"></i> Share Videos</a></li>
						<li><a href="#"><i class="fa fa-slideshare"></i> Share Documents</a></li>
						<li><a href="#"><i class="icon-link"></i> Share Links</a></li>
						<li><a href="#"><i class="fa fa-truck"></i> Shipment Tracking</a></li>
						<li><a href="#"><i class="fa fa-newspaper-o"></i> News &amp; Updates</a></li>
						<li><a href="#"><i class="fa fa-bullhorn"></i> Announcement</a></li>
						<li><a href="#"><i class="fa fa-calendar"></i> Business Event Invitation</a></li>
						<li><a href="#"><i class="fa fa-picture-o"></i> Business Events Album</a></li>
						<li><a href="#"><i class="fa fa-user-plus"></i> Customer Account</a></li>
					</ul>
				</li>
				<li>
					<a href="javascript:;">
						<i class="icon-user"></i>
						<span class="title">Supplier Management</span>
						<span class="arrow"></span>
					</a>
					<ul class="sub-menu">
						<li><a href="#"><i class="fa fa-bar-chart-o"></i> Dashboard</a></li>
						<li><a href="#"><i class="fa fa-user-plus"></i> Supplier Selection</a></li>
						<li><a href="#"><i class="fa fa-cart-plus"></i> Purchase Orders</a></li>
						<li><a href="#"><i class="fa fa-calendar"></i> Supply Schedules</a></li>
					</ul>
				</li>
				<li>
					<a href="javascript:;">
						<i class="icon-grid"></i>
						<span class="title">Office Applications</span>
						<span class="arrow"></span>
					</a>
					<ul class="sub-menu">
						<li><a href="#"><i class="fa fa-folder-open-o"></i> Files Manager</a></li>
						<li><a href="#"><i class="fa fa-file-word-o"></i> PHPWord</a></li>
						<li><a href="#"><i class="fa fa-file-excel-o"></i> PHPExcel</a></li>
						<li><a href="#"><i class="fa fa-file-powerpoint-o"></i> PHPPowerPoint</a></li>
						<li><a href="#"><i class="fa fa-file-code-o"></i> PHPVisio</a></li>
						<li><a href="#"><i class="fa fa-file-code-o"></i> PHPProject</a></li>
						<li><a href="#"><i class="fa fa-file-pdf-o"></i> PDF Viewer</a></li>
						<li><a href="#"><i class="fa fa-file-pdf-o"></i> PDF Generator</a></li>
						<li><a href="#"><i class="fa fa-file-photo-o"></i> Picture Manager</a></li>
						<li><a href="#"><i class="icon-calculator"></i> Calculator</a></li>
						<li><a href="#"><i class="icon-map"></i> Maps</a></li>
					</ul>
				</li>
				<li>
					<a href="javascript:;">
						<i class="icon-globe"></i>
						<span class="title">Website CMS</span>
						<span class="arrow"></span>
					</a>
					<ul class="sub-menu">
						<li><a href="#"><i class="fa fa-html5"></i> Theme Selector</a></li>
						<li><a href="#"><i class="fa fa-css3"></i> Theme Styler</a></li>
						<li><a href="#"><i class="fa fa-apple"></i> Company Logo</a></li>
						<li><a href="#"><i class="glyphicon glyphicon-menu-hamburger"></i> Main Menu</a></li>
						<li><a href="#"><i class="fa fa-file-image-o"></i> Slider Images</a></li>
						<li><a href="#"><i class="glyphicon glyphicon-object-align-bottom"></i> Footer Menu</a></li>
						<li><a href="#"><i class="fa fa-group"></i> About Us</a></li>
						<li><a href="#"><i class="fa fa-street-view"></i> Contact Us</a></li>
						<li><a href="#"><i class="glyphicon glyphicon-king"></i> Management Messages</a></li>
						<li><a href="#"><i class="glyphicon glyphicon-screenshot"></i> Vision &amp; Mission</a></li>
						<li><a href="#"><i class="fa fa-user-secret"></i> Privacy Statement</a></li>
						<li><a href="#"><i class="fa fa-question-circle"></i> FAQs</a></li>
						<li><a href="#"><i class="fa fa-newspaper-o"></i> News &amp; Updates</a></li>
						<li><a href="#"><i class="fa fa-bullhorn"></i> Jobs Announcement</a></li>
						<li><a href="#"><i class="fa fa-certificate"></i> Quality Certificates</a></li>
					</ul>
				</li>
				<li>
					<a href="javascript:;">
						<i class="fa fa-wordpress"></i>
						<span class="title">Blog CMS</span>
						<span class="arrow"></span>
					</a>
					<ul class="sub-menu">
						<li><a href="#"><i class="fa fa-html5"></i> Theme Selector</a></li>
						<li><a href="#"><i class="fa fa-css3"></i> Theme Styler</a></li>
						<li><a href="#"><i class="glyphicon glyphicon-menu-hamburger"></i> Main Menu</a></li>
						<li><a href="#"><i class="fa fa-file-image-o"></i> Slider Images</a></li>
						<li><a href="#"><i class="glyphicon glyphicon-object-align-bottom"></i> Footer Menu</a></li>
						<li><a href="#"><i class="fa fa-list-alt"></i> New Post</a></li>
					</ul>
				</li>
				<li>
					<a href="javascript:;">
						<i class="icon-envelope-letter"></i>
						<span class="title">Newsletter</span>
						<span class="arrow"></span>
					</a>
					<ul class="sub-menu">
						<li><a href="#"><i class="fa fa-list-alt"></i> Template Builder</a></li>
						<li><a href="#"><i class="glyphicon glyphicon-check"></i> Select Template</a></li>
						<li><a href="#"><i class="glyphicon glyphicon-edit"></i> Template Editor</a></li>
						<li><a href="#"><i class="icon-users"></i> Newsletter Subscribers</a></li>
						<li><a href="#"><i class="fa fa-send-o"></i> Send Newsletter</a></li>
						<li><a href="#"><i class="icon-settings"></i> Newsletter Settings</a></li>
					</ul>
				</li>
				<li>
					<a href="javascript:;">
						<i class="icon-settings"></i>
						<span class="title">Advanced Configuration</span>
						<span class="arrow"></span>
					</a>
					<ul class="sub-menu">
						<li><a href="#"><i class="fa fa-slideshare"></i> Company Profile</a></li>
						<li><a href="#"><i class="fa fa-user-plus"></i> Staff User Account</a></li>
						<li><a href="#"><i class="fa fa-share-alt"></i> Social Media Links</a></li>
						<li><a href="#"><i class="fa fa-google"></i> Google Analytics Key</a></li>
						<li><a href="#"><i class="fa fa-html5"></i> Website Verification</a></li>
						<li><a href="#"><i class="fa fa-sitemap"></i> Sitemap.xml</a></li>
						<li><a href="#"><i class="fa fa-android"></i> Robots.txt</a></li>
						<li><a href="#"><i class="fa fa-database"></i> Backup & Restore</a></li>
						<li><a href="#"><i class="fa fa-server"></i> System Information</a></li>
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
					<a href="https://hassanamin.com" target="_blank">
						<i class="icon-info"></i>
						<span class="title">Hassan Amin</span>
					</a>
				</li>
			</ul>
			<!-- END SIDEBAR MENU -->
		</div>
	</div>
	<!-- END SIDEBAR -->
  <!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN PAGE HEADER-->
		<h3 class="page-title">Invoice Management (PHP-MySQLi) <small>(Create, Read, Update, Delete, Share, Mail &amp; Print)</small></h3>
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
					</li>
				</ul>
			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box green">
						<div class="portlet-title">
							<div class="caption">
								<i class="icon-layers"></i> Sales Invoice Management
							</div>
						</div>
						<div class="portlet-body">
							<div class="table-toolbar">
								<div class="row">
									<div class="col-md-6">
										<div class="btn-set">
											<a href="create-invoice.php" id="sample_editable_1_new" class="btn green" ><i class="icon-layers"></i> Create New Invoice</a>
										</div>
									</div>
								</div>
							</div>
							<?php $delete->remove_invoice(); ?>
							<table class="table table-striped table-bordered table-hover" id="invoice">
								<thead>
									<tr>
										<th style="display:none;">
											 ID
										</th>
										<th class="bg-green">
											 <i class="fa fa-calculator"></i> Invoice Number
										</th>
										<th class="bg-green">
											 <i class="fa fa-user"></i> Customer Name
										</th>
										<th class="bg-green">
											 <i class="fa fa-building"></i> Company Name
										</th>
										<th class="bg-green">
											 <i class="fa fa-calendar"></i> Invoice Date
										</th>
										<th class="bg-green">
											 <i class="fa fa-calendar"></i> Due Date
										</th>
										<th class="bg-green">
											 <i class="fa fa-power-off"></i> Status
										</th>
										<th class="bg-green">
											 <i class="fa fa-play"></i> Sales Invoice Management
										</th>
									</tr>
								</thead>
								<tbody>
                    <?php $select->select_invoice(); ?>
					      </tbody>
							</table>
						</div>
					</div>
					<!-- END EXAMPLE TABLE PORTLET-->
					<div class="btn-set text-center">
					    <a href="https://hassanamin.com" target="_blank" id="sample_editable_1_new" class="btn green" ><i class="fa fa-external-link"></i> Visit Portfolio Website</a>
					    <h3>Let’s work together</h3>
					    <h4><strong>Hassan Amin</strong></h4>
					    <p>Lahore-53700, Pakistan</p>
					    <p><a href="https://wa.me/923061209000" target="_blank" style="text-decoration: none;"><i class="fa fa-whatsapp"></i> +92 306 120 9000</a></p>
					    <p>Email: hello@hassanamin.com</p>
					</div>
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
	<h5>&copy; <?php echo date("Y"); ?><a href="https://hassanamin.com" target="_blank" style="text-decoration:none; color:#fff;"> Hassan Amin</a></h5>
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
<script type="text/javascript" src="assets/global/plugins/select2/select2.min.js"></script>
<script type="text/javascript" src="assets/global/plugins/datatables/media/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js"></script>
<script type="text/javascript" src="assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript" src="assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
<script src="assets/global/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/bootstrap-touchspin/bootstrap.touchspin.js" type="text/javascript"></script>
<script type="text/javascript" src="assets/global/plugins/fancybox/source/jquery.fancybox.pack.js"></script>
<script src="assets/global/plugins/plupload/js/plupload.full.min.js" type="text/javascript"></script>
<script type='text/javascript' src="assets/plugins/form-validator/jquery.form-validator.min.js"></script>
<script src="resources/templates/assets/plugins/bootstrap-dialog/js/bootstrap-dialog.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
<script src="assets/admin/layout/scripts/quick-sidebar.js" type="text/javascript"></script>
<script src="assets/admin/layout/scripts/demo.js" type="text/javascript"></script>
<script src="assets/admin/pages/scripts/ecommerce-products-edit.js"></script>
<script src="assets/global/scripts/datatable.js"></script>
<script src="assets/admin/pages/scripts/table-managed-invoice.js"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
    //function DeleteInvoice(id) {
    $(function(){
        $( ".delete-invoice" ).click(function(id) {
        var invoiceID = $(this).data('invoiceid');
        var invoiceNr = $(this).data('invoicenr');
            BootstrapDialog.show({
                title : 'Delete Sales Invoice# ' + invoiceNr + '',
                message: 'Are you sure you want to delete this invoice with invoice # <b>' + invoiceNr + '</b> ?',
                buttons: [{
                    label: '<i class="fa fa-trash-o"></i> Remove',
                    cssClass: 'btn-primary red',
                    action: function(){
                        //alert('Invoice deleted with invoice id ' + invoiceID + '');
                        window.location.href = "index.php?action=remove&id=" + invoiceID + "&status=removed";
                    }
                }, {
                    label: '<i class="fa fa-times"></i> Cancel',
										cssClass: 'btn-primary green',
                    action: function(dialogItself){
                    dialogItself.close();
                }
                    }]
            });
        });
    });
    //}
</script>
<script>
function SetYear() {
var thisDate=new Date();
var thisYear=thisDate.getFullYear();
document.getElementById('year').innerHTML="&nbsp;"+thisYear;
}
</script>
<script language="javascript">
window.onload= function() {
SetYear();
}
</script>
<script>
	jQuery(document).ready(function() {
		Metronic.init();
		Layout.init();
		QuickSidebar.init();
		Demo.init();
		EcommerceProductsEdit.init();
		TableManagedInvoice.init();
		UIToastr.init();
    });
</script>
<script>
window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove();
    });
}, 2000);
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>
