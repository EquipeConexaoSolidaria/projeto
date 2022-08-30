<?php
    if(isset($_POST["email"])){//Verificando se o campo foi preenchido
        $nome = $_POST["email"];
        //Verificaria no banco de dados se o usuario e senha estão corretos.
        echo "$nome estamos verificando suas credenciais...";
    }
    