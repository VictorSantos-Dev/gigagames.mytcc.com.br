<?php
    session_start();
	include_once('../../conexao.php')
?>


<!DOCTYPE html>

<html lang="pt-BR">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">	

    <link rel="stylesheet" type="text/css" href="../assets/jogos/preloader.css">
	<link rel="stylesheet" type="text/css" href="../assets/jogos/styles.css">
	<link rel="stylesheet" type="text/css" href="../assets/jogos/animate.min.css">
	<link rel="stylesheet" href="../assets/jogos/owl.carousel.min.css">
	<link rel="stylesheet" href="../assets/jogos/magnific-popup.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

	<script src="../assets/jogos/jquery.min.js.download"></script>

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
            include '../../topmenu.php';
        ?>
    </header>

	<?php 
		$queryProds = "select * from produtos where idProd = " .$_GET['id_prod'];
		$result_queryProds = mysqli_query($conexao, $queryProds);

		$row = mysqli_fetch_array($result_queryProds);
	?>

	<main>

		<section style="background-color:#ddd">
			<div class="container" style="background-color:#fff">
				<div class="row" style="display:flex">
					<div style="width:fit-content">
						<img src="http://www.gigagames.mytcc.com.br/<?php echo $row['caminhoImagem'] ?>" style="height: 300px;">
					</div>
					<div style="width:fit-content">
						<h2><?php echo $row['nomeProd'] ?> - <?php echo $row['plataformaProd'] ?></h2>
						<h5><?php echo $row['descricaoProd'] ?></h5>
						<br>
						<h6>R$ <?php echo number_format($row['precoProd'], 2, ',', ' '); ?></h6>
						<br>
						<button class="btn" style="background-color: #5A9BE6;color:white">Adicionar ao carrinho</button>
					</div>
				</div>
			</div>
		</section>

		<script src="../assets/jogos/bolos.js.download"></script>

	</main>

	<footer>
        <?php
            include '../../footer.php';
        ?>
    </footer>

	<script src="../assets/jogos/bootstrap.min.js.download" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="../assets/jogos/isotope.min.js.download"></script>
	<script src="../assets/jogos/2e3d535970.js.download"></script>
	<script src="../assets/jogos/jquery.magnific-popup.min.js.download"></script>


	<script>
		new WOW().init();
	</script>



</body>

</html>
