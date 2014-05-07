<?php
$usuario = $_POST['username'];
$password = $_POST['pass'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellidos'];
$correo = $_POST['email'];
$direccion = $_POST['direccion'];
$telefono = $_POST['tel'];
$identificacion = $_POST['ide'];

if ($usuario != " " &&
        $nombre != " " &&
        $apellido != " " &&
        $password != " " &&
        $correo != " " &&
        $telefono != " " &&
        $identificacion != " " &&
        $direccion != " ") {

    $dbconn = pg_connect("host=localhost port=5432 dbname=eat user=postgres password=12345") or die('Could not connect: ' . pg_last_error());
    $result = "INSERT INTO usuario (username, password, nombre, apellido, identificacion, telefono, direccion, email) VALUES ('" . $usuario . "', '" . $password . "', '" . $nombre . "', '" . $apellido . "' , '" . $identificacion . "', '" . $telefono . "', '" . $direccion . "', '" . $correo . "');";
    pg_query($dbconn, $result);
    pg_close($dbconn);

    header('Location: usuario.php?creacion=si');
 
} else {
    echo "<script language='JavaScript'>
  alert('Error de Creación');</script>";
}
?>
