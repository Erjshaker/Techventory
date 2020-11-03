<!DOCTYPE HTML>
<html>
<head>
<title>Minimal an Admin Panel Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Minimal Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="<?php echo base_url('assets/template/css/'); ?>bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="<?php echo base_url('assets/template/css/'); ?>style.css" rel='stylesheet' type='text/css' />
<link href="<?php echo base_url('assets/template/css/'); ?>font-awesome.css" rel="stylesheet">
<link rel="stylesheet" href="<?= base_url() ?>/public/font-awesome/css/all.css">
<script src="<?php echo base_url('assets/template/js/'); ?>jquery.min.js"> </script>
<!-- Mainly scripts -->
<script src="<?php echo base_url('assets/template/js/'); ?>jquery.metisMenu.js"></script>
<script src="<?php echo base_url('assets/template/js/'); ?>jquery.slimscroll.min.js"></script>
<!-- Custom and plugin javascript -->
<link href="<?php echo base_url('assets/template/css/'); ?>custom.css" rel="stylesheet">
<script src="<?php echo base_url('assets/template/js/'); ?>custom.js"></script>
<script src="<?php echo base_url('assets/template/js/'); ?>screenfull.js"></script>
		<script>
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

			if (!screenfull.enabled) {
				return false;
			}



			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});



		});
		</script>

<!----->

<!--pie-chart--->
<script src="<?php echo base_url('assets/template/js/'); ?>pie-chart.js" type="text/javascript"></script>
 <script type="text/javascript">

        $(document).ready(function () {
            $('#demo-pie-1').pieChart({
                barColor: '#3bb2d0',
                trackColor: '#eee',
                lineCap: 'round',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-2').pieChart({
                barColor: '#fbb03b',
                trackColor: '#eee',
                lineCap: 'butt',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-3').pieChart({
                barColor: '#ed6498',
                trackColor: '#eee',
                lineCap: 'square',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });


        });

    </script>
<!--skycons-icons-->
<script src="<?php echo base_url('assets/template/js/'); ?>skycons.js"></script>
<!--//skycons-icons-->
</head>
<body>
<div id="wrapper">

