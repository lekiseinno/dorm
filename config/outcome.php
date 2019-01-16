<!DOCTYPE html>
<html lang="en-us">
<head>
	<meta charset="utf-8">
	<title> Smart Dorm </title>
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link rel="stylesheet"		type="text/css"			href="../resource/css/bootstrap.v.3.3.7.css"				media="screen">
	<link rel="stylesheet"		type="text/css"			href="../resource/css/font-awesome.v.1.9.0.css"				media="screen">
	<link rel="stylesheet"		type="text/css"			href="../resource/css/font-awesome.v.5.3.1.css"				media="screen">
	<link rel="stylesheet"		type="text/css"			href="../resource/css/smartadmin-production-plugins.css"	media="screen">
	<link rel="stylesheet"		type="text/css"			href="../resource/css/smartadmin-production.css"			media="screen">
	<link rel="stylesheet"		type="text/css"			href="../resource/css/smartadmin-skins.min.css"				media="screen">
	<link rel="stylesheet"		type="text/css"			href="../resource/css/smartadmin-rtl.min.css"				media="screen">
	<link rel="stylesheet"		type="text/css"			href="../resource/css/addon.css"							media="screen">
	<link rel="stylesheet"		type="text/css"			href="../resource/css/demo.css"								media="screen">
	<link rel="stylesheet"		type="text/css"			href="../resource/css/datatable/dataTables.bootstrap.css"	media="screen">
	<link rel="stylesheet"		type="text/css"			href="../resource/css/datatable/buttons.bootstrap.css"		media="screen">
	<link rel="stylesheet"								href="https://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,700">
	<link rel="shortcut icon"	type="image/x-icon"		href="../resource/img/favicon/favicon.ico">
	<link rel="icon"			type="image/x-icon"		href="../resource/img/favicon/favicon.ico">
	<link rel="apple-touch-icon"						href="../resource/img/splash/sptouch-icon-iphone.png">
	<link rel="apple-touch-icon" sizes="76x76"			href="../resource/img/splash/touch-icon-ipad.png">
	<link rel="apple-touch-icon" sizes="120x120"		href="../resource/img/splash/touch-icon-iphone-retina.png">
	<link rel="apple-touch-icon" sizes="152x152"		href="../resource/img/splash/touch-icon-ipad-retina.png">
