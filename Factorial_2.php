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
    <?php 
        $num=1;
        echo "Solucion: $num".'<br/><br/>';
        $num=2;
        while($num<=5){
            $solucion=$num;
            $factorial=$solucion-1;
            // while($num>1){
            //     $solucion=$solucion*$factorial;
            //     $factorial--;
            
            // }
            $num--;
        }
        
        echo "Solucion: $solucion".'<br/><br/>';
    ?>
</body>
</html>