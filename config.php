<?php
    $mysql = new mysqli('localhost','root','','listafilmes');
    $mysql->set_charset('utf8');

    if($mysql == FALSE){
        echo "Falha na conexão";
    }

?>