# Krypitonite

Framework doméstico para criação de projetos de pequeno a médio portes, contando com ferramentas importantes como:

 - Crawler : para testes com selenium e robo de busca dinâmica na web
 - Padrão MVC
 - Gerador de Daos
 - Modularização
 - PSR's
 - Doctrine
 - PHPUnit
 - Logger

O Krypitonite foi baseado principalmente no padrão de projeto MVC, facilitando o fluxo de trabalho do desenvolvedor.


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

Para fazer a requisição da página index.php, basta chamar a URL localhost?c=Index&a=index.

Fácil e prático!

"# loteriaonline_layout" 
"# layout-lot" 
