
<?php 
	session_start();
	include('conexao.php');

	date_default_timezone_set('America/Sao_Paulo');
	$hour = date("H");
	if($hour >= 6 && $hour < 12){
		// 6h às 11h
		$saudacao = "Bom Dia!";
	}
	else if($hour >= 12 && $hour < 18){
		// 12h às 17h
		$saudacao = "Boa Tarde!";
	}
	else if($hour >= 18 && $hour < 6 || $hour == 00){
		// 18h às 5h
		$saudacao = "Boa Noite!";
	}

	$id_user = $_SESSION['id_user'];
	$first_name = $_SESSION['first_name'];
	$tipo_perfil = $_SESSION['tipo_perfil'];

	$queryUser = "select * from users where id_user = '$id_user'";
	$result_queryUser = mysqli_query($conexao, $queryUser);
?>


	<head>
		<title>Giga Games</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- ==========[BOOTSTRAP]========== -->
		<!-- ===== CSS ===== -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
		<!-- ===== JS ===== -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
		<!-- ===== ICONS ===== -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

		<!-- ==========[FONTAWESOME]========== -->
		<!-- ===== ICONS ===== -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

		<!-- ==========[JQUERY]========== -->
		<!-- ===== CDN JS ===== -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
		<!-- ===== CDN ANIMATION ===== -->
		<script src="https://cdn.jsdelivr.net/npm/@mojs/core"></script>

		<!-- ==========[FONTS]========== -->
		<!-- ===== POPPINS ===== -->
		<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

		<!-- ==========[FAVICON]========== -->
		<link rel="shortcut icson" href="../../../images/logo/favicon.ico" type="image/x-icon">
		<link rel="icon" href="../../../images/logo/favicon.ico" type="image/x-icon">

		<!-- ==========[SWIPER]========== -->
		<!-- ===== CSS ===== -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
		<!-- ===== JS ===== -->
		<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

		<!-- ==========[SWEET ALERT]========== -->
		<!-- ===== ALL ===== -->
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


		
		<link rel="stylesheet" href="../../../assets/topmenu/css/style.css">
		<script src="../../../assets/topmenu/js/functions.js"></script>

		<!-- ==========[Modal Login/Register]========== -->
		<!-- ===== CSS ===== -->
		<link rel="stylesheet" href="../../../assets/modalLogin/css/reset.css"> <!-- CSS reset -->
		<link rel="stylesheet" href="../../../assets/modalLogin/css/style.css"> <!-- Resource style -->
		<link rel="stylesheet" href="../../../assets/modalLogin/css/demo.css"> <!-- Demo style -->

		<style>
			a{
				text-decoration: none;
			}
		</style>
		

		<style>
			.dropdown:hover .dropdown-menu {
				display: block;
				position: absolute;
				transform: translate3d(0.4rem, 0rem, 0rem); /* distancia entre menu e btn */
			}
			.dropdown {
				display: inline-block; /* deixa o LO do "tamanho do próprio texto" e não da largura inteira da tela*/
				list-style: none;
			}
			.social-media a {
				width: 3rem !important;
				height: 3rem !important;
				border-radius: 50% !important;
				margin-right: 4px !important;
			}
			.social-media a:hover {
				background: #5A9BE6 !important;
				color: #fff !important;
			}
		</style>
	</head>

	<section class="ftco-section">
		<div id="aceitaPix">
			<div class="pix">
				<label>PAGUE VIA</label>&nbsp;&nbsp;
				<i class="fa-brands fa-pix"></i>&nbsp;&nbsp;
				<label>E GANHE 10% DE DESCONTO!</label>
			</div>
		</div>
		<nav class="navbar navbar-expand-lg ftco_navbar ftco-navbar-light" id="ftco-navbar">
			<div class="container2">
				<a href="../../../../home"><img src="../../../images/logo/Logo_Azul_sFundo.png" alt="Giga Games" style="width: 4rem;"></a>
				<div class="social-media order-lg-last" style="display: flex;">
					<div class="mb-0 d-flex">
						<a href="#cart" class="d-flex align-items-center justify-content-center"><i class="bi bi-cart4" style="font-size: 1.8rem"></i></a>					
						<?php
							if($_SESSION['loggedin'] == false){
								echo '<a href="../../../login" class="d-flex align-items-center justify-content-center"><i class="bi bi-person-circle" style="font-size: 1.8rem"></i></a>';
							}
							else{
								echo '<a href="../../../login" class="d-flex align-items-center justify-content-center" style=""><i class="bi bi-person-circle" style="font-size: 1.8rem"></i></a>';

								echo '<div style="margin-left: -0.4rem; margin-right: 0.9rem; display: grid; align-content: center; justify-items: start;">
										<label class="d-flex align-items-center justify-content-center" style="color: #fff; font-size: 0.8rem; margin-bottom: -0.3rem;">Olá, '.$first_name.'</label>
										<label class="d-flex align-items-center justify-content-center" style="color: #fff; font-size: 0.8rem;">'.$saudacao.'</label>
									  </div>
									';
							}
						?>
						<?php
							if($_SESSION['loggedin']){
								echo '<a href="../../../logoff.php" class="d-flex align-items-center justify-content-center"><i class="fa-solid fa-arrow-right-from-bracket" style="font-size: 1.8rem"></i></a>';
							}
						?>
					</div>
				</div>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="fa fa-bars"></span>
				</button>
				<div class="collapse navbar-collapse" id="ftco-nav" style="justify-content: center;">
					<ul class="navbar-nav ml-auto mr-md-3">
						<li class="nav-item"><a href="../../../pre-venda" class="nav-link">Pré Venda</a></li>
						<li class="nav-item"><a href="../../../produtos" class="nav-link">Produtos</a></li>
						<li class="nav-item"><a href="../../../sobre-nos" class="nav-link">Sobre nós</a></li>
						<!--- <li class="nav-item"><a href="../../../quem-somos" class="nav-link">Quem Somos</a></li> --->
					</ul>
				</div>
			</div>
		</nav>
		<div class="row navbar" style="background-color: #333333; margin-bottom: 1rem; width: 103%;">
			<hr style="color: #5A9BE6; width: 90%; margin-left: 5%;">
			<div class="col-md-12">
				<div class="row">
					<div class="containerTopMenu gray highlightTextIn">
						<ul>
							<li class="nav-item dropdown">
								<a href="#" id="navbarDropdownMenuLink" alt="PS4" style="color: #fff;">PS4</a>         
							</li>
							<li class="nav-item dropdown">
								<a href="#" id="navbarDropdownMenuLink2" alt="PS5" style="color: #fff;">PS5</a>
							</li>
							<li class="nav-item dropdown">
								<a href="#" id="navbarDropdownMenuLink2" alt="XBOX" style="color: #fff;">XBOX</a> 
							</li>
							<li class="nav-item dropdown">
								<a href="#" id="navbarDropdownMenuLink2" alt="PC" style="color: #fff;">PC</a>  
							</li>
							<li class="nav-item dropdown">
								<a href="#" id="navbarDropdownMenuLink2" alt="NINTENDO" style="color: #fff;">NINTENDO</a>  
							</li>							
						</ul>  
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="../../../assets/topmenu/js/jquery.min.js"></script>
	<script src="../../../assets/topmenu/js/popper.js"></script>
	<script src="../../../assets/topmenu/js/bootstrap.min.js"></script>
	<script src="../../../assets/topmenu/js/main.js"></script>

	<!-- ===== JS ===== -->
	<script src="../../../assets/modalLogin/js/placeholders.min.js"></script> <!-- polyfill for the HTML5 placeholder attribute -->
	<script src="../../../assets/modalLogin/js/main.js"></script> <!-- Resource JavaScript -->

