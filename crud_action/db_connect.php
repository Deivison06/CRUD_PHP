<?php
// conexão com o banco de dados
$servername = "localhost";
$usermame = "root";
$password = "";
$db_name = "crud";

$connect = mysqli_connect($servername, $usermame, $password, $db_name);
if(mysqli_connect_error()):
    echo "Erro na conexão".mysqli_connect_error();
endif;
?>