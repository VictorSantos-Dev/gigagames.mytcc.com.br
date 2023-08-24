<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- ==========[FAVICON]========== -->
	<link rel="shortcut icon" href="../../images/logo/favicon.ico" type="image/x-icon">
	<link rel="icon" href="../../images/logo/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="teste/css/foundation.css">
    <link rel="stylesheet" href="teste/css/painel.css">
</head>

<header>
    <?php
        include_once '../topmenuAdm.php';
    ?>
</header>
<body class="page-painel">
    <div class="grid-container">
		<div class="grid-x" id="cabecalho">
			<div class="cell small-12  medium-8 large-8" id="title">
				<img src="teste/img/icons/painel.png" >
				<h1>Painel de Controle</h1>
			</div>
		</div> 

		<div class="grid-x grid-padding-x">
			<div class="cell auto" id="conf">
				<fieldset>
					<legend>Perfis</legend>
					<div class="grid-x">
						<div class="cell small-12  medium-6 large-6" >
							<div class="cell small-4  medium-4 large-4" >
								<p><a href="painel-usuarios/adicionar-usuario" class="button">Cadastrar Perfil</a>
							</div>
							<div class="cell small-4  medium-4 large-4">
								<p><a href="painel-usuarios" class="button">Atualizar Perfil</a>
								<a href="painel-usuarios/deletar-usuario" class="button">Remover Perfil</a></p>
							</div>
						</div>
						<div class="hide-for-small-only" class="cell medium-6 large-6" >
							<img src="teste/img/icons/cliente.png">
						</div>
					</div>
				</fieldset>
			</div>
			<div class="cell small-6  medium-6 large-6" id="conf">
				<fieldset>
					<legend>Produtos</legend>
					<div class="grid-x">
						<div class="cell small-12  medium-6 large-6" >
							<div class="cell small-4  medium-4 large-4" >
								<p><a href="cadastrar-produto/" class="button">Adicionar Produto</a>
								<p><a href="#" class="button">Editar Produto</a>
							</div>
							<div class="cell small-4  medium-4 large-4">
								<p><a href="#" class="button">Remover Produto</a></p>
							</div>
						</div>
						<div class="hide-for-small-only" class="cell medium-6 large-6" >
							<img src="teste/img/icons/estoque.png">
						</div>
					</div>
				</fieldset>
			</div>
		</div>
		<br>	
    </div> <!--- fim container --->


    <script src="teste/js/vendor/jquery.js"></script>
    <script src="teste/js/vendor/what-input.js"></script>
    <script src="teste/js/vendor/foundation.js"></script>
    <script src="teste/js/app.js"></script>
</body>
<footer>
    <?php
        include_once '../footer.php';
    ?>
</footer>
</html>