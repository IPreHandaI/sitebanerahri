<?php 

$tituloPagina = 'Produtos';

include_once './includes/_head.php';
include_once './includes/_header.php';
include_once './includes/_dados.php';
include_once './includes/_opcoes.php';
?>

<h2>Produtos</h2>

<div id="containerprodutos" class="container">
    <div class="row mt-5">

<?php
for ($i=0; $i < 12; $i++) { 
    ?>
     <div class="card m-3" style="width: 18rem;">
  <img class="card-img-top" src="./imgs/<?php echo $produtos[$i]['img'];?>">
  <div class="card-body">
    <h5 class="card-title"><?php echo $produtos[$i]['Nome'];?></h5>
    <p class="card-text"><?php echo $produtos[$i]['descricao']?></p>
    <a href="produto-detalhe.php?id=<?php echo $i;?>" class="btn btn-primary">Visitar</a>
  </div>
</div>

<?php
}

?>
    </div>
</div>

