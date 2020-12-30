<?php

session_start();
/*echo "<pre>";
print_r($_SESSION);
echo "</pre>";
//remover indices sessão
//unset();
unset($_SESSION['x']); //remove o indice apenas se existir;
echo "<pre>";
print_r($_SESSION);
echo "</pre>";
//destruir a variavel  de sessão
//ssesion_destroy();
session_destroy();// a sessão sera destruida , porem apenas em uma proxima requisição ;
//forcar um redirecionamento para recarregar a sessão; 
echo "<pre>";
print_r($_SESSION);
echo "</pre>";
*/
session_destroy();
header('location: index.php');

?>