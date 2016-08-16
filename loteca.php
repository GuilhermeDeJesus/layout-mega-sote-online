<script type="text/javascript" src="js/loteria/mega-sena.js"></script>
<div class="row">
	<div id="msg"></div>
	<div class="row">
		<div class="col-md-6">
			<div class="loteria-loteca">
				<div class="titulo-loteca">
					<div id="titulo-loteria">Data Sorteio:</div>
					<div id="titulo-loteria">Concurso:</div>
					<div id="titulo-loteria">Prêmio:</div>
					<div id="titulo-loteria-valor">25/09/2016</div>
					<div id="titulo-loteria-valor">729</div>
					<div id="titulo-loteria-valor">R$ 2.000,00</div>
				</div>
				<div id="loteca" style="display: block">
					<div id="montarJogos">
						<form id="formLoteca" action="/boloes/add_bolao" method="post">
							<div class="oculto">
								<input type="hidden" id="minDezenas" value="1"> <input
									type="hidden" id="maxDezenas" value="0"> <input type="hidden"
									id="tx_valores" value="[0,0]"> <input type="hidden"
									id="tx_combinacao" value=""> <input type="hidden" id="tx_loto"
									name="loto" value="11"> <input type="hidden" id="tx_idConcurso"
									name="idConc" value="2577"> <input type="hidden"
									id="tx_concurso" name="concurso" value="89898"> <input
									type="hidden" id="tx_lotecaCombinacao" name="lotecaCombinacao"
									value="[{&quot;combinacao&quot;:&quot;1,0&quot;,&quot;valor&quot;:&quot; 3.40&quot;,&quot;custo&quot;:&quot; 2.00&quot;},{&quot;combinacao&quot;:&quot;2,0&quot;,&quot;valor&quot;:&quot; 4.00&quot;,&quot;custo&quot;:&quot; 4.00&quot;},{&quot;combinacao&quot;:&quot;3,0&quot;,&quot;valor&quot;:&quot; 8.00&quot;,&quot;custo&quot;:&quot; 8.00&quot;},{&quot;combinacao&quot;:&quot;4,0&quot;,&quot;valor&quot;:&quot; 16.00&quot;,&quot;custo&quot;:&quot; 16.00&quot;},{&quot;combinacao&quot;:&quot;5,0&quot;,&quot;valor&quot;:&quot; 32.00&quot;,&quot;custo&quot;:&quot; 32.00&quot;},{&quot;combinacao&quot;:&quot;6,0&quot;,&quot;valor&quot;:&quot; 64.00&quot;,&quot;custo&quot;:&quot; 64.00&quot;},{&quot;combinacao&quot;:&quot;7,0&quot;,&quot;valor&quot;:&quot; 128.00&quot;,&quot;custo&quot;:&quot; 128.00&quot;},{&quot;combinacao&quot;:&quot;8,0&quot;,&quot;valor&quot;:&quot; 256.00&quot;,&quot;custo&quot;:&quot; 256.00&quot;},{&quot;combinacao&quot;:&quot;9,0&quot;,&quot;valor&quot;:&quot; 512.00&quot;,&quot;custo&quot;:&quot; 512.00&quot;},{&quot;combinacao&quot;:&quot;0,1&quot;,&quot;valor&quot;:&quot; 3.00&quot;,&quot;custo&quot;:&quot; 3.00&quot;},{&quot;combinacao&quot;:&quot;1,1&quot;,&quot;valor&quot;:&quot; 6.00&quot;,&quot;custo&quot;:&quot; 6.00&quot;},{&quot;combinacao&quot;:&quot;2,1&quot;,&quot;valor&quot;:&quot; 12.00&quot;,&quot;custo&quot;:&quot; 12.00&quot;},{&quot;combinacao&quot;:&quot;3,1&quot;,&quot;valor&quot;:&quot; 24.00&quot;,&quot;custo&quot;:&quot; 24.00&quot;},{&quot;combinacao&quot;:&quot;4,1&quot;,&quot;valor&quot;:&quot; 48.00&quot;,&quot;custo&quot;:&quot; 48.00&quot;},{&quot;combinacao&quot;:&quot;5,1&quot;,&quot;valor&quot;:&quot; 96.00&quot;,&quot;custo&quot;:&quot; 96.00&quot;},{&quot;combinacao&quot;:&quot;6,1&quot;,&quot;valor&quot;:&quot; 192.00&quot;,&quot;custo&quot;:&quot; 192.00&quot;},{&quot;combinacao&quot;:&quot;7,1&quot;,&quot;valor&quot;:&quot; 384.00&quot;,&quot;custo&quot;:&quot; 384.00&quot;},{&quot;combinacao&quot;:&quot;8,1&quot;,&quot;valor&quot;:&quot; 1.050.00&quot;,&quot;custo&quot;:&quot; 768.00&quot;},{&quot;combinacao&quot;:&quot;0,2&quot;,&quot;valor&quot;:&quot; 9.00&quot;,&quot;custo&quot;:&quot; 9.00&quot;},{&quot;combinacao&quot;:&quot;1,2&quot;,&quot;valor&quot;:&quot; 18.00&quot;,&quot;custo&quot;:&quot; 18.00&quot;},{&quot;combinacao&quot;:&quot;2,2&quot;,&quot;valor&quot;:&quot; 36.00&quot;,&quot;custo&quot;:&quot; 36.00&quot;},{&quot;combinacao&quot;:&quot;3,2&quot;,&quot;valor&quot;:&quot; 72.00&quot;,&quot;custo&quot;:&quot; 72.00&quot;},{&quot;combinacao&quot;:&quot;4,2&quot;,&quot;valor&quot;:&quot; 144.00&quot;,&quot;custo&quot;:&quot; 144.00&quot;},{&quot;combinacao&quot;:&quot;5,2&quot;,&quot;valor&quot;:&quot; 288.00&quot;,&quot;custo&quot;:&quot; 288.00&quot;},{&quot;combinacao&quot;:&quot;6,2&quot;,&quot;valor&quot;:&quot; 576.00&quot;,&quot;custo&quot;:&quot; 576.00&quot;},{&quot;combinacao&quot;:&quot;0,3&quot;,&quot;valor&quot;:&quot; 27.00&quot;,&quot;custo&quot;:&quot; 27.00&quot;},{&quot;combinacao&quot;:&quot;1,3&quot;,&quot;valor&quot;:&quot; 54.00&quot;,&quot;custo&quot;:&quot; 54.00&quot;},{&quot;combinacao&quot;:&quot;2,3&quot;,&quot;valor&quot;:&quot; 108.00&quot;,&quot;custo&quot;:&quot; 108.00&quot;},{&quot;combinacao&quot;:&quot;3,3&quot;,&quot;valor&quot;:&quot; 216.00&quot;,&quot;custo&quot;:&quot; 216.00&quot;},{&quot;combinacao&quot;:&quot;4,3&quot;,&quot;valor&quot;:&quot; 432.00&quot;,&quot;custo&quot;:&quot; 432.00&quot;},{&quot;combinacao&quot;:&quot;5,3&quot;,&quot;valor&quot;:&quot; 864.00&quot;,&quot;custo&quot;:&quot; 864.00&quot;},{&quot;combinacao&quot;:&quot;0,4&quot;,&quot;valor&quot;:&quot; 81.00&quot;,&quot;custo&quot;:&quot; 81.00&quot;},{&quot;combinacao&quot;:&quot;1,4&quot;,&quot;valor&quot;:&quot; 162.00&quot;,&quot;custo&quot;:&quot; 162.00&quot;},{&quot;combinacao&quot;:&quot;2,4&quot;,&quot;valor&quot;:&quot; 324.00&quot;,&quot;custo&quot;:&quot; 324.00&quot;},{&quot;combinacao&quot;:&quot;3,4&quot;,&quot;valor&quot;:&quot; 648.00&quot;,&quot;custo&quot;:&quot; 648.00&quot;},{&quot;combinacao&quot;:&quot;0,5&quot;,&quot;valor&quot;:&quot; 243.00&quot;,&quot;custo&quot;:&quot; 243.00&quot;},{&quot;combinacao&quot;:&quot;1,5&quot;,&quot;valor&quot;:&quot; 486.00&quot;,&quot;custo&quot;:&quot; 486.00&quot;},{&quot;combinacao&quot;:&quot;0,6&quot;,&quot;valor&quot;:&quot; 729.00&quot;,&quot;custo&quot;:&quot; 729.00&quot;}]">
							</div>
							<hr class="clear">
							<table id="tabelaLoteca" border="1"
								style="border: 1px solid #E9E9E9;">
								<thead>
									<tr>
										<th style="text-align: center;">Jogo</th>
										<th colspan="2" style="text-align: center;">Coluna 1</th>
										<th style="text-align: center;">X</th>
										<th colspan="2" style="text-align: center;">Coluna 2</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td><label class="inputLc" rel="0"></label></td>
										<td>
											<h4>Time 1</h4>
										</td>
										<td><label class="inputLc" rel="1"></label></td>
										<td>
											<h4>Time 2</h4>
										</td>
										<td><label class="inputLc" rel="2"></label></td>
									</tr>
									<tr>
										<td>2</td>
										<td><label class="inputLc" rel="0"></label></td>
										<td>
											<h4>Time 1</h4>
										</td>
										<td><label class="inputLc" rel="1"></label></td>
										<td>
											<h4>Time 2</h4>
										</td>
										<td><label class="inputLc" rel="2"></label></td>
									</tr>
									<tr>
										<td>3</td>
										<td><label class="inputLc" rel="0"></label></td>
										<td>
											<h4>Time 1</h4>
										</td>
										<td><label class="inputLc" rel="1"></label></td>
										<td>
											<h4>Time 2</h4>
										</td>
										<td><label class="inputLc" rel="2"></label></td>
									</tr>
									<tr>
										<td>4</td>
										<td><label class="inputLc" rel="0"></label></td>
										<td>
											<h4>Time 1</h4>
										</td>
										<td><label class="inputLc" rel="1"></label></td>
										<td>
											<h4>Time 2</h4>
										</td>
										<td><label class="inputLc" rel="2"></label></td>
									</tr>
									<tr>
										<td>5</td>
										<td><label class="inputLc" rel="0"></label></td>
										<td>
											<h4>Time 1</h4>
										</td>
										<td><label class="inputLc" rel="1"></label></td>
										<td>
											<h4>Time 2</h4>
										</td>
										<td><label class="inputLc" rel="2"></label></td>
									</tr>
									<tr>
										<td>6</td>
										<td><label class="inputLc" rel="0"></label></td>
										<td>
											<h4>Time 1</h4>
										</td>
										<td><label class="inputLc" rel="1"></label></td>
										<td>
											<h4>Time 2</h4>
										</td>
										<td><label class="inputLc" rel="2"></label></td>
									</tr>
									<tr>
										<td>7</td>
										<td><label class="inputLc" rel="0"></label></td>
										<td>
											<h4>Time 1</h4>
										</td>
										<td><label class="inputLc" rel="1"></label></td>
										<td>
											<h4>Time 2</h4>
										</td>
										<td><label class="inputLc" rel="2"></label></td>
									</tr>
									<tr>
										<td>8</td>
										<td><label class="inputLc" rel="0"></label></td>
										<td>
											<h4>Time 1</h4>
										</td>
										<td><label class="inputLc" rel="1"></label></td>
										<td>
											<h4>Time 2</h4>
										</td>
										<td><label class="inputLc" rel="2"></label></td>
									</tr>
									<tr>
										<td>9</td>
										<td><label class="inputLc" rel="0"></label></td>
										<td>
											<h4>Time 1</h4>
										</td>
										<td><label class="inputLc" rel="1"></label></td>
										<td>
											<h4>Time 2</h4>
										</td>
										<td><label class="inputLc" rel="2"></label></td>
									</tr>
									<tr>
										<td>10</td>
										<td><label class="inputLc" rel="0"></label></td>
										<td>
											<h4>Time 1</h4>
										</td>
										<td><label class="inputLc" rel="1"></label></td>
										<td>
											<h4>Time 2</h4>
										</td>
										<td><label class="inputLc" rel="2"></label></td>
									</tr>
									<tr>
										<td>11</td>
										<td><label class="inputLc" rel="0"></label></td>
										<td>
											<h4>Time 1</h4>
										</td>
										<td><label class="inputLc" rel="1"></label></td>
										<td>
											<h4>Time 2</h4>
										</td>
										<td><label class="inputLc" rel="2"></label></td>
									</tr>
									<tr>
										<td>12</td>
										<td><label class="inputLc" rel="0"></label></td>
										<td>
											<h4>Time 1</h4>
										</td>
										<td><label class="inputLc" rel="1"></label></td>
										<td>
											<h4>Time 2</h4>
										</td>
										<td><label class="inputLc" rel="2"></label></td>
									</tr>
									<tr>
										<td>13</td>
										<td><label class="inputLc" rel="0"></label></td>
										<td>
											<h4>Time 1</h4>
										</td>
										<td><label class="inputLc" rel="1"></label></td>
										<td>
											<h4>Time 2</h4>
										</td>
										<td><label class="inputLc" rel="2"></label></td>
									</tr>
									<tr>
										<td>14</td>
										<td><label class="inputLc" rel="0"></label></td>
										<td>
											<h4>Time 1</h4>
										</td>
										<td><label class="inputLc" rel="1"></label></td>
										<td>
											<h4>Time 2</h4>
										</td>
										<td><label class="inputLc" rel="2"></label></td>
									</tr>
								</tbody>
							</table>
							<!-- /tabelaLoteca -->
							<p></p>
							<table id="tabelaLoteca"
								class="listaTb listaLoteca listaTb100 box">
								<thead>
									<tr>
										<th style="text-align: center;">Duplos</th>
										<th style="text-align: center;">Triplos</th>
										<th style="text-align: center;">Valor da Aposta</th>
									</tr>
								</thead>
								<tbody>
								
								
								<tbody>
									<tr>
										<td>1</td>
										<td>2</td>
										<td>R$ 0,00</td>
										<td><button type="submit" class="btn btn-success btn-add"
												style="width: 120px; float: right; margin-bottom: 15px;"
												id="btn-loteca">Adicionar Jogo</button></td>
									</tr>
								</tbody>
							</table>
						</form>
					</div>
				</div>
				<form action="/?m=bolao&c=bolao&a=add_jogo" method="post">
					<table class="table table-reflow" id="tbApostas">
						<thead>
							<tr>
								<th width="47%"><b style="margin-left: 100px;">Jogos Adicionados<b></th>
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
									class="corTexto-loteca">Valor Total: <span id="txtTotal"
										class="corTexto-todas">R$ 0,00</span></strong></td>
							</tr>
						</tfoot>
					</table>
				</form>
			</div>
		</div>
	</div>
	<br>