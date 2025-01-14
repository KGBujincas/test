<?php 
$username = "root";
$servername = "localhost";
$password = "";

$db_name = "usuarios";

$connect = mysqli_connect($servername, $username, $password, $db_name);

// if(mysqli_connect_error()) {
//     echo "erro na conexao" . mysqli_connect();
// } else {
//     echo "estamos juntos";
// }

