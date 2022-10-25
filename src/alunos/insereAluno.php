<?php

include_once './Funcoes/BancoDados.php';

$meuBanco = conexao();

$ra = filter_input(INPUT_GET,"txtRa", FILTER_SANITIZE_STRING);
$nome = filter_input(INPUT_GET,"txtNome");
$nasc = filter_input(INPUT_GET,"data");
$rg = filter_input(INPUT_GET,"txtRg");
$cpf = filter_input(INPUT_GET,"txtCpf");
$sexo =filter_input(INPUT_GET,"txtSexo");

$sql = "insert into aluno(ra,nome,nascimento,rg,cpf,sexo)"
."values('$ra','$nome','$nasc','$rg','$cpf','$sexo')";

$meuBanco->exec($sql);

header("location:listar.php");