<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS -->
    <style>

    </style>
</head>
<body>
        <?php
            //array
            $daftarSmartphoneSamsung = [
                "Samsung Galaxy S22", 
                "Samsung Galaxy S22+",
                "Samsung Galaxy A03",
                "Samsung Galaxy Xcover 5",
            ];
            echo "<table border='1'>";
            echo "<tr><th>Daftar Smarthphone Samsung</th></tr>";
            //Perulangan untuk tiap index
            for($i = 0; $i < sizeof($daftarSmartphoneSamsung); $i++) {
                echo "<tr><td border = 1>".$daftarSmartphoneSamsung[$i]. "</td></tr>";
            }
            echo "</table>";
        ?>
</body>
</html>