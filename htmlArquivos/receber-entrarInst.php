<?php
    if(isset($_POST["cnpj"])){//Verificando se o campo foi preenchido
        $nome = $_POST["cnpj"];
    }

    if(isset($_POST["senha"])){//Verificando se o campo foi preenchido
        $senha = $_POST["senha"];
        //Verificaria no banco de dados se o usuario e senha estão corretos.
        echo "$nome estamos verificando suas credenciais...";
    }