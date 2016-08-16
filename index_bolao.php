<?php
// MENU PADR�O
require_once 'src/Template/View/menu.php';

// CALENDARIO DOS JOGOS
require_once 'src/Template/View/banner_calendario_sorteios.php';

// MENU BOLOES
require_once 'src/Template/View/menu_boloes.php';

?>
<div class="row">
	<div id="msg"></div>
	<div class="col-md-6" style="background-color: #FFF; margin-top: 10px;">
		<div
			style="border-bottom: 3px solid #008B45; border-right: 3px solid #008B45; margin-left: -6px; border-radius: 5px; width: 100%; background: #FFF; margin-top: 25px; margin-bottom: 30px;">
			<h3
				style="color: green; font-weight: bolder; font-style: italic; margin-left: 4px; margin-top: 5px;">
				<img
					style="margin-left: 15px; margin-right: 15px; margin-top: -3px;"
					src="public/img/trevo-mega.png" class="trevo-img-small" />Mega Sena
			</h3>
			<div
				style="width: 500px; height: 30px; border-radius: 10px; text-align: center; background-color: #008B45; opacity: 0.5; float: left; margin-left: 210px; border: 3px solid #CCC; margin-top: -3.9%;">
				<h5 style="color: #FFF; margin-top: 5px; margin-left: 10px;">Concurso:
					1836 | Prêmio Estimado: R$ 10.000,00</h5>
			</div>
			<hr style="border-bottom: 3px solid #008B45;" />
			<table class="table table-striped-megasena"
				style="border: 0px solid #e9e9e9; border-radius: 15px;">
				<thead>
					<tr>
						<th style="width: 30%;">Grupo</th>
						<th>Valor Cota</th>
						<th style="width: 16%;">Cotas Disponíveis</th>
						<th style="width: 120px;">Qtd. Desejada</th>
						<th style="width: 7%;">Comprar</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>GP-0098</td>
						<td>R$ 150,00</td>
						<td style="text-align: center;">12</td>
						<td><select class="form-control" name="loteria"
							required="required">
								<option value="1">1</option>
						</select></td>
						<td
							style="float: left; margin-left: 12px; margin-top: 4px; border-top: 0px;"><a
							href="?m=carrinho&c=carrinho&a=listar"> <i
								class="glyphicon glyphicon-shopping-cart" id="bt-comprar"
								style="font-size: 28px;"></i></td>
					</tr>
				</tbody>
			</table>
		</div>
		<div
			style="border-bottom: 3px solid #931b85 !important; border-right: 3px solid #931b85; margin-left: -6px; border-radius: 5px; width: 100%; background: #FFF; margin-top: 25px; margin-bottom: 30px;">
			<h3
				style="color: #931b85; font-weight: bolder; font-style: italic; margin-left: 4px; margin-top: 5px;">
				<img
					style="margin-left: 15px; margin-right: 15px; margin-top: -3px;"
					src="public/img/trevo-lotofacil.png" class="trevo-img-small" />Lofofácil
			</h3>
			<div
				style="width: 500px; height: 30px; border-radius: 10px; text-align: center; background-color: #931b85; opacity: 0.5; float: left; margin-left: 210px; margin-right: 25%; border: 3px solid #CCC; margin-top: -3.9%;">
				<h5 style="color: #FFF; margin-top: 5px; margin-left: 10px;">Concurso:
					1836 | Prêmio Estimado: R$ 10.000,00</h5>
			</div>
			<hr style="border-bottom: 3px solid #931b85;" />
			<table class="table table-striped-lotofacil"
				style="border: 0px solid #e9e9e9; border-radius: 15px;">
				<thead>
					<tr>
						<th style="width: 30%;">Grupo</th>
						<th>Valor Cota</th>
						<th style="width: 16%;">Cotas Disponíveis</th>
						<th style="width: 120px;">Qtd. Desejada</th>
						<th style="width: 7%;">Comprar</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>GP-0098</td>
						<td>R$ 150,00</td>
						<td style="text-align: center;">12</td>
						<td><select class="form-control" name="loteria"
							required="required">
								<option value="1">1</option>
						</select></td>
						<td
							style="float: left; margin-left: 12px; margin-top: 4px; border-top: 0px;"><a
							href="?m=carrinho&c=carrinho&a=listar"> <i
								class="glyphicon glyphicon-shopping-cart" id="bt-comprar"
								style="font-size: 28px;"></i></td>
					</tr>
				</tbody>
			</table>
		</div>
		<div
			style="border-bottom: 3px solid #750710 !important; border-right: 3px solid #750710; margin-left: -6px; border-radius: 5px; width: 100%; background: #FFF; margin-top: 25px; margin-bottom: 30px;">
			<h3
				style="color: #750710; font-weight: bolder; font-style: italic; margin-left: 4px; margin-top: 5px;">
				<img
					style="margin-left: 15px; margin-right: 15px; margin-top: -3px;"
					src="public/img/trevo-dupla-sena.png" class="trevo-img-small" />Dupla Sena
			</h3>
			<div
				style="width: 500px; height: 30px; border-radius: 10px; text-align: center; background-color: #750710; opacity: 0.5; float: left; margin-left: 210px; border: 3px solid #CCC; margin-top: -3.9%;">
				<h5 style="color: #FFF; margin-top: 5px; margin-left: 10px;">Concurso:
					1836 | Prêmio Estimado: R$ 10.000,00</h5>
			</div>
			<hr style="border-bottom: 3px solid #750710 !important;" />
			<table class="table table-striped-duplasena"
				style="border: 0px solid #e9e9e9; border-radius: 15px;">
				<thead>
					<tr>
						<th style="width: 30%;">Grupo</th>
						<th>Valor Cota</th>
						<th style="width: 16%;">Cotas Disponíveis</th>
						<th style="width: 120px;">Qtd. Desejada</th>
						<th style="width: 7%;">Comprar</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>GP-0098</td>
						<td>R$ 150,00</td>
						<td style="text-align: center;">12</td>
						<td><select class="form-control" name="loteria"
							required="required">
								<option value="1">1</option>
						</select></td>
						<td
							style="float: left; margin-left: 12px; margin-top: 4px; border-top: 0px;"><a
							href="?m=carrinho&c=carrinho&a=listar"> <i
								class="glyphicon glyphicon-shopping-cart" id="bt-comprar"
								style="font-size: 28px;"></i></td>
					</tr>
				</tbody>
			</table>
		</div>
		<div
			style="border-bottom: 3px solid #252470 !important; border-right: 3px solid #252470; margin-left: -6px; border-radius: 5px; width: 100%; background: #FFF; margin-top: 25px; margin-bottom: 30px;">
			<h3
				style="color: #252470; font-weight: bolder; font-style: italic; margin-left: 4px; margin-top: 5px;">
				<img
					style="margin-left: 15px; margin-right: 15px; margin-top: -3px;"
					src="public/img/trevo-quina.png" class="trevo-img-small" />Quina
			</h3>
			<div
				style="width: 500px; height: 30px; border-radius: 10px; text-align: center; background-color: #252470; opacity: 0.5; float: left; margin-left: 210px; border: 3px solid #CCC; margin-top: -3.9%;">
				<h5 style="color: #FFF; margin-top: 5px; margin-left: 10px;">Concurso:
					1836 | Prêmio Estimado: R$ 10.000,00</h5>
			</div>
			<hr style="border-bottom: 3px solid #252470 !important;" />
			<table class="table table-striped-quina"
				style="border: 0px solid #e9e9e9; border-radius: 15px;">
				<thead>
					<tr>
						<th style="width: 30%;">Grupo</th>
						<th>Valor Cota</th>
						<th style="width: 16%;">Cotas Disponíveis</th>
						<th style="width: 120px;">Qtd. Desejada</th>
						<th style="width: 7%;">Comprar</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>GP-0098</td>
						<td>R$ 150,00</td>
						<td style="text-align: center;">12</td>
						<td><select class="form-control" name="loteria"
							required="required">
								<option value="1">1</option>
						</select></td>
						<td
							style="float: left; margin-left: 12px; margin-top: 4px; border-top: 0px;"><a
							href="?m=carrinho&c=carrinho&a=listar"> <i
								class="glyphicon glyphicon-shopping-cart" id="bt-comprar"
								style="font-size: 28px;"></i></td>
					</tr>
				</tbody>
			</table>
		</div>
		<div
			style="border-bottom: 3px solid #f37912 !important; border-right: 3px solid #f37912; margin-left: -6px; border-radius: 5px; width: 100%; background: #FFF; margin-top: 25px; margin-bottom: 30px;">
			<h3
				style="color: #f37912; font-weight: bolder; font-style: italic; margin-left: 4px; margin-top: 5px;">
				<img
					style="margin-left: 15px; margin-right: 15px; margin-top: -3px;"
					src="public/img/trevo-lotomania.png" class="trevo-img-small" />Lotomania
			</h3>
			<div
				style="width: 500px; height: 30px; border-radius: 10px; text-align: center; background-color: #f37912; opacity: 0.5; float: left; margin-left: 210px; border: 3px solid #CCC; margin-top: -3.9%;">
				<h5 style="color: #FFF; margin-top: 5px; margin-left: 10px;">Concurso:
					1836 | Prêmio Estimado: R$ 10.000,00</h5>
			</div>
			<hr style="border-bottom: 3px solid #f37912 !important;" />
			<table class="table table-striped-lotomania"
				style="border: 0px solid #e9e9e9; border-radius: 15px;">
				<thead>
					<tr>
						<th style="width: 30%;">Grupo</th>
						<th>Valor Cota</th>
						<th style="width: 16%;">Cotas Disponíveis</th>
						<th style="width: 120px;">Qtd. Desejada</th>
						<th style="width: 7%;">Comprar</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>GP-0098</td>
						<td>R$ 150,00</td>
						<td style="text-align: center;">12</td>
						<td><select class="form-control" name="loteria"
							required="required">
								<option value="1">1</option>
						</select></td>
						<td
							style="float: left; margin-left: 12px; margin-top: 4px; border-top: 0px;"><a
							href="?m=carrinho&c=carrinho&a=listar"> <i
								class="glyphicon glyphicon-shopping-cart" id="bt-comprar"
								style="font-size: 28px;"></i></td>
					</tr>
				</tbody>
			</table>
		</div>
		<div
			style="border-bottom: 3px solid #f5ca19 !important; border-right: 3px solid #f5ca19; margin-left: -6px; border-radius: 5px; width: 100%; background: #FFF; margin-top: 25px; margin-bottom: 30px;">
			<h3
				style="color: #f5ca19; font-weight: bolder; font-style: italic; margin-left: 4px; margin-top: 5px;">
				<img
					style="margin-left: 15px; margin-right: 15px; margin-top: -3px;"
					src="public/img/trevo-timemania.png" class="trevo-img-small" />Timemania
			</h3>
			<div
				style="width: 500px; height: 30px; border-radius: 10px; text-align: center; background-color: #f5ca19; opacity: 0.5; float: left; margin-left: 210px; border: 3px solid #CCC; margin-top: -3.9%;">
				<h5 style="color: #FFF; margin-top: 5px; margin-left: 10px;">Concurso:
					1836 | Prêmio Estimado: R$ 10.000,00</h5>
			</div>
			<hr style="border-bottom: 3px solid #f5ca19 !important;" />
			<table class="table table-striped-timemania"
				style="border: 0px solid #e9e9e9; border-radius: 15px;">
				<thead>
					<tr>
						<th style="width: 30%;">Grupo</th>
						<th>Valor Cota</th>
						<th style="width: 16%;">Cotas Disponíveis</th>
						<th style="width: 120px;">Qtd. Desejada</th>
						<th style="width: 7%;">Comprar</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>GP-0098</td>
						<td>R$ 150,00</td>
						<td style="text-align: center;">12</td>
						<td><select class="form-control" name="loteria"
							required="required">
								<option value="1">1</option>
						</select></td>
						<td
							style="float: left; margin-left: 12px; margin-top: 4px; border-top: 0px;"><a
							href="?m=carrinho&c=carrinho&a=listar"> <i
								class="glyphicon glyphicon-shopping-cart" id="bt-comprar"
								style="font-size: 28px;"></i></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>