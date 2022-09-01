<?php

$tituloPagina = 'Criar Conta';

include_once './includes/_head.php';
include_once './includes/_header.php';
include_once './includes/_opcoes.php';
include_once './includes/_dados.php';



?>
<h1>Crie uma conta primeiro!</h1>

<div class="container" id="containerdoform">
<form >
  <div id="form">

    <input  type="email" class="form-control teste" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu nome completo">

    <input type="password" class="form-control teste" id="exampleInputPassword1" placeholder="Idade">

    <input type="password" class="form-control teste" id="exampleInputPassword1" placeholder="CEP">

    <input type="password" class="form-control teste" id="exampleInputPassword1" placeholder="Telefone">

    <input type="email" class="form-control teste" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu email">

    <input type="password" class="form-control teste" id="exampleInputPassword1" placeholder="Senha">

  <div id="confirmacao" class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Aceito receber avisos no e-mail</label>
    <button type="submit" class="btn btn-primary">Criar</button>
</div>

</form>
</div>