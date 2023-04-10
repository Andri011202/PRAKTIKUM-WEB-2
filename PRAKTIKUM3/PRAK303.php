<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        img {
            width : 20px;
        }
        </style>
</head>
<body>
    <form action ="" method ="post">
        Batas Bawah : <input type ="text" name="batasBawah"></input></br>
        Batas Atas : <input type ="text" name="batasAtas"></input></br>
        <input type="submit" name="cetak" value ="Cetak"></input>
    </form>
    <?php 
        if (isset($_POST['cetak'])){   
            $batasBawah = $_POST['batasBawah'];  
            $batasAtas = $_POST['batasAtas'];        
            do {
                echo $batasBawah;
                echo " ";

                $batasBawah++;
                $batasBawah = $batasBawah + 7;

                if($batasBawah % 5 == 0) {
                    $batasBawah = $batasBawah - 7;
                    echo "<img src='https://www.freepnglogos.com/uploads/star-png/file-featured-article-star-svg-wikimedia-commons-8.png'>";
                    $batasBawah++;
                } else {
                    $batasBawah = $batasBawah - 7;
                }
                
            } while($batasBawah <= $batasAtas);
        } 
    ?> 
</body>
</html>