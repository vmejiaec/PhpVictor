<?php 	

$localhost = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "pos_stock";

// db connection
$connect = new mysqli($localhost, $username, $password, $dbname);
// check connection
if($connect->connect_error) {
  die("Error al conectarse con la base de datos : " . $connect->connect_error);
} else {
    echo "Conectado a la base de datos.";
}

?>