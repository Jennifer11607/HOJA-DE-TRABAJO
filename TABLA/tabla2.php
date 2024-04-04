<!DOCTYPE html>
<html>
<head>
    <title>Matriz con Estilo</title>
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

        .matriz {
            background-color: skyblue;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            margin-top: 2cm;
            display: inline-block;
        }

        .casilla {
            min-width: 50px;
            height: 30px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border: 1px solid #cccccc;
            background: linear-gradient(to bottom right, lightblue, #2980B9, lightblue);
            color: #ffffff; /* Color de los números */
            margin: 2px;
            font-family: cursive;
            white-space: nowrap; /* Evita que el contenido se rompa en varias líneas */
        }

        .casilla:hover {
            background: linear-gradient(to bottom right, #aaaaaa, #bbbbbb);
        }
        .hidden-input {
        border: 1px solid skyblue;
    }
    </style>
</head>
<body>
    <div class="matriz" style=" font-family: cursive;">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $filas = $_POST["filas"];
            $columnas = $_POST["columnas"];

            // Calcular la suma de los números dentro de las casillas
            $suma = 0;

            // Obtener el número máximo de dígitos para ajustar el ancho mínimo de las casillas
            $max_digits = strlen($filas * $columnas);

            // Generar la matriz de casillas
            for ($fila = 1; $fila <= $filas; $fila++) {
                for ($columna = 1; $columna <= $columnas; $columna++) {
                    // Imprimir el número de la casilla
                    $numero_casilla = ($fila - 1) * $columnas + $columna;
                    echo '<div class="casilla" style="min-width: ' . (10 + 10 * $max_digits) . 'px;">' . $numero_casilla . '</div>';

                    // Sumar el número al total
                    $suma += $numero_casilla;
                }
                echo '<br>';
            }

            echo ' La suma total de los números dentro de las casillas es: ' . $suma . '</p>';
        }
        ?>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    ?>
    <div style="text-align: center; font-family: cursive;">
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="columna_suma">Número de columna a sumar:</label>
        <input type="number" id="columna_suma" name="columna_suma" min="1" max="<?php echo $_POST['columnas']; ?>" required>
        <input type="hidden" name="filas" value="<?php echo $_POST['filas']; ?>" style="border: solid seagreen;">
        <input type="hidden" name="columnas" value="<?php echo $_POST['columnas']; ?>" class="text-center">
        <br>
        <input type="submit" value="Calcular suma de columna" style=" font-family: cursive; border: solid seagreen;">
    </form>
</div>
    <?php
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['columna_suma'])) {
        $filas = $_POST["filas"];
        $columna_suma = $_POST["columna_suma"];
        $suma_columna = 0;

        // Calcular la suma de la columna especificada
        for ($fila = 1; $fila <= $filas; $fila++) {
            $numero_casilla = ($fila - 1) * $_POST['columnas'] + $columna_suma;
            $suma_columna += $numero_casilla;
        }

        echo '<p><strong>La suma de los números en la columna ' . $columna_suma . ' es: ' . $suma_columna . '</strong></p>';
    }
    ?>
    </div>
</body>
</html>
