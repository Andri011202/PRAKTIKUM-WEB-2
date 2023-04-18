<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAKTIKUM 4</title>

    <style>
            table {
            font-family: Arial, Helvetica, sans-serif;
            color: #666;
            text-shadow: 1px 1px 0px #fff;
            background: #eaebec;
            border: #ccc 1px solid;
            }
            
            table th {
            padding: 15px 35px;
            border-left:1px solid #e0e0e0;
            border-bottom: 1px solid #e0e0e0;
            background: #ededed;
            }
            
            table th:first-child{  
            border-left:none;  
            }
            
            table tr {
            text-align: center;
            padding-left: 20px;
            }
            
            table td:first-child {
            text-align: left;
            padding-left: 20px;
            border-left: 0;
            }
            
            table td {
            padding: 15px 35px;
            border-top: 1px solid #ffffff;
            border-bottom: 1px solid #e0e0e0;
            border-left: 1px solid #e0e0e0;
            background: #fafafa;
            background: -webkit-gradient(linear, left top, left bottom, from(#fbfbfb), to(#fafafa));
            background: -moz-linear-gradient(top, #fbfbfb, #fafafa);
            }
            
            table tr:last-child td {
            border-bottom: 0;
            }
            
            table tr:last-child td:first-child {
            -moz-border-radius-bottomleft: 3px;
            -webkit-border-bottom-left-radius: 3px;
            border-bottom-left-radius: 3px;
            }
            
            table tr:last-child td:last-child {
            -moz-border-radius-bottomright: 3px;
            -webkit-border-bottom-right-radius: 3px;
            border-bottom-right-radius: 3px;
            }
            
            table tr:hover td {
            background: #f2f2f2;
            background: -webkit-gradient(linear, left top, left bottom, from(#f2f2f2), to(#f0f0f0));
            background: -moz-linear-gradient(top, #f2f2f2, #f0f0f0);
            }
        .merah {
            background: red;
        }

        .green {
            background: green;
        }
    </style>
</head>
<body>
    <?php 

        $data = [
            [
                'no' => 1,
                'nama' => "Andi",
                'Mata Kuliah' => ["Pemrograman I", "Praktikum Pemrograman I", "Pengantar Lingkungan Lahan Basah ", "Arsitektur Komputer "],
                'SKS' => [2, 1, 2, 3],
            ],

            [
                'no' => 2,
                'nama' => "Ratna",
                'Mata Kuliah' => ["Basis Data I", "Praktikum Pemrograman I", "Kalkulus "],
                'SKS' => [2, 1, 3],
            ],

            [
                'no' => 3,
                'nama' => "Tono",
                'Mata Kuliah' => ["Rekayasa Perangkat Lunak", "Analisis dan Perancangan Sistem ", "Komputasi Awan","Kecerdasan Bisnis"],
                'SKS' => [3, 3, 3, 3],
            ],

        ];
        
    echo "<table border = '1'>";
        echo "<th> No </th>";
        echo "<th> Nama </th>";
        echo "<th> Mata Kuliah diambil</th>";
        echo "<th> SKS </th>";
        echo "<th> Total SKS </th>";
        echo "<th> Keterangan</th>";
        for ($i=0; $i < count($data); $i++) { 
            echo "<tr>";
            // echo "<td>". $data[$i]['no']. "</td>";
            // echo "<td>". $data[$i]['nama']. "</td>";
            for ($j=0; $j < count($data[$i]['SKS']) ; $j++) { 
                echo "<tr>";
                if($j == 0) {
                    echo "<td>". $data[$i]['no']. "</td>";
                    echo "<td>". $data[$i]['nama']. "</td>";
                } else {
                    echo "<td> </td>";
                    echo "<td> </td>";
                }
                echo "<td>". $data[$i]['Mata Kuliah'][$j]. "</td>";
                echo "<td>". $data[$i]['SKS'][$j]. "</td>";
                if($j == 0) {
                    $totalSKS = array_sum($data[$i]["SKS"]);
                    $keterangan = " ";
                    echo "<td>". $data[$i]['total sks'] = $totalSKS ."</td>";
                    if($totalSKS < 7) {
                        $keterangan = "Revisi";
                        echo "<td class = 'merah'>". $data[$i]['keterangan'] = $keterangan ."</td>";
                    } else {
                        $keterangan = "Tidak Revisi";
                        echo "<td class = 'green'>". $data[$i]['keterangan'] = $keterangan ."</td>";
                    }
                    
                } else {
                    echo "<td> </td>";
                    echo "<td> </td>";
                }
                    echo "</tr>";
                }
            echo "</tr>";
        }
    echo "</table>";
    ?>
</body>
</html>