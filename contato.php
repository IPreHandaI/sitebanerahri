<?php 

$tituloPagina = 'Ajuda';

include_once './includes/_head.php';
include_once './includes/_header.php';
include_once './includes/_opcoes.php';
include_once './includes/_dados.php';
?>

<h1>Contato</h1>
<h4>Precisa de ajuda? É aqui que você consegue!</h4>

<div class="container" id="containerdoform">
<form >
  <div id="form">

    <div class="form-group col-md-4">
      <label for="inputEstado">Situação</label>
      <select id="inputEstado" class="form-control">
        <option selected>Escolher...</option>
        <option>Problemas com a conta</option>
        <option>Problemas com a compra</option>
        <option>Acompanhamento da compra</option>
        <option>Reembolso</option>
      </select>
    </div>

    <textarea type="password" class="form-control teste" id="exampleInputPassword1" placeholder="Digite com mais detalhes o que ocorreu..."></textarea>
    <div id="" class="form-group form-check">
    </div>
    <h7>Se achar melhor podes adicionar um arquivo(print/vídeo/texto)</h7>
    <form>
    <input type="file" class="form-control-file" id="exampleFormControlFile1">
  </div>
</form>

</form>
</div>