<!----->
        <nav class="navbar-default navbar-static-top" role="navigation">
             <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               <h1> <a class="navbar-brand" href="<?php echo base_url('template/index'); ?>">TECHVENTORY</a></h1>
			   </div>
			 <div class=" border-bottom">
        	<div class="full-left">
        	  <section class="full-top">
				<button id="toggle"><i class="fa fa-arrows-alt"></i></button>
			</section>
			<form class=" navbar-left-right">
              <input type="text"  value="Search..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search...';}">
              <input type="submit" value="" class="fa fa-search">
            </form>
            <div class="clearfix"> </div>
           </div>


            <!-- Brand and toggle get grouped for better mobile display -->

		   <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="drop-men" >
		        <ul class=" nav_1">

		    		<li class="dropdown at-drop">
		              <a href="#" class="dropdown-toggle dropdown-at " data-toggle="dropdown"><i class=""></i>
		              <ul class="dropdown-menu menu1 " role="menu">
		                <li><a href="#">


		                	<div class="clearfix"> </div>
		                </a></li>
		                <li><a href="#">
		                	<div class="user-new">
		                	<p>The server is status is stable</p>
		                	<span>yesterday at 08:30am</span>
		                	</div>
		                	<div class="user-new-left">

		                	<i class="fa fa-info"></i>
		                	</div>
		                	<div class="clearfix"> </div>
		                </a></li>
		                <li><a href="#">
		                	<div class="user-new">
		                	<p>New comments waiting approval</p>
		                	<span>Last Week</span>
		                	</div>
		                	<div class="user-new-left">

		                	<i class="fa fa-rss"></i>
		                	</div>
		                	<div class="clearfix"> </div>
		                </a></li>
		                <li><a href="#" class="view">View all messages</a></li>
		              </ul>
		            </li>
					<li class="dropdown">
		              <a href="#" class="dropdown-toggle dropdown-at" data-toggle="dropdown"><span class=" name-caret">Admin<i class="caret"></i></span><img src="<?php echo base_url('assets/template/images/'); ?>wo.jpg"></a>
		              <ul class="dropdown-menu " role="menu">
		                <li><a href="<?php echo base_url('logout'); ?>"><i class="fas fa-power-off"></i>LOGOUT</a></li>

		              </ul>
		            </li>

		        </ul>
		     </div><!-- /.navbar-collapse -->
			<div class="clearfix">

     </div>

		    <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">

                    <!-- <li>
                        <a href="index.html" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon "></i><span class="nav-label">Dashboards</span> </a>
                    </li> -->

                    <li>

                        <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-users-cog nav_icon"></i> <span class="nav-label">User Management</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="<?php echo base_url('users/own/1'); ?>" class=" hvr-bounce-to-right"> <i class="far fa-address-card nav_icon"></i>User's Own Profile</a></li>

                            <li><a href="<?php echo base_url('users'); ?>" class=" hvr-bounce-to-right"><i class="fa fa-users nav_icon"></i>List Of Users</a></li>
														<li><a href="<?php echo base_url('roles'); ?>" class=" hvr-bounce-to-right"><i class="fa fa-user-tag nav_icon"></i>List Of Roles</a></li>

						<li><a href="<?php echo base_url('permissions'); ?>" class=" hvr-bounce-to-right"><i class="fas fa-shield-alt nav_icon"></i>Roles Permission</a></li>

					   </ul>
                    </li>
					 <li>

                     <li>
                        <a href="#" class=" hvr-bounce-to-right"><i class="fas fa-chart-line nav_icon"></i> <span class="nav-label">Activity Log</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="<?php echo base_url('activities'); ?>" class=" hvr-bounce-to-right"> <i class="fa fa-list nav_icon"></i>List Of Activity</a></li>

                       </ul>
                    </li>

                    <li>
                        <a href="#" class=" hvr-bounce-to-right"><i class="fas fa-boxes nav_icon"></i> <span class="nav-label">Inventory Management</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="<?php echo base_url('borrowers'); ?>" class=" hvr-bounce-to-right"><i class="fas fa-people-carry nav_icon"></i>List Of Borrowers</a></li>
                            <li><a href="<?php echo base_url('inventories'); ?>" class=" hvr-bounce-to-right"><i class="fas fa-box nav_icon"></i>List Of Items Borrowed</a></li>
                        </ul>
                    </li>

										<li>
											 <a href="<?php echo base_url('items'); ?>" class=" hvr-bounce-to-right"><i class="fas fa-list-alt nav_icon"></i> <span class="nav-label">Item List</span> </a>
									 </li>
                </ul>
            </div>
			</div>

        </nav>
        <div id="page-wrapper" class="gray-bg dashbard-1">
       <div class="content-main">

  		<!--banner-->
		    <div class="banner">

				<h2><CENTER>
				<a href="<?php echo base_url('template/index'); ?>">TECHNOLOGY INVENTORY SYSTEM</a>

				</h2>
		    </div>
		<!--//banner-->
		<!--content-->
		<div class="content-top">




		<div class="clearfix"> </div>
		</div>
		<!---->


		<div class="content-mid">

			<div class="col-md-5">
					 <div class="cal1 cal_2"><div class="clndr"><div class="clndr-controls"><div class="clndr-control-button"><p class="clndr-previous-button">previous</p></div><div class="month">July 2015</div><div class="clndr-control-button rightalign"><p class="clndr-next-button">next</p></div></div><table class="clndr-table" border="0" cellspacing="0" cellpadding="0"><thead><tr class="header-days"><td class="header-day">S</td><td class="header-day">M</td><td class="header-day">T</td><td class="header-day">W</td><td class="header-day">T</td><td class="header-day">F</td><td class="header-day">S</td></tr></thead><tbody><tr><td class="day adjacent-month last-month calendar-day-2015-06-28"><div class="day-contents">28</div></td><td class="day adjacent-month last-month calendar-day-2015-06-29"><div class="day-contents">29</div></td><td class="day adjacent-month last-month calendar-day-2015-06-30"><div class="day-contents">30</div></td><td class="day calendar-day-2015-07-01"><div class="day-contents">1</div></td><td class="day calendar-day-2015-07-02"><div class="day-contents">2</div></td><td class="day calendar-day-2015-07-03"><div class="day-contents">3</div></td><td class="day calendar-day-2015-07-04"><div class="day-contents">4</div></td></tr><tr><td class="day calendar-day-2015-07-05"><div class="day-contents">5</div></td><td class="day calendar-day-2015-07-06"><div class="day-contents">6</div></td><td class="day calendar-day-2015-07-07"><div class="day-contents">7</div></td><td class="day calendar-day-2015-07-08"><div class="day-contents">8</div></td><td class="day calendar-day-2015-07-09"><div class="day-contents">9</div></td><td class="day calendar-day-2015-07-10"><div class="day-contents">10</div></td><td class="day calendar-day-2015-07-11"><div class="day-contents">11</div></td></tr><tr><td class="day calendar-day-2015-07-12"><div class="day-contents">12</div></td><td class="day calendar-day-2015-07-13"><div class="day-contents">13</div></td><td class="day calendar-day-2015-07-14"><div class="day-contents">14</div></td><td class="day calendar-day-2015-07-15"><div class="day-contents">15</div></td><td class="day calendar-day-2015-07-16"><div class="day-contents">16</div></td><td class="day calendar-day-2015-07-17"><div class="day-contents">17</div></td><td class="day calendar-day-2015-07-18"><div class="day-contents">18</div></td></tr><tr><td class="day calendar-day-2015-07-19"><div class="day-contents">19</div></td><td class="day calendar-day-2015-07-20"><div class="day-contents">20</div></td><td class="day calendar-day-2015-07-21"><div class="day-contents">21</div></td><td class="day calendar-day-2015-07-22"><div class="day-contents">22</div></td><td class="day calendar-day-2015-07-23"><div class="day-contents">23</div></td><td class="day calendar-day-2015-07-24"><div class="day-contents">24</div></td><td class="day calendar-day-2015-07-25"><div class="day-contents">25</div></td></tr><tr><td class="day calendar-day-2015-07-26"><div class="day-contents">26</div></td><td class="day calendar-day-2015-07-27"><div class="day-contents">27</div></td><td class="day calendar-day-2015-07-28"><div class="day-contents">28</div></td><td class="day calendar-day-2015-07-29"><div class="day-contents">29</div></td><td class="day calendar-day-2015-07-30"><div class="day-contents">30</div></td><td class="day calendar-day-2015-07-31"><div class="day-contents">31</div></td><td class="day adjacent-month next-month calendar-day-2015-08-01"><div class="day-contents">1</div></td></tr></tbody></table></div></div>
			  <!----Calender -------->
			<link rel="stylesheet" href="<?php echo base_url('assets/template/css/'); ?>clndr.css" type="text/css" />
			<script src="<?php echo base_url('assets/template/js/'); ?>underscore-min.js" type="text/javascript"></script>
			<script src= "<?php echo base_url('assets/template/js/'); ?>moment-2.2.1.js" type="text/javascript"></script>
			<script src="<?php echo base_url('assets/template/js/'); ?>clndr.js" type="text/javascript"></script>
			<script src="<?php echo base_url('assets/template/js/'); ?>site.js" type="text/javascript"></script>
			<!----End Calender -------->
			</div>
			<div class="col-md-7 mid-content-top">
				<div class="middle-content">
					<h3>Latest Images</h3>
					<!-- start content_slider -->
		<div id="owl-demo" class="owl-carousel text-center">
			<div class="item">
				<img class="lazyOwl img-responsive" data-src="<?php echo base_url('assets/template/images/'); ?>na.jpg" alt="name">
			</div>
			<div class="item">
				<img class="lazyOwl img-responsive" data-src="<?php echo base_url('assets/template/images/'); ?>na1.jpg" alt="name">
			</div>
			<div class="item">
				<img class="lazyOwl img-responsive" data-src="<?php echo base_url('assets/template/images/'); ?>na2.jpg" alt="name">
			</div>
			<div class="item">
				<img class="lazyOwl img-responsive" data-src="<?php echo base_url('assets/template/images/'); ?>na.jpg" alt="name">
			</div>
			<div class="item">
				<img class="lazyOwl img-responsive" data-src="<?php echo base_url('assets/template/images/'); ?>na1.jpg" alt="name">
			</div>
			<div class="item">
				<img class="lazyOwl img-responsive" data-src="<?php echo base_url('assets/template/images/'); ?>na2.jpg" alt="name">
			</div>
			<div class="item">
				<img class="lazyOwl img-responsive" data-src="<?php echo base_url('assets/template/images/'); ?>na.jpg" alt="name">
			</div>

		</div>
		</div>
		<!--//sreen-gallery-cursual---->
		<!-- requried-jsfiles-for owl -->
		<link href="<?php echo base_url('assets/template/css/'); ?>owl.carousel.css" rel="stylesheet">
		<script src="<?php echo base_url('assets/template/js/'); ?>owl.carousel.js"></script>
			<script>
				$(document).ready(function() {
					$("#owl-demo").owlCarousel({
						items : 3,
						lazyLoad : true,
						autoPlay : true,
						pagination : true,
						nav:true,
					});
				});
			</script>
		<!-- //requried-jsfiles-for owl -->
			</div>
			<div class="clearfix"> </div>
		</div>
		<!----->


				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
		<!--//content-->



		<!---->
<div class="footer-copy">
	<div class="copy">
		<div class="copy">
			<div class="copy">
				<div class="copy">
					<div class="copy">
						<div class="copy">

            <p> &copy; 2016 Minimal. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
	    </div>
		</div>
		<div class="clearfix"> </div>
       </div>
     </div>
<!---->
<!--scrolling js-->
	<script src="<?php echo base_url('assets/template/js/'); ?>jquery.nicescroll.js"></script>
	<script src="<?php echo base_url('assets/template/js/'); ?>scripts.js"></script>
	<!--//scrolling js-->
	<script src="<?php echo base_url('assets/template/js/'); ?>bootstrap.min.js"> </script>
</body>
</html>
