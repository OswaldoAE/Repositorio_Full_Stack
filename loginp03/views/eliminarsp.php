<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminación de Procedimiento Almacenado</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100vh;
            margin: 0;
        }
        .container {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 80%;
            max-width: 600px;
            text-align: center;
        }
        h2 {
            margin-bottom: 20px;
            color: #333;
        }
        .success-message {
            background-color: #dff0d8;
            color: #3c763d;
            border: 1px solid #d6e9c6;
            padding: 10px 20px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .error-message {
            background-color: #f2dede;
            color: #a94442;
            border: 1px solid #ebccd1;
            padding: 10px 20px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Eliminar Procedimiento Almacenado</h2>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "practica2";
        // Crear conexión
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Verificar conexión
        if ($conn->connect_error) {
            die("Conexión fallida: " . $conn->connect_error);
        }

        // Sentencia SQL para borrar el procedimiento almacenado
        $sql = "DROP PROCEDURE IF EXISTS SelectColumns;";

        if ($conn->query($sql) === TRUE) {
            echo "<div class='success-message'>Procedimiento almacenado eliminado exitosamente.</div>";
        } else {
            echo "<div class='error-message'>Error al eliminar el procedimiento almacenado: " . $conn->error . "</div>";
        }

        $conn->close();
        ?>
    </div>
</body>
</html>

