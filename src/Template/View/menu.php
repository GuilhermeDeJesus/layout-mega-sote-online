<!DOCTYPE html>
<html lang='pt-BR'>
<head>
<meta charset=UTF-8>
<script src="public/vendors/jquery/dist/jquery.js"
	type="text/javascript"></script>
<script src="public/vendors/jquery/dist/jquery.min.js"
	type="text/javascript"></script>
<script src="public/vendors/jquery-ui/jquery-ui.js"
	type="text/javascript"></script>
<script src="public/vendors/jquery-ui/jquery-ui.min.js"
	type="text/javascript"></script>
<link rel="stylesheet" href="public/vendors/jquery-ui/jquery-ui.css"
	type="text/css" />
<link rel="stylesheet" href="public/vendors/jquery-ui/jquery-ui.min.css"
	type="text/css" />
<link rel="stylesheet"
	href="public/vendors/jquery-ui/jquery-ui.structure.css" type="text/css" />
<link rel="stylesheet"
	href="public/vendors/jquery-ui/jquery-ui.structure.min.css"
	type="text/css" />
<link rel="stylesheet"
	href="public/vendors/jquery-ui/jquery-ui.theme.css" type="text/css" />
<link rel="stylesheet"
	href="public/vendors/jquery-ui/jquery-ui.theme.min.css" type="text/css" />
<script src="public/vendors/bootstrap/dist/js/bootstrap.js"
	type="text/javascript"></script>
<script src="public/vendors/bootstrap/dist/js/bootstrap.min.js"
	type="text/javascript"></script>
<script src="public/vendors/bootstrap/dist/js/npm.js"
	type="text/javascript"></script>
<link rel="stylesheet"
	href="public/vendors/bootstrap/dist/css/bootstrap-theme.css"
	type="text/css" />
<link rel="stylesheet"
	href="public/vendors/bootstrap/dist/css/bootstrap-theme.min.css"
	type="text/css" />
<link rel="stylesheet"
	href="public/vendors/bootstrap/dist/css/bootstrap.css" type="text/css" />
<link rel="stylesheet"
	href="public/vendors/bootstrap/dist/css/bootstrap.min.css"
	type="text/css" />
<link rel="stylesheet"
	href="public/vendors/datatable/jquery.dataTables.min.css"
	type="text/css" />
<script src="public/vendors/datatable/jquery.dataTables.min.js"
	type="text/javascript"></script>
<link rel="stylesheet" href="public/css/style.css" type="text/css" />
</head>
<body>
	<div class="row">
		<div class="col-md-12">
			<div style="width: 100%; height: 5px; background: #286090;"></div>
			<div id="menu-padrao-div">
				<div class="navbar-header">
					<a class="navbar-brand" href="#"><img
						src="public/img/loteriaonline-logo.png" id="img-logo"></img></a>
				</div>
				<div id="carrinho">
					<a id="txtCarrinho" href="?m=carrinho&c=carrinho&a=listar"> <i
						class="glyphicon glyphicon-shopping-cart" style="font-size: 28px;"></i>

						<div class="txtCarinho" style="margin-top: -35px;">
							<span style="margin-left: 37%; color: #3CB371;"><b><?=12;?> itens</b></span><br>
							<span
								style="margin-left: 37%; margin-bottom: 20%; color: #3CB371;"><b>R$ <?=number_format(1500, 2, ',', '.'); ?></b></span>
						</div>
					</a> <a href="?m=credito&c=creditos&a=comprar">
						<h4
							style="color: #FFF; font-size: 16px; margin-top: -16px; background: #286090; width: 140px; border-radius: 5px; height: 28px; padding: 5px 0px 10px 6px;">Comprar
							Créditos</h4>
					</a>

				</div>
				<?php if(isset($_SESSION['cliente']['nome'])) {?>
			<nav id="menu-nav-login">
					<ul>
						<li><a href="?m=cliente&c=cliente&a=painel"
							style="color: #666; font-size: 16px;">Olá, <?=$_SESSION['cliente']['nome']?></a>
						</li>
						<li><a href="?m=cliente&c=cliente&a=sair" style="color: #666;"><span
								class="glyphicon glyphicon-log-in"></span> Sair</a></li>
						<li></li>

					</ul>
					<div style="margin-left: 35px; margin-top: -40px;">
						<p style="font-size: 13px; font-weight: bolder;">
							Meus Créditos: <span style="color: green;">R$ 100,00<span>
						
						</p>
					</div>
				</nav>				
				<?php }else{ ?>
			<nav id="menu-nav-login">
					<ul>
						<li><a href="cadastrar.php" style="color: #666; font-size: 16px;"><span
								class="glyphicon glyphicon-user"></span> Criar conta</a></li>
						<li><a href="login.php" style="color: #666; font-size: 16px;"><span
								class="glyphicon glyphicon-log-in"></span> Logar</a></li>
					</ul>
				</nav>
				<?php } ?>			
		</div>
			<nav class="navbar navbar-default" id="menu-padrao-nav">
				<div class="container-fluid">
					<nav id="menu">
						<ul>
							<li><a href="#" style="color: #FFF;"><span
									class="glyphicon glyphicon-home"></span></a></li>
							<li><a href="#" style="color: #FFF;">NOTÍCIAS</a></li>
							<li><a href="#" style="color: #FFF;">QUEM SOMOS</a></li>
							<li><a href="#" style="color: #FFF;">COMO FUNCIONA</a></li>
							<li><a href="#" style="color: #FFF;">RESULTADOS</a></li>
							<li><a href="#" style="color: #FFF;">ATENDIMENTO</a></li>
							<li><a href="#" style="color: #FFF;">PRÊMIOS NO SITE</a></li>
							<li><a href="#" style="color: #FFF;">DÚVIDAS</a></li>
							<li><a href="#" style="color: #FFF;">TERMOS DE USO</a></li>
						</ul>
					</nav>
				</div>
			</nav>
		</div>
	</div>