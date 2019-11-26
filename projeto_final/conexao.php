<?php

function conecta()
{
    // iniciando conexao com o banco local
    $mysqli = mysqli_connect('localhost', 'root', '', 'turma2');
    if(mysqli_connect_errno($mysqli)) {
        echo "Deu ruim! " . mysqli_connect_error();
    }

    return $mysqli;
}
