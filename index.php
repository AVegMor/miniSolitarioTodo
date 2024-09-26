<?php




?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Mini solitario. Haz click en las cartas ordenadas de menor a mayor.</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <h1>Mini solitario</h1>

  <form action="proceso.php" method="get">
    <p>Haga clic en las cartas en orden numérico creciente:</p>

    <?php
    
            echo "
            <button type='submit' name='cartaPulsada' value='5' style='border: none; background-color: transparent;'>
              <img src='img/cartas/c5.svg' alt='5 de corazones' width='100'>
            </button>
            ";

    ?>

    <!-- Botón para reiniciar el juego (redirige a proceso.php para reiniciar) -->
    <p><button type="submit" name="accion" value="Reiniciar">Reiniciar</button></p>
  </form>

</body>
</html>
