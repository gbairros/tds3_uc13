<?php
    require_once ("Usuario.php");

    $login = $_POST["login"];
    $senha = $_POST["senha"];

    $usuario = new Usuario();
    $senha_cripto = hash("sha3-256", $senha);
    $status = $usuario->autenticar($login, $senha_cripto);

    if ($status == true){
        header("location:principal.php");
    }
    else{
        echo "Ops!!! Usuário/senha Inválidos :(";
    }



