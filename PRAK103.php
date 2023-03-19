<!DOCTYPE html>
<html>
    <head>
    </head>
        <body>
            <!-- Program PHP -->
            <?php
                //Calcius
                $C = 37.841;

                //Rumus
                //Fungsi Round untuk membulatkan
                $F = round((9/5) * $C + 32 , 4);
                $K = round($C + 273.15, 4);
                $R = round((4/5) * $C, 4);

                echo "Fahrenheit (F) = $F </br>";
                echo "Reamur (R) = $R </br>";
                echo "Kelvin (K) = $K </br>";
            ?>
        </body>
</html>