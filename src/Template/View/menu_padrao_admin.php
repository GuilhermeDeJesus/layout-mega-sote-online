<div class="col-md-3 left_col">
	<div class="left_col scroll-view">
		<div class="navbar nav_title" style="border: 0;">
			<a href="?m=loteria&c=megasena" class="site_title"><i
				class="fa fa-asterisk"></i> Mega Sorte Online</a>
		</div>
		<div class="clearfix"></div>
		<!-- menu profile quick info -->
		<div class="profile">
			<div class="profile_pic">
				<img src="img/user.jpg" alt="..." class="img-circle profile_img">
			</div>
			<div class="profile_info">
				<span>Bem Vindo,</span>
				<h2><?= (isset($_SESSION['nome'])) ? $_SESSION['nome'] : 'Fulado desconhecido';?></h2>
			</div>
			<br />
		</div>
		<!-- /menu profile quick info -->
		<br /> <br /> <br />
		<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
			<div class="menu_section">
				<ul class="nav side-menu">
					<li><a href="?m=admin&c=admin"><i class="fa fa-home"></i> Home <span
							class="fa fa-chevron-down"></span></a></li>
					<li><a><i class="fa fa-copyright"></i> Concursos <span
							class="fa fa-chevron-down"></span></a>
						<ul class="nav child_menu">
							<li><a href="?m=bolao&c=concurso">Todos</a></li>
							<li><a href="?m=bolao&c=concurso&a=create">Cadastrar novo
									concurso</a></li>
						</ul></li>
					<li><a><i class="fa fa-futbol-o"></i> Boloes <span
							class="fa fa-chevron-down"></span></a>
						<ul class="nav child_menu">
							<li><a href="?m=bolao&c=gerenciarboloes&a=index">Todos</a></li>
							<li><a href="?m=bolao&c=gerenciargrupos&a=create&sigla=MG">Cadastrar Bolão
									<p style="color: #008B45;">
										<b>Mega Sena</b>
									
									<p>
							</a></li>
							<li><a href="?m=bolao&c=gerenciargrupos&a=create&sigla=LF">Cadastrar Bolão
									<p style="color: #931b85;">
										<b>Lotofácil</b>
									</p>
							</a></li>
							<li><a href="?m=bolao&c=gerenciargrupos&a=create&sigla=QN">Cadastrar Bolão
									<p style="color: #252470;">
										<b>Quina</b>
									</p>
							</a></li>
							<li><a href="?m=bolao&c=gerenciargrupos&a=create&sigla=DS">Cadastrar Bolão
									<p style="color: #750710;">
										<b>Dupla Sena</b>
									</p>
							</a></li>
							<li><a href="?m=bolao&c=gerenciargrupos&a=create&sigla=LM">Cadastrar Bolão
									<p style="color: #f37912;">
										<b>Lotomania</b>
									</p>
							</a></li>
							<li><a href="?m=bolao&c=gerenciargrupos&a=create&sigla=TM">Cadastrar Bolão
									<p style="color: #f5ca19;">
										<b>Timemania</b>
									</p>
							</a></li>
						</ul></li>
					<li><a><i class="fa fa-money"></i> Creditos <span
							class="fa fa-chevron-down"></span></a>
						<ul class="nav child_menu">
							<li><a href="?m=credito&c=GerenciarPedidosCredito&a=index">Pedidos
									de creditos</a></li>
						</ul></li>
					<li><a><i class="fa fa-asterisk"></i> Loterias <span
							class="fa fa-chevron-down"></span></a>
						<ul class="nav child_menu">
							<li><a href="?m=loteria&c=loteria&a=buscar">Todos</a></li>
							<li><a href="?m=loteria&c=loteria&a=create">Cadastrar nova
									loteria</a></li>
						</ul></li>
					<li><a><i class="fa fa-user"></i>Usuarios <span
							class="fa fa-chevron-down"></span></a>
						<ul class="nav child_menu">
							<li><a href="?m=usuario&c=usuario&a=index">Todos</a></li>
							<li><a href="?m=usuario&c=usuario&a=create">Cadastrar novo
									usuario</a></li>
						</ul></li>
					<li><a><i class="fa fa-child"></i>Clientes <span
							class="fa fa-chevron-down"></span></a>
						<ul class="nav child_menu">
							<li><a href="?m=cliente&c=gerenciarclientes&a=index">Todos</a></li>
						</ul></li>
				</ul>
			</div>
		</div>
		<!-- /menu footer buttons -->
		<div class="sidebar-footer hidden-small">
			<a data-toggle="tooltip" data-placement="top" title="Settings"> <span
				class="glyphicon glyphicon-cog" aria-hidden="true"></span>
			</a> <a data-toggle="tooltip" data-placement="top" title="FullScreen">
				<span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
			</a> <a data-toggle="tooltip" data-placement="top" title="Lock"> <span
				class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
			</a> <a data-toggle="tooltip" data-placement="top" title="Sair"> <span
				class="glyphicon glyphicon-off" aria-hidden="true"></span>
			</a>
		</div>
	</div>
</div>
<!-- /menu footer buttons -->