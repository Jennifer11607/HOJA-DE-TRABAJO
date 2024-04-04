<!DOCTYPE html>
<html>
<head>
    <title>Suma de Casillas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url(../TABLA/gota.jpg);
            display: flex;
            justify-content: center;
            align-items: center;
            background-size: cover; 
            background-repeat: no-repeat;
            background-position: center center;
            height: calc(100vh - 80px);
            place-items: center;
        }

        .form {
            background-color: #B2BABB ;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            font-family: cursive;
            border: solid lightblue;
            box-shadow: 5px 5px 3px  skyblue;
        }

        .form h1 {
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
        }

        .form label {
            display: block;
            margin-bottom: 10px;
            color: #555;
            
        }

        .form input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid skyblue;
            border-radius: 4px;
            box-sizing: border-box;
            text-align: center;

        }

        .form input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: green;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            font-family: cursive;
            text-align: center;
        }

        .form input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="form">
        <h1>Suma de Casillas</h1>
        <form method="post" action="tabla2.php">
            <label for="filas">Número de filas:</label>
            <input type="number" name="filas" id="filas" required>
            <label for="columnas">Número de columnas:</label>
            <input type="number" name="columnas" id="columnas" required >
            <input type="submit" value="Crear Tabla">
        </form>
    </div>
</body>
</html>
