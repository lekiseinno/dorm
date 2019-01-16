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
	<link rel="stylesheet"		type="text/css"			href="resource/css/demo.css"								media="screen">
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
			<div class="panel panel-default">
				<div class="panel-heading">
					<div class="row">
						<div class="col-md-6">
							Employees List
						</div>
						<div class="col-md-6 text-right">
							<button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#modal_employee_add">Add new</button>
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
						<tbody>
							<?php
							$sql	=	"
										SELECT		*
										FROM		[dbo].[Employees]
										";
							$query		=	sqlsrv_query($connect,$sql) or die( 'SQL Error = '.$sql.'<hr><pre>'. print_r( sqlsrv_errors(), true) . '</pre>');
							while($row	=	sqlsrv_fetch_array($query,SQLSRV_FETCH_ASSOC))
							{
								?>
								<tr>
									<td><?php echo $row['Employees_username']; ?></td>
									<td><?php echo $row['Employees_FullName']; ?></td>
									<td><?php echo $row['Employees_lvl']; ?></td>
									<td><?php echo $row['Employees_status']; ?></td>
									<td><?php echo $row['Employees_datestart']; ?></td>
									<td><a class="btn btn-info btn-xs"> Reset Password </a></td>
									<td><?php echo getdatetime($row['datecreate']); ?></td>
									<td><?php echo getdatetime($row['lastupdate']); ?></td>
									<td>
										<div class="row">
											<div class="col-md-12 text-center">
												<a class="btn btn-warning btn-xs" href="#" data-toggle="modal" data-target="#modal_employee_edit_<?php echo $row['employees_ID']; ?>">
													<i class="far fa-edit"></i> Edit
												</a>
											</div>
										</div>
									</td>
								</tr>
								<div class="modal fade" id="modal_employee_edit_<?php echo $row['employees_ID']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
									<div class="modal-dialog modal-lg" role="document">
										<div class="modal-content">
											<form action="process/employee_edit.php?employee_id=<?php echo $row['employees_ID']; ?>" method="POST">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
													<h4 class="modal-title" id="myModalLabel">Edit employee : <b><?php echo $row['employees_Code']; ?></b></h4>
												</div>
												<div class="modal-body">
													<div class="row">
														<div class="col-md-12 padding-b-15">
															<label>employees_Code</label>
															<input class="form-control" name="employees_Code_<?php echo $row['employees_ID']; ?>" readonly value="<?php echo $row['employees_Code']; ?>">
														</div>
														<div class="col-md-12 padding-b-15">
															<label>employees_FullName</label>
															<input class="form-control" name="employees_FullName_<?php echo $row['employees_ID']; ?>" value="<?php echo $row['employees_FullName']; ?>">
														</div>
														<div class="col-md-12 padding-b-15">
															<label>employees_type</label>
															<select class="form-control" name="employees_type_<?php echo $row['employees_ID']; ?>">
																<option selected disabled>== select ==</option>
																<option value="บุคคลธรรมดา">บุคคลธรรมดา</option>
																<option value="นิติบุคคล">นิติบุคคล</option>
																<option value="บริษัท">บริษัท</option>
															</select>
														</div>
														<div class="col-md-12 padding-b-15">
															<label>employees_datestart</label>
															<input class="form-control" name="employees_datestart_<?php echo $row['employees_ID']; ?>" value="<?php echo $row['employees_datestart']; ?>">
														</div>
														<div class="col-md-12 padding-b-15">
															<label>employees_lvl</label>
															<input class="form-control" name="employees_lvl_<?php echo $row['employees_ID']; ?>" value="<?php echo $row['employees_lvl']; ?>">
														</div>
														<div class="col-md-12 padding-b-15">
															<label>employees_remark</label>
															<input class="form-control" name="employees_remark_<?php echo $row['employees_ID']; ?>" value="<?php echo $row['employees_remark']; ?>">
														</div>
														<div class="col-md-12 padding-b-15">
															<label>employees_Status</label>
															<div class="smart-form">
																<label class="toggle">

																	<input type="hidden" name="employees_status_<?php echo $row['employees_ID']; ?>" value="OFF" >
																	<input type="checkbox" name="employees_status_<?php echo $row['employees_ID']; ?>"  value='ON' checked="checked">
																	<i data-swchon-text="ON" data-swchoff-text="OFF"></i>
																</label>
															</div>
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
								<?php
							}
							?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<?php include('menu_footer.php'); ?>
	<div class="modal fade" id="modal_employee_add" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<form action="process/employee_add.php" method="POST">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Add New employee</h4>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-md-12 padding-b-15">
								<label>Employees_username</label>
								<input class="form-control" name="Employees_username">
							</div>
							<div class="col-md-12 padding-b-15">
								<label>Employees_password1</label>
								<input class="form-control" name="Employees_password">
							</div>
							<div class="col-md-12 padding-b-15">
								<label>Employees_password2</label>
								<input class="form-control" name="Employees_password2">
							</div>
							<div class="col-md-12 padding-b-15">
								<label>Employees_FullName</label>
								<input class="form-control" name="Employees_FullName">
							</div>
							<div class="col-md-12 padding-b-15">
								<label>employees_type</label>
								<select class="form-control" name="employees_type">
									<option selected disabled>== select ==</option>
									<option value="บุคคลธรรมดา">บุคคลธรรมดา</option>
									<option value="นิติบุคคล">นิติบุคคล</option>
									<option value="บริษัท">บริษัท</option>
								</select>
							</div>
							<div class="col-md-12 padding-b-15">
								<label>employees_datestart</label>
								<input class="form-control" type="date" name="employees_datestart_<?php echo $row['employees_ID']; ?>" value="<?php echo $row['employees_datestart']; ?>">
							</div>
							<div class="col-md-12 padding-b-15">
								<label>employees_lvl</label>
								<input class="form-control" name="employees_lvl">
							</div>
							<div class="col-md-12 padding-b-15">
								<label>employees_remark</label>
								<input class="form-control" name="employees_remark">
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
	<script src="resource/js/app.js"></script>
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

	<script src="resource/js/datatable/jquery.dataTables.js"></script>
	<script src="resource/js/datatable/dataTables.bootstrap.js"></script>
	<script src="resource/js/datatable/dataTables.buttons.js"></script>
	<script src="resource/js/datatable/buttons.bootstrap.js"></script>
	<script src="resource/js/datatable/jszip.js"></script>
	<script src="resource/js/datatable/pdfmake.js"></script>
	<script src="resource/js/datatable/vfs_fonts.js"></script>
	<script src="resource/js/datatable/buttons.html5.js"></script>
	<script src="resource/js/datatable/buttons.print.js"></script>
	<script src="resource/js/datatable/buttons.colVis.js"></script>

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
		} );
	</script>
</body>
</html>