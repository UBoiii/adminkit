<?php
    include('connexion.php');
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

	<title>Gestion D&apos;&eacute;tudes</title>
	
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
							<i class="align-middle" data-feather="users"></i> <span class="align-middle">Gestion D&apos;enseignants</span>
						</a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="gestionlocaux.php">
							<i class="align-middle" data-feather="database"></i> <span class="align-middle">Gestion de Locaux</span>
						</a>
					</li>

					<li class="sidebar-item active">
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
				<div class="navbar-title">Gestion D&apos;&eacute;tudes</div>
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
									<div class="lbl-txt-field">Ajouter une fili&egrave;re</div>
									<form action="" method="POST">
										<div style="display: flex;">
											<div class="simple-txt-input-wrapper w-75 mb-0">
												<input type="text" class="simple-txt-input w-100 form-control" name="nom_filiere" id="id_filiere" placeholder="Le nom de la fili&egrave;re" required>
											</div> 
											<button class="form-submit-button w-25 btn btn-success" type="submit" name="sub" value="confirm">Ajouter</button>
										</div>
									</form>
								</div>
							</div>

							<div class="card">
								<div class="card-body">
									<div class="lbl-txt-field">Ajouter un groupe</div>
									<form method="POST" action="#">
										<div class="input-row-wrapper w-100">
											<div class="simple-txt-input-wrapper w-50 mb-0" style="display: flex;">
												<select name="filiere" class="w-100 my-drop-down" id="filiere" onchange="showNextInput()" required>
													<option value="null" selected disabled>Choisir une fili&egrave;re</option>
													<?php
            											$sql = "SELECT DISTINCT nom_filiere FROM filiere";
            											$result = mysqli_query($link, $sql);
            											while ($data = mysqli_fetch_assoc($result)) {
            											    $filiere = $data['nom_filiere'];
            											    echo "<option value='$filiere'>";
            											    echo $filiere;
            											    echo '</option>';
            											}
            										?>
												</select>
											</div>
										
											<div class="w-50">
												<div id="next-input" style="display:none; margin-right: 10px">
													<select id="inputfldyr" name="year" class="w-100 my-drop-down" disabled>
														<option value="" selected disabled>Choisir une ann&egrave;e</option>
														<option value="3">3e année</option>
														<option value="4">4e année</option>
														<option value="5">5e année</option>
													</select>
												</div>
												
												<div id="section" class="form-floating simple-txt-input-wrapper" style="display:block; height: 55px;">
													<input id="inputfldsct" style="height: 55px" class="simple-txt-input form-control" type="text" name="section" pattern="[A,Z]{1}" title="Votre section (Une lettre majuscule)" placeholder="Votre section (Une lettre majuscule)" disabled required>
													<label for="inputfldsct">Votre section (Une lettre majuscule)</label>
												</div>
											</div>
										</div>

										<div class="input-row-wrapper w-100">
											<div class="simple-txt-input-wrapper w-50 mb-0" style="display: flex;">
												<select name="scncType" class="w-100 my-drop-down">
													<option value="" selected disabled>Choisir type du cours</option>
													<option value="cours">Cours</option>
													<option value="tp">TP</option>
													<option value="td">TD</option>
												</select>
											</div>
											<div class="w-50">
												<div id="ffcf" class="form-floating simple-txt-input-wrapper" style="display:block; height: 55px;">
													<input id="inputfldffcf" class="simple-txt-input form-control" type="number" name="effectif" style="height: 55px;" placeholder="Effectif" required><br>
													<label for="inputfldffcf">Effectif</label>
												</div>
											</div>
										</div>
										<input class="big-form-submit-button w-100 btn btn-success" type="submit" name="AjouterGRP" value="Ajouter">
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</main>
		</div>
	</div>

	<script src="js/app.js"></script>
	<script type="text/javascript">
		function showNextInput() {
			var filiere = document.getElementById("filiere");
			var nexInput = document.getElementById("next-input");
			var section = document.getElementById("section");
			const sctndsbl = document.querySelector("#inputfldsct");
			const yeardsbl = document.querySelector("#inputfldyr");

			if (filiere.value === "cp1" || filiere.value === "cp2") {
				nexInput.style.display = "none";
				section.style.display = "block";
				sctndsbl.disabled = false;
				yeardsbl.disabled = true;
			} else if (filiere.value === "null") {
				sctndsbl.disabled = true;
				yeardsbl.disabled = true;
			} else {
				nexInput.style.display = "block";
				section.style.display = "none";
				sctndsbl.disabled = true;
				yeardsbl.disabled = false;
			}
		}
	</script>
