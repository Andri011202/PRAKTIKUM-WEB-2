<!DOCTYPE html>
<html>
    <head>
    </head>
        <body>
            <!-- Program PHP -->
            <?php
                //Konstanta
                $panjang = 8.9;
                $lebar = 14.7;
                $tinggi = 5.4;

                //Rumus
                $luas_alas = $panjang * $lebar;

                //Rumus mencari volume bangun ruang bola
                $volume = 1/3 * $luas_alas * $tinggi ;

                //Mencetak volume ke layar dengan 3 angka di belakang koma
                echo round($volume, 3);
            ?>
        </body>
</html>