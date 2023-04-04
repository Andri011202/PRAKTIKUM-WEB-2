<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <!-- Membuat form penginputan -->
    <form action="" method="get">
        <label for="suhu">Nilai: </label>
        <input type="text" name="inputSuhu">
        <p>Dari : </p>
        <input type="radio" name="suhuDari"  value="c">
        <label for="suhuDaric">Celcius</label>
        <br>
        <input type="radio" name="suhuDari"  value="f">
        <label for="suhuDarir">Fahrenheit</label>
        <br>
        <input type="radio" name="suhuDari"  value="r">
        <label for="suhuDarir">Rheamur</label>
        <br>
        <input type="radio" name="suhuDari"  value="k">
        <label for="suhuDarir">Kelvin</label>
        <br>
        <p>Ke :</p>
        <input type="radio" name="suhuTujuan"  value="c">
        <label for="suhuDaric">Celcius</label>
        <br>
        <input type="radio" name="suhuTujuan"  value="f">
        <label for="suhuDarir">Fahrenheit</label>
        <br>
        <input type="radio" name="suhuTujuan"  value="r">
        <label for="suhuDarir">Rheamur</label>
        <br>
        <input type="radio" name="suhuTujuan"  value="k">
        <label for="suhuDarir">Kelvin</label>
        <br>
        <button type="submit" name="konversi" >konversi</button>

               
    </form>
    <!-- Logika konversi -->
    <?php 
        if(isset($_GET['konversi']) && isset($_GET['inputSuhu']) && isset($_GET['suhuDari']) && isset($_GET['suhuTujuan'])){
            $suhu = $_GET['inputSuhu'];
            $suhuDari = $_GET['suhuDari'];
            $suhuTujuan = $_GET['suhuTujuan'];
            if($suhuDari == "c" && $suhuTujuan == "c"){
                $hasil = $suhu;
                echo "<h1> Hasil : $hasil °C </h1>";
            }else if($suhuDari == "c" && $suhuTujuan == "f"){
                $hasil = $suhu * 1.8 + 32;
                echo "<h1> Hasil : $hasil °F </h1>";
            }else if($suhuDari == "c" && $suhuTujuan == "r"){
                $hasil = $suhu *  0.8 ;
                echo "<h1> Hasil : $hasil °R </h1>";
            }else if($suhuDari == "c" && $suhuTujuan == "k"){
                $hasil = $suhu + 273.15;
                echo "<h1> Hasil : $hasil K </h1>";
            }else if($suhuDari == "f" && $suhuTujuan == "c"){
                $hasil =  ($suhu - 32) / 1.8;
                echo "<h1> Hasil : $hasil °C </h1>";
            }else if($suhuDari == "f" && $suhuTujuan == "f"){
                $hasil = $suhu;
                echo "<h1> Hasil : $hasil °F </h1>";
            }else if($suhuDari == "f" && $suhuTujuan == "r"){
                $hasil = ($suhu - 32) / 2.25;
                echo "<h1> Hasil : $hasil °R </h1>";
            } else if($suhuDari == "f" && $suhuTujuan == "k"){
                $hasil = ($suhu + 459.67) / 1.8;
                echo "<h1> Hasil : $hasil K </h1>";
            }else if($suhuDari == "r" && $suhuTujuan == "c"){
                $hasil = $suhu / 0.8;
                echo "<h1> Hasil : $hasil °C </h1>";
            }else if($suhuDari == "r" && $suhuTujuan == "f"){
                $hasil = $suhu *  2.25 + 32;
                echo "<h1> Hasil : $hasil °F </h1>";
            }else if($suhuDari == "r" && $suhuTujuan == "r"){
                $hasil = $suhu;
                echo "<h1> Hasil : $hasil °R </h1>";
            }else if($suhuDari == "r" && $suhuTujuan == "k"){
                $hasil = $suhu / 0.8 + 273.15;
                echo "<h1> Hasil : $hasil K </h1>";
            }else if($suhuDari == "k" && $suhuTujuan == "c"){
                $hasil = $suhu - 273.15;
                echo "<h1> Hasil : $hasil °C </h1>";
            }else if($suhuDari == "k" && $suhuTujuan == "f"){
                $hasil = $suhu * 1.8 - 459.67;
                echo "<h1> Hasil : $hasil °F </h1>";
            }else if($suhuDari == "k" && $suhuTujuan == "r"){
                $hasil = ($suhu - 273.15) * 0.8;
                echo "<h1> Hasil : $hasil °F </h1>";
            } else{
                $hasil = $suhu;
                echo "<h1> Hasil : $hasil K </h1>";
            }
        }
    ?>
</body>

</html>