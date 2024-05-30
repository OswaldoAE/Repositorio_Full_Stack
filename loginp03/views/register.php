<?php
if ($_SERVER["REQUEST_METHOD"]== "POST"){
    $id = $_POST["id"];
    $UsrName = $_POST["UsrName"];
    $usrpswr = $_POST["usrpswr"];
    $usrEdad = $_POST["usrEdad"];
    $Correo = $_POST["Correo"];
    $Telefono = $_POST["Telefono"];


    //Conexión a la base de datos
    $servername= "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "practica2";

    //crea una variable conexión
    $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

    
    //verifica la conexión
    if($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
}
    //prepara la sentencia SQL
    $stmt = $conn->prepare("INSERT INTO usuario (id, UsrName, usrpswr, usrEdad, Correo, Telefono) VALUES (?, ?, ?, ?, ?, ?)");
    if ($stmt=== false){
        die("Error preparing statement: " .$conn->error);
    }
    $stmt->bind_param("ssssss", $id, $UsrName, $usrpswr, $usrEdad, $Correo, $Telefono);

    //Ejecuta la sentencia SQL
    if ($stmt->execute()){
        echo "Usuario registrado con éxito.";
    } else{
        echo "Error executing statement: " .$stmt->error;
    }
    //cierra la sentencia y la conexión
    $stmt->close();
    $conn->close();
    }
?>