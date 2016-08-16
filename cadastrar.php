<?php
// MENU PADR�O
require_once 'src/Template/View/menu.php';

// CALENDARIO DOS JOGOS
require_once 'src/Template/View/banner_calendario_sorteios.php';

// MENU BOLOES
require_once 'src/Template/View/menu_boloes.php';

?>
<script src="vendors/jquery.inputmask/dist/inputmask/jquery.mask.min.js"></script>
<script src="vendors/validator/validator.min.js"></script>
<div id="msg"></div>
<div class="row">
	<div class="col-md-6">
		<div class="x_title conteudoCentral">
			<h3>
				<span class="label label-primary"
					style="margin-left: 0px; background-color: #008B45;">CADASTRO: </span>
			</h3>
			<?php if(isset($data['new']) && $data['new'] == true){ ?>
			<div class="msg-alert">
				<h5>
					Você já possui cadastro, faça seu login <a
						href="?m=cliente&c=cliente&a=login">aqui!</a></a>

				</h5>
			</div>
			<?php } ?>			
			<ul class="nav navbar-right panel_toolbox">
				<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
				<li class="dropdown"><a href="#" class="dropdown-toggle"
					data-toggle="dropdown" role="button" aria-expanded="false"><i
						class="fa fa-wrench"></i></a>
					<ul class="dropdown-menu" role="menu">
					</ul></li>
				<li><a class="close-link"><i class="fa fa-close"></i></a></li>
			</ul>
			<div class="clearfix"></div>
		</div>
		<div class="x_panel"
			style="background: #F1F1F1; margin-left: 2px; width: 100%; border-radius: 10px; margin-top: -50px;">
			<div class="x_content">
				<br>
				<form class="form-horizontal form-label-left"
					action="?m=cliente&c=cliente&a=novo" method="post"
					style="margin-left: 40px;" novalidate>
					<div class="item form-group">
						<label
							class="control-label col-md-2 col-sm-2 col-xs-12 form-label-cliente"
							for="nome">Nome: <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input id="nome" class="form-control col-md-7 col-xs-12"
								name="nome" required="required" type="text" value=""
								placeholder="Nome">
						</div>
					</div>
					<div class="item form-group">
						<label
							class="control-label col-md-2 col-sm-2 col-xs-12 form-label-cliente"
							for="cpf">CPF: <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input id="cpf" class="form-control col-md-7 col-xs-12"
								name="cpf" required="required" type="text" value="" id="cpf"
								placeholder="___.___.___-__">
						</div>
					</div>
					<div class="item form-group">
						<label
							class="control-label col-md-2 col-sm-2 col-xs-12 form-label-cliente"
							for="data_nascimento">Data Nasc.: <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input id="data_nascimento"
								class="form-control col-md-7 col-xs-12" name="data_nascimento"
								required="required" type="text" value="" id="data_nascimento"
								placeholder="__/__/____">
						</div>
					</div>
					<div class="form-group">
						<label
							class="control-label col-md-2 col-sm-2 col-xs-12 form-label-cliente">Sexo
							:</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<p>
								Masculino: <input type="radio" class="flat" name="sexo"
									id="sexoM" value="M" checked="" required /> Feminino: <input
									type="radio" class="flat" name="sexo" id="sexoF" value="F" />
							</p>
						</div>
					</div>
					<div class="item form-group">
						<label
							class="control-label col-md-2 col-sm-2 col-xs-12 form-label-cliente">Nº
							Celular: * </label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="text" class="fa fa-phone form-control"
								name="telefone_celular" id="telefone" value=""
								placeholder="Telefone Celular" required="required"
								data-inputmask="'mask' : '99-99999-9999'">
						</div>
					</div>
					<div class="item form-group">
						<label
							class="control-label col-md-2 col-sm-2 col-xs-12 form-label-cliente"
							for="cep">Cep: <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input id="cep" class="form-control col-md-7 col-xs-12"
								name="cep" required="required" type="text" value="" id="cep"
								placeholder="CEP">
						</div>
					</div>
					<div class="item form-group">
						<label
							class="control-label col-md-2 col-sm-2 col-xs-12 form-label-cliente"
							for="email">Email: <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="email" name="email"
								class="form-control has-feedback-left" id="inputSuccess4"
								placeholder="Email" value="" required="required">
						</div>
					</div>
					<div class="item form-group">
						<label
							class="control-label col-md-2 col-sm-2 col-xs-12 form-label-cliente"
							for="email">Confirmar Email: <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="email" name="email"
								class="form-control has-feedback-left" id="inputSuccess4"
								placeholder="Confirmar Email" value="" required="required">
						</div>
					</div>
					<div class="item form-group">
						<label for="password"
							class="control-label col-md-2 form-label-cliente">Senha: <span
							class="required">*</span></label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input id="password" type="password" name="senha"
								class="form-control col-md-7 col-xs-12" required="required"
								value="" placeholder="Senha">
						</div>
					</div>
					<div class="item form-group">
						<label for="password"
							class="control-label col-md-2 form-label-cliente">Confirmar
							Senha: </label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input id="password2" type="password" name="senha2"
								class="form-control col-md-7 col-xs-12" required="required"
								value="" placeholder="Confirmar Senha">
						</div>
					</div>
					<div class="ln_solid"></div>
					<div class="form-group" style="margin-left: 340px;">
						<div class="col-md-1 col-md-offset-3">
							<button type="submit" id="cadastrar-cliente"
								class="btn btn-success">Cadastrar</button>
						</div>
					</div>
				</form>
				<br>
			</div>
		</div>
	</div>
</div>
<br>
<br>
<?php require_once 'footer_site.php'; ?>
<script src="js/admin-script.js"></script>
<script type="text/javascript">
$(document).ready(function($){

    // initialize the validator function
    validator.message.date = 'não um encontro de verdade';

    // validate a field on "blur" event, a 'select' on 'change' event & a '.reuired' classed multifield on 'keyup':
    $('form')
      .on('blur', 'input[required], input.optional, select.required', validator.checkField)
      .on('change', 'select.required', validator.checkField)
      .on('keypress', 'input[required][pattern]', validator.keypress);

    $('.multi.required').on('keyup blur', 'input', function() {
      validator.checkField.apply($(this).siblings().last()[0]);
    });

    var submit = false;

    $('form').submit(function(e) {
      e.preventDefault();

      // evaluate the form using generic validaing
      if (validator.checkAll($(this))) {
        submit = true;
      }

      if (submit)
        this.submit();
     	
      return false;
    });
	
    $("#telefone").mask("(99) - 99999-9999");  
    $("#cpf").mask("999.999.999-99");    
    $("#cep").mask("99999-999"); 
    $("#data_nascimento").mask("99/99/9999"); 
    
});
</script>
