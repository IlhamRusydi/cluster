<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="Dashboard">
		<meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
		
		<title>DATA MINING - Klastering and Analysis</title>
		
		<!-- Bootstrap core CSS -->
		<link href="assets/css/bootstrap.css" rel="stylesheet">
		<!--external css-->
		<link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
		<link rel="stylesheet" type="text/css" href="assets/css/zabuto_calendar.css">
		<link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />
		<link rel="stylesheet" type="text/css" href="assets/lineicons/style.css">    
		
		<!-- Custom styles for this template -->
		<link href="assets/css/style.css" rel="stylesheet">
		<link href="assets/css/style-responsive.css" rel="stylesheet">
		
		<script src="assets/js/chart-master/Chart.js"></script>
		
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	
	<body>
		
		<section id="container" >
			<!-- **********************************************************************************************************************************************************
				TOP BAR CONTENT & NOTIFICATIONS
			*********************************************************************************************************************************************************** -->
			<!--header start-->
			<header class="header black-bg">
				<div class="sidebar-toggle-box">
					<div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
				</div>
				<!--logo start-->
				<a href="index.html" class="logo"><b>DATA MINING</b></a>
				<!--logo end-->
				<div class="nav notify-row" id="top_menu">
					<!--  notification start -->
					<ul class="nav top-menu">
						<!-- settings start -->
						<li class="dropdown">
							<a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
								<i class="fa fa-tasks"></i>
								<span class="badge bg-theme">4</span>
							</a>
							<ul class="dropdown-menu extended tasks-bar">
								<div class="notify-arrow notify-arrow-green"></div>
								<li>
									<p class="green">You have 4 pending tasks</p>
								</li>
								<li>
									<a href="index.html#">
										<div class="task-info">
											<div class="desc">DashGum Admin Panel</div>
											<div class="percent">40%</div>
										</div>
										<div class="progress progress-striped">
											<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
												<span class="sr-only">40% Complete (success)</span>
											</div>
										</div>
									</a>
								</li>
								<li>
									<a href="index.html#">
										<div class="task-info">
											<div class="desc">Database Update</div>
											<div class="percent">60%</div>
										</div>
										<div class="progress progress-striped">
											<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
												<span class="sr-only">60% Complete (warning)</span>
											</div>
										</div>
									</a>
								</li>
								<li>
									<a href="index.html#">
										<div class="task-info">
											<div class="desc">Product Development</div>
											<div class="percent">80%</div>
										</div>
										<div class="progress progress-striped">
											<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
												<span class="sr-only">80% Complete</span>
											</div>
										</div>
									</a>
								</li>
								<li>
									<a href="index.html#">
										<div class="task-info">
											<div class="desc">Payments Sent</div>
											<div class="percent">70%</div>
										</div>
										<div class="progress progress-striped">
											<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
												<span class="sr-only">70% Complete (Important)</span>
											</div>
										</div>
									</a>
								</li>
								<li class="external">
									<a href="#">See All Tasks</a>
								</li>
							</ul>
						</li>
						<!-- settings end -->
						<!-- inbox dropdown start-->
						<li id="header_inbox_bar" class="dropdown">
							<a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
								<i class="fa fa-envelope-o"></i>
								<span class="badge bg-theme">5</span>
							</a>
							<ul class="dropdown-menu extended inbox">
								<div class="notify-arrow notify-arrow-green"></div>
								<li>
									<p class="green">You have 5 new messages</p>
								</li>
								<li>
									<a href="index.html#">
										<span class="photo"><img alt="avatar" src="assets/img/ui-zac.jpg"></span>
										<span class="subject">
											<span class="from">Zac Snider</span>
											<span class="time">Just now</span>
										</span>
										<span class="message">
											Hi mate, how is everything?
										</span>
									</a>
								</li>
								<li>
									<a href="index.html#">
										<span class="photo"><img alt="avatar" src="assets/img/ui-divya.jpg"></span>
										<span class="subject">
											<span class="from">Divya Manian</span>
											<span class="time">40 mins.</span>
										</span>
										<span class="message">
											Hi, I need your help with this.
										</span>
									</a>
								</li>
								<li>
									<a href="index.html#">
										<span class="photo"><img alt="avatar" src="assets/img/ui-danro.jpg"></span>
										<span class="subject">
											<span class="from">Dan Rogers</span>
											<span class="time">2 hrs.</span>
										</span>
										<span class="message">
											Love your new Dashboard.
										</span>
									</a>
								</li>
								<li>
									<a href="index.html#">
										<span class="photo"><img alt="avatar" src="assets/img/ui-sherman.jpg"></span>
										<span class="subject">
											<span class="from">Dj Sherman</span>
											<span class="time">4 hrs.</span>
										</span>
										<span class="message">
											Please, answer asap.
										</span>
									</a>
								</li>
								<li>
									<a href="index.html#">See all messages</a>
								</li>
							</ul>
						</li>
						<!-- inbox dropdown end -->
					</ul>
					<!--  notification end -->
				</div>
				<div class="top-menu">
					<ul class="nav pull-right top-menu">
						<li><a class="logout" href="login.html">Logout</a></li>
					</ul>
				</div>
			</header>
			<!--header end-->
			
			<!-- **********************************************************************************************************************************************************
				MAIN SIDEBAR MENU
			*********************************************************************************************************************************************************** -->
			<!--sidebar start-->
			<aside>
				<div id="sidebar"  class="nav-collapse ">
					<!-- sidebar menu start-->
					<ul class="sidebar-menu" id="nav-accordion">
						
						<p class="centered"><a href="profile.html"><img src="assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
						<h5 class="centered">Team 2</h5>
						
						<li class="mt">
							<a class="active" href="index.html">
								<i class="fa fa-dashboard"></i>
								<span>Dashboard</span>
							</a>
						</li>
						
						<li class="sub-menu">
							<a href="javascript:;" >
								<i class="fa fa-desktop"></i>
								<span>Normalization</span>
							</a>
							<ul class="sub">
								<li><a  href="general.html">Min-Max</a></li>
								<li><a  href="buttons.html">Z-Score</a></li>
								<li><a  href="panels.html">Decimal Scaling</a></li>
								<li><a  href="panels.html">Sigmoid</a></li>
								<li><a  href="panels.html">Softmax</a></li>
							</ul>
						</li>
						
						<li class="sub-menu">
							<a href="javascript:;" >
								<i class="fa fa-cogs"></i>
								<span>Clustering</span>
							</a>
							<ul class="sub">
								<li><a  href="calendar.html">K-Means</a></li>
								<li><a  href="gallery.html">Centroid Linked</a></li>
							</ul>
						</li>
						<li class="sub-menu">
							<a href="javascript:;" >
								<i class="fa fa-book"></i>
								<span>Analysis</span>
							</a>
							<ul class="sub">
								<li><a  href="blank.html">Variance</a></li>
								<li><a  href="login.html">Sum of Squared Error</a></li>
								<li><a  href="lock_screen.html">Centroid Proximity Index</a></li>
								<li><a  href="lock_screen.html">Error Ratio</a></li>
							</ul>
						</li>
						<li class="sub-menu">
							<a href="javascript:;" >
								<i class="fa fa-tasks"></i>
								<span>Members</span>
							</a>
							<ul class="sub">
								<li><a  href="form_component.html">Safrizal Ariyandi</a></li>
								<li><a  href="form_component.html">Rizal Alviansyah</a></li>
								<li><a  href="form_component.html">Ilham Rusydi</a></li>
								<li><a  href="form_component.html">Syandu Irdoni</a></li>
								<li><a  href="form_component.html">Esti Nur Fadila</a></li>
							</ul>
						</li>
						<li class="sub-menu">
							<a href="javascript:;" >
								<i class="fa fa-th"></i>
								<span>Data Training</span>
							</a>
							<ul class="sub">
								<li><a  href="data-ruspini.php">Data Ruspini</a></li>
								<li><a  href="data-iris.php">Data Iris</a></li>
								<li><a  href="data-thyroid.php">Data Thyroid</a></li>
								<li><a  href="data-fossil.php">Data Fossil</a></li>
								<li><a  href="data-wine.php">Data Wine</a></li>
							</ul>
						</li>						
					</ul>
					<!-- sidebar menu end-->
				</div>
			</aside>
			<!--sidebar end-->
			
			<!-- **********************************************************************************************************************************************************
				MAIN CONTENT
			*********************************************************************************************************************************************************** -->
			<!--main content start-->
			<section id="main-content">
				<section class="wrapper">
					<h3><i class="fa fa-angle-right"></i> 
						<?php
							if (!empty($_GET['page'])) {
								echo ucwords($_GET['page']);
							}else{
								echo "dashboard";
							}
						?>
					</h3>
					<div class="row">
						<div class="col-lg-9 main-chart">
							
							<?php
								if (!empty($_GET['page'])) {
									$page = $_GET['page'];
									$page .= '.php';
									if(file_exists('pages/'.$page)){
										include('pages/'.$page);
										} else {
										echo 'Page not found. Return to
										<a href="index.php">index</a>';
									}
									} else {
									include('pages/dashboard.php');
								}
							?>
							
						</div><!-- /col-lg-9 END SECTION MIDDLE -->
						
						
						<!-- **********************************************************************************************************************************************************
							RIGHT SIDEBAR CONTENT
						*********************************************************************************************************************************************************** -->                  
						
						<div class="col-lg-3 ds">
							<!-- USERS ONLINE SECTION -->
							<h3>TEAM 2 MEMBERS</h3>
							<!-- First Member -->
							<div class="desc">
								<div class="thumb">
									<img class="img-circle" src="assets/img/ui-divya.jpg" width="35px" height="35px" align="">
								</div>
								<div class="details">
									<p><a href="#">Safrizal Ariyandi</a><br/>
										<muted>2110155015</muted>
									</p>
								</div>
							</div>
							<!-- Second Member -->
							<div class="desc">
								<div class="thumb">
									<img class="img-circle" src="assets/img/ui-sherman.jpg" width="35px" height="35px" align="">
								</div>
								<div class="details">
									<p><a href="#">Muhammad Rizal Alviansyah</a><br/>
										<muted>2110155015</muted>
									</p>
								</div>
							</div>
							<!-- Third Member -->
							<div class="desc">
								<div class="thumb">
									<img class="img-circle" src="assets/img/ui-danro.jpg" width="35px" height="35px" align="">
								</div>
								<div class="details">
									<p><a href="#">Ilham Rusydi</a><br/>
										<muted>2110155015</muted>
									</p>
								</div>
							</div>
							<!-- Fourth Member -->
							<div class="desc">
								<div class="thumb">
									<img class="img-circle" src="assets/img/ui-zac.jpg" width="35px" height="35px" align="">
								</div>
								<div class="details">
									<p><a href="#">Syandu Irdoni</a><br/>
										<muted>2110155015</muted>
									</p>
								</div>
							</div>
							<!-- Fifth Member -->
							<div class="desc">
								<div class="thumb">
									<img class="img-circle" src="assets/img/ui-sam.jpg" width="35px" height="35px" align="">
								</div>
								<div class="details">
									<p><a href="#">Esti Nur Fadila</a><br/>
										<muted>2110155015</muted>
									</p>
								</div>
							</div>
							
							<!-- CALENDAR-->
							<div id="calendar" class="mb">
								<div class="panel green-panel no-margin">
									<div class="panel-body">
										<div id="date-popover" class="popover top" style="cursor: pointer; disadding: block; margin-left: 33%; margin-top: -50px; width: 175px;">
											<div class="arrow"></div>
											<h3 class="popover-title" style="disadding: none;"></h3>
											<div id="date-popover-content" class="popover-content"></div>
										</div>
										<div id="my-calendar"></div>
									</div>
								</div>
							</div><!-- / calendar -->
							
						</div><!-- /col-lg-3 -->
					</div><! --/row -->
				</section>
			</section>
			
			<!--main content end-->
			<!--footer start-->
			<footer class="site-footer">
				<div class="text-center">
					Team 2 - Copyright &copy; <?= date('Y') ?>
					<a href="#" class="go-top">
						<i class="fa fa-angle-up"></i>
					</a>
				</div>
			</footer>
			<!--footer end-->
		</section>
		
		<!-- js placed at the end of the document so the pages load faster -->
		<script src="assets/js/jquery.js"></script>
		<script src="assets/js/jquery-1.8.3.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
		<script src="assets/js/jquery.scrollTo.min.js"></script>
		<script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
		<script src="assets/js/jquery.sparkline.js"></script>
		
		
		<!--common script for all pages-->
		<script src="assets/js/common-scripts.js"></script>
		
		<script type="text/javascript" src="assets/js/gritter/js/jquery.gritter.js"></script>
		<script type="text/javascript" src="assets/js/gritter-conf.js"></script>
		
		<!--script for this page-->
		<script src="assets/js/sparkline-chart.js"></script>    
		<script src="assets/js/zabuto_calendar.js"></script>	
		
		<script type="text/javascript">
			$(document).ready(function () {
				var unique_id = $.gritter.add({
					// (string | mandatory) the heading of the notification
					title: 'Welcome to Team 2 Page!',
					// (string | mandatory) the text inside the notification
					text: 'We are Team 2 make a application to provide some function and program to processing, managing and presenting datas to trying about clustering. <a href="http://blacktie.co" target="_blank" style="color:#ffd777">Team 2 - Corp</a>',
					// (string | optional) the image to display on the left
					image: 'assets/img/ui-sam.jpg',
					// (bool | optional) if you want it to fade out on its own or just sit there
					sticky: true,
					// (int | optional) the time you want it to be alive for before fading out
					time: '',
					// (string | optional) the class name you want to apply to that specific message
					class_name: 'my-sticky-class'
				});
				
				return false;
			});
		</script>
		
		<script type="application/javascript">
			$(document).ready(function () {
				$("#date-popover").popover({html: true, trigger: "manual"});
				$("#date-popover").hide();
				$("#date-popover").click(function (e) {
					$(this).hide();
				});
				
				$("#my-calendar").zabuto_calendar({
					action: function () {
						return myDateFunction(this.id, false);
					},
					action_nav: function () {
						return myNavFunction(this.id);
					},
					ajax: {
						url: "show_data.php?action=1",
						modal: true
					},
					legend: [
                    {type: "text", label: "Special event", badge: "00"},
                    {type: "block", label: "Regular event", }
					]
				});
			});
			
			
			function myNavFunction(id) {
				$("#date-popover").hide();
				var nav = $("#" + id).data("navigation");
				var to = $("#" + id).data("to");
				console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
			}
		</script>	
		
	</body>
</html>
