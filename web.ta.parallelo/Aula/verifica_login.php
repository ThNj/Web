<?php
$email = htmlspecialchars($_GET['login']);
$senha = htmlspecialchars($_GET['senha']);


 if($login == "gabriel@paralello.com.br" && $senha = "23123"){
    echo("Logado")
 }
 else{
    echo("Login ou senha incorreta")
 }
echo$login. "".$senha