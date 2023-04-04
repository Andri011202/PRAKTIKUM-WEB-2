<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .error {color:  #FF0000;}
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //Membuat variable
        $namaErr = $nimErr = $jenisKelaminErr = "";
        $nama = $nim = $jenisKelamin = "";

        //Logika jika form tak terisi
        if($_POST && isset($_POST['tombol'])) {
            if(empty($_POST["nama"])) {
                $namaErr = "nama tidak boleh kosong";
            } else {
                $nama =  $_POST["nama"] ;
            }

            if (empty($_POST["nim"])) {
                $nimErr = "nim tidak boleh kosong";
            } else {
                $nim =  $_POST["nim"];
            }

            if (empty($_POST["gender"])) {
                $jenisKelaminErr = "jenis kelamin tidak boleh kosong";
              } else {
                $jenisKelamin = $_POST["gender"];
              }
        }
 
    ?>
 
<form method="post">
        <label for="name">Nama: </label>
            <input type="text", name = "nama"> <span class="error">* <?php echo $namaErr;?> </span><br>
        <label for="nim">Nim: </label>
            <input type="text", name = "nim"> <span class="error">* <?php echo $nimErr;?> </span> <br>
        <label for="nim">Jenis Kelamin <span class="error">* <?php echo $jenisKelaminErr;?> </span>  </label> <br>
        <input type = "radio" name = "gender" value = "laki-laki"> Laki-Laki <br>
        <input type = "radio" name = "gender" value="perempuan">Perempuan <br>
        <input type="submit" value = "submit" name="tombol">
    </form>
  
    <br/>
    <?php
    if( $_POST){
        echo "<h2>Input:</h2>";
        echo $nama;
        echo "<br>";
        echo $nim;
        echo "<br>";
        echo $jenisKelamin;
        echo $namaErr;
    }
 
    ?>
</body>
</html>