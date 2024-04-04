<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Tablero de Damas chinas</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lilita+One&family=Luckiest+Guy&display=swap" rel="stylesheet">
<style>
    body{
    background-image: url(./azul.avif);
    background-size: cover; 
    background-repeat: no-repeat;
    background-position: center center;
    height: calc(100vh - 80px);
    place-items: center;
}
h1{
    text-align: center;
    font-family: "Luckiest Guy", cursive;
    text-shadow: 0 0 5px green;
    color: #B3B6B7;
    font-size: 50px;
}
h1:hover{
  transform: scale(1.2)
}

  .tablero {
    display: grid;
    grid-template-columns: repeat(8, 70px);
    grid-template-rows: repeat(8, 70px);
    margin-left: 13cm;
    border: black;
    box-sizing: border-box; 
    
  }
  .tablero *{
    text-align: center;
    font-size: 40px;
    transition: 0.2 s ease-in-out;
    cursor: pointer;
    user-select: none;
    border: black thin solid;
}

  .casilla {
    width: 70px;
    height: 70px;
    border: 3px solid #fff;
    display: flex; /* Convertir el contenedor en un flexbox */
    justify-content: center; /* Centrar horizontalmente */
    align-items: center; /* Borde de las casillas */
    margin: 1cm solid;
  } 
 
  
  .ficha-arriba {
   
    width: 50px;
    height: 50px;
    background-image: url(./yo.jpg); /* Imagen de fondo de las fichas */
    background-size: cover;
    border-radius: 2cm;
    border: 4px solid #2874A6 ;
    box-shadow: 0 0 10px blue;  /* Color de las fichas de arriba */
    
  }
  .ficha-arriba:hover{
    transform: scale(1.2)
  }
  .ficha-abajo {
    width: 50px;
    height: 50px;
    background-image: url(./incognito.png);
    background-size: cover;
    border-radius: 2cm;
    border: 4px solid #B03A2E;
    box-shadow: 0 0 10px red ; /* Color de las fichas de abajo */
    background-position: center center;
  }
  .ficha-abajo:hover{
    transform: scale(1.2)
  }
</style>
</head>
<body>
<h1>BIENVENIDO AL JUEGO DE DAMAS</h1>
<div class="tablero">
<?php
// Ciclo para generar las casillas del tablero
for ($fila = 1; $fila <= 8; $fila++) {
    for ($columna = 1; $columna <= 8; $columna++) {
        // Determinar el color de la casilla
        $color_casilla = ($fila == 4) ? '#117A65 ' : (($fila + $columna) % 2 == 0 ? '#5DADE2' : '#1F618D'); // Fila 4 en verde, alternar colores para las demás filas
        
        echo '<div class="casilla" style="background-color: ' . $color_casilla . '">';
        
        // Determinar si hay que colocar una ficha
        if (($fila + $columna) % 2 == 0 && ($fila <= 3 || $fila >= 6)) {
            // Añadir clase de ficha según su posición
            $clase_ficha = ($fila <= 3) ? 'ficha-arriba' : 'ficha-abajo';
            echo '<div class="ficha ' . $clase_ficha . '"></div>';
        }
        
        echo '</div>';
    }
}
?>
</div>


</body>
</html>
