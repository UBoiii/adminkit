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

	<title>Gestion de locaux</title>
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
					<li class="sidebar-item">
						<a class="sidebar-link" href="admindashboard.php"> <!--LINK TO CHANGE-->
							<i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Tableau de Bord</span>
						</a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="gestionenseignants.php">
							<i class="align-middle" data-feather="users"></i> <span class="align-middle">Gestion D'enseignants</span>
						</a>
					</li>

					<li class="sidebar-item active">
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
				<div class="navbar-title">Gestion de Locaux</div>
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
						<div class="col-12">
							<div class="card">
								<div class="card-body">
									<form action="" method="POST">
										<div class="lbl-txt-field">Ajouter un nouveau b&acirc;timent</div>
										<div style="display: flex;">
											<div class="simple-txt-input-wrapper w-75 mb-0">
												<input name="bat_name_add" type="text" class="simple-txt-input w-100 form-control" pattern="[a-zA-Z0-9._%+-]+" id="addBAT" placeholder="Nom du b&acirc;timent" required>
											</div> 
											<button class="form-submit-button w-25 btn btn-success" type="submit" name="addttchr" value="confirm">Ajouter</button>
										</div>
									</form>
                                </div>
                            </div>

							<div class="card">
								<div class="card-body">
									<form action="#" method="POST"> <!--WIP PHP PHP PHP-->
										<div class="lbl-txt-field">Ajouter une nouvelle salle</div>
										<div class="input-row-wrapper">
											<div class="simple-txt-input-wrapper w-50 mb-0" style="display: flex;">
												<select name="batname" id="slctbatname" class="w-100 my-drop-down" required>
													<option value="" disabled selected>Choisir le b&acirc;timent</option>
													<option value="A">B&acirc;timent A</option>
													<option value="B">B&acirc;timent B</option>
													<option value="C">B&acirc;timent C</option>
													<option value="D">B&acirc;timent D</option>
													<option value="N">B&acirc;timent N</option>
												</select>
											</div>
											<div class="form-floating mb-3 w-50">
												<input type="number" style="margin-left: 5px; height: 55px;" class="simple-txt-input w-100 form-control" id="numSalle" placeholder="Num&eacute;ro de la salle" required>
												<label for="numSalle">Num&eacute;ro de la salle</label>
											</div>
										</div>
										<div class="input-row-wrapper">
											<div class="simple-txt-input-wrapper w-50 mb-0" style="display: flex;">
												<select name="SalleType" id="slctSalleType" class="w-100 my-drop-down" required>
													<option value="" disabled selected>Choisir le type de la salle</option>
													<option value="Clss">Classe</option>
													<option value="Amphi">Amphith&eacute;&acirc;tre</option>
												</select>
											</div>
											<div class="form-floating mb-3 w-50">
												<input type="number" style="margin-left: 5px; height: 55px;" class="simple-txt-input w-100 form-control" id="capacitesalle" placeholder="Capacit&eacute; totale de la salle" required>
												<label for="capacitesalle">Capacit&eacute; totale de la salle</label>
											</div>
										</div>
										<button class="big-form-submit-button w-100 btn btn-success" type="submit" name="addttchr" value="confirm">Ajouter</button>
									</form>
                                </div>
                            </div>
                        </div>
                    </div>  
					
					<div class="row">
						<div class="w-100 d-flex">
							<div class="table-responsive card flex-fill">
								<form action="#" method="POST"> <!--WIP PHP PHP PHP-->
									<table class="bats-table table table-hover my-0">
										<!--PHP PHP PHP-->
										<thead>
											<tr>
												<th>Num&eacute;ro de Salle</th>
												<th>Type</th>
												<th>Capacit&eacute;</th>
												<th>Taux d&apos;occupation par semaine</th>
												<th style="text-align: center;">Retirer</th>
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
											<td colspan="5" class="batrow">
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
											<td style="text-align: center;"><button class="ghost-button" type="submit" name="remsalle" 
											<?php
											echo "value=\"".$data['id'].' '.$data['batiment']."\""
											?>
											><i class="sidebar-svg-profile align-middle" data-feather="x-circle" onclick="return confirm('Voulez vous vraiment enlever la salle?')"></i></button></td>
										</tr>
										<?php
										}
									}
										?>
									</table>
								</form>
							</div>
						</div>
					</div>
                </div>
            </main>
        </div>
    </div>
    <script src="js/app.js"></script>
</body>
</html>

<?php
	if (isset($_POST['addttchr'])) {
		if (isset($_POST['bat_name_add'])) {
			$batiment = addslashes($_POST['bat_name_add']);
			$requete = "INSERT INTO `batiment` (`id_batiment`) VALUES ('$batiment')";
			$sql = mysqli_query($link,$requete);
		}
	}

    if(isset($_POST['remsalle'])){
        $rem=$_POST['remsalle'];
        $pieces = explode(" ", $rem);
        $pie1=$pieces[0];
        $pie2=$pieces[1];
        echo $pie1 ; 
        $quer="DELETE FROM `salle` WHERE salle.id_salle='$pie1' and salle.id_batiment='$pie2'";
        $result=mysqli_query($link,$quer);
        $notif="INSERT INTO `notifs`( `type`, `title`, `description`) VALUES ('Remove','Removal of a salle/amphi','Supprimer du  $bat $rem ')";
        $querrr=mysqli_query($link,$notif);
        header("Refresh:2");
    }
?>