</head>
<body class="">
	<?php include_once('connection.php'); ?>
	<?php include_once('functions.php'); ?>
	<?php
	$srvsql		=	new	srvsql();
	$connect	=	$srvsql->connect();
	?>
	<?php include('../menu_left.php'); ?>
	<div id="main" role="main">
		<?php include('../menu_header.php'); ?>
		<div id="content">
			<div class="panel panel-default">
				<div class="panel-heading">
					<div class="row">
						<div class="col-md-6">
							Outcome List
						</div>
						<div class="col-md-6 text-right">
							<button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#modal_asset_add">Add new</button>
						</div>
					</div>
				</div>
				<div class="panel-body">
					<table id="example" class="table table-striped table-bordered table-hover">
						<thead>
							<tr>
								<th>Code</th>
								<th>Name</th>
								<th>Type</th>
								<th>Level</th>
								<th>Status</th>
								<th>Remark</th>
								<th>DateCreate</th>
								<th>LastUpdate</th>
								<th>Edit</th>
							</tr>
						</thead>
						<tbody></tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<?php include('../menu_footer.php'); ?>
	<div class="modal fade" id="modal_asset_add" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<form action="../process/asset_add.php" method="POST">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Add New Asset</h4>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-md-12 padding-b-15">
								<label>Assets_Code</label>
								<input class="form-control" name="Assets_Code">
							</div>
							<div class="col-md-12 padding-b-15">
								<label>Assets_Type</label>
								<input class="form-control" name="Assets_Type">
							</div>
							<div class="col-md-12 padding-b-15">
								<label>Assets_Name</label>
								<input class="form-control" name="Assets_Name">
							</div>
							<div class="col-md-12 padding-b-15">
								<label>Assets_Where</label>
								<input class="form-control" name="Assets_Where">
							</div>
							<div class="col-md-12 padding-b-15">
								<label>Assets_Remark</label>
								<input class="form-control" name="Assets_Remark">
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary" onclick="return confirm('confirm to save data record ?');">Save changes</button>
					</div>
				</form>
			</div>
		</div>
	</div>



























	<script data-pace-options='{ "restartOnRequestAfter": true }' src="../resource/js/plugin/pace/pace.min.js"></script>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script>if (!window.jQuery) {document.write('<script src="../resource/js/libs/jquery-3.2.1.min.js"><\/script>');}</script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
	<script>if (!window.jQuery.ui) {document.write('<script src="../resource/js/libs/jquery-ui.min.js"><\/script>');}</script>

	<script src="../resource/js/app.config.js"></script>
	<script src="../resource/js/plugin/jquery-touch/jquery.ui.touch-punch.min.js"></script> 
	<script src="../resource/js/bootstrap/bootstrap.min.js"></script>
	<script src="../resource/js/notification/SmartNotification.min.js"></script>
	<script src="../resource/js/smartwidgets/jarvis.widget.min.js"></script>
	<script src="../resource/js/plugin/easy-pie-chart/jquery.easy-pie-chart.min.js"></script>
	<script src="../resource/js/plugin/sparkline/jquery.sparkline.min.js"></script>
	<script src="../resource/js/plugin/jquery-validate/jquery.validate.min.js"></script>
	<script src="../resource/js/plugin/masked-input/jquery.maskedinput.min.js"></script>
	<script src="../resource/js/plugin/select2/select2.min.js"></script>
	<script src="../resource/js/plugin/bootstrap-slider/bootstrap-slider.min.js"></script>
	<script src="../resource/js/plugin/msie-fix/jquery.mb.browser.min.js"></script>
	<script src="../resource/js/plugin/fastclick/fastclick.min.js"></script>
	<script src="../resource/js/app.js"></script>
	<script src="../resource/js/speech/voicecommand.min.js"></script>
	<script src="../resource/js/smart-chat-ui/smart.chat.ui.min.js"></script>
	<script src="../resource/js/smart-chat-ui/smart.chat.manager.min.js"></script>
	<script src="../resource/js/plugin/flot/jquery.flot.cust.min.js"></script>
	<script src="../resource/js/plugin/flot/jquery.flot.resize.min.js"></script>
	<script src="../resource/js/plugin/flot/jquery.flot.time.min.js"></script>
	<script src="../resource/js/plugin/flot/jquery.flot.tooltip.min.js"></script>
	<script src="../resource/js/plugin/vectormap/jquery-jvectormap-1.2.2.min.js"></script>
	<script src="../resource/js/plugin/vectormap/jquery-jvectormap-world-mill-en.js"></script>
	<script src="../resource/js/plugin/moment/moment.min.js"></script>
	<script src="../resource/js/plugin/fullcalendar/fullcalendar.min.js"></script>

	<script src="../resource/js/datatable/jquery.dataTables.js"></script>
	<script src="../resource/js/datatable/dataTables.bootstrap.js"></script>
	<script src="../resource/js/datatable/dataTables.buttons.js"></script>
	<script src="../resource/js/datatable/buttons.bootstrap.js"></script>
	<script src="../resource/js/datatable/jszip.js"></script>
	<script src="../resource/js/datatable/pdfmake.js"></script>
	<script src="../resource/js/datatable/vfs_fonts.js"></script>
	<script src="../resource/js/datatable/buttons.html5.js"></script>
	<script src="../resource/js/datatable/buttons.print.js"></script>
	<script src="../resource/js/datatable/buttons.colVis.js"></script>

	<!--[if IE 8]>
		<h1>Your browser is out of date, please update your browser by going to www.microsoft.com/download</h1>
	<![endif]-->

	<script>
		$(document).ready(function() {
			var table = $('#example').DataTable( {
				buttons: [
					'copy',
					'excel',
					'pdf',
					{
						extend: 'print',
						text: 'Print',
						autoPrint: true
					}
				]
			});
			table.buttons().container().appendTo( '#example_wrapper .col-sm-6:eq(0)' );
		
			$('.tree > ul').attr('role', 'tree').find('ul').attr('role', 'group');
			$('.tree').find('li:has(ul)').addClass('parent_li').attr('role', 'treeitem').find(' > span').attr('title', 'Collapse this branch').on('click', function(e) {
				var children = $(this).parent('li.parent_li').find(' > ul > li');
				if (children.is(':visible')) {
					children.hide('fast');
					$(this).attr('title', 'Expand this branch').find(' > i').removeClass().addClass('fa fa-lg fa-plus-circle');
				} else {
					children.show('fast');
					$(this).attr('title', 'Collapse this branch').find(' > i').removeClass().addClass('fa fa-lg fa-minus-circle');
				}
				e.stopPropagation();
			});
		});
		</script>
</body>
</html>