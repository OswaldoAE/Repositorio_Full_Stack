<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creación de Procedimiento Almacenado</title>
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
            max-width: 800px;
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
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table, th, td {
            border: 1px solid #b6d7a8;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #d9ead3;
        }
        tr:nth-child(even) {
            background-color: #ebf5e3;
        }
        tr:nth-child(odd) {
            background-color: #f2f9f2;
        }
        .no-records {
            text-align: center;
            color: #555;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Creación de Procedimiento Almacenado</h2>
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

        // Eliminar el procedimiento si ya existe
        $sql = "DROP PROCEDURE IF EXISTS SelectColumns;";
        $conn->query($sql);

        // Crear el procedimiento almacenado
        $sql = "CREATE PROCEDURE SelectColumns()
        BEGIN
            SELECT id, usrpswr, Correo FROM usuarios;
        END;";
        
        if ($conn->query($sql) === TRUE) {
            echo "<div class='success-message'>Procedimiento almacenado creado exitosamente.</div>";
        } else {
            echo "<div class='error-message'>Error creando el procedimiento almacenado: " . $conn->error . "</div>";
        }

        // Llamar al procedimiento almacenado
        $sql = "CALL SelectColumns();";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table>";
            echo "<tr><th>ID</th><th>Contraseña</th><th>Correo</th></tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["id"] . "</td><td>" . $row["usrpswr"] . "</td><td>" . $row["Correo"] . "</td></tr>";
            }
            echo "</table>";
        } else {
            echo "<div class='no-records'>No se encontraron registros.</div>";
        }

        $conn->close();
        ?>
    </div>
</body>
</html>
