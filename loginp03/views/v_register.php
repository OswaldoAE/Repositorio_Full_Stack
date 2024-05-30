<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de nuevo Usuario</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }
        label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }
        input[type="text"], input[type="password"], input[type="email"], input[type="numeric"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #5cb85c;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #4cae4c;
        }
    </style>
</head>
<body>
    
    <form method="post" action="register.php">
        <h1>Registro de Usuario</h1>
    <label for="id">ID de usuario:</label><br/>
    <input type="text" id="id" name="id" requierd/><br/>

    <label for="id">Usuario:</label><br/>
    <input type="text" id="UsrName" name="UsrName" requierd/><br/>

    <label for="id">Contraseña:</label><br/>
    <input type="password" id="usrpswr" name="usrpswr" requierd/><br/>

    <label for="id">Edad</label><br/>
    <input type="text" id="usrEdad" name="usrEdad" requierd/><br/>

    <label for="id">Correo:</label><br/>
    <input type="email" id="Correo" name="Correo" requierd/><br/>

    <label for="id">Telefono:</label><br/>
    <input type="numeric" id="Telefono" name="Telefono" requierd/><br/>
    
    <input type="submit" value="registrar"/>
    

</body>
</html>