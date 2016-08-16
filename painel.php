<script
	src="vendors/jquery.inputmask/dist/inputmask/jquery.maskMoney.min.js"></script>
<script src="vendors/jquery.inputmask/dist/inputmask/jquery.mask.min.js"></script>
<script src="js/admin-script.js" type="text/javascript"></script>
<?php
use MegaSorteOnline\Loteria\Dao\LoteriaDao;
use MegaSorteOnline\Bolao\Dao\ConcursoDao;
use Krypitonite\Util\ValidateUtil;
use Krypitonite\Util\HTMLUtil;
use MegaSorteOnline\Cliente\Dao\ClienteJogoDao;
use MegaSorteOnline\Cliente\Controller\ClienteController;
?>
<style>
/* Style the list */
img {
	width: 40px;
	height: 40px;
}

ul.tab {
	list-style-type: none;
	margin-left: 13%;
	padding: 10px 10px 10px 10px;
	overflow: hidden;
	border: 0px solid #ccc;
	/* 	background-color: #FFF; */
}

/* Float the list items side by side */
ul.tab li {
	float: left;
}

/* Style the links inside the list items */
ul.tab li a {
	display: inline-block;
	color: #616161;
	text-align: center;
	padding: 14px 16px 0px 50px;
	text-decoration: none;
	transition: 0.3s;
	font-size: 14px;
}

/* Change background color of links on hover */
ul.tab li a:hover {
	/* 	background-color: #008B45; */
	color: #CCC;
	border-radius: 9px;
}

/* Create an active/current tablink class */
ul.tab li a:focus, .active {
	/* 	background-color: #008B45; */
	color: #ccc;
	border-radius: 9px;
}

/* Style the tab content */
.tabcontent {
	display: none;
	padding: 6px 12px;
	border: 0px solid #ccc;
	border-radius: 5px;
	border-top: none;
}
</style>
<script>

$(document).ready(function(){
    $('#jogos').DataTable({
    	"order": [ 1, 'asc' ]
    });
    $("#valor_credito").maskMoney({prefix:'', allowNegative: true, thousands:'.', decimal:',', affixesStay: false});
    $("#cpf").mask("999.999.999-99");    

    $('#atualizar_cliente').click(function(e) {
    	e.preventDefault();
    	post('form', {module: "cliente", controller: "cliente", action: "atualizar_dados"}, true, true);
    });
});

function openCity(evt, cityName) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace("active", "compras");
    }

    // Show the current tab, and add an "active" class to the link that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += "compras";
}

