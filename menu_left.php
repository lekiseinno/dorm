
<?php include_once('config.php'); ?>


<aside id="left-panel">
	<div class="">
		<header id="header">
			<div id="logo-group">
				<span id="logo">
					<img src="<?php echo $path; ?>/resource/img/logo.png" alt="SmartAdmin">
				</span>
				<span id="activity" class="activity-dropdown">
					<i class="fa fa-user"></i>
					<b class="badge"> 21 </b>
				</span>
				<div class="ajax-dropdown">
					<div class="btn-group btn-group-justified" data-toggle="buttons">
						<label class="btn btn-default">
							<input type="radio" name="activity" id="<?php echo $path; ?>/ajax/notify/mail.html"> Msgs (14)
						</label>
						<label class="btn btn-default">
							<input type="radio" name="activity" id="<?php echo $path; ?>/ajax/notify/notifications.html"> notify (3)
						</label>
						<label class="btn btn-default">
							<input type="radio" name="activity" id="<?php echo $path; ?>/ajax/notify/tasks.html"> Tasks (4)
						</label>
					</div>
					<div class="ajax-notifications custom-scroll">
						<div class="alert alert-transparent">
							<h4>Click a button to show messages here</h4>
							This blank page message helps protect your privacy, or you can show the first message here automatically.
						</div>
						<i class="fa fa-lock fa-4x fa-border"></i>
					</div>
					<span> Last updated on: 12/12/2013 9:43AM
						<button type="button" data-loading-text="<i class='fa fa-refresh fa-spin'></i> Loading..." class="btn btn-xs btn-default pull-right">
							<i class="fa fa-refresh"></i>
						</button> 
					</span>
				</div>
			</div>
		</header>
	</div>
	<div class="login-info">
		<span>
			<a href="javascript:void(0);" id="show-shortcut" data-action="toggleShortcut">
				<img src="<?php echo $path; ?>/resource/img/avatars/sunny.png" alt="me" class="online" /> 
				<span>
					john.doe 
				</span>
				<i class="fas fa-caret-down"></i>
			</a>
		</span>
	</div>
	<nav>
		<ul>
			<li>
				<a href="<?php echo $path; ?>/index.php">
					<i class="fas fa-lg fa-fw fa-home"></i>
					<span class="menu-item-parent">Home</span>
				</a>
			</li>
			<li class="top-menu-invisible open active">
				<a href="#">
					<i class="fas fa-lg fa-fw fa-cube txt-color-blue"></i>
					<span class="menu-item-parent">Task</span>
				</a>
				<ul>
					<li class="active">
						<a href="<?php echo $path; ?>/orders.php">
							<i class="fa fa-lg fa-fw fa-gear"></i>
							<span class="menu-item-parent">จองห้องพัก</span>
						</a>
					</li>
					<li class="">
						<a href="#">
							<i class="fa fa-lg fa-fw fa-picture-o"></i>
							<span class="menu-item-parent">Menu 02</span>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fa fa-cube"></i>
							<span class="menu-item-parent">Menu 03</span>
						</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="#l">
					<i class="fa fa-lg fa-fw fa-inbox"></i>
					<span class="menu-item-parent">Messenger</span>
					<span class="badge-red pull-right inbox-badge margin-right-13">14</span>
				</a>
				<ul>
					<li>
						<a href="#">View all</a>
					</li>
					<li>
						<a href="#">Inbox</a>
					</li>
					<li>
						<a href="#">Compose</a>
					</li>
					<li>
						<a href="#">Delete</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="#">
					<i class="fa fa-lg fa-fw fa-bar-chart-o"></i>
					<span class="menu-item-parent">Report</span>
				</a>
				<ul>
					<li>
						<a href="flot.html">
							Flot Chart
						</a>
					</li>
					<li>
						<a href="morris.html">
							Morris Charts
						</a>
					</li>
					<li>
						<a href="sparkline-charts.html">
							Sparklines
						</a>
					</li>
					<li>
						<a href="easypie-charts.html">
							EasyPieCharts
						</a>
					</li>
					<li>
						<a href="dygraphs.html">
							Dygraphs
						</a>
					</li>
					<li>
						<a href="chartjs.html">
							Chart.js
						</a>
					</li>
					<li>
						<a href="hchartable.html">
							HighchartTable
							<span class="badge pull-right inbox-badge bg-color-yellow">new</span>
						</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="#">
					<i class="fas fa-lg fa-fw fa-users"></i>
					<span class="menu-item-parent">Customers</span>
				</a>
				<ul>
					<li>
						<a href="<?php echo $path; ?>/customers.php">
							List Customer
						</a>
					</li>
					<li>
						<a href="#">
							Manage Customer
							<span class="badge inbox-badge bg-color-greenLight hidden-mobile">+</span>
						</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="#">
					<i class="fas fa-lg fa-fw fa-user"></i>
					<span class="menu-item-parent">Employees</span>
				</a>
				<ul>
					<li>
						<a href="<?php echo $path; ?>/employees.php">
							List Employee
						</a>
					</li>
					<li>
						<a href="#">
							Manage Employee
							<span class="badge inbox-badge bg-color-greenLight hidden-mobile">+</span>
						</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="<?php echo $path; ?>/filemanagement.php">
					<i class="far fa-lg fa-fw fa-folder-open"></i>
					<span class="menu-item-parent">File</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class="far fa-lg fa-fw fa-window-maximize"></i>
					<span class="menu-item-parent">Form</span>
				</a>
				<ul>
					<li>
						<a href="#">
							ใบแจ้งหนี้
						</a>
					</li>
					<li>
						<a href="#">
							ใบเสร็จ
						</a>
					</li>
					<li>
						<a href="#">
							รายจ่ายทั่วไป
						</a>
					</li>
					<li>
						<a href="#">
							รายรับทั่วไป
						</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="#">
					<i class="fas fa-lg fa-fw fa-cogs"></i>
					<span class="menu-item-parent">Config</span>
				</a>
				<ul>
					<li>
						<a href="<?php echo $path; ?>/config/owner.php">
							ข้อมูลเจ้าของ
						</a>
					</li>
					<li>
						<a href="<?php echo $path; ?>/config/building.php">
							อาคาร
						</a>
					</li>
					<li>
						<a href="<?php echo $path; ?>/config/room.php">
							ห้องพัก
						</a>
					</li>

					<li>
						<a href="<?php echo $path; ?>/config/asset.php">
							ทรัพย์สิน
						</a>
					</li>
					<li>
						<a href="<?php echo $path; ?>/config/utility.php">
							สาธารณูปโภคพื้นฐาน
						</a>
					</li>
					<li>
						<a href="<?php echo $path; ?>/config/services.php">
							บริการเสริม
						</a>
					</li>
					<li>
						<a href="<?php echo $path; ?>/config/outcome.php">
							รายจ่าย
						</a>
					</li>
					<li>
						<a href="<?php echo $path; ?>/config/income.php">
							รายรับ
						</a>
					</li>
				</ul>
			</li>
			<li class="chat-users top-menu-invisible">
				<a href="#">
					<i class="far fa-lg fa-fw fa-comment">
						<em class="bg-color-pink flash animated">!</em>
					</i>
					<span class="menu-item-parent">Short cut CEO <sup>beta</sup></span>
				</a>
				<ul>
					<li>
						<div class="display-users">
							<a href="#" class="usr" 
								data-chat-id="cha1" 
								data-chat-fname="Sadi" 
								data-chat-lname="Orlaf" 
								data-chat-status="busy" 
								data-chat-alertmsg="Sadi Orlaf is in a meeting. Please do not disturb!" 
								data-chat-alertshow="true" 
								data-rel="popover-hover" 
								data-placement="right" 
								data-html="true" 
								data-content="
								<div class='usr-card'>
									<img src='resource/img/avatars/5.png' alt='Sadi Orlaf'>
									<div class='usr-card-content'>
										<h3>Sadi Orlaf</h3>
										<p>Marketing Executive</p>
									</div>
								</div>
								"> 
								<i></i>Sadi Orlaf
							</a>
							<a href="#" class="usr" 
								data-chat-id="cha2" 
								data-chat-fname="Jessica" 
								data-chat-lname="Dolof" 
								data-chat-status="online" 
								data-chat-alertmsg="" 
								data-chat-alertshow="false" 
								data-rel="popover-hover" 
								data-placement="right" 
								data-html="true" 
								data-content="
								<div class='usr-card'>
									<img src='resource/img/avatars/1.png' alt='Jessica Dolof'>
									<div class='usr-card-content'>
										<h3>Jessica Dolof</h3>
										<p>Sales Administrator</p>
									</div>
								</div>
								"> 
								<i></i>Jessica Dolof
							</a>
							<a href="#" class="usr" 
								data-chat-id="cha3" 
								data-chat-fname="Zekarburg" 
								data-chat-lname="Almandalie" 
								data-chat-status="online" 
								data-rel="popover-hover" 
								data-placement="right" 
								data-html="true" 
								data-content="
								<div class='usr-card'>
									<img src='resource/img/avatars/3.png' alt='Zekarburg Almandalie'>
									<div class='usr-card-content'>
										<h3>Zekarburg Almandalie</h3>
										<p>Sales Admin</p>
									</div>
								</div>
								"> 
								<i></i>Zekarburg Almandalie
							</a>
							<a href="#" class="usr" 
								data-chat-id="cha4" 
								data-chat-fname="Barley" 
								data-chat-lname="Krazurkth" 
								data-chat-status="away" 
								data-rel="popover-hover" 
								data-placement="right" 
								data-html="true" 
								data-content="
								<div class='usr-card'>
									<img src='resource/img/avatars/4.png' alt='Barley Krazurkth'>
									<div class='usr-card-content'>
										<h3>Barley Krazurkth</h3>
										<p>Sales Director</p>
									</div>
								</div>
								"> 
								<i></i>Barley Krazurkth
							</a>
							<a href="#" class="usr offline" 
								data-chat-id="cha5" 
								data-chat-fname="Farhana" 
								data-chat-lname="Amrin" 
								data-chat-status="incognito" 
								data-rel="popover-hover" 
								data-placement="right" 
								data-html="true" 
								data-content="
								<div class='usr-card'>
									<img src='resource/img/avatars/female.png' alt='Farhana Amrin'>
									<div class='usr-card-content'>
										<h3>Farhana Amrin</h3>
										<p>Support Admin <small><i class='fa fa-music'></i> Playing Beethoven Classics</small></p>
									</div>
								</div>
								"> 
								<i></i>Farhana Amrin (offline)
							</a>
							<a href="#" class="usr offline" 
								data-chat-id="cha6" 
								data-chat-fname="Lezley" 
								data-chat-lname="Jacob" 
								data-chat-status="incognito" 
								data-rel="popover-hover" 
								data-placement="right" 
								data-html="true" 
								data-content="
								<div class='usr-card'>
									<img src='resource/img/avatars/male.png' alt='Lezley Jacob'>
									<div class='usr-card-content'>
										<h3>Lezley Jacob</h3>
										<p>Sales Director</p>
									</div>
								</div>
								"> 
								<i></i>Lezley Jacob (offline)
							</a>
						</div>
					</li>
				</ul>	
			</li>
		</ul>
	</nav>
	<span class="minifyme" data-action="minifyMenu"> 
		<i class="fa fa-arrow-circle-left hit"></i> 
	</span>
</aside>