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

	<link rel="canonical" href="https://demo-basic.adminkit.io/pages-blank.html" />

	<title>Gestion D&apos;enseignants</title>
	
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

					<li class="sidebar-item active">
						<a class="sidebar-link" href="gestionenseignants.php">
							<i class="align-middle" data-feather="users"></i> <span class="align-middle">Gestion D&apos;enseignants</span>
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
				<div class="navbar-title">Gestion D&apos;enseignants</div>
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
										<div class="lbl-txt-field">Ajouter un enseignant</div>
										<div style="display: flex;">
											<div class="simple-txt-input-wrapper w-75 mb-0">
												<input name="id_ens_tadd" type="text" class="simple-txt-input w-100 form-control" pattern="[a-zA-Z0-9._%+-]+" id="addTTCHRID" placeholder="E-mail institutionnel de l&apos;enseignant" required>
												<div class="txtfield-suffix unselectable">@uit.ac.ma</div>
											</div> 
											<button class="form-submit-button w-25 btn btn-success" type="submit" name="addttchr" value="confirm">Ajouter</button>
										</div>
									</form>
								</div>
							</div>
							<div class="card">
								<div class="card-body">
									<div class="form-floating mb-3">
										<input type="text" class="form-control" id="floatingFltrTTCHR" onkeyup="myFunction()" placeholder="Chercher un enseignant">
										<label for="floatingFltrTTCHR">Chercher un enseignant</label>
									</div>
									<div class="w-100">
										<div class="card flex-fill table-responsive">
											<form action="#" method="POST">
												<table id="LSTTTCHRSFLTR" class="table table-hover my-0">
													<tr class="header">
														<th>Nom et prenom</th>
														<th>Adresse E-mail</th>
														<th>Charge horaire (h&sol;semaine)</th>
														<th style="text-align: center;">Retirer</th>
													</tr>
													<?php
													    $query="SELECT uti.id as idutil, ens.nom as 'nom',ens.prenom as 'prenom',uti.login,SUM(TIME_TO_SEC(TIMEDIFF(se.heure_fin,se.heure_deb))/3600) as 'charge' 
														FROM enseignant ens 
														left JOIN module modu ON modu.id_enseignant = ens.id_enseignant 
														LEFT JOIN utilisateur uti ON ens.id_utilisateur=uti.id
														LEFT JOIN seance se ON modu.id_module = se.id_module
														AND se.date BETWEEN DATE_SUB(NOW(), INTERVAL WEEKDAY(NOW()) DAY) AND 
														DATE_ADD(DATE_SUB(NOW(), INTERVAL WEEKDAY(NOW()) DAY), INTERVAL 6 DAY)
														GROUP BY ens.nom,ens.prenom "; 
														$result =mysqli_query($link,$query);
														while($data=mysqli_fetch_assoc($result)){
														if($data['charge']!=NULL)
															$data['charge']=number_format($data['charge'], 2);
														else
															$data['charge'] = 0;
													?>
													<tr>
														<td>
															<?php
																echo $data['nom'].' '.$data['prenom'];
															?>
														</td>
														<td>
															<?php
																echo $data['login'];
															?>
														</td>
														<td>
															<?php
																echo $data['charge'];
															?>
														</td>
														<td style="text-align: center;"><button class="ghost-button" type="submit" name="remttchr" value="<?php echo $data['idutil'] ?>"><i class="sidebar-svg-profile align-middle" data-feather="x-circle" onclick="return confirm('Voulez vous vraiment supprimer l\'enseignant?')"></i></button></td>
													</tr>
													<?php
														}
													?>
												</table>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</main>

		</div>
	</div>

	<script src="js/app.js"></script>
	<script>
		function myFunction() {
			// Declare variables
			var input, filter, table, tr, td, i, txtValue;
			input = document.getElementById("floatingFltrTTCHR");
			filter = input.value.toUpperCase();
			table = document.getElementById("LSTTTCHRSFLTR");
			tr = table.getElementsByTagName("tr");
		
			// Loop through all table rows, and hide those who don't match the search query
			for (i = 0; i < tr.length; i++) {
				td = tr[i].getElementsByTagName("td")[0];
				if (td) {
					txtValue = td.textContent || td.innerText;
					if (txtValue.toUpperCase().indexOf(filter) > -1) {
						tr[i].style.display = "";
					} else {
						tr[i].style.display = "none";
					}
				}
			}
		}
	</script>
</body>

</html>

<?php
  if(isset($_POST['addttchr'])) {
    if(isset($_POST['id_ens_tadd'])) {
      $login = addslashes($_POST['id_ens_tadd']."@uit.ac.ma");
      $requete = "INSERT INTO `utilisateur` (`id`, `login`, `type`, `photo`) VALUES (NULL, '$login', 'enseignant', '2.png')";
      $sql_exec = mysqli_query($link,$requete);
    }
  }

  if(isset($_POST['remttchr'])) {
	$id_utilisateur = $_POST['remttchr'];
	$requete = "DELETE FROM utilisateur WHERE id = '$id_utilisateur'";
	$sql = mysqli_query($link,$requete);
	if($sql) {
		header("Location: gestionenseignants.php");
	}
}
?>