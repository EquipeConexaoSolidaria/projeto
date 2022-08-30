<?php
    if(isset($_POST["email"])){//Verificando se o campo foi preenchido
        $nome = $_POST["email"];
    }

        if(isset($_POST["senha"])){//Verificando se o campo foi preenchido
            $senha = $_POST["senha"];
        //Verificaria no banco de dados se o usuario e senha estão corretos.
        echo "$senha estamos verificando suas credenciais...";
        }