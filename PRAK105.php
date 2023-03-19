<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS -->
    <style>
        th {
            background-color: red;
            font-size: 23px;
            font-weight: bold;
            padding: 15px 0 15px 0;
        }
    </style>
</head>
<body>
        <?php
            // associative  array
            $daftarSmartphoneSamsung = [
                "HP1" => "Samsung Galaxy S22", 
                "HP2" => "Samsung Galaxy S22+",
                "HP3" => "Samsung Galaxy A03",
                "Hp4" => "Samsung Galaxy Xcover 5",
            ];
            echo "<table border='2'>";
            echo "<tr><th>Daftar Smarthphone Samsung</th></tr>";
            foreach($daftarSmartphoneSamsung as $key => $value) {
                echo "<tr><td>".$daftarSmartphoneSamsung[$key]. "</td></tr>";
            }
            echo "</table>";
        ?>
</body>
</html>