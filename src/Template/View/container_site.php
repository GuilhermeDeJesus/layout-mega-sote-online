<?php
use Krypitonite\Util\HTMLUtil;
// Header

HTMLUtil::headDefault();

// MENU PADR�O
require_once '../src/Template/View/menu.php';

// CALENDARIO DOS JOGOS
require_once '../src/Template/View/banner_calendario_sorteios.php';

// MENU BOLOES
require_once '../src/Template/View/menu_boloes.php';

?>