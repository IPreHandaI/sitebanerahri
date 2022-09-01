<?php

$tituloPagina = 'Detalhes';

include_once './includes/_head.php';
include_once './includes/_header.php';
include_once './includes/_dados.php';
include_once './includes/_opcoes.php';

$id = $_GET['id'];


?>
<div id="containerprodutodetalhe" class="container">
    <h1><?php echo $produtos[$id]['Nome'];?></h1>
    <img id="imgprodutodetalhe" src="./imgs/<?php echo $produtos[$id]['img'];?>">
    <h3><?php echo $produtos[$id]['descricao'];?></h3>
    <div class="row">
        <div class="col-6">
            <h3><?php echo 'POR APENAS R$' . $produtos[$id]['preco'];?></h3>
        </div>
        <div id="botao" class="col-6">
            <a href="conta.php" class="btn btn-primary">Comprar</a>
        </div>
    </div>
    
    
</div>
  
