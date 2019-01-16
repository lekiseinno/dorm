<!DOCTYPE html>
<html lang="en-us">
<head>
	<meta charset="utf-8">
	<title> Smart Dorm </title>
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link rel="stylesheet"		type="text/css"			href="resource/css/bootstrap.v.3.3.7.css"				media="screen">
	<link rel="stylesheet"		type="text/css"			href="resource/css/font-awesome.v.1.9.0.css"				media="screen">
	<link rel="stylesheet"		type="text/css"			href="resource/css/font-awesome.v.5.3.1.css"				media="screen">
	<link rel="stylesheet"		type="text/css"			href="resource/css/smartadmin-production-plugins.css"	media="screen">
	<link rel="stylesheet"		type="text/css"			href="resource/css/smartadmin-production.css"			media="screen">
	<link rel="stylesheet"		type="text/css"			href="resource/css/smartadmin-skins.min.css"				media="screen">
	<link rel="stylesheet"		type="text/css"			href="resource/css/smartadmin-rtl.min.css"				media="screen">
	<link rel="stylesheet"		type="text/css"			href="resource/css/addon.css"							media="screen">
	<link rel="stylesheet"		type="text/css"			href="resource/css/demo.min.css"							media="screen">
	<link rel="stylesheet"		type="text/css"			href="resource/css/datatable/dataTables.bootstrap.css"	media="screen">
	<link rel="stylesheet"		type="text/css"			href="resource/css/datatable/buttons.bootstrap.css"		media="screen">
	<link rel="stylesheet"								href="https://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,700">
	<link rel="shortcut icon"	type="image/x-icon"		href="resource/img/favicon/favicon.ico">
	<link rel="icon"			type="image/x-icon"		href="resource/img/favicon/favicon.ico">
	<link rel="apple-touch-icon"						href="resource/img/splash/sptouch-icon-iphone.png">
	<link rel="apple-touch-icon" sizes="76x76"			href="resource/img/splash/touch-icon-ipad.png">
	<link rel="apple-touch-icon" sizes="120x120"		href="resource/img/splash/touch-icon-iphone-retina.png">
	<link rel="apple-touch-icon" sizes="152x152"		href="resource/img/splash/touch-icon-ipad-retina.png">
