<!DOCTYPE html>
<html>
<head>
    <title>Escalera con Frases</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lilita+One&family=Luckiest+Guy&family=Rubik+Mono+One&display=swap" rel="stylesheet">
    <style>
        body{
            background-image: url(../ESCALERA/cielo.jpeg);
            background-size: cover; 
            background-repeat: no-repeat;
            background-position: center center;
            height: calc(100vh - 80px);
            place-items: center;
        }
        h1{
            text-align: center;
            font-family: "Rubik Mono One", monospace;
            text-shadow: 5px 5px 5px #0073e6;
            
        }
        .form {
            background: linear-gradient(to bottom, #eeeeee, #cccccc); /* Fondo con degradado */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 8cm;
            place-items: center;
            margin-left: 16cm;
            margin-top: 1cm;
            text-align: center;
            font-family: cursive;
        }
        input[type="number"] {
            border: 2px solid skyblue; /* Borde skyblue para los input de tipo número */
            padding: 8px;
            border-radius: 5px;
            margin-bottom: 10px;
            width: 100%;
            box-sizing: border-box;
        }
        button[type="submit"] {
            background-color: skyblue;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
        button[type="submit"]:hover {
            background-color: #0073e6; /* Cambia el color al pasar el cursor */
            text-align: center;
        }

        .casilla {
            width: 100px;
            height: 50px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border: 3px solid #138D75 ;
            text-align: center;
            overflow: hidden;
            padding: 5px;
            margin: 2px;
            background-color: aquamarine;
        }

        .casilla:hover{
            transform: scale(1.2);
        }

        .escalera{
            margin-left: 15cm;
            margin-top: 2%;
            font-family: cursive;
        
        }

        /* Ajustar tamaño de letra para la primera casilla */
        .casilla:first-child {
            font-size: 12px; /* Puedes ajustar este valor según tus necesidades */

        }
    </style>
</head>
<body>
    <h1 class="text-white text-center "><hr>ESCALERA <hr></h1>
    <form method="post" class="form">
        <label for="pisos">Ingrese el numero de filas de la escalera de 5 a 8 </label><br>
        <input type="number" name="pisos" id="pisos" min="5" max="8" required><br>
        <button type="submit" value="Dibujar escalera"> Dibujar </button>
    </form>

    <div class="escalera">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num_pisos = $_POST["pisos"];

            $frases = array(
                "¡Bienvenido al primer piso!",
                "¡Estás en el 2do piso!",
                "¡3er     piso, a   disfrutar!",
                "¡Ya    estás en el    4to piso!",
                "¡5to piso, sigue subiendo!",
                "¡6to piso, casi llegas!",
                "¡7mo piso, casi al final!",
                "¡8vo piso, lo lograste!"
            );

            if ($num_pisos >= 5 && $num_pisos <= 8) {
                echo '<div>';
                for ($fila = 1; $fila <= $num_pisos; $fila++) {
                    $num_casillas = $fila;
                    $frase_casilla = $frases[$fila - 1];
                    $frase_dividida = str_split($frase_casilla, ceil(strlen($frase_casilla) / $num_casillas));
                    foreach ($frase_dividida as $parte_frase) {
                        echo '<div class="casilla">' . $parte_frase . '</div>';
                    }
                    echo '<br>';
                }
                echo '</div>';
            } else {
                echo "Por favor, ingrese un número válido de pisos (entre 5 y 8).";
            }
        }
        ?>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>
