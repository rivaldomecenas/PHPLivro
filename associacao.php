<?php 

require_once 'classes/Fabricante.php';
require_once 'classes/Produto.php';

//criando objetos 
$p1 = new Produto('Chocolate', 10, 7);
$f1 = new Fabricante('Chocolate Factory','Willy Wonka Street','123456785235');

//associacao
$p1->setFabricante($f1);

print ' A descrição é ' . $p1->getDescricao() . "<br>\n";
print ' O fabricante é ' . $p1->getFabricante()->getNome() . "<br>\n";