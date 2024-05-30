<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Usuarios</title>
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
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
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
            background-color: #b6d7a8;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
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
        <h2>Listado de Usuarios</h2>
        <?php
        // Verifica la conexión 
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "practica2";

        $conn = new mysqli($servername, $username, $password, $dbname);

        // Verificar la conexión
        if ($conn->connect_error) {
            die("Error de conexión: " . $conn->connect_error);
        }

        // Consulta para obtener los datos de la tabla "usuario"
        $sql = "SELECT * FROM usuario";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table>";
            echo "<tr><th>ID</th><th>Nombre</th><th>Contraseña</th><th>Fecha de Alta</th><th>Edad</th><th>Correo</th><th>Teléfono</th></tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["id"] . "</td><td>" . $row["UsrName"] . "</td><td>" . $row["usrpswr"] . "</td><td>" . $row["usrFechaAlta"] . "</td><td>" . $row["usrEdad"] . "</td><td>" . $row["Correo"] . "</td><td>" . $row["Telefono"] . "</td></tr>";
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
