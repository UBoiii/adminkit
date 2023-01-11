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
					<img src="img/avatars/avatar.jpg" class="sidebar-profilepic">
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
				<div class="navbar-title">Modifier Le Profil</div>
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
                                    <div class="col-sm-6 cards-profile-admin">
                                        <div class="card">
                                            <div class="card-body cards-profile-admin">
                                                <div style="display: flex; flex-direction: column; align-items: center;">
                                                    <div class="lbl-txt-field" style="font-size: 1.9em; font-weight: bold; margin-bottom: 20px; text-transform: capitalize;">Changer ma photo</div>
                                                    <!--PHP PHP PHP-->
                                                    <img src="img/avatars/avatar.jpg" class="big-profile-pic">
                                                    <!--PHP PHP PHP-->
                                                    <form action="#" method="post" enctype="multipart/form-data" style="display: flex; flex-direction: column; align-items: stretch;">
                                                        <input type="file" name="pdp" accept="image/png, image/jpg, image/jpeg">
                                                        <button class="change-pdp-sub-button btn btn-success" type="submit" name="confirmPDPUpload" value="upPDPcnf" >Confirmer</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="card">
                                            <div class="card-body cards-profile-admin" style="position: relative;">
                                                <div class="w-75" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%)">
                                                    <div class="lbl-txt-field" style="font-size: 1.9em; font-weight: bold; margin-bottom: 20px; text-transform: capitalize;">Changer mon mot de passe</div>
                                                    <!--PHP PHP PHP-->
                                                    <form action="#" method="post" enctype="multipart/form-data" style="display: flex; flex-direction: column; align-items: stretch;">
                                                        <div class="form-floating mb-3 simple-txt-input-wrapper w-100 mb-0">
                                                            <input name="oldmdp" type="password" class="simple-txt-input w-100 form-control" pattern="[a-zA-Z0-9._%+-]+" id="oldmdp" placeholder="Encien mot de passe" required>
                                                            <label for="oldmdp">Encien mot de passe</label>
                                                        </div> 
                                                        <div class="form-floating mb-3 simple-txt-input-wrapper w-100 mb-0">
                                                            <input name="newmdp" type="password" class="simple-txt-input w-100 form-control" pattern="[a-zA-Z0-9._%+-]+" id="newmdp" placeholder="Nouveau mot de passe" required>
                                                            <label for="newmdp">Nouveau mot de passe</label>
                                                        </div>
                                                        <button class="change-pdp-sub-button btn btn-success" type="submit" name="confirmpasswrdchng" value="confirmpasswrdchng" >Mettre &agrave; jour mon mot de passe</button>
                                                    </form>
                                                </div>
                                            </div>
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
</body>
</html>