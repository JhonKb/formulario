<?php

$credenciais = array("Jhon", 1234);

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

if (empty($usuario) || strtr($usuario, ' ') == false || $usuario != $credenciais[0])
{
    echo "Favor digite o usuário corretamente";
}

if (empty($senha) || $senha != $credenciais[1]) 
{
    echo "Senha incorreta";
}


?>