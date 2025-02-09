<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="keywords" content="ENSA, Emploie du temps, plateforme interactive">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

	<title>Tableau de bord - Enseignant</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<link href="css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<body>
	<div class="wrapper">
		<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<!--PHP PHP PHP ADD PROFILE HERE-->
				<div class="sidebar-profile-wrapper sidebar-brand">
					<img src="photo/avatar.jpg" class="sidebar-profilepic">
					<span class="sidebar-username align-middle">XXX YYY</span>
				</div>
				<ul class="sidebar-nav">
					<li class="sidebar-header"></li>
					<li class="sidebar-item active">
						<a class="sidebar-link" href="admindashboard.php"> <!--LINK TO CHANGE-->
							<i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Tableau de Bord</span>
						</a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="gestionenseignants.php">
							<i class="align-middle" data-feather="users"></i> <span class="align-middle">Gestion D'enseignants</span>
						</a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="gestionlocaux.php">
							<i class="align-middle" data-feather="database"></i> <span class="align-middle">Gestion de Locaux</span>
						</a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="gestionetudes.php">
							<i class="align-middle" data-feather="book"></i> <span class="align-middle">Gestion D&apos;&eacute;tudes</span>
						</a>
					</li>

					<div class="sidebar-sticky-bottom">
						<li class="sidebar-sticky-profile sidebar-item">
							<a class="sidebar-profile sidebar-sticky-element sidebar-link" href="pages-blank.html">
								<i class="sidebar-svg-profile align-middle" data-feather="user"></i> <span class="align-middle">Profil</span>
							</a>
						</li>
						<li class="sidebar-footer-wrapper sidebar-item">
							<a class="sidebar-logout sidebar-sticky-element sidebar-link" href="pages-blank.html">
								<i class="sidebar-svg-logout align-middle" data-feather="log-out"></i> <span class="align-middle">Déconnexion</span>
							</a>
						</li>
					</div>
				</ul>
			</div>
		</nav>

		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle js-sidebar-toggle">
          			<i class="hamburger align-self-center"></i>
        		</a>
				<div class="navbar-title">Tableau de Bord</div>
				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-bs-toggle="dropdown">
								<div class="position-relative">
									<i class="align-middle" data-feather="bell"></i>
								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="alertsDropdown">
								<div class="list-group">
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="text-danger" data-feather="alert-circle"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">Update completed</div>
												<div class="text-muted small mt-1">Restart server 12 to complete the update.</div>
												<div class="text-muted small mt-1">30m ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="text-warning" data-feather="bell"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">Lorem ipsum</div>
												<div class="text-muted small mt-1">Aliquam ex eros, imperdiet vulputate hendrerit et.</div>
												<div class="text-muted small mt-1">2h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="text-primary" data-feather="home"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">Login from 192.186.1.8</div>
												<div class="text-muted small mt-1">5h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="text-success" data-feather="user-plus"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">New connection</div>
												<div class="text-muted small mt-1">Christina accepted your request.</div>
												<div class="text-muted small mt-1">14h ago</div>
											</div>
										</div>
									</a>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</nav>

			<main class="content">
				<div class="container-fluid p-0">
					<div class="row">
						<div class="w-100 d-flex">
							<div class="w-100">
								<div class="row">
									<div class="col-sm-6">
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
														<h5 class="card-title">Nombre Total D&apos;enseignants</h5>
													</div>

													<div class="col-auto">
														<div class="stat text-primary">
															<i class="align-middle" data-feather="users"></i>
														</div>
													</div>
												</div>
												<!--PHP PHP PHP-->
												<h1 class="mt-1 mb-3"><span class="cardtxtstat">72</span> enseignants</h1>
												<div class="mb-0">
													<a href="gestionenseignants.php"> <!--WIP WIP WIP-->
														<span class="text-muted">Plus de details</span> 
													</a>
												</div>
											</div>
										</div>


										<div id="NHoursTTCHR" class="carousel slide" data-ride="carousel" data-interval="3000">
											<div class="carousel-inner">
												<!--PHP PHP PHP-->
												<div class="carousel-item active">
													<div class="card">
														<div class="card-body">
															<div class="row">
																<div class="col mt-0">
																	<h5 class="card-title">M. XXXX YYYY enseigne</h5>
																</div>
													
																<div class="col-auto">
																	<div class="stat text-primary">
																		<i class="align-middle" data-feather="clock"></i>
																	</div>
																</div>
															</div>
															<h1 class="mt-1 mb-3"><span class="cardtxtstat">63</span> heures par semaine</h1>
															<div class="mb-0">
																<a href="gestionenseignants.php"> <!--WIP WIP WIP-->
																	<span class="text-muted">Afficher la liste compl&egrave;te</span>
																</a>
															</div>
														</div>
													</div>
											  	</div>
												<!--END PHP PHP PHP-->

												<!--TO BE REMOVED AFTER ADDING PHP-->
												<div class="carousel-item">
													<div class="card">
														<div class="card-body">
															<div class="row">
																<div class="col mt-0">
																	<h5 class="card-title">M. DDDD VVVV enseigne</h5>
																</div>
													
																<div class="col-auto">
																	<div class="stat text-primary">
																		<i class="align-middle" data-feather="clock"></i>
																	</div>
																</div>
															</div>
															<h1 class="mt-1 mb-3"><span class="cardtxtstat">12</span> heures par semaine</h1>
															<div class="mb-0">
																<a href="gestionenseignants.php"> <!--WIP WIP WIP-->
																	<span class="text-muted">Afficher la liste compl&egrave;te</span>
																</a>
															</div>
														</div>
													</div>
											 	</div>
											  	<div class="carousel-item">
													<div class="card">
														<div class="card-body">
															<div class="row">
																<div class="col mt-0">
																	<h5 class="card-title">M. ZZZZ AAAA enseigne</h5>
																</div>
													
																<div class="col-auto">
																	<div class="stat text-primary">
																		<i class="align-middle" data-feather="clock"></i>
																	</div>
																</div>
															</div>
															<h1 class="mt-1 mb-3"><span class="cardtxtstat">22</span> heures par semaine</h1>
															<div class="mb-0">
																<a href="gestionenseignants.php"> <!--WIP WIP WIP-->
																	<span class="text-muted">Afficher la liste compl&egrave;te</span>
																</a>
															</div>
														</div>
													</div>
											  	</div>
												<!--END REMOVAL HERE-->
											</div>
										</div>


									</div>
									<div class="col-sm-6">
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
														<h5 class="card-title">Nombre Total D&apos;&eacute;tudiants</h5>
													</div>

													<div class="col-auto">
														<div class="stat text-primary">
															<i class="align-middle" data-feather="activity"></i>
														</div>
													</div>
												</div>
												<!--PHP PHP PHP-->
												<h1 class="mt-1 mb-3"><span class="cardtxtstat">8792</span> &eacute;tudiants</h1>
												<div class="mb-0">
													<span class="text-muted">Plus de details</span>
												</div>
											</div>
										</div>
										
										<div id="NHoursFiliere" class="carousel slide" data-ride="carousel" data-interval="3000">
											<div class="carousel-inner">
												<!--PHP PHP PHP-->
												<div class="carousel-item active">
													<div class="card">
														<div class="card-body">
															<div class="row">
																<div class="col mt-0">
																	<h5 class="card-title">CI2 G. Info &eacute;tudient</h5>
																</div>
													
																<div class="col-auto">
																	<div class="stat text-primary">
																		<i class="align-middle" data-feather="book-open"></i>
																	</div>
																</div>
															</div>
															<h1 class="mt-1 mb-3"><span class="cardtxtstat">63</span> heures par semaine</h1>
															<div class="mb-0">
																<span class="text-muted">Afficher la liste compl&egrave;te</span>
															</div>
														</div>
													</div>
											  	</div>
												<!--END PHP PHP PHP-->

												<!--TO BE REMOVED AFTER ADDING PHP-->
												<div class="carousel-item">
													<div class="card">
														<div class="card-body">
															<div class="row">
																<div class="col mt-0">
																	<h5 class="card-title">CI1 G. Indus &eacute;tudient</h5>
																</div>
													
																<div class="col-auto">
																	<div class="stat text-primary">
																		<i class="align-middle" data-feather="book-open"></i>
																	</div>
																</div>
															</div>
															<h1 class="mt-1 mb-3"><span class="cardtxtstat">12</span> heures par semaine</h1>
															<div class="mb-0">
																<span class="text-muted">Afficher la liste compl&egrave;te</span>
															</div>
														</div>
													</div>
											 	</div>
											  	<div class="carousel-item">
													<div class="card">
														<div class="card-body">
															<div class="row">
																<div class="col mt-0">
																	<h5 class="card-title">CP2 &eacute;tudient</h5>
																</div>
													
																<div class="col-auto">
																	<div class="stat text-primary">
																		<i class="align-middle" data-feather="book-open"></i>
																	</div>
																</div>
															</div>
															<h1 class="mt-1 mb-3"><span class="cardtxtstat">22</span> heures par semaine</h1>
															<div class="mb-0">
																<span class="text-muted">Afficher la liste compl&egrave;te</span>
															</div>
														</div>
													</div>
											  	</div>
												<!--END REMOVAL HERE-->
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="w-100 d-flex">
							<div class="table-responsive card flex-fill">
								<table class="bats-table table table-hover my-0">
									<!--PHP PHP PHP-->
									<thead>
										<tr>
											<th>Num&eacute;ro de Salle</th>
											<th>Type</th>
											<th>Capacit&eacute;</th>
											<th>Taux d&apos;occupation par semaine</th>
											<th>Statut actuel</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td colspan="5" class="batrow">
												<h5 class="batiment-label card-title mb-0">
													B&acirc;timent A
												</h5>
											</td>
										</tr>
										<tr>
											<td>A12</td>
											<td>Classe</td>
											<td>80</td>
											<td>
												<div class="progress w-50">
													<div class="progress-bar progress-bar-striped" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
											  	</div>
												<div class="my-percent-indicator">30%</div>
											</td>
											<td><span class="badge bg-danger">Occup&eacute;e</span></td>
										</tr>
										<tr>
											<td>A24</td>
											<td>Salle de TP</td>
											<td>40</td>
											<td>
												<div class="progress w-50">
													<div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 93%" aria-valuenow="93" aria-valuemin="0" aria-valuemax="100"></div>
											  	</div>
												<div class="my-percent-indicator">93%</div>
											</td>
											<td><span class="badge bg-danger">Occup&eacute;e</span></td>
										</tr>
										<tr>
											<td>A17</td>
											<td>Classe</td>
											<td>80</td>
											<td>
												<div class="progress w-50">
													<div class="progress-bar progress-bar-striped" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
											  	</div>
												<div class="my-percent-indicator">45%</div>
											</td>
											<td><span class="badge bg-success">Disponible</span></td>
										</tr>
										<tr>
											<td colspan="5" class="batrow">
												<h5 class="batiment-label card-title mb-0">
													B&acirc;timent D
												</h5>
											</td>
										</tr>
										<tr>
											<td>D2</td>
											<td>Amphith&eacute;&acirc;tre</td>
											<td>200</td>
											<td>
												<div class="progress w-50">
													<div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
											  	</div>
												<div class="my-percent-indicator">89%</div>
											</td>
											<td><span class="badge bg-success">Disponible</span></td>
										</tr>
										<tr>
											<td>D3</td>
											<td>Amphith&eacute;&acirc;tre</td>
											<td>200</td>
											<td>
												<div class="progress w-50">
													<div class="progress-bar progress-bar-striped" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
											  	</div>
												<div class="my-percent-indicator">0%</div>
											</td>
											<td><span class="badge bg-danger">Occup&eacute;e</span></td>
										</tr>
										<tr>
											<td>D4</td>
											<td>Salle de TP</td>
											<td>35</td>
											<td>
												<div class="progress w-50">
													<div class="progress-bar progress-bar-striped" role="progressbar" style="width: 1%" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100"></div>
											  	</div>
												<div class="my-percent-indicator">1%</div>
											</td>
											<td><span class="badge bg-success">Disponible</span></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>

				</div>
			</main>

	<script src="js/app.js"></script>

</body>

</html>