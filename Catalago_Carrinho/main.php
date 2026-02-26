<?php 


    require_once "autoload.php";

echo "===== TESTE C1 - PRIMITIVO X OBJETO =====\n";

$x = 5;
$y = $x;
$y = 10;

echo "x = $x\n"; 
echo "y = $y\n"; 

echo "\n";


$p1 = new Produto(1, "Caneta", 2.50);
$p2 = $p1;


$p2 = new Produto($p1->getId(), $p1->getNome(), 3.00);

echo $p1->descricao() . "\n";
echo $p2->descricao() . "\n";

echo "\n\n";

echo "===== TESTE C2 - ARRAY DE OBJETOS =====\n";

$produtos = [];

for ($i = 1; $i <= 10; $i++) {
    $produtos[] = new Produto($i, "Produto $i", $i * 10);
}

foreach ($produtos as $produto) {
    echo $produto->descricao() . "\n";
}

echo "\n\n";

echo "===== TESTE C3 - USO DO \$this =====\n";

$item = new ItemCarrinho($produtos[0], 2);
echo "Subtotal: " . $item->subTotal() . "\n";

$item->aumentarQnt(1);
echo "Subtotal após aumentar quantidade: " . $item->subTotal() . "\n";

echo "\n\n";

echo "===== TESTE C4 - CRIAÇÃO DE OBJETOS =====\n";

$produtoNovo = new Produto(99, "Mouse", 150);
echo $produtoNovo->descricao() . "\n";

echo "\n\n";

echo "===== TESTE C5 - IMUTABILIDADE =====\n";

$produtoAntigo = new Produto(50, "Teclado", 100);


$produtoAtualizado = new Produto(
    $produtoAntigo->getId(),
    $produtoAntigo->getNome(),
    120
);

echo "Produto antigo:\n";
echo $produtoAntigo->descricao() . "\n";

echo "Produto atualizado:\n";
echo $produtoAtualizado->descricao() . "\n";

echo "\n\n";

echo "===== TESTE FINAL DO CARRINHO =====\n";

$carrinho = new Carrinho();

$carrinho->add($produtos[0], 2);
$carrinho->add($produtos[1], 1);
$carrinho->add($produtos[0], 3); 

$carrinho->listar();
echo "Total do carrinho: " . $carrinho->total() . "\n";

