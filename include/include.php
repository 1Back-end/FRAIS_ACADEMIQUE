<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>DeskApp - Bootstrap Admin Dashboard HTML Template</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="vendors/images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="vendors/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="vendors/images/favicon-16x16.png">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="../vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="../vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="../src/plugins/datatables/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="../src/plugins/datatables/css/responsive.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="../vendors/styles/style.css">
	<link rel="stylesheet" href="../vendors/styles/main.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	
</head>
<body>
	
	<div class="header">
		<div class="header-left">
			<div class="menu-icon dw dw-menu"></div>
			<div class="search-toggle-icon dw dw-search2" data-toggle="header_search"></div>
			<div class="header-search">
				<form>
					<div class="form-group mb-0">
						<i class="dw dw-search2 search-icon"></i>
						<input type="text" class="form-control search-input shadow-none" placeholder="Search Here">
						
					</div>
				</form>
			</div>
		</div>
		<div class="header-right">
			
			<div class="user-notification">
				<div class="dropdown">
					<a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">
						<i class="icon-copy dw dw-notification"></i>
						<span class="badge notification-active"></span>
					</a>

					<div class="dropdown-menu dropdown-menu-right">
						<div class="notification-list mx-h-350 customscroll">
							<ul>
								<li>
									<a href="#">
										<img src="../vendors/images/img.jpg" alt="">
										<h3>John Doe</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>	
							</ul>
						</div>
					</div>
				</div>
			</div>

			<div class="user-info-dropdown">
				<div class="dropdown">
					<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
						<span class="user-icon shadow-none">
							<img src="../vendors/images/photo1.jpg" alt="">
						</span>
						<span class="user-name">Ross C. Lopez</span>
					</a>
					<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
						<small><a class="dropdown-item" href="../login/profile.php"><i class="fa fa-user" aria-hidden="true"></i> Profile</a></small>
						<small><a class="dropdown-item" href="../login/Changer_Mot_De_Passe.php"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Changer mot de passe</a></small>
						<small><a class="dropdown-item" href="../login/logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Déconnexion</a></small>
					</div>
				</div>
			</div>
			
		</div>
	</div>

	

	<div class="left-side-bar">
		<div class="brand-logo">
			<a href="index.html">
				<img src="../vendors/images/deskapp-logo.svg" alt="" class="dark-logo">
				<img src="../vendors/images/deskapp-logo-white.svg" alt="" class="light-logo">
			</a>
			<div class="close-sidebar" data-toggle="left-sidebar-close">
				<i class="ion-close-round"></i>
			</div>
		</div>
		<div class="menu-block customscroll">
			<div class="sidebar-menu">
				<ul id="accordion-menu">

					<li>
						<a href="javascript:;" class="dropdown-toggle no-arrow">
							<span class="micon fas fa-tachometer-alt"></span><span class="mtext">Tableau de bord</span>
						</a>
					</li>


					<li>
						<a href="javascript:;" class="dropdown-toggle no-arrow">
							<span class="micon fas  fa-user-graduate"></span><span class="mtext">Élèves</span>
						</a>	
					</li>

					
					<li>
						<a href="javascript:;" class="dropdown-toggle no-arrow">
							<span class="micon fas fa-user-plus"></span><span class="mtext">Parents</span>
						</a>
					</li>

					<li>
						<a href="javascript:;" class="dropdown-toggle no-arrow">
							<span class="micon fas fa-chalkboard-teacher"></span><span class="mtext">Classes</span>
						</a>
					</li>

					<li>
						<a href="javascript:;" class="dropdown-toggle no-arrow">
							<span class="micon fas fa-money-bill"></span><span class="mtext">Frais</span>
						</a>
					</li>

					<li>
						<a href="javascript:;" class="dropdown-toggle no-arrow">
							<span class="micon fas fa-credit-card"></span><span class="mtext">Paiements</span>
						</a>
					</li>

					<li>
						<a href="javascript:;" class="dropdown-toggle no-arrow">
							<span class="micon fas fa-receipt"></span><span class="mtext">Reçus</span>
						</a>
					</li>

					<li>
						<a href="javascript:;" class="dropdown-toggle no-arrow">
							<span class="micon fas fa-lock"></span><span class="mtext">Administrations</span>
						</a>
					</li>

					<li>
						<a href="javascript:;" class="dropdown-toggle no-arrow">
							<span class="micon fas fa-cog"></span><span class="mtext">Paramètres</span>
						</a>
					</li>

					
				</ul>
			</div>
		</div>
	</div>
	<div class="mobile-menu-overlay"></div>

	<div class="main-container">
	<?php include("../controllers/controllers.php");?>
			
		</div>
	</div>
	<!-- js -->
	<script src="../vendors/scripts/core.js"></script>
	<script src="../vendors/scripts/script.min.js"></script>
	<script src="../vendors/scripts/process.js"></script>
	<script src="../vendors/scripts/layout-settings.js"></script>
	<script src="../src/plugins/apexcharts/apexcharts.min.js"></script>
	<script src="../src/plugins/datatables/js/jquery.dataTables.min.js"></script>
	<script src="../src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
	<script src="../src/plugins/datatables/js/dataTables.responsive.min.js"></script>
	<script src="../src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
	<script src="../vendors/scripts/dashboard.js"></script>
</body>
</html>