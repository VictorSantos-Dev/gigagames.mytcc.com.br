<?php
    session_start();
	include_once('../conexao.php')
?>


<!DOCTYPE html>

<html lang="pt-BR">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">	

    <link rel="stylesheet" type="text/css" href="assets/jogos/preloader.css">
	<link rel="stylesheet" type="text/css" href="assets/jogos/styles.css">
	<link rel="stylesheet" type="text/css" href="assets/jogos/animate.min.css">
	<link rel="stylesheet" href="assets/jogos/owl.carousel.min.css">
	<link rel="stylesheet" href="assets/jogos/magnific-popup.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

	<script src="assets/jogos/jquery.min.js.download"></script>

	<style>
		:root {
			--currencyPrefix: "R$";
		}
		.preco{
			font-weight: 600;
			color: #5A9BE6;
			display: flex;
			align-items: center;
			font-size: 30px;
		}
		.preco:before{
			content: var(--currencyPrefix);
			font-size: 18px;
			text-transform: uppercase;
		}
	</style>
</head>

<body>
	<header>
        <?php
            include '../topmenu.php';
        ?>
    </header>

	<main>
		<section class="titleBanner center text-center" style="filter: brightness(40%); background-image: url('assets/jogos/bgJogos.png'); opacity: 1; background-attachment: fixed; background-position: bottom;">
			<div class="underline-box ready">
				<h1 class="rising-reveal">
					<span class="letter">J</span>
					<span class="letter">O</span>
					<span class="letter">G</span>
					<span class="letter">O</span>
					<span class="letter">S</span>
				</h1>
			</div>
		</section>

		<section class="bolos" style="opacity: 1;">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="filtroIngrediente">
							<p>Escolha sua plataforma:</p>
							<select name="filtro" id="filtroIngredienteTodos" class="filtroIngredienteTodos" style="display: block;">
								<option value=".todasplataformas">Todas</option>
								<option value=".PS4">PS4</option>
								<option value=".PS5">PS5</option>
								<option value=".XBOX">XBOX</option>
								<option value=".NINTENDO">Nintendo</option>
								<option value=".PC">PC</option>
							</select>
						</div>
						<br>
					</div>
					<div class="col-md-12 mt-4">
						<div class="row todosbolos-lista">
							<?php   
								$queryProds = "select * from produtos";
								$result_queryProds = mysqli_query($conexao, $queryProds);

								while($row = mysqli_fetch_array($result_queryProds)){
									$precoDesc = (25 / 100) * $row['precoProd'] + $row['precoProd'];
									$id_prod = $row['idProd']; 
									$plataforma = $row['plataformaProd'];
							?>
							<div class="col-md-3 col-6 todasplataformas <?php echo $plataforma;?>">
								<div class="bolo-box center">
									<a <?php if(isset($_SESSION['loggedin']) != false){ echo "href='jogo?id_prod=$id_prod'"; }else{echo "href='../login'"; }?>>
										<img src="<?php echo $caminhoVirtual . $row['caminhoImagem'];?>" class="attachment-full size-full wp-post-image" alt="" loading="lazy" srcset="<?php echo $caminhoVirtual . $row['caminhoImagem'];?> 235w, <?php echo $caminhoVirtual . $row['caminhoImagem'];?> 150w">
                                    </a>
                                    <h2><a href="#"><?php echo $row['nomeProd'];?></a></h2>
									<p class="preco"><?php echo str_replace(".", ",", $row['precoProd']); ?></p>
									<a <?php if(isset($_SESSION['loggedin']) != false){ echo "href='jogo?id_prod=$id_prod' class='btn-bolos'"; }else{echo "href='../login' class='notLogged btn-bolos'"; }?>>Comprar</a>
								</div>
								<br>
								<br>
							</div>
							<?php }?>
						</div>
					</div>
				</div>
			</div>
		</section>

		<script src="assets/jogos/bolos.js.download"></script>

	</main>

	<footer>
        <?php
            include '../footer.php';
        ?>
    </footer>

	<script src="assets/jogos/bootstrap.min.js.download" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="assets/jogos/isotope.min.js.download"></script>
	<script src="assets/jogos/2e3d535970.js.download"></script>
	<script src="assets/jogos/jquery.magnific-popup.min.js.download"></script>


	<script>
		new WOW().init();
	</script>



</body>

</html>
