<?php
//criando sessão pra instânciar a pagina;
Session_start();
//defino a variavel como nula para ser mudada de acordo com os dados;
$usuario_autenticado = false;
//users from system;
$usuarios_sistema = array(
    array('email' => 'adm@gmail.com' , 'senha' => '12345'),
    array('email' => 'user@gmail.com' , 'senha' => '54321'),
);
//A variavel $login recebe os valores de $_POST;
$login = $_POST;
//Aqui $login divide os dados em email e senha ;
$email = $login["email"];
$senha = $login["pass"];
//Esse foreach percorre nosso array e passa seus dados pra um novo , no caso $user;
foreach($usuarios_sistema as $user){
    $user['email'];
    $user['senha'];
//Essa condição serve pra verificar se o user enviado pelo post pertece a um dos usuarios;
    if($user['email'] ==  $_POST['email'] && $user['senha'] ==  $_POST['pass'] ){
        $usuario_autenticado = true;    
    }
}
//Aqui verificamos se o $usuario_autenticado esta recebendo "true" ou "false";
if($usuario_autenticado) {
    echo 'Usuario autenticado';
    $_SESSION['autenticado'] = "SIM";
    $_SESSION['x'] = "valor unsetd";
    $_SESSION['y'] = "valor unsetd";
    header('location: home.php');

//o else aqui serve para caso a condição não seja atendida , volte para page index com um erro no URL;
}else{
    $_SESSION['autenticado'] = "NAO";
    header('location: index.php?login=erro');
}


