<?php
//inicia a sessão na pagina;
Session_start();
//Faz a verificação do usuria para ver se esta autenticado;
if(!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != 'SIM'){
//caso o usuario não esteja autenticado ele e redirecionado para pagina index;
    header('location: index.php?login=erro2');
} 
?>