<?php

$dados = $_POST;
var_dump($dados);

include "Computador.php";

extract($_POST);

$chkAtualizado = isset($_POST['chkAtualizado']);

$novoCadastro = new Computador($txtProcessador, $txtUSB, $chkAtualizado, '2022-02-24 09:03:30');
$novoCadastro->Cadastrar();

?>