</head>
<body class="">
	<?php include('menu_left.php'); ?>
	<div id="main" role="main">
		<?php include('menu_header.php'); ?>
		<div id="content">
			<div class="row">
				<div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
					<h1 class="page-title txt-color-blueDark">
						<i class="fa-fw fa fa-home"></i> Dashboard <span>> My Dashboard</span>
					</h1>
				</div>
				<div class="col-xs-12 col-sm-5 col-md-5 col-lg-8">
					<ul id="sparks" class="">
						<li class="sparks-info">
							<h5> My Income <span class="txt-color-blue">$47,171</span></h5>
							<div class="sparkline txt-color-blue hidden-mobile hidden-md hidden-sm">
								1300, 1877, 2500, 2577, 2000, 2100, 3000, 2700, 3631, 2471, 2700, 3631, 2471
							</div>
						</li>
						<li class="sparks-info">
							<h5> Site Traffic <span class="txt-color-purple"><i class="fa fa-arrow-circle-up"></i>&nbsp;45%</span></h5>
							<div class="sparkline txt-color-purple hidden-mobile hidden-md hidden-sm">
								110,150,300,130,400,240,220,310,220,300, 270, 210
							</div>
						</li>
						<li class="sparks-info">
							<h5> Site Orders <span class="txt-color-greenDark"><i class="fa fa-shopping-cart"></i>&nbsp;2447</span></h5>
							<div class="sparkline txt-color-greenDark hidden-mobile hidden-md hidden-sm">
								110,150,300,130,400,240,220,310,220,300, 270, 210
							</div>
						</li>
					</ul>
				</div>
			</div>
			<section id="widget-grid" class="">
				<div class="row">
					<!-- Event -->
					<article class="col-sm-12 col-md-12 col-lg-12">
						<div class="jarviswidget jarviswidget-color-blueDark" id="wid-id-3" data-widget-colorbutton="false">
							<header>
								<span class="widget-icon"> <i class="fa fa-calendar"></i> </span>
								<h2> My Events </h2>
								<div class="widget-toolbar">
									<div class="btn-group">
										<button class="btn dropdown-toggle btn-xs btn-default" data-toggle="dropdown">
											Showing <i class="fa fa-caret-down"></i>
										</button>
										<ul class="dropdown-menu js-status-update pull-right">
											<li>
												<a href="javascript:void(0);" id="mt">Month</a>
											</li>
											<li>
												<a href="javascript:void(0);" id="ag">Agenda</a>
											</li>
											<li>
												<a href="javascript:void(0);" id="td">Today</a>
											</li>
										</ul>
									</div>
								</div>
							</header>
							<div>
								<div class="jarviswidget-editbox">
									<input class="form-control" type="text">
								</div>
								<div class="widget-body no-padding">
									<div class="widget-body-toolbar">
										<div id="calendar-buttons">
											<div class="btn-group">
												<a href="javascript:void(0)" class="btn btn-default btn-xs" id="btn-prev"><i class="fa fa-chevron-left"></i></a>
												<a href="javascript:void(0)" class="btn btn-default btn-xs" id="btn-next"><i class="fa fa-chevron-right"></i></a>
											</div>
										</div>
									</div>
									<div id="calendar"></div>
								</div>
							</div>
						</div>
					</article>
					<!-- Chat -->
					<article class="col-sm-6 col-md-6 col-lg-6">
						<div class="jarviswidget jarviswidget-color-blueDark" id="wid-id-1" data-widget-editbutton="false" data-widget-fullscreenbutton="false">
							<header>
								<span class="widget-icon">
									<i class="fa fa-comments txt-color-white"></i>
								</span>
								<h2> SmartChat </h2>
								<div class="widget-toolbar">
									<div class="btn-group">
										<button class="btn dropdown-toggle btn-xs btn-success" data-toggle="dropdown">
											Status <i class="fa fa-caret-down"></i>
										</button>
										<ul class="dropdown-menu pull-right js-status-update">
											<li>
												<a href="javascript:void(0);"><i class="fa fa-circle txt-color-green"></i> Online</a>
											</li>
											<li>
												<a href="javascript:void(0);"><i class="fa fa-circle txt-color-red"></i> Busy</a>
											</li>
											<li>
												<a href="javascript:void(0);"><i class="fa fa-circle txt-color-orange"></i> Away</a>
											</li>
											<li class="divider"></li>
											<li>
												<a href="javascript:void(0);"><i class="fa fa-power-off"></i> Log Off</a>
											</li>
										</ul>
									</div>
								</div>
							</header>
							<div>
								<div class="jarviswidget-editbox">
									<div>
										<label>Title:</label>
										<input type="text" />
									</div>
								</div>
								<div class="widget-body widget-hide-overflow no-padding">
									<div id="chat-container">
										<span class="chat-list-open-close"><i class="fa fa-user"></i><b>!</b></span>
										<div class="chat-list-body custom-scroll">
											<ul id="chat-users">
												<li>
													<a href="javascript:void(0);">
														<img src="resource/img/avatars/5.png" alt="">Robin Berry
														<span class="badge badge-inverse">23</span>
														<span class="state">
															<i class="fa fa-circle txt-color-green pull-right"></i>
														</span>
													</a>
												</li>
												<li>
													<a href="javascript:void(0);">
														<img src="resource/img/avatars/male.png" alt="">Mark Zeukartech
														<span class="state">
															<i class="last-online pull-right">2hrs</i>
														</span>
													</a>
												</li>
												<li>
													<a href="javascript:void(0);">
														<img src="resource/img/avatars/male.png" alt="">Belmain Dolson
														<span class="state">
															<i class="last-online pull-right">45m</i>
														</span>
													</a>
												</li>
												<li>
													<a href="javascript:void(0);">
														<img src="resource/img/avatars/male.png" alt="">Galvitch Drewbery
														<span class="state">
															<i class="fa fa-circle txt-color-green pull-right"></i>
														</span>
													</a>
												</li>
												<li>
													<a href="javascript:void(0);">
														<img src="resource/img/avatars/male.png" alt="">Sadi Orlaf
														<span class="state">
															<i class="fa fa-circle txt-color-green pull-right"></i>
														</span>
													</a>
												</li>
												<li>
													<a href="javascript:void(0);">
														<img src="resource/img/avatars/male.png" alt="">Markus
														<span class="state">
															<i class="last-online pull-right">2m</i>
														</span>
													</a>
												</li>
												<li>
													<a href="javascript:void(0);">
														<img src="resource/img/avatars/sunny.png" alt="">Sunny
														<span class="state">
															<i class="last-online pull-right">2m</i>
														</span>
													</a>
												</li>
												<li>
													<a href="javascript:void(0);">
														<img src="resource/img/avatars/male.png" alt="">Denmark
														<span class="state">
															<i class="last-online pull-right">2m</i>
														</span>
													</a>
												</li>
											</ul>
										</div>
										<div class="chat-list-footer">
											<div class="control-group">
												<form class="smart-form">
													<section>
														<label class="input">
															<input type="text" id="filter-chat-list" placeholder="Filter">
														</label>
													</section>
												</form>
											</div>
										</div>
									</div>
									<div id="chat-body" class="chat-body custom-scroll">
										<ul>
											<li class="message">
												<img src="resource/img/avatars/5.png" class="online" alt="">
												<div class="message-text">
													<time>
														2014-01-13
													</time>
													<a href="javascript:void(0);" class="username">Sadi Orlaf</a> Hey did you meet the new board of director? He's a bit of an geek if you ask me...anyway here is the report you requested. I am off to launch with Lisa and Andrew, you wanna join?
													<p class="chat-file row">
														<b class="pull-left col-sm-6"> <!--<i class="fa fa-spinner fa-spin"></i>--> <i class="fa fa-file"></i> report-2013-demographic-report-annual-earnings.xls </b>
														<span class="col-sm-6 pull-right"> <a href="javascript:void(0);" class="btn btn-xs btn-default">cancel</a> <a href="javascript:void(0);" class="btn btn-xs btn-success">save</a> </span>
													</p>
													<p class="chat-file row">
														<b class="pull-left col-sm-6"> <i class="fa fa-ok txt-color-green"></i> tobacco-report-2012.doc </b>
														<span class="col-sm-6 pull-right"> <a href="javascript:void(0);" class="btn btn-xs btn-primary">open</a> </span>
													</p>
												</div>
											</li>
											<li class="message">
												<img src="resource/img/avatars/sunny.png" class="online" alt="">
												<div class="message-text">
													<time>
														2014-01-13
													</time> <a href="javascript:void(0);" class="username">John Doe</a> Haha! Yeah I know what you mean. Thanks for the file Sadi! <i class="fa fa-smile-o txt-color-orange"></i> 
												</div>
											</li>
										</ul>
									</div>
									<div class="chat-footer">
										<div class="textarea-div">
											<div class="typearea">
												<textarea placeholder="Write a reply..." id="textarea-expand" class="custom-scroll"></textarea>
											</div>
										</div>
										<span class="textarea-controls">
											<button class="btn btn-sm btn-primary pull-right">
												Reply
											</button>
											<span class="pull-right smart-form" style="margin-top: 3px; margin-right: 10px;">
												<label class="checkbox pull-right">
													<input type="checkbox" name="subscription" id="subscription">
													<i></i>Press <strong> ENTER </strong> to send
												</label>
											</span>
											<a href="javascript:void(0);" class="pull-left"><i class="fa fa-camera fa-fw fa-lg"></i></a>
										</span>
									</div>
								</div>
							</div>
						</div>
					</article>
					<!-- ToDo -->
					<article class="col-sm-6 col-md-6 col-lg-6">
						<div class="jarviswidget jarviswidget-color-blue" id="wid-id-4" data-widget-editbutton="false" data-widget-colorbutton="false">
							<header>
								<span class="widget-icon"> <i class="fa fa-check txt-color-white"></i> </span>
								<h2> ToDo's </h2>
							</header>
							<div>
								<div class="jarviswidget-editbox">
									<div>
										<label>Title:</label>
										<input type="text" />
									</div>
								</div>
								<div class="widget-body no-padding smart-form">
									<h5 class="todo-group-title"><i class="fa fa-warning"></i> Critical Tasks (<small class="num-of-tasks">1</small>)</h5>
									<ul id="sortable1" class="todo">
										<li>
											<span class="handle">
												<label class="checkbox">
													<input type="checkbox" name="checkbox-inline">
													<i></i>
												</label>
											</span>
											<p>
												<strong>Ticket #17643</strong> - Hotfix for WebApp interface issue [<a href="javascript:void(0);" class="font-xs">More Details</a>] <span class="text-muted">Sea deep blessed bearing under darkness from God air living isn't. </span>
												<span class="date">Jan 1, 2014</span>
											</p>
										</li>
									</ul>
									<h5 class="todo-group-title"><i class="fa fa-exclamation"></i> Important Tasks (<small class="num-of-tasks">3</small>)</h5>
									<ul id="sortable2" class="todo">
										<li>
											<span class="handle">
												<label class="checkbox">
													<input type="checkbox" name="checkbox-inline">
													<i></i> 
												</label>
											</span>
											<p>
												<strong>Ticket #1347</strong> - Inbox email is being sent twice <small>(bug fix)</small> [<a href="javascript:void(0);" class="font-xs">More Details</a>] <span class="date">Nov 22, 2013</span>
											</p>
										</li>
										<li>
											<span class="handle"> <label class="checkbox">
											<input type="checkbox" name="checkbox-inline">
											<i></i> </label> </span>
											<p>
												<strong>Ticket #1314</strong> - Call customer support re: Issue <a href="javascript:void(0);" class="font-xs">#6134</a><small>(code review)</small>
												<span class="date">Nov 22, 2013</span>
											</p>
										</li>
										<li>
											<span class="handle">
												<label class="checkbox">
													<input type="checkbox" name="checkbox-inline">
													<i></i>
												</label>
											</span>
											<p>
												<strong>Ticket #17643</strong> - Hotfix for WebApp interface issue [<a href="javascript:void(0);" class="font-xs">More Details</a>] <span class="text-muted">Sea deep blessed bearing under darkness from God air living isn't. </span>
												<span class="date">Jan 1, 2014</span>
											</p>
										</li>
									</ul>
									<h5 class="todo-group-title"><i class="fa fa-check"></i> Completed Tasks (<small class="num-of-tasks">1</small>)</h5>
									<ul id="sortable3" class="todo">
										<li class="complete">
											<span class="handle" style="display:none">
												<label class="checkbox state-disabled">
													<input type="checkbox" name="checkbox-inline" checked="checked" disabled="disabled">
													<i></i>
												</label>
											</span>
											<p>
												<strong>Ticket #17643</strong> - Hotfix for WebApp interface issue [<a href="javascript:void(0);" class="font-xs">More Details</a>] <span class="text-muted">Sea deep blessed bearing under darkness from God air living isn't. </span>
												<span class="date">Jan 1, 2014</span>
											</p>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</article>
					<!-- Live Feed -->
					<article class="col-sm-12">
						<div class="jarviswidget" id="wid-id-0" data-widget-togglebutton="false" data-widget-editbutton="false" data-widget-fullscreenbutton="false" data-widget-colorbutton="false" data-widget-deletebutton="false">
							<header>
								<span class="widget-icon"> <i class="glyphicon glyphicon-stats txt-color-darken"></i> </span>
								<h2>Live Feeds </h2>
								<ul class="nav nav-tabs pull-right in" id="myTab">
									<li class="active">
										<a data-toggle="tab" href="#s1"><i class="fa fa-clock-o"></i> <span class="hidden-mobile hidden-tablet">Live Stats</span></a>
									</li>

									<li>
										<a data-toggle="tab" href="#s2"><i class="fa fa-facebook"></i> <span class="hidden-mobile hidden-tablet">Social Network</span></a>
									</li>

									<li>
										<a data-toggle="tab" href="#s3"><i class="fa fa-dollar"></i> <span class="hidden-mobile hidden-tablet">Revenue</span></a>
									</li>
								</ul>
							</header>
							<div class="no-padding">
								<div class="widget-body">
									<div id="myTabContent" class="tab-content">
										<div class="tab-pane fade active in padding-10 no-padding-bottom" id="s1">
											<div class="row no-space">
												<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
													<span class="demo-liveupdate-1">
														<span class="onoffswitch-title">Live switch</span>
														<span class="onoffswitch">
															<input type="checkbox" name="start_interval" class="onoffswitch-checkbox" id="start_interval">
															<label class="onoffswitch-label" for="start_interval"> 
																<span class="onoffswitch-inner" data-swchon-text="ON" data-swchoff-text="OFF"></span> 
																<span class="onoffswitch-switch"></span>
															</label>
														</span>
													</span>
													<div id="updating-chart" class="chart-large txt-color-blue"></div>
												</div>
												<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 show-stats">
													<div class="row">
														<div class="col-xs-6 col-sm-6 col-md-12 col-lg-12">
															<span class="text"> My Tasks <span class="pull-right">130/200</span> </span>
															<div class="progress">
																<div class="progress-bar bg-color-blueDark" style="width: 65%;"></div>
															</div>
														</div>
														<div class="col-xs-6 col-sm-6 col-md-12 col-lg-12">
															<span class="text"> Transfered <span class="pull-right">440 GB</span> </span>
															<div class="progress">
																<div class="progress-bar bg-color-blue" style="width: 34%;"></div>
															</div>
														</div>
														<div class="col-xs-6 col-sm-6 col-md-12 col-lg-12">
															<span class="text"> Bugs Squashed<span class="pull-right">77%</span> </span>
															<div class="progress">
																<div class="progress-bar bg-color-blue" style="width: 77%;"></div>
															</div>
														</div>
														<div class="col-xs-6 col-sm-6 col-md-12 col-lg-12">
															<span class="text"> User Testing <span class="pull-right">7 Days</span> </span>
															<div class="progress">
																<div class="progress-bar bg-color-greenLight" style="width: 84%;"></div>
															</div>
														</div>
														<span class="show-stat-buttons">
															<span class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
																<a href="javascript:void(0);" class="btn btn-default btn-block hidden-xs">Generate PDF</a>
															</span>
															<span class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
																<a href="javascript:void(0);" class="btn btn-default btn-block hidden-xs">Report a bug</a>
															</span>
														</span>
													</div>
												</div>
											</div>
											<div class="show-stat-microcharts">
												<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
													<div class="easy-pie-chart txt-color-orangeDark" data-percent="33" data-pie-size="50">
														<span class="percent percent-sign">35</span>
													</div>
													<span class="easy-pie-title"> Server Load <i class="fa fa-caret-up icon-color-bad"></i> </span>
													<ul class="smaller-stat hidden-sm pull-right">
														<li>
															<span class="label bg-color-greenLight"><i class="fa fa-caret-up"></i> 97%</span>
														</li>
														<li>
															<span class="label bg-color-blueLight"><i class="fa fa-caret-down"></i> 44%</span>
														</li>
													</ul>
													<div class="sparkline txt-color-greenLight hidden-sm hidden-md pull-right" data-sparkline-type="line" data-sparkline-height="33px" data-sparkline-width="70px" data-fill-color="transparent">
														130, 187, 250, 257, 200, 210, 300, 270, 363, 247, 270, 363, 247
													</div>
												</div>
												<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
													<div class="easy-pie-chart txt-color-greenLight" data-percent="78.9" data-pie-size="50">
														<span class="percent percent-sign">78.9 </span>
													</div>
													<span class="easy-pie-title"> Disk Space <i class="fa fa-caret-down icon-color-good"></i></span>
													<ul class="smaller-stat hidden-sm pull-right">
														<li>
															<span class="label bg-color-blueDark"><i class="fa fa-caret-up"></i> 76%</span>
														</li>
														<li>
															<span class="label bg-color-blue"><i class="fa fa-caret-down"></i> 3%</span>
														</li>
													</ul>
													<div class="sparkline txt-color-blue hidden-sm hidden-md pull-right" data-sparkline-type="line" data-sparkline-height="33px" data-sparkline-width="70px" data-fill-color="transparent">
														257, 200, 210, 300, 270, 363, 130, 187, 250, 247, 270, 363, 247
													</div>
												</div>
												<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
													<div class="easy-pie-chart txt-color-blue" data-percent="23" data-pie-size="50">
														<span class="percent percent-sign">23 </span>
													</div>
													<span class="easy-pie-title"> Transfered <i class="fa fa-caret-up icon-color-good"></i></span>
													<ul class="smaller-stat hidden-sm pull-right">
														<li>
															<span class="label bg-color-darken">10GB</span>
														</li>
														<li>
															<span class="label bg-color-blueDark"><i class="fa fa-caret-up"></i> 10%</span>
														</li>
													</ul>
													<div class="sparkline txt-color-darken hidden-sm hidden-md pull-right" data-sparkline-type="line" data-sparkline-height="33px" data-sparkline-width="70px" data-fill-color="transparent">
														200, 210, 363, 247, 300, 270, 130, 187, 250, 257, 363, 247, 270
													</div>
												</div>
												<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
													<div class="easy-pie-chart txt-color-darken" data-percent="36" data-pie-size="50">
														<span class="percent degree-sign">36 <i class="fa fa-caret-up"></i></span>
													</div>
													<span class="easy-pie-title"> Temperature <i class="fa fa-caret-down icon-color-good"></i></span>
													<ul class="smaller-stat hidden-sm pull-right">
														<li>
															<span class="label bg-color-red"><i class="fa fa-caret-up"></i> 124</span>
														</li>
														<li>
															<span class="label bg-color-blue"><i class="fa fa-caret-down"></i> 40 F</span>
														</li>
													</ul>
													<div class="sparkline txt-color-red hidden-sm hidden-md pull-right" data-sparkline-type="line" data-sparkline-height="33px" data-sparkline-width="70px" data-fill-color="transparent">
														2700, 3631, 2471, 2700, 3631, 2471, 1300, 1877, 2500, 2577, 2000, 2100, 3000
													</div>
												</div>
											</div>
										</div>
										<div class="tab-pane fade padding-10 no-padding-bottom" id="s2">
											<div class="widget-body-toolbar bg-color-white">
												<form class="form-inline" role="form">
													<div class="form-group">
														<label class="sr-only" for="s123">Show From</label>
														<input type="email" class="form-control input-sm" id="s123" placeholder="Show From">
													</div>
													<div class="form-group">
														<input type="email" class="form-control input-sm" id="s124" placeholder="To">
													</div>
													<div class="btn-group hidden-phone pull-right">
														<a class="btn dropdown-toggle btn-xs btn-default" data-toggle="dropdown"><i class="fa fa-cog"></i> More <span class="caret"> </span> </a>
														<ul class="dropdown-menu pull-right">
															<li>
																<a href="javascript:void(0);"><i class="fa fa-file-text-alt"></i> Export to PDF</a>
															</li>
															<li>
																<a href="javascript:void(0);"><i class="fa fa-question-sign"></i> Help</a>
															</li>
														</ul>
													</div>
												</form>
											</div>
											<div class="padding-10">
												<div id="statsChart" class="chart-large has-legend-unique"></div>
											</div>
										</div>
										<div class="tab-pane fade padding-10 no-padding-bottom" id="s3">
											123
										</div>
									</div>
								</div>
							</div>
						</div>
					</article>
				</div>
			</section>
		</div>
	</div>
	<?php include('menu_footer.php'); ?>

	<script data-pace-options='{ "restartOnRequestAfter": true }' src="resource/js/plugin/pace/pace.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script>if (!window.jQuery) {document.write('<script src="resource/js/libs/jquery-3.2.1.min.js"><\/script>');}</script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
	<script>if (!window.jQuery.ui) {document.write('<script src="resource/js/libs/jquery-ui.min.js"><\/script>');}</script>
	<script src="resource/js/app.config.js"></script>
	<script src="resource/js/plugin/jquery-touch/jquery.ui.touch-punch.min.js"></script> 
	<script src="resource/js/bootstrap/bootstrap.min.js"></script>
	<script src="resource/js/notification/SmartNotification.min.js"></script>
	<script src="resource/js/smartwidgets/jarvis.widget.min.js"></script>
	<script src="resource/js/plugin/easy-pie-chart/jquery.easy-pie-chart.min.js"></script>
	<script src="resource/js/plugin/sparkline/jquery.sparkline.min.js"></script>
	<script src="resource/js/plugin/jquery-validate/jquery.validate.min.js"></script>
	<script src="resource/js/plugin/masked-input/jquery.maskedinput.min.js"></script>
	<script src="resource/js/plugin/select2/select2.min.js"></script>
	<script src="resource/js/plugin/bootstrap-slider/bootstrap-slider.min.js"></script>
	<script src="resource/js/plugin/msie-fix/jquery.mb.browser.min.js"></script>
	<script src="resource/js/plugin/fastclick/fastclick.min.js"></script>
	<!-- <script src="resource/js/demo.js"></script> -->
	<!-- <script src="resource/js/demo.min.js"></script> -->
	<script src="resource/js/app.js"></script>
	<!-- <script src="resource/js/app.min.js"></script> -->
	<script src="resource/js/speech/voicecommand.min.js"></script>
	<script src="resource/js/smart-chat-ui/smart.chat.ui.min.js"></script>
	<script src="resource/js/smart-chat-ui/smart.chat.manager.min.js"></script>
	<script src="resource/js/plugin/flot/jquery.flot.cust.min.js"></script>
	<script src="resource/js/plugin/flot/jquery.flot.resize.min.js"></script>
	<script src="resource/js/plugin/flot/jquery.flot.time.min.js"></script>
	<script src="resource/js/plugin/flot/jquery.flot.tooltip.min.js"></script>
	<script src="resource/js/plugin/vectormap/jquery-jvectormap-1.2.2.min.js"></script>
	<script src="resource/js/plugin/vectormap/jquery-jvectormap-world-mill-en.js"></script>
	<script src="resource/js/plugin/moment/moment.min.js"></script>
	<script src="resource/js/plugin/fullcalendar/fullcalendar.min.js"></script>
	<!--[if IE 8]>
		<h1>Your browser is out of date, please update your browser by going to www.microsoft.com/download</h1>
	<![endif]-->
	<script>
		$(document).ready(function() {
			pageSetUp();
			$(".js-status-update a").click(function() {
				var selText = $(this).text();
				var $this = $(this);
				$this.parents('.btn-group').find('.dropdown-toggle').html(selText + ' <span class="caret"></span>');
				$this.parents('.dropdown-menu').find('li').removeClass('active');
				$this.parent().addClass('active');
			});
			$(function() {
				$("#sortable1, #sortable2").sortable({
					handle : '.handle',
					connectWith : ".todo",
					update : countTasks
				}).disableSelection();
			});
			$('.todo .checkbox > input[type="checkbox"]').click(function() {
				var $this = $(this).parent().parent().parent();
				if ($(this).prop('checked')) {
					$this.addClass("complete");
					$(this).parent().hide();
					$this.slideUp(500, function() {
						$this.clone().prependTo("#sortable3").effect("highlight", {}, 800);
						$this.remove();
						countTasks();
					});
				} else {
				// insert undo code here...
			}
		})
			function countTasks() {
				$('.todo-group-title').each(function() {
					var $this = $(this);
					$this.find(".num-of-tasks").text($this.next().find("li").size());
				});
			}
			var data = [], totalPoints = 200, $UpdatingChartColors = $("#updating-chart").css('color');
			function getRandomData() {
				if (data.length > 0)
				{
					data = data.slice(1);
					while (data.length < totalPoints) {
						var prev = data.length > 0 ? data[data.length - 1] : 50;
						var y = prev + Math.random() * 10 - 5;
						if (y < 0)
							y = 0;
						if (y > 100)
							y = 100;
						data.push(y);
					}
				}
				var res = [];
				for (var i = 0; i < data.length; ++i)
					res.push([i, data[i]])
				return res;
			}
			var updateInterval = 1500;
			$("#updating-chart").val(updateInterval).change(function() {
				var v = $(this).val();
				if (v && !isNaN(+v)) {
					updateInterval = +v;
					$(this).val("" + updateInterval);
				}
			});
			var options = {
				yaxis : {
					min : 0,
					max : 100
				},
				xaxis : {
					min : 0,
					max : 100
				},
				colors : [$UpdatingChartColors],
				series : {
					lines : {
						lineWidth : 1,
						fill : true,
						fillColor : {
							colors : [{
								opacity : 0.4
							}, {
								opacity : 0
							}]
						},
						steps : false
					}
				}
			};
			var plot = $.plot($("#updating-chart"), [getRandomData()], options);
			$('input[type="checkbox"]#start_interval').click(function() {
				if ($(this).prop('checked')) {
					$on = true;
					updateInterval = 1500;
					update();
				} else {
					clearInterval(updateInterval);
					$on = false;
				}
			});
			function update() {
				if ($on == true) {
					plot.setData([getRandomData()]);
					plot.draw();
					setTimeout(update, updateInterval);
				} else {
					clearInterval(updateInterval)
				}
			}
			var $on = false;
			$(function() {
				var twitter = [[1, 27], [2, 34], [3, 51], [4, 48], [5, 55], [6, 65], [7, 61], [8, 70], [9, 65], [10, 75], [11, 57], [12, 59], [13, 62]], facebook = [[1, 25], [2, 31], [3, 45], [4, 37], [5, 38], [6, 40], [7, 47], [8, 55], [9, 43], [10, 50], [11, 47], [12, 39], [13, 47]],
				data = [{
					label : "Twitter",
					data : twitter,
					lines : {
						show : true,
						lineWidth : 1,
						fill : true,
						fillColor : {
							colors : [{
								opacity : 0.1
							}, {
								opacity : 0.13
							}]
						}
					},
					points : {
						show : true
					}
				}, {
					label : "Facebook",
					data : facebook,
					lines : {
						show : true,
						lineWidth : 1,
						fill : true,
						fillColor : {
							colors : [{
								opacity : 0.1
							}, {
								opacity : 0.13
							}]
						}
					},
					points : {
						show : true
					}
				}];
				var options = {
					grid : {
						hoverable : true
					},
					colors : ["#568A89", "#3276B1"],
					tooltip : true,
					tooltipOpts : {
						defaultTheme : false
					},
					xaxis : {
						ticks : [[1, "JAN"], [2, "FEB"], [3, "MAR"], [4, "APR"], [5, "MAY"], [6, "JUN"], [7, "JUL"], [8, "AUG"], [9, "SEP"], [10, "OCT"], [11, "NOV"], [12, "DEC"], [13, "JAN+1"]]
					},
					yaxes : {

					}
				};
				var plot3 = $.plot($("#statsChart"), data, options);
			});
			$(function() {
				var trgt = [[1354586000000, 153], [1364587000000, 658], [1374588000000, 198], [1384589000000, 663], [1394590000000, 801], [1404591000000, 1080], [1414592000000, 353], [1424593000000, 749], [1434594000000, 523], [1444595000000, 258], [1454596000000, 688], [1464597000000, 364]], prft = [[1354586000000, 53], [1364587000000, 65], [1374588000000, 98], [1384589000000, 83], [1394590000000, 980], [1404591000000, 808], [1414592000000, 720], [1424593000000, 674], [1434594000000, 23], [1444595000000, 79], [1454596000000, 88], [1464597000000, 36]], sgnups = [[1354586000000, 647], [1364587000000, 435], [1374588000000, 784], [1384589000000, 346], [1394590000000, 487], [1404591000000, 463], [1414592000000, 479], [1424593000000, 236], [1434594000000, 843], [1444595000000, 657], [1454596000000, 241], [1464597000000, 341]], toggles = $("#rev-toggles"), target = $("#flotcontainer");
				var data = [{
					label : "Target Profit",
					data : trgt,
					bars : {
						show : true,
						align : "center",
						barWidth : 30 * 30 * 60 * 1000 * 80
					}
				}, {
					label : "Actual Profit",
					data : prft,
					color : '#3276B1',
					lines : {
						show : true,
						lineWidth : 3
					},
					points : {
						show : true
					}
				}, {
					label : "Actual Signups",
					data : sgnups,
					color : '#71843F',
					lines : {
						show : true,
						lineWidth : 1
					},
					points : {
						show : true
					}
				}];
				var options = {
					grid : {
						hoverable : true
					},
					tooltip : true,
					tooltipOpts : {
						defaultTheme : false
					},
					xaxis : {
						mode : "time"
					},
					yaxes : {
						tickFormatter : function(val, axis) {
							return "$" + val;
						},
						max : 1200
					}
				};
				plot2 = null;
				function plotNow() {
					var d = [];
					toggles.find(':checkbox').each(function() {
						if ($(this).is(':checked')) {
							d.push(data[$(this).attr("name").substr(4, 1)]);
						}
					});
					if (d.length > 0) {
						if (plot2) {
							plot2.setData(d);
							plot2.draw();
						} else {
							plot2 = $.plot(target, d, options);
						}
					}
				};
				toggles.find(':checkbox').on('change', function() {
					plotNow();
				});
				plotNow()
			});

			data_array = {
				"US" : 4977,
				"AU" : 4873,
				"IN" : 3671,
				"BR" : 2476,
				"TR" : 1476,
				"CN" : 146,
				"CA" : 134,
				"BD" : 100
			};
			$('#vector-map').vectorMap({
				map : 'world_mill_en',
				backgroundColor : '#fff',
				regionStyle : {
					initial : {
						fill : '#c4c4c4'
					},
					hover : {
						"fill-opacity" : 1
					}
				},
				series : {
					regions : [{
						values : data_array,
						scale : ['#85a8b6', '#4d7686'],
						normalizeFunction : 'polynomial'
					}]
				},
				onRegionLabelShow : function(e, el, code) {
					if ( typeof data_array[code] == 'undefined') {
						e.preventDefault();
					} else {
						var countrylbl = data_array[code];
						el.html(el.html() + ': ' + countrylbl + ' visits');
					}
				}
			});

			if ($("#calendar").length) {
				var date = new Date();
				var d = date.getDate();
				var m = date.getMonth();
				var y = date.getFullYear();
				var calendar = $('#calendar').fullCalendar({
					editable : true,
					draggable : true,
					selectable : false,
					selectHelper : true,
					unselectAuto : false,
					disableResizing : false,
					height: "auto",
					header : {
					left : 'title', //,today
					center : 'prev, next, today',
					right : 'month, agendaWeek, agenDay' //month, agendaDay,
				},
				select : function(start, end, allDay) {
					var title = prompt('Event Title:');
					if (title) {
						calendar.fullCalendar('renderEvent', {
							title : title,
							start : start,
							end : end,
							allDay : allDay
							}, true // make the event "stick"
							);
					}
					calendar.fullCalendar('unselect');
				},
				events : [{
					title : 'All Day Event',
					start : new Date(y, m, 1),
					description : 'long description',
					className : ["event", "bg-color-greenLight"],
					icon : 'fa-check'
				}, {
					title : 'Long Event',
					start : new Date(y, m, d - 5),
					end : new Date(y, m, d - 2),
					className : ["event", "bg-color-red"],
					icon : 'fa-lock'
				}, {
					id : 999,
					title : 'Repeating Event',
					start : new Date(y, m, d - 3, 16, 0),
					allDay : false,
					className : ["event", "bg-color-blue"],
					icon : 'fa-clock-o'
				}, {
					id : 999,
					title : 'Repeating Event',
					start : new Date(y, m, d + 4, 16, 0),
					allDay : false,
					className : ["event", "bg-color-blue"],
					icon : 'fa-clock-o'
				}, {
					title : 'Meeting',
					start : new Date(y, m, d, 10, 30),
					allDay : false,
					className : ["event", "bg-color-darken"]
				}, {
					title : 'Lunch',
					start : new Date(y, m, d, 12, 0),
					end : new Date(y, m, d, 14, 0),
					allDay : false,
					className : ["event", "bg-color-darken"]
				}, {
					title : 'Birthday Party',
					start : new Date(y, m, d + 1, 19, 0),
					end : new Date(y, m, d + 1, 22, 30),
					allDay : false,
					className : ["event", "bg-color-darken"]
				}, {
					title : 'Smartadmin Open Day',
					start : new Date(y, m, 28),
					end : new Date(y, m, 29),
					className : ["event", "bg-color-darken"]
				}],
				eventRender : function(event, element, icon) {
					if (!event.description == "") {
						element.find('.fc-title').append("<br/><span class='ultra-light'>" + event.description + "</span>");
					}
					if (!event.icon == "") {
						element.find('.fc-title').append("<i class='air air-top-right fa " + event.icon + " '></i>");
					}
				}
			});
			};
			$('.fc-toolbar .fc-right, .fc-toolbar .fc-center').hide();
			$('#calendar-buttons #btn-prev').click(function() {
				$('.fc-prev-button').click();
				return false;
			});
			$('#calendar-buttons #btn-next').click(function() {
				$('.fc-next-button').click();
				return false;
			});
			$('#calendar-buttons #btn-today').click(function() {
				$('.fc-button-today').click();
				return false;
			});
			$('#mt').click(function() {
				$('#calendar').fullCalendar('changeView', 'month');
			});
			$('#ag').click(function() {
				$('#calendar').fullCalendar('changeView', 'agendaWeek');
			});
			$('#td').click(function() {
				$('#calendar').fullCalendar('changeView', 'agendaDay');
			});
			$.filter_input = $('#filter-chat-list');
			$.chat_users_container = $('#chat-container > .chat-list-body')
			$.chat_users = $('#chat-users')
			$.chat_list_btn = $('#chat-container > .chat-list-open-close');
			$.chat_body = $('#chat-body');
			jQuery.expr[':'].Contains = function(a, i, m) {
				return (a.textContent || a.innerText || "").toUpperCase().indexOf(m[3].toUpperCase()) >= 0;
			};

			function listFilter(list) {
				$.filter_input.change(function() {
					var filter = $(this).val();
					if (filter) {
						$.chat_users.find("a:not(:Contains(" + filter + "))").parent().slideUp();
						$.chat_users.find("a:Contains(" + filter + ")").parent().slideDown();
					} else {
						$.chat_users.find("li").slideDown();
					}
					return false;
				}).keyup(function() {
					$(this).change();
				});
			}
			listFilter($.chat_users);
			$.chat_list_btn.click(function() {
				$(this).parent('#chat-container').toggleClass('open');
			})
			$.chat_body.animate({
				scrollTop : $.chat_body[0].scrollHeight
			}, 500);
		});
	</script>
</body>
</html>