<?php
 $servername= "localhost";
 $dbusername = "root";
 $dbpassword = "";
 $dbname = "practica2";

//crea la conexión
$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

//verificar conexión
if($conn->connect_error) {
    die("conexión fallida: " . $conn->connect_error);
}

//recoger los datos del formulario
$UsrName = $_POST['UsrName'];
$usrpswr = $_POST['usrpswr'];

//crear la consulta SQL
$sql = "SELECT * FROM usuario WHERE UsrName = '$UsrName' AND usrpswr = '$usrpswr'";

//Ejecutar la consulta 
$resul = $conn->query($sql);

//Verifica si el usuario existe

if ($resul->num_rows > 0){
    incluide ("views/exito.html");
    //echo "Has ingresado con éxito!!;
} else{
    incluide ("views/error.html");
    //echo "Usuario o contraseña incorrectos.";
}

$conn->close();
?>