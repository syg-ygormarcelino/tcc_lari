<?php

    ini_set('display_errors', true);
    error_reporting(E_ALL);

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $database = 'tcc_lari_v5';

    $connection = mysqli_connect($host, $user, $pass) or die('Não foi possível conectar');

    mysqli_select_db($connection,$database) or die('Não foi possível conectar com o banco de dados');

    // echo 'Banco de dados conectado com sucesso';