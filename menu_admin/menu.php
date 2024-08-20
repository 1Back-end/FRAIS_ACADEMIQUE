
	
<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>
	<?php echo strtoupper(ucfirst(str_replace(".php", "", basename($_SERVER['PHP_SELF']))));?>
	</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="vendors/images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="vendors/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="vendors/images/favicon-16x16.png">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
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
			<!-- <div class="search-toggle-icon dw dw-search2" data-toggle="header_search"></div> -->
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
										<img src="../vendors/images/profile.jpg" alt="" class="shadow-none">
										<h3>John Doe</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>	
							</ul>
						</div>
					</div>
				</div>
			</div>
             <?php include("../login/session_user.php");?>
			<div class="user-info-dropdown">
				<div class="dropdown">
					<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
					<span class="user-icon shadow-none">
						<img src="../uploads/<?= htmlspecialchars($_SESSION['photo'] ?? '../vendors/images/profile.jpg') ?>" alt="Photo de profil">
					</span>
					<span class="user-name ml-3">
						<?= htmlspecialchars($_SESSION['last_name'] . ' ' . $_SESSION['first_name']) ?>
					</span>
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
			<a href="#">
				<h2 class="text-white fw-bold display-5">Free Master</h2>
			</a>
			<div class="close-sidebar" data-toggle="left-sidebar-close">
				<i class="ion-close-round"></i>
			</div>
		</div>
		<div class="menu-block customscroll">
			<div class="sidebar-menu">
				<ul id="accordion-menu">

					<li>
						<a href="../dashboard/tableau_de_bord.php" class="dropdown-toggle no-arrow">
							<span class="micon fa fa-bars"></span><span class="mtext">Tableau de bord</span>
						</a>
					</li>

					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon fa fa-bars"></span><span class="mtext">Établissements</span>
						</a>
						<ul class="submenu">
							<li><a href="highchart.html">Liste des Établissements</a></li>
							<li><a href="knob-chart.html">Ajouter un Établissement</a></li>
						</ul>
					</li>


					<!-- <li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon fa fa-bars"></span><span class="mtext">Gestion des Frais</span>
						</a>
						<ul class="submenu">
							<li><a href="knob-chart.html">Catégories de Frais</a></li>
						</ul>
					</li>


					<li>
						<a href="../eleve/liste_des_eleves.php" class="dropdown-toggle no-arrow">
							<span class="micon fa fa-bars"></span><span class="mtext">Gestion des Élèves</span>
						</a>	
					</li> -->

					
					<!-- <li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon fa fa-bars"></span><span class="mtext">Gestion des Parents</span>
						</a>
						<ul class="submenu">
							<li><a href="highchart.html">Liste des Parents</a></li>
							<li><a href="knob-chart.html">Ajouter un Parent </a></li>
						</ul>
					</li>
					
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon fa fa-bars"></span><span class="mtext">Gestion des Parents</span>
						</a>
						<ul class="submenu">
							<li><a href="highchart.html">Liste des Parents</a></li>
							<li><a href="knob-chart.html">Ajouter un Parent </a></li>
						</ul>
					</li>
					<li>
						<a href="../classe/liste_des_classes.php" class="dropdown-toggle no-arrow">
							<span class="micon fa fa-bars"></span><span class="mtext">Gestion des Classes</span>
						</a>
					</li>


					<li>
						<a href="javascript:;" class="dropdown-toggle no-arrow">
							<span class="micon fa fa-bars"></span><span class="mtext">Gestion des Paiements</span>
						</a>
					</li>

					<li>
						<a href="javascript:;" class="dropdown-toggle no-arrow">
							<span class="micon fa fa-bars"></span><span class="mtext">Gestion des Reçus</span>
						</a>
					</li> -->

					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon fa fa-bars"></span><span class="mtext">Utilisateurs</span>
						</a>
						<ul class="submenu">
							<li><a href="highchart.html">Gestion des Utilisateurs</a></li>
							<li><a href="knob-chart.html">Rôles et Permissions</a></li>
						</ul>
					</li>

					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon fa fa-bars"></span><span class="mtext">Paramètres</span>
						</a>
						<ul class="submenu">
							<li><a href="highchart.html">Paramètres du Compte </a></li>
							<li><a href="knob-chart.html">Paramètres de la Plateforme</a></li>
						</ul>
					</li>

					
				</ul>
			</div>
		</div>
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