</body>

</html>

<?php
    //checking if the admin is logged in
    //if ((!isset($_SESSION['logged_in']) || !$_SESSION['logged_in']) && $_SESSION['type'] = 'admin')
    //    header("Location: login.php");
    //checking expire time and updating it
    //check();
    if (isset($_POST['sub'])) {
        for ($i = 5; $i <= 10; $i++) {
            $query = "INSERT INTO filiere(nom_filiere,id_semestre) VALUES('" . $_POST['nom_filiere'] . "',$i)";
            mysqli_query($link, $query);
        }
    }

	if(isset($_POST['AjouterGRP'])) {
        $error = $_POST['error'] = "";
        $effectif = $_POST['effectif'];
        $array_diff = ['cp1','cp2'];

        if(isset($_POST['filiere']) && $_POST['filiere'] != "" && isset($_POST['scncType']) && $_POST['scncType'] != "") {
          $filiere = $_POST['filiere'];
		  $type_seance  = $_POST['scncType'];
          if (in_array($filiere,$array_diff)) {
            $section = $_POST['section'];
            $requete = "SELECT * FROM filiere where nom_filiere ='$filiere'";
            $sql = mysqli_query($link,$requete);
            $array_id = array();
            while($data = mysqli_fetch_assoc($sql)) {
              $id_filiere = $data['id_filiere'];
              $id_semestre = $data['id_semestre'];
              $array_id[$id_filiere] = $id_semestre;
            }
            foreach($array_id as $key => $value) {
              $check = "SELECT * FROM groupe g WHERE g.id_filiere = '$key' and g.id_semestre = '$value' and g.type = '$type_seance'";
              $sql_check = mysqli_query($link,$check);
              if (mysqli_num_rows($sql_check) > 0) {  
                  $error = "Déja existe!";
              } else {
                  $insertion = "INSERT INTO `groupe` (`id_groupe`, `id_filiere`, `id_semestre`, `type`, `effectif`, `section`) VALUES (NULL, '$key', '$value', '$type_seance', '$effectif', '$section')";
                  $sql_exec = mysqli_query($link,$insertion);
              }
            }   
          } 
          if (!in_array($filiere,$array_diff) && isset($_POST['year']) && $_POST['year'] != "") {
			$year = $_POST['year'];
            $semestre = $year*2-1;
            $semestre2 = $year*2;
            $requete = "SELECT * FROM filiere where nom_filiere ='$filiere' and (id_semestre = '$semestre' or id_semestre ='$semestre2')";
            $sql = mysqli_query($link,$requete);
            $array_id = array();
            while($data = mysqli_fetch_assoc($sql)) {
              $id_filiere = $data['id_filiere'];
              $id_semestre = $data['id_semestre'];
              $array_id[$id_filiere] = $id_semestre;
            }
            foreach($array_id as $key => $value) {
              $check = "SELECT * FROM groupe g WHERE g.id_filiere = '$key' and g.id_semestre = '$value' and g.type = '$type_seance'";
              $sql_check = mysqli_query($link,$check);
              if (mysqli_num_rows($sql_check) > 0) {  
                  $error = "Déja existe";
              } else {
                  $insertion = "INSERT INTO `groupe` (`id_groupe`, `id_filiere`, `id_semestre`, `type`, `effectif`, `section`) VALUES (NULL, '$key', '$value', '$type_seance', '$effectif', '')";
                  $sql_exec = mysqli_query($link,$insertion);
              }
            }
          }
        }

    } else {
        $error = "erreur";
    }
	echo $error;
?>