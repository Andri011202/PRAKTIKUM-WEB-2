<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!-- membuat form untuk menerima input user -->
    <form method="post">
        <label for="name">Nama: 1</label>
            <input type="text", name = "nama1"> <br>
        <label for="nama">Nama: 2</label>
            <input type="text", name = "nama2"> <br>
        <label for="nam">Nama: 3</label>
            <input type="text", name = "nama3"> <br>
        <input type="submit" value = "urutkan">
    </form> 
    <br/> 

    <!-- Tabel sebagai hasil output -->
    <?php
    echo "<table width='300px' border = '1'>";
    echo "<th align='left'><b> Ouput </b> </th>";
    echo "<tr>";
    echo "<td>";
    // mencek kondisi apakah tersedia form dan isi tak boleh kosong
    if(isset($_POST) && !empty($_POST)) {
        $nama1 = $_POST['nama1'];
        $nama2 = $_POST['nama2'];
        $nama3 = $_POST['nama3'];
        if ($nama1 < $nama2 && $nama1 < $nama3) {       
            if ($nama2 < $nama3) {
                echo "$nama1<br>";
                echo "$nama2<br>";
                echo "$nama3<br>";
            } else {
                echo "$nama1<br>";
                echo "$nama3<br>";
                echo "$nama2<br>";
            }
        
        } elseif ($nama2 < $nama1 && $nama2 < $nama3) {
            if ($nama1 < $nama3) {
                echo "$nama2<br>";
                echo "$nama1<br>";
                echo "$nama3<br>";
            } else {
                echo "$nama2<br>";
                echo "$nama3<br>";
                echo "$nama1<br>";
            }
        } else {
            if ($nama1 < $nama2) {
                echo "$nama3<br>";
                echo "$nama1<br>";
                echo "$nama2<br>";
            } else {
                echo "$nama3<br>";
                echo "$nama2<br>";
                echo "$nama1<br>";
            }
        }
    }
    echo "</td>";
    echo "</tr>";
    echo "</table>";
    ?>
</body>
</html>