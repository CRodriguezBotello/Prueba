<?php $saludo='hola';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="favicon.png">
    <title>DWES - Prueba</title>
</head>
<body>
    <?php echo "<h1>$saludo</h1>";?>
    <?php echo '<h1>$saludo</h1>';?>
     <?php echo '<h1>'.$saludo.'</h1> <br/>';?> <!--El <br/> escrito asi indica que es de apertura y cierre a la vez -->
</body>
</html>