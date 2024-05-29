<?php 
$server = '192.168.25.9';
$user = 'usr_src';
$pass = 'E7zQE0iXT4h';
$database = 'Leader_src_prd';

$conexao = new PDO("sqlsrv:Database=$database;server=$server;ConnectionPooling=0", $user, $pass);

?>