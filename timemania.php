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
	<div id="msg"><p></p></div>
	<input type="hidden" id="valores_combinacao" value='' /> 
	<input type="hidden" id="valores_custo" value='' />
	<input type="hidden" id="loteria" value='' />
	<input type="hidden" id="numero_concurso" value='' />
	<div class="col-md-6">
		<div class="loteria-timemania">
			<div
				style="border-bottom: 3px solid #f5ca19; border-right: 3px solid #f5ca19; margin-left: -6px; border-radius: 5px; width: 100%; background: #FFF; margin-top: 25px; margin-bottom: 0px;">
				<h3
					style="color: #f5ca19; font-weight: bolder; font-style: italic; margin-left: 4px; margin-top: 5px;">
					<img
						style="margin-left: 15px; margin-right: 15px; margin-top: -3px;"
						src="public/img/trevo-timemania.png" class="trevo-img-small" />Timemania
				</h3>
				<div
					style="width: 600px; height: 30px; border-radius: 10px; text-align: center; background-color: #f5ca19; float: left; margin-left: 210px; border: 3px solid #CCC; margin-top: -3.9%;">
					<h5 style="color: #FFF; margin-top: 5px; margin-left: 10px;">Concurso:
					12345 | Prêmio Estimado: R$ 10.000,00 | Data Sorteio: 26/06/2016</h5>
				</div>
			</div>
			<div id="numeros-aposta-left-timemania" style="display: block">
				<h5
						style="font-size: 18px; text-align: center; color: #000; font-weight: bolder; opacity: 0.8;">ESCOLHA
						SUAS DEZENAS</h5>			
				<div class="dezenas-timemania">
 				<?php
                    $maiorDezena = 80;
                    for ($i = 1; $i <= $maiorDezena; $i ++) {
                        if ($i < 10)
                            $n = '0' . (string) $i;
                        else
                            $n = $i;
                        ?>
    				<button id="dezenas-tm" class="dezena <?=$i ?>" value="<?=$i ?>">
						<p class="posicao-dezenas"><?=$n ?></p>
					</button>
    				<?php } ?>
				</div>
				<p style="margin-top: 10px; text-align: center;">
					Mínimo dezenas:<strong><span class="verde-escuro"> 10</span></strong>
				</p>
				<button type="button" class="btn btn-success btnPalpitar" style="width: 130px; margin-bottom: -30%; margin-left: 14%;"
				id="btn-timemania">Palpite</button>			
				<button type="button" class="btn btn-success btnLimpar-dezenas" style="width: 130px; margin-bottom: -30%; margin-left: 5px;"
				id="btn-timemania">Limpar</button>						
			</div>
			<div id="numeros-aposta-right" style="display: block">
				<div class="m-timemania">
					<h5>Surpresinha:</h5>
					<form class="form-inline" style="margin-bottom: 10px;">
						<div class="form-group">
							<div class="input-group">
								<select id="sl_surpresinha" class="form-control	">
									<option value="10">10</option>
								</select>
							</div>
						</div>
						<button type="button" class="btn btn-success btn-surpresinha" id="btn-timemania">Marcar</button>
					</form>
				</div>
				<div class="m-timemania">
					<h5>Meu Time:</h5>
					<form class="form-inline" style="margin-bottom: 10px;">
						<div class="form-group">
							<div class="input-group">
								<select id="sl_surpresinha" class="form-control	">
									<option value="Flamengo">Flamengo/RJ</option>
								</select>
							</div>
						</div>
					</form>
				</div>		
				<div class="m-timemania">
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
				<div class="m-timemania">
					<h5>Total Dezenas:</h5>
					<h4>
						<b class="dezenas-selecionadas">0</b>
					</h4>
				</div>
				<div class="m-timemania">
					<h5>Valor da Aposta:</h5>
					<h5>
						<b class="valor-total">R$ 0,00</b>
						<input type="hidden" value="" id="vl-total"/>
					</h5>
				</div>				
				<br>
				<button type="button" class="btn btn-success add-jogo" style="width: 120px;"
					id="btn-timemania">Adicionar Jogo</button>
			</div>
			<form action="/?m=bolao&c=bolao&a=add_jogo" method="post">
    			<div class="loteria-baixo-timemania">
    				<button type="submit" class="btn btn-success btn-finalizar" style="width: 120px; float: right; margin-bottom: 15px;" id="btn-timemania">Finalizar</button>
    			</div>
    			<table class="table table-reflow" id="tbApostas">
    				<thead>
    					<tr>
    						<th width="47%"><b style="margin-left:100px;">Dezenas Selecionadas<b></th>
    						<th width="15%">Apostas</th>
    						<th width="15%">Valor</th>
    						<th width="15%">Excluir</th>
    					</tr>
    				</thead>
    				<tbody></tbody>
                    <tfoot>
                    	<tr>
                        	<td colspan="5"><strong style="text-transform:uppercase; margin-left: 40%; margin-top: 20%; font-size:15px" class="corTexto-mega">Valor Total: <span id="txtTotal" class="corTexto-todas">R$ 0,00</span></strong></td>
                        </tr>
                    </tfoot>
    			</table>
			</form>
		</div>
	</div>
</div>
<br>