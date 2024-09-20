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
        
        $num=9;
       
        if($num==0){ //Factorial de 0. Lleva un die para que no haga el bucle
            $num=1;
            die("Solucion: $num");
        }
        $factorial=$num;
        while($factorial>1){
            $factorial--;
            $num=$num*$factorial;
            
        }
        echo "Solucion: $num";
    ?>
</body>
</html>