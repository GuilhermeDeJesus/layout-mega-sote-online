<?php
// MENU PADR�O
require_once 'src/Template/View/menu.php';

// CALENDARIO DOS JOGOS
require_once 'src/Template/View/banner_calendario_sorteios.php';

// MENU BOLOES
require_once 'src/Template/View/menu_boloes.php';

?>
<script type="text/javascript" src="js/loteria/mega-sena.js"></script>
<div class="row">
	<div id="msg"></div>
	<input type="hidden" id="valores_combinacao"
		value='' /> <input type="hidden"
		id="valores_custo" value='' /> <input type="hidden"
		id="loteria" value='' /> <input
		type="hidden" id="numero_concurso"
		value='' />
	<div class="row">
		<div class="col-md-6">
			<div class="loteria-lotofacil">
				<div
					style="border-bottom: 3px solid #931b85; border-right: 3px solid #931b85; margin-left: -6px; border-radius: 5px; width: 100%; background: #FFF; margin-top: 25px; margin-bottom: 0px;">
					<h3
						style="color: #931b85; font-weight: bolder; font-style: italic; margin-left: 4px; margin-top: 5px;">
						<img
							style="margin-left: 15px; margin-right: 15px; margin-top: -3px;"
							src="public/img/trevo-lotofacil.png" class="trevo-img-small" />Lotofácil
					</h3>
					<div
						style="width: 600px; height: 30px; border-radius: 10px; text-align: center; background-color: #931b85; float: left; margin-left: 210px; border: 3px solid #CCC; margin-top: -3.9%;">
						<h5 style="color: #FFF; margin-top: 5px; margin-left: 10px;">Concurso:
					12345 | Prêmio Estimado: R$ 10.000,00 | Data Sorteio: 26/06/2016</h5>
					</div>
				</div>
				<div id="numeros-aposta-left-lf" style="display: block">
				<h5
						style="font-size: 18px; text-align: center; color: #000; font-weight: bolder; opacity: 0.8;">ESCOLHA
						SUAS DEZENAS</h5>				
					<div class="dezenas-lotofacil">
						<div class="dezenas-row-lotofacil">
							<button id="dezenas-lf" class="dezena 1 " value="1">01</button>
							<button id="dezenas-lf" class="dezena 2 " value="2">02</button>
							<button id="dezenas-lf" class="dezena 3 " value="3">03</button>
							<button id="dezenas-lf" class="dezena 4 " value="4">04</button>
							<button id="dezenas-lf" class="dezena 5 " value="5">05</button>

						</div>
						<div class="dezenas-row-lotofacil">
							<button id="dezenas-lf" class="dezena 6 " value="6">06</button>
							<button id="dezenas-lf" class="dezena 7 " value="7">07</button>
							<button id="dezenas-lf" class="dezena 8 " value="8">08</button>
							<button id="dezenas-lf" class="dezena 9 " value="9">09</button>
							<button id="dezenas-lf" class="dezena 10 " value="10">10</button>
						</div>
						<div class="dezenas-row-lotofacil">
							<button id="dezenas-lf" class="dezena 11 " value="11">11</button>
							<button id="dezenas-lf" class="dezena 12 " value="12">12</button>
							<button id="dezenas-lf" class="dezena 13 " value="13">13</button>
							<button id="dezenas-lf" class="dezena 14 " value="14">14</button>
							<button id="dezenas-lf" class="dezena 15 " value="15">15</button>

						</div>
						<div class="dezenas-row-lotofacil">
							<button id="dezenas-lf" class="dezena 16 " value="16">16</button>
							<button id="dezenas-lf" class="dezena 17 " value="17">17</button>
							<button id="dezenas-lf" class="dezena 18 " value="18">18</button>
							<button id="dezenas-lf" class="dezena 19 " value="19">19</button>
							<button id="dezenas-lf" class="dezena 20 " value="20">20</button>
						</div>
						<div class="dezenas-row-lotofacil">
							<button id="dezenas-lf" class="dezena 21 " value="21">21</button>
							<button id="dezenas-lf" class="dezena 22 " value="22">22</button>
							<button id="dezenas-lf" class="dezena 23 " value="23">23</button>
							<button id="dezenas-lf" class="dezena 24 " value="24">24</button>
							<button id="dezenas-lf" class="dezena 25 " value="25">25</button>
						</div>
					</div>
					<p style="margin-top: 10px; text-align: center;">
						Mínimo dezenas:<strong><span class="verde-escuro"> 15</span></strong>
					</p>
					<button type="button" class="btn btn-success btnPalpitar"
						style="width: 130px; margin-bottom: -40%; margin-left: 14%;"
						id="btn-lotofacil">Palpite</button>
					<button type="button" class="btn btn-success btnLimpar-dezenas"
						style="width: 130px; margin-bottom: -40%; margin-left: 5px;"
						id="btn-lotofacil">Limpar</button>
				</div>
				<div id="numeros-aposta-right" style="display: block">
					<div class="m-lotofacil">
						<h5>Surpresinha:</h5>
						<form class="form-inline" style="margin-bottom: 10px;">
							<div class="form-group">
								<div class="input-group">
									<select id="sl_surpresinha" class="form-control	">
										<option value="15">15</option>
										<option value="16">16</option>
										<option value="17">17</option>
										<option value="18">18</option>
									</select>
								</div>
							</div>
							<button type="button" class="btn btn-success btn-surpresinha"
								id="btn-lotofacil">Marcar</button>
						</form>
					</div>
					<div class="m-lotofacil">
						<h5>Concorrer:</h5>
						<form class="form-inline" style="margin-bottom: 10px;">
							<div class="form-group">
								<div class="input-group">
									<select id="sl_surpresinha" class="form-control	">
										<option value="6">2 Concursos</option>
										<option value="3">3 Concursos</option>
										<option value="4">4 Concursos</option>
									</select>
								</div>
							</div>
						</form>
					</div>
					<div class="m-lotofacil">
						<h5>Total Dezenas:</h5>
						<h4>
							<b class="dezenas-selecionadas">0</b>
						</h4>
					</div>
					<div class="m-lotofacil">
						<h5>Valor da Aposta:</h5>
						<h5>
							<b class="valor-total">R$ 0,00</b> <input type="hidden" value=""
								id="vl-total" />
						</h5>
					</div>
					<br>
					<button type="button" class="btn btn-success add-jogo"
						style="width: 120px;" id="btn-lotofacil">Adicionar Jogo</button>
				</div>
				<form action="/?m=bolao&c=bolao&a=add_jogo" method="post">
					<div class="loteria-baixo-lotofacil">
						<button type="submit" class="btn btn-success btn-finalizar"
							style="width: 120px; float: right; margin-bottom: 15px;"
							id="btn-lotofacil">Finalizar</button>
					</div>
					<table class="table table-reflow" id="tbApostas">
						<thead>
							<tr>
								<th width="47%"><b style="margin-left: 100px;">Dezenas
										Selecionadas<b></th>
								<th width="15%">Apostas</th>
								<th width="15%">Valor</th>
								<th width="15%">Excluir</th>
							</tr>
						</thead>
						<tbody></tbody>
						<tfoot>
							<tr>
								<td colspan="5"><strong
									style="text-transform: uppercase; margin-left: 40%; margin-top: 20%; font-size: 15px"
									class="corTexto-mega">Valor Total: <span id="txtTotal"
										class="corTexto-todas">R$ 0,00</span></strong></td>
							</tr>
						</tfoot>
					</table>
				</form>
			</div>
		</div>
	</div>
	<br>