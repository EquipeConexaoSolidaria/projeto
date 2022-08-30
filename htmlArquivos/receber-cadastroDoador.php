<?php
if(isset($_POST["nome"])){//Verificando se o campo foi preenchido
    $nome = $_POST["nome"];
}
if(isset($_POST["email"])){//Verificando se o campo foi preenchido
    $nome = $_POST["email"];
}
if(isset($_POST["senha"])){//Verificando se o campo foi preenchido
    $nome = $_POST["senha"];
    //Verificaria no banco de dados se o usuario e senha estão corretos.
    echo "$nome estamos verificando suas credenciais...";
}