</script>
<div id="msg"></div>
<div class="row">
	<div id="msg"></div>
	<div class="col-md-6" style="background-color: #FFF; margin-top: 10px;">
		<ul class="tab">
			<li><a href="#" class="tablinks" onclick="openCity(event, 'compras')"><img
					src="img/cart.png" /><br>Minhas Apostas</a></li>
			<li><a href="#" class="active tablinks"
				onclick="openCity(event, 'creditos')"><img src="img/money.png" /><br>Comprar
					Créditos</a></li>
			<li><a href="#" class="tablinks" onclick="openCity(event, 'conta')"><img
					src="img/user.png" /><br>Minha Conta</a></li>
			<li><a href="#" class="tablinks" onclick="openCity(event, 'premios')"><img
					class="grayscale" src="img/money.png" /><br>Resgatar Prêmios</a></li>

		</ul>

		<div id="compras" class="tabcontent compras" style="display: block">
			<div class="head-title">
				<h4 class="aga4">Minhas Apostas</h4>
			</div>
			<br>
			<table class="table table-hover" id="jogos">
				<thead>
					<tr style="background-color: #008B45; color: #FFF;">
						<th>Loteria</th>
						<th>Concurso</th>
						<th>Grupo</th>
						<th>Data</th>
						<th>Cotas</th>
						<th style="text-align: center;">Valor Aposta</th>
						<th>Prêmio</th>
						<th>Premiado</th>
						<th>Acertos</th>
						<th>Jogo</th>
					</tr>
				</thead>
				<tbody>
					<?php
                    $c = new ClienteController();
                    foreach ($data['jogos'] as $kJogo => $vJogo) {
                        $valorPremio = ValidateUtil::setFormatMoney(ClienteJogoDao::getValorPremio($vJogo[0]['id']));
                        $totalAcertos = $c->countAcertos($vJogo[0]['id_concurso'], $vJogo[0]['id']);
                        
                        $premiado = '<p style="color: #09f; text-align: center;">Aguardando</p>';
                        if ($vJogo[0]['premiado'] != NULL || isset($vJogo[0]['premiado'])) {
                            if ($valorPremio != 0) {
                                $premiado = '<p style="color: green; text-align: center;">Sim</p>';
                            } else {
                                $premiado = '<p style="color: red; text-align: center;">Não</p>';
                            }
                        }
                        
                        ?>
					<tr>
						<th style="width: 250px;"><?=HTMLUtil::getNomeLoteria(LoteriaDao::getNomeLoteria($vJogo[0]['id_loteria']))?></th>
						<td><p style="margin-left: 15px;"><?=ConcursoDao::getNumeroConcurso($vJogo[0]['id_concurso'])?></p></td>
						<td style="width: 85px;"><p
								style="font-size: 13px; margin-left: -9px;"><?=$vJogo[0]['nome']?></p></td>
						<td><p style="margin-left: -10px;"><?=date('m/d/Y', strtotime($vJogo[0]['data_cadastro']))?></p></td>
						<td><p style="margin-left: 20px;"><?=$vJogo[0]['cotas']?></p></td>
						<td style="width: 250px;"><p
								style="font-size: 12px; margin-left: 18px;">R$ <?=ValidateUtil::setFormatMoney($vJogo[0]['valor_cota'])?></p></td>
						<td style="width: 240px;"><p
								style="font-size: 12px; margin-left: 9px;">R$ <?=$valorPremio; ?></p></td>
						<td><?=$premiado?></td>
						<td><p style="text-align: center;"><?=$totalAcertos?></p></td>
						<td style="width: 115px;"><img value="" class="btn-remover-jogo"
							id="jogo" style="margin-left: 25px; width: 20px; height: 20px;"
							src="img/lupa.png" alt="" /></td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>

		<div id="creditos" class="tabcontent">
			<div class="head-title">
				<h4 class="aga4">Comprar Créditos</h4>
			</div>
			<br>
			<div class="col-md-12"
				style="background-color: #FFF; margin-top: 10px;">
				<table>
					<tr>
						<td style="width: 800px; font-size: 15px;">
							<p>
								Prezado cliente, o crédito solicitado só poderá ser utilizado
								após a confirmação do pagamento.<br> O valor mínimo para efetuar
								o pedido é de <b>R$ 15,00.</b>
							</p>
						</td>
						<td></td>
					</tr>
				</table>
				<form action="?m=credito&c=creditos&a=forma_pagamentos"
					method="post">
					<table class="table" id="tbCarrinho"
						style="background-color: #f4f4f4; border-radius: 9px; margin-left: -6px;">
						<thead class="thead-inverse">
							<tr style="width: 100%; background: #FFF; border-radius: 10px;">
								<th style="border-radius: 2px; border-bottom: 0px;"></th>
								<th style="border-radius: 2px; border-bottom: 0px;"></th>
							</tr>
						</thead>
						<tbody style="width: 70%; background: #fff; border-radius: 10px;">
							<tr>
								<td
									style="width: 180px; font-size: 17px; padding: 20px 10px 10px 10px;"><b>Informe
										o valor: R$</b></td>
								<td style=""><input type="text" class="form-control"
									id="valor_credito" name="valor_credito"
									style="width: 300px; height: 50px; font-size: 19px;"></td>
							</tr>
						</tbody>
					</table>
					<button type="submit"
						style="background-color: #008B45; color: #FFF; float: right; margin-right: 3px;"
						class="btn btn-default">EFETUAR COMPRA</button>
				</form>
			</div>
		</div>

		<div id="conta" class="tabcontent">
			<div class="head-title">
				<h4 class="aga4">Meus Dados</h4>
			</div>
			<br>
			<form class="form-horizontal form-label-left" novalidate>
				<div class="item form-group">
					<label class="control-label col-md-2 col-sm-2 col-xs-12" for="nome">Nome:
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
						<input id="nome" class="form-control col-md-7 col-xs-12"
							data-validate-length-range="6" data-validate-words="2"
							name="nome" required="required" type="text"
							value="<?=$data['cliente']['nome']?>" disabled="disabled" />
					</div>
				</div>
				<div class="item form-group">
					<label class="control-label col-md-2 col-sm-2 col-xs-12" for="nome">CPF:
					</label>
					<div class="col-md-4 col-sm-4 col-xs-12">
						<input id="cpf" class="form-control col-md-4 col-xs-12"
							data-validate-length-range="6" data-validate-words="2" name="cpf"
							required="required" type="text" id="cpf"
							value="<?=ValidateUtil::setFormatCPF($data['cliente']['cpf'])?>"
							disabled="disabled" />
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-md-2 col-sm-2 col-xs-12">Sexo :</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
						<p>
							Masculino: <input type="radio" class="flat" name="sexo"
								id="sexoM" value="M" checked="" required /> Feminino: <input
								type="radio" class="flat" name="sexo" id="sexoF" value="F" />
						</p>
					</div>
				</div>
				<div class="item form-group">
					<label class="control-label col-md-2 col-sm-2 col-xs-12" for="nome">E-mail:
					</label>
					<div class="col-md-4 col-sm-4 col-xs-12">
						<input id="email" class="form-control col-md-4 col-xs-12"
							data-validate-length-range="6" data-validate-words="2"
							name="email" required="required" type="email"
							value="<?=$data['cliente']['email']?>" />
					</div>
				</div>
				<div class="item form-group">
					<label class="control-label col-md-2 col-sm-2 col-xs-12"
						for="Email">Confirmar Email: </label>
					<div class="col-md-4 col-sm-4 col-xs-12">
						<input id="email" class="form-control col-md-4 col-xs-12"
							data-validate-length-range="6" data-validate-words="2"
							name="email" required="required" type="email"
							value="<?=$data['cliente']['email']?>">
					</div>
				</div>
				<div class="head-title">
					<h4 class="aga4">Dados Bancários</h4>
				</div>
				<br> <input type="hidden"
					value="<?=(isset($data['banco'][0]['id'])) ? $data['banco'][0]['id'] : '' ?>"
					name="id_banco" />
				<div class="item form-group">
					<label class="control-label col-md-2 col-sm-2 col-xs-12" for="nome">Titular:
					</label>
					<div class="col-md-4 col-sm-4 col-xs-12">
						<input id="titular" class="form-control col-md-4 col-xs-12"
							data-validate-length-range="6" data-validate-words="2"
							name="titular" required="required" type="text"
							value="<?=(isset($data['banco'][0]['titular'])) ? $data['banco'][0]['titular'] : '' ?>" />
					</div>
				</div>
				<div class="item form-group">
					<label class="control-label col-md-2 col-sm-2 col-xs-12"
						for="banco">Banco: </label>
					<div class="col-md-4 col-sm-4 col-xs-12">
						<input id="banco" class="form-control col-md-4 col-xs-12"
							data-validate-length-range="6" data-validate-words="2"
							name="banco" required="required" type="text"
							value="<?=(isset($data['banco'][0]['banco'])) ? $data['banco'][0]['banco'] : '' ?>" />
					</div>
				</div>
				<div class="item form-group">
					<label class="control-label col-md-2 col-sm-2 col-xs-12" for="nome">Agência:
					</label>
					<div class="col-md-4 col-sm-4 col-xs-12">
						<input id="agencia" class="form-control col-md-4 col-xs-12"
							data-validate-length-range="6" data-validate-words="2"
							name="agencia" required="required" type="text"
							value="<?=(isset($data['banco'][0]['agencia'])) ? $data['banco'][0]['agencia'] : '' ?>" />
					</div>
				</div>
				<div class="item form-group">
					<label class="control-label col-md-2 col-sm-2 col-xs-12" for="nome">Nº
						Conta: </label>
					<div class="col-md-4 col-sm-4 col-xs-12">
						<input id="numero_conta" class="form-control col-md-4 col-xs-12"
							data-validate-length-range="6" data-validate-words="2"
							name="numero_conta" required="required" type="text"
							value="<?=(isset($data['banco'][0]['numero_conta'])) ? $data['banco'][0]['numero_conta'] : '' ?>" />
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-md-2 col-sm-2 col-xs-12">Tipo de
						Conta:</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
						<p>
							Poupança: <input type="radio" class="flat" name="tipo_conta"
								id="tipo_conta" value="poupanca" checked="" required />
							Corrente: <input type="radio" class="flat" name="tipo_conta"
								id="tipo_conta" value="corrente" />
						</p>
					</div>
				</div>
				<input type="hidden" value="<?=$data['cliente']['id']?>"
					name="id_cliente" />
				<button type="button" id="atualizar_cliente"
					style="background-color: #008B45; color: #FFF; float: right; margin-right: 3px;"
					class="btn btn-default">CONCLUIR</button>
			</form>
		</div>

		<div id="premios" class="tabcontent">
			<div
				style="margin-left: 0px; border-radius: 5px; width: 100%; background: #008B45; margin-top: 23px; height: 20px;">
				<h4 style="color: #FFF; margin-left: 4px; margin-top: 0px;">Meus
					Prêmios</h4>
			</div>
			<br>
			<p>Em desenvolvimento.</p>
		</div>
	</div>
</div>
