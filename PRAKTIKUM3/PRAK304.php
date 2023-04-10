<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $bintang = NULL; 
        $gambar = "bintang.png";  
        if (isset($_POST['bintang'])) {     
            $bintang = $_POST['bintang']; 
        }
        if (isset($_POST['tambah'])){     
            $bintang++; 
        } 
        if(isset($_POST['kurang'])){     
            $bintang--; 
        }  
        ?> 
        <?php 
        for($i=0; $i<$bintang; $i++){     
            echo '<img src='.$gambar.' 
            width=100px height=100px>'; 
        } 
        ?>  
        <?php  
        if($bintang == 0): 
        ?> 
        <form action="" method="POST">     
            Jumlah  bintang  <input  type  ="number"  
            name="bintang" required><br>     
            <button type = "submit">Submit</button><br> 
        </form> 
        <?php  
        endif;  
        if($bintang != 0): 
            echo "<p>Jumlah bintang: ". $bintang. "</p>"; 
        ?>
            
        <form action="" method="POST">         
            <button name="tambah">Tambah</button>         
            <input  type='hidden'  name='bintang'  
            value='<?=  $bintang; ?>'/>         
            <button name="kurang">Kurang</button>     
        </form> 
    <?php endif;?> 
</body>
</html>