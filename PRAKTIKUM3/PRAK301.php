<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .merah {
            color: red;
        }
        .hijau {
            color: green;
        }
    </style>
</head>
<body>
<form action="" method="get">
        <label for="peserta">Jumlah Peserta: </label>
        <input type="text" name="peserta">
        <br>
        <button type="submit" name="cetak" >Cetak</button>
</form>

<!-- Logika konversi -->
<?php 

    if(isset($_GET['peserta']) && isset($_GET['cetak']) && isset($_GET['peserta'])){
        $jumlahPeserta = $_GET["peserta"];
        $cetakPeserta = 1;
        while($cetakPeserta <= $jumlahPeserta) {
            // Jika peserta genap berawarna hijau
            if($cetakPeserta % 2 == 0) {
                echo "<p class='hijau'> Peserta ke-". $cetakPeserta. "</p>";
            } else { //Jika peserta ganjil berwarna merah
                echo "<p class='merah'> Peserta ke-". $cetakPeserta. "</p>";
            }
            $cetakPeserta++;
        }
    }
            
?>

</body>
</html>