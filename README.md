# Krypitonite

Framework dom�stico para cria��o de projetos de pequeno a m�dio portes, contando com ferramentas importantes como:

 - Crawler : para testes com selenium e robo de busca din�mica na web
 - Padr�o MVC
 - Gerador de Daos
 - Modulariza��o
 - PSR's
 - Doctrine
 - PHPUnit
 - Logger

O Krypitonite foi baseado principalmente no padr�o de projeto MVC, facilitando o fluxo de trabalho do desenvolvedor.


Segue abaixo um pequeno exemplo de como funciona o projeto>

Ex.:

- <h2>Controller: IndexController.class.php</h2>


	namespace Krypitonite\Home\Controller;

	use Krypitonite\Controller\AbstractController;


	class HomeController extends AbstractController
	{

		public function indexAction(){

			$data = [];
			$this->renderView("index", $data); 

		}

	}


- <h2>View: index.php</h2>

<form action='localhost?c=Index&a=index' />

Para fazer a requisi��o da p�gina index.php, basta chamar a URL localhost?c=Index&a=index.

F�cil e pr�tico!

"# loteriaonline_layout" 
"# layout-lot" 
