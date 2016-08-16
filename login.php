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
	<div class="col-md-4">
		<div class="conteudoCentral">
			<div class="x_title">
				<h3>
					<span class="label label-primary"
						style="margin-left: 0px; background-color: #008B45;">ACESSAR MINHA
						CONTA: </span>
				</h3>
				<?php if(isset($data['error']) && $data['error'] == true){ ?>
    			<div class="msg-error">
					<h5>Login ou Senha incorreta</h5>
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
			<form class="form-horizontal form-label-left"
				action="?m=cliente&c=cliente&a=logar" method="post"
				style="margin-left: 0px; background: #F1F1F1; margin-top: -50px; width: 87%; border-radius: 10px; padding: 20px 0px 10px 30px;"
				novalidate>
				<div class="item form-group">
					<label
						class="control-label col-md-2 col-sm-2 col-xs-12 form-label-cliente"
						for="nome" style="color: #666;">E-mail: <span class="required"></span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
						<input id="email" class="form-control col-md-7 col-xs-12"
							name="email" required="required" type="text" value=""
							placeholder="E-mail">
					</div>
				</div>
				<div class="item form-group">
					<label for="password"
						class="control-label col-md-2 form-label-cliente"
						style="color: #666;">Senha: <span class="required"></span></label>
					<div class="col-md-6 col-sm-6 col-xs-12">
						<input id="password" type="password" name="senha"
							class="form-control col-md-7 col-xs-12" required="required"
							value="" placeholder="Senha">
					</div>
				</div>
				<div class="ln_solid">
					<a href="?m=cliente&c=cliente&a=login">Recuperar Senha</a></a>
				</div>
				<div class="form-group" style="margin-left: 156px;">
					<div class="col-md-1 col-md-offset-3">
						<button type="submit" id="cadastrar-cliente" class="btn"
							style="background: #008B45; color: #FFF;">Entrar</button>
					</div>
				</div>
			</form>
		</div>
	</div>
	<div class="col-md-4">
		<br> <br>
		<h3>Caso ainda não tenha cadastro</h3>

		<a href="?m=cliente&c=cliente&a=cadastrar"><button type="submit"
				id="cadastrar-cliente" class="btn"
				style="background: #008B45; color: #FFF;">Cadastre-se Aqui</button></a>
	</div>
</div>
<script src="js/admin-script.js"></script>
<script src="vendors/validator/validator.min.js"></script>
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
	
});
</script>