<?php

$email_adm = "alificleiton123@hotmail.com";

include_once "./conexao.php"; 
 include_once "./cabecalho.php"; 
        

    $email = "alificleiton123@gmail.com";
    $to = $email;
    $subject = 'Atualização de email do P21 - Sistemas';
    $message = "Configuração para envio de emails      ";

    $dest = $email_adm;

    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=utf-8;' . "\r\n";
    $headers .= "From: " .$dest;

    mail($to, $subject, $message, $headers);

    echo "PARA FUNCIONAR O ENVIO DE EMAIL LOCAL DEVE-SE CONFIGURAR O SERVIDOR DE ACESSO PARA ENVIAR EMAILS LOCALMENTE, NO PHP.INI E NO SENDEMAIL";
?>

<br>
<br>
<br>
<span><a class="botao" href="index.php">VOLTAR </a></span>