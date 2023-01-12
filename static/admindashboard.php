<?php
	include("connexion.php");
?>

<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="keywords" content="ENSA, Emploie du temps, plateforme interactive">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

	<title>Tableau de bord - Administrateur</title>
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
					<span class="sidebar-username align-middle">ADMINISTRATEUR</span>
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
							<a class="sidebar-profile sidebar-sticky-element sidebar-link" href="adminprofile.php">
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
												<h1 class="mt-1 mb-3"><span class="cardtxtstat">
													<?php
														$query="SELECT count(*) as 'nbr_enseignants' from enseignant;";
														$test=mysqli_query($link,$query);
														$data=mysqli_fetch_assoc($test);
														echo $data['nbr_enseignants'];
													?>
												</span> enseignants</h1>
												<div class="mb-0">
													<a href="gestionenseignants.php">
														<span class="text-muted">G&eacute;rer les enseignants</span> 
													</a>
												</div>
											</div>
										</div>


										<div id="NHoursTTCHR" class="carousel slide" data-ride="carousel" data-interval="3000">
											<div class="carousel-inner">
												<?php
												 $query="SELECT ens.nom as 'nom',ens.prenom as 'prenom',uti.login,SUM(TIME_TO_SEC(TIMEDIFF(se.heure_fin,se.heure_deb))/3600) as 'charge' 
												 FROM enseignant ens 
												 left JOIN module modu ON modu.id_enseignant = ens.id_enseignant 
												 LEFT JOIN utilisateur uti ON ens.id_utilisateur=uti.id
												 LEFT JOIN seance se ON modu.id_module = se.id_module
												 AND se.date BETWEEN DATE_SUB(NOW(), INTERVAL WEEKDAY(NOW()) DAY) AND 
												 DATE_ADD(DATE_SUB(NOW(), INTERVAL WEEKDAY(NOW()) DAY), INTERVAL 6 DAY)
												 GROUP BY ens.nom,ens.prenom;"; 
												 $result =mysqli_query($link,$query);
												 ?>
												 <?php
												 if ($data=mysqli_fetch_assoc($result)){
												?>
												<div class="carousel-item active">
													<div class="card">
														<div class="card-body">
															<div class="row">
																<div class="col mt-0">
																	<h5 class="card-title">
																		<?php
																		echo 'M. <span style="text-transform: capitalize;">' . $data['nom'] . ' ' . $data['prenom'] . '</span> enseigne';
																		?>
																</div>
													
																<div class="col-auto">
																	<div class="stat text-primary">
																		<i class="align-middle" data-feather="clock"></i>
																	</div>
																</div>
															</div>
															<h1 class="mt-1 mb-3"><span class="cardtxtstat">
																<?php
																	if($data['charge']!=NULL){
																		$data['charge']=number_format($data['charge'], 2);
																	echo $data['charge'];
																	}
																	else 
																		echo '0';
																?>
															</span> heures par semaine</h1>
															<div class="mb-0">
																<a href="gestionenseignants.php">
																	<span class="text-muted">Afficher la liste compl&egrave;te</span>
																</a>
															</div>
														</div>
													</div>
											  	</div>
												<?php
												 }
												?>
												<?php
													while($data=mysqli_fetch_assoc($result)){
												?>
												<div class="carousel-item">
													<div class="card">
														<div class="card-body">
															<div class="row">
																<div class="col mt-0">
																	<h5 class="card-title">
																		<?php
																		echo 'M. ' . $data['nom'] . ' ' . $data['prenom'] . ' enseigne';
																		?>
																</div>
													
																<div class="col-auto">
																	<div class="stat text-primary">
																		<i class="align-middle" data-feather="clock"></i>
																	</div>
																</div>
															</div>
															<h1 class="mt-1 mb-3"><span class="cardtxtstat">
																<?php
																	if($data['charge']!=NULL){
																		$data['charge']=number_format($data['charge'], 2);
																	echo $data['charge'];
																	}
																	else 
																		echo '0';
																?>
															</span> heures par semaine</h1>
															<div class="mb-0">
																<a href="gestionenseignants.php">
																	<span class="text-muted">Afficher la liste compl&egrave;te</span>
																</a>
															</div>
														</div>
													</div>
											  	</div>
												<?php
												}
												?>
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
												<h1 class="mt-1 mb-3"><span class="cardtxtstat">
													<?php
														$samp="SELECT SUM(effectif) as'SEMFDEM' from groupe where type='cours' ";
														$DASH=mysqli_query($link,$samp);
														$data1=mysqli_fetch_assoc($DASH);
														echo $data1['SEMFDEM'];
													?>
												</span> &eacute;tudiants</h1>
												<div class="mb-0">
													<a href="gestionetudes.php">
														<span class="text-muted">G&eacute;rer les &eacute;tudes</span>
													</a>
												</div>
											</div>
										</div>
										
										<div id="NHoursFiliere" class="carousel slide" data-ride="carousel" data-interval="3000">
											<div class="carousel-inner">
												<?php
												 $query="SELECT filiere.nom_filiere as 'fil',filiere.id_filiere,(filiere.id_semestre + 1) /2 as 'annee',SUM(TIME_TO_SEC(TIMEDIFF(se.heure_fin,se.heure_deb))/3600) as 'charge'
												 from filiere LEFT JOIN groupe grp on filiere.id_filiere=grp.id_filiere
												 LEFT JOIN seance se
												 ON grp.id_groupe = se.id_groupe
												 WHERE se.Date BETWEEN DATE_SUB(NOW(), INTERVAL WEEKDAY(NOW()) DAY) AND 
												 DATE_ADD(DATE_SUB(NOW(), INTERVAL WEEKDAY(NOW()) DAY), INTERVAL 6 DAY) or se.date is NULL
												 AND mod(filiere.id_semestre,2) = 1
												 GROUP BY filiere.nom_filiere,filiere.id_filiere
												 "; 
												 $result =mysqli_query($link,$query);
												 if($data=mysqli_fetch_assoc($result)) {
													$annee='';
    											    if($data['fil']!= 'cp1' && $data['fil']!='cp2') {
    											        $annee=$data['annee']; 
														$annee-=2;
    											        $annee=number_format($annee, 0);
														$annee="CI".$annee;
														$data['fil'] = 'G.' . ucfirst($data['fil']);
    												}
													else
														$data['fil'] = strtoupper($data['fil']);

													if($data['charge']!=NULL)
														$data['charge']=number_format($data['charge'], 2);
													else
														$data['charge']=0;
												?>
												<div class="carousel-item active">
													<div class="card">
														<div class="card-body">
															<div class="row">
																<div class="col mt-0">
																	<h5 class="card-title">
																		<?php
																			echo $annee.' '.$data['fil'].' &eacute;tudient'
																		?>
																	</h5>
																</div>
													
																<div class="col-auto">
																	<div class="stat text-primary">
																		<i class="align-middle" data-feather="book-open"></i>
																	</div>
																</div>
															</div>
															<h1 class="mt-1 mb-3"><span class="cardtxtstat">
																<?php
																	echo $data['charge'];
																?>
															</span> heures par semaine</h1>
															<div class="mb-0">
																<a href="gestionetudes.php">
																	<span class="text-muted">G&eacute;rer les &eacute;tudes</span>
																</a>
															</div>
														</div>
													</div>
											  	</div>
												<?php
												 }
												?>

												<?php
												 $query="SELECT filiere.nom_filiere as 'fil',filiere.id_filiere,(filiere.id_semestre + 1) /2 as 'annee',SUM(TIME_TO_SEC(TIMEDIFF(se.heure_fin,se.heure_deb))/3600) as 'charge'
												 from filiere LEFT JOIN groupe grp on filiere.id_filiere=grp.id_filiere
												 LEFT JOIN seance se
												 ON grp.id_groupe = se.id_groupe
												 WHERE se.Date BETWEEN DATE_SUB(NOW(), INTERVAL WEEKDAY(NOW()) DAY) AND 
												 DATE_ADD(DATE_SUB(NOW(), INTERVAL WEEKDAY(NOW()) DAY), INTERVAL 6 DAY) or se.date is NULL
												 AND mod(filiere.id_semestre,2) = 1
												 GROUP BY filiere.nom_filiere,filiere.id_filiere
												 "; 
												 $result =mysqli_query($link,$query);
												 while($data=mysqli_fetch_assoc($result)) {
													$annee='';
    											    if($data['fil']!= 'cp1' && $data['fil']!='cp2') {
    											        $annee=$data['annee']; 
														$annee-=2;
    											        $annee=number_format($annee, 0);
														$annee="CI".$annee;
														$data['fil'] = 'G. ' . ucfirst($data['fil']);
    												}
													else
														$data['fil'] = strtoupper($data['fil']);

													if($data['charge']!=NULL)
														$data['charge']=number_format($data['charge'], 2);
													else
														$data['charge']=0;
												?>
												<div class="carousel-item">
													<div class="card">
														<div class="card-body">
															<div class="row">
																<div class="col mt-0">
																	<h5 class="card-title">
																		<?php
																			echo $annee.' '.$data['fil'].' &eacute;tudient'
																		?>
																	</h5>
																</div>
													
																<div class="col-auto">
																	<div class="stat text-primary">
																		<i class="align-middle" data-feather="book-open"></i>
																	</div>
																</div>
															</div>
															<h1 class="mt-1 mb-3"><span class="cardtxtstat">
																<?php
																	echo $data['charge'];
																?>
															</span> heures par semaine</h1>
															<div class="mb-0">
																<a href="gestionetudes.php">
																	<span class="text-muted">G&eacute;rer les &eacute;tudes</span>
																</a>
															</div>
														</div>
													</div>
											  	</div>
												<?php
												 }
												?>
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
									<thead>
										<tr>
											<th>Num&eacute;ro de Salle</th>
											<th>Type</th>
											<th>Capacit&eacute;</th>
											<th>Taux d&apos;occupation par semaine</th>
										</tr>
									</thead>
									<?php
										$fetch1="SELECT * FROM batiment";
										$resu=mysqli_query($link,$fetch1);
									while ($dataa = mysqli_fetch_assoc($resu)) {

										$bat = $dataa['id_batiment'];
										?>
									<tbody>
										<tr>
											<td colspan="4" class="batrow">
												<h5 class="batiment-label card-title mb-0">
													<?php
													echo 'B&acirc;timent ' . $bat;
													?>
												</h5>
											</td>
										</tr>
										<?php
										$samp = "SELECT salle.id_salle as 'id',salle.type_salle as 'type',salle.capacité as 'capacite',salle.id_batiment as 'batiment',
										SUM(TIME_TO_SEC(TIMEDIFF(se.heure_fin,se.heure_deb)))/ ( 43.75 * 3600) * 100 
										as 'charge' from salle 
										LEFT JOIN seance se on se.id_salle=salle.id_salle 
										where salle.id_batiment='$bat' AND se.date BETWEEN DATE_SUB(NOW(), INTERVAL WEEKDAY(NOW()) DAY) 
										AND DATE_ADD(DATE_SUB(NOW(), INTERVAL WEEKDAY(NOW()) DAY), 
										INTERVAL 6 DAY) or (se.date IS NULL AND salle.id_batiment='$bat')
										group by salle.id_salle,salle.id_batiment ";
										$result = mysqli_query($link, $samp);
										while ($data = mysqli_fetch_assoc($result)) {
											$chrg = 0;
											if ($data['charge'] != NULL) {
												$data['charge'] = number_format($data['charge'], 2);
												$chrg = $data['charge'];
											}
											$typsll = "";
											if ($data['type'] === "salle")
												$typsll = "Classe";
											else if ($data['type'] === "Salle Tp")
												$typsll = "Salle TP";
											else
												$typsll = "Amphith&eacute;&acirc;tre";
											$capacitysll = $data['capacite'];
											$lblsll = $data['batiment'] . $data['id'];
											?>
										<tr>
											<td>
												<?php
												echo $lblsll;
												?>
											</td>
											<td>
												<?php
												echo $typsll;
												?>
											</td>
											<td>
												<?php
												echo $capacitysll;
												?>
											</td>
											<td>
												<div class="progress w-50">
													<?php
													echo "<div class=\"progress-bar progress-bar-striped\" role=\"progressbar\" style=\"width: " . $chrg . "%\" aria-valuenow=\"" . $chrg . "\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>"
														?>
												</div>
												<div class="my-percent-indicator">
													<?php
													echo $chrg . "%";
													?>
												</div>
											</td>
										</tr>
										<?php
										}
									}
										?>
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