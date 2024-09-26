<?php


?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>¡Enhorabuena!</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <h1>¡Enhorabuena!</h1>
  
  <p>Has pulsado todas las cartas en el orden correcto. ¡Felicidades!</p>
  
  <!-- Aquí puedes añadir un GIF de felicitación -->
  <img src="img/minions.gif" alt="¡Enhorabuena!" width="300">
  
  <!-- Botón para reiniciar el juego -->
  <form action="proceso.php" method="get">
    <button type="submit" name="accion" value="Reiniciar">Volver a Jugar</button>
  </form>
  
</body>
</html>
