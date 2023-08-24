<!DOCTYPE html>
<html>
    <head>
        <style>
            .toptitulo{
                background: #5A9BE6 !important;
                color: #fff !important;
            }
            .formInpt {
                display: block;
                width: 100%;
                height: 34px;
                outline: none;
                padding: 6px 10px;
                font-size: 14px;
                background-color: #fff;
                background-image: none;
                border: none;
                border-bottom: 1px solid #5A9BE6;
            }
            .btnCad{
                background-color: #5A9BE6;
                color: #FFF;
                border: none;
                border-radius: 0.25rem;
                padding: 0.5rem;
            }
            .btnCad:hover{
                background-color: #fff;
                color: #5A9BE6;
                border: 1px solid #5A9BE6;
                border-radius: 0.25rem;
                padding: 0.5rem;
            }
            .btnReset{
                background-color: #333333;
                color: #FFF;
                border: none;
                border-radius: 0.25rem;
                padding: 0.5rem;
            }
            .btnReset:hover{
                background-color: #fff;
                color: #333333;
                border: 1px solid #333333;
                border-radius: 0.25rem;
                padding: 0.5rem;
            }
        </style>

        <!-- ==========[FAVICON]========== -->
        <link rel="shortcut icon" href="images/logo/favicon.ico" type="image/x-icon">
        <link rel="icon" href="images/logo/favicon.ico" type="image/x-icon">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js"></script>
    </head>

    <header>
        <?php
            include_once '../../topmenuAdm.php';
        ?>
    </header>

    <body>
        <form action="" method="POST" id="FormCadProd" name="FormCadProd" enctype="multipart/form-data">
            <input type="hidden" name="hdnPrecoFormatado" id="hdnPrecoFormatado" value="">
            <div class="container">
                <div class="card">
                    <div class="card-header toptitulo"><h4>Cadastro de Produtos</h4></div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="col-md-12">
                                    <img id="retornoImgProduto" name="retornoImgProduto" style="width: 20rem; height: 20rem;">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="fileImage">Foto do Produto</label>
                                        <input type="file" class="form-control" name="flImgProduto" id="flImgProduto" style="font-size: 14px!important;" onchange="previewImagem()">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="txtNomeProd">Nome do Produto</label>
                                        <input type="text" id="txtNomeProd" name="txtNomeProd" class="formInpt">
                                    </div>
                                </div>
                                <br><br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="slcCategoria">Categoria</label>
                                        <select id="slcCategoria" name="slcCategoria" class="formInpt" style="border-top: 1px solid #fff; border-right: 2px solid #fff; border-left: 1px solid #fff;">
                                            <option value="" selected>Selecione</option>
                                            <option value="PS4">PS4</option>
                                            <option value="PS5">PS5</option>
                                            <option value="XBOX">XBOX</option>
                                            <option value="PC">PC</option>
                                            <option value="NINTENDO">NINTENDO</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="txtPreco">Preço</label>
                                        <input type="text" id="txtPreco" name="txtPreco" onchange="mostraPreco(this.value);" class="formInpt money">
                                    </div>
                                </div>
                                <br><br>
                                <div class="row" style="margin-top: 15px;">
                                    <div class="col-md-12">
                                        <label for="txtDescricao">Descrição do Produto </label>
                                        <textarea name="txtDescricao" id="txtDescricao" cols="50" rows="20" class="formInpt"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer" style="text-align-last: right;">
                        <input type="button" class="btnReset" value="Limpar" id="btnLimpar" name="btnLimpar" onclick="clearForm();">
                        <input type="button" class="btnCad" value="Cadastrar" id="btnCadastrar" name="btnCadastrar" onclick="cadastraProd();">
                    </div>
                </div>
            </div>
        </form>
    </body>

    <footer>
        <?php
            include_once '../../footer.php';
        ?>
    </footer>
</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js"></script>
<script>
    function previewImagem(){
        var imagem = document.querySelector('input[name=flImgProduto]').files[0];
        var preview = document.querySelector('#retornoImgProduto');
        var reader = new FileReader();
        
        reader.onloadend = function () {
            preview.src = reader.result;
        }
        
        if(imagem){
            reader.readAsDataURL(imagem);
        }else{
            preview.src = "";
        }
    }


    function clearForm(){
        document.querySelector('#retornoImgProduto').src = '';
        document.querySelector('#flImgProduto').value = '';
        document.querySelector('#txtNomeProd').value = '';
        document.querySelector('#slcCategoria').value = '';
        document.querySelector('#txtPreco').value = '';
        document.querySelector('#txtDescricao').value = '';
    }
    

    function cadastraProd(){
		var msg = ''

		if(document.getElementById('flImgProduto').value == ''){
			msg = msg + '- Foto do Produto' + '<br>';
		}
		if(document.getElementById('txtNomeProd').value == ''){
			msg = msg + '- Nome do Produto' + '<br>';
		}
		if(document.getElementById('slcCategoria').value == ''){
			msg = msg + '- Categoria' + '<br>';
		}
        if(document.getElementById('txtPreco').value == ''){
			msg = msg + '- Preço' + '<br>';
		}
        if(document.getElementById('txtDescricao').value == ''){
			msg = msg + '- Descrição do Produto' + '<br>';
		}
		if(msg != ''){
			Swal.fire({
				title: 'Ops... Os campos abaixo não podem estar vazios:',
				html: msg,
				icon: 'warning'
			})
		}
		else{
            let formdata = new FormData($("form[name='FormCadProd']")[0]);
			$.ajax({
				type:"POST",
				processData: false,
                data:formdata,
				contentType: false,
				url:"ajax/ajaxCadProduto.php",
				beforeSend: function(){
				},
				success: function(retorno){
					let timerInterval
					Swal.fire({
						icon: 'success',
						title: 'Produto adicionado com sucesso!',
						showConfirmButton: false,
						timer: 2000,
						timerProgressBar: true,
						willClose: () => {
							clearInterval(timerInterval)
						}
					})				
				},
				error: function(xhr, ajaxOpt, thrownError, StatusText){
                    let timerInterval2
					Swal.fire({
						icon: 'error',
						title: 'Erro ao cadastrar o produto!',
						showConfirmButton: false,
						timer: 2000,
						timerProgressBar: true,
						willClose: () => {
							clearInterval(timerInterval2)
						}
					})
				}
			});
		}
	}

    $(function(){
        $(".money").maskMoney({prefix:'R$ ', allowNegative: false, thousands:'.', decimal:',', affixesStay: false});
    });
    
    function mostraPreco(value){
        var tiraPonto = value.replace('.', '');
        var trocaVirgula = tiraPonto.replace(',', '.');
        document.querySelector('#hdnPrecoFormatado').value = trocaVirgula;
    }
</script>
