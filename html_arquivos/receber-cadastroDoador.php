<?php
    require_once("Doador.class.php"); 

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $objetoDoador = new Doador($nome, $email, $senha);
    $objetoDisciplina->exibirDados();
    $objetoDisciplina->inserirDoador();