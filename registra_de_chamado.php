<?php
//str_replace(); esta servido para caso seja enviado pelo formulario o nosso caractre separador '#' ...
//ele fassa a mudança para o indicao '-';
    $Titulo = str_replace('#' , '-' , $_POST['titulo'] );
    $Categotia = str_replace('#' , '-' , $_POST['categoria'] );
    $Descricao =  str_replace('#' , '-' , $_POST['Descricao'] );

//PHP_EOL serve para quebrar a linha no arquivo txt;
    $texto =  $Titulo . '#' . $Categotia . '#' . $Descricao . PHP_EOL;

//fopen(); serve para criar/abrir um aquivo , o primeiro parametro serve para dizer o nome ...
//do aquivo que sera criado , enquanto o segundo sera o metodo utilizado , que ...
//no caso é 'a' que Abre somente para escrita; coloca o ponteiro do arquivo ...
//no final do arquivo. Se o arquivo não existir, tenta criá-lo.;
    $arquivo = fopen('dados.txt','a');

// fwirete(); serve para escrever no arquivo , espera como ...
//primeiro parametro nosso arquivo que foi criado e como segundo o que deve ser escrito nele;
    fwrite($arquivo , $texto);

//fclose(); serve para fechar o arquivo que foi criado e aguarda como parametro
//o nome do aquivo;
    fclose($arquivo);
    
    header('location:abrir_chamado.php');
?>