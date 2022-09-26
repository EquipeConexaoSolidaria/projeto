<?php
    require_once("Instituicao.class.php");

    $nome = $_POST["nome"];
    $cnpj = $_POST["cnpj"];
    $senha = $_POST["senha"];
    $endereco = $_POST["endereco1"];
    $endereco2 = $_POST["endereco2"];
    $cidade = $_POST["cidade"];
    $estado = $_POST["estado"];
    $dias = $_POST["dias"];
    $horario = $_POST["horario"];
    $horario2 = $_POST["horario2"];
    $horario3 = $_POST["horario3"];

    $objetoInstituicao = new Doador($nome, $cnpj, $senha, $endereco, $endereco2, $cidade, $estado, $dias, $horario, $horario2, $horario3);
    $objetoInstituicao->exibirDados();
    $objetoInstiruicao->inserirDoador();
