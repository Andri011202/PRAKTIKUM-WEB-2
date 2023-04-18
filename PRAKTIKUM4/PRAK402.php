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
    </style>
</head>

<body>
    <?php 

        $data = [
            [
                'nama' => "Andi",
                'NIM' => '2101001',
                'Nilai UTS' => '87',
                'Nilai UAS' => '65',
            ],

            [
                'nama' => "Budi",
                'NIM' => '2101002',
                'Nilai UTS' => '76',
                'Nilai UAS' => '79',
            ],

            [
                'nama' => "Tono",
                'NIM' => '2101003',
                'Nilai UTS' => '50',
                'Nilai UAS' => '41',
            ],

            [
                'nama' => "Jessica",
                'NIM' => '2101004',
                'Nilai UTS' => '60',
                'Nilai UAS' => '75',
            ],

        ];
        
    echo "<table border = '1'>";
        echo "<th> Nama </th>";
        echo "<th> NIM </th>";
        echo "<th> Nilai UTS </th>";
        echo "<th> Nilai UAS </th>";
        echo "<th> Nilai Akhir </th>";
        echo "<th> Nilai Huruf</th>";
        for ($i=0; $i < count($data); $i++) { 
            echo "<tr>";
                echo "<td>". $data[$i]['nama']. "</td>";
                echo "<td>". $data[$i]['NIM']. "</td>";
                echo "<td>". $data[$i]['Nilai UTS']. "</td>";
                echo "<td>". $data[$i]['Nilai UAS']. "</td>";
                //Menghitung nilai akhir
                $nilaiAkhir = 40/100 * $data[$i]['Nilai UTS'] +  60/100 * $data[$i]['Nilai UAS'];
                //Menambah nilai akhir ke kolom tabel
                echo "<td>". $data[$i]["Huruf"] = $nilaiAkhir. "</td>";
                //Mencari nilai akhir berupa huruf
                $nilaiAkhirHuruf = "";
                if ($nilaiAkhir >= 80){
                    $nilaiAkhirHuruf = "A";
                } else if ($nilaiAkhir >= 70 && $nilaiAkhir <=79) {
                    $nilaiAkhirHuruf = "B";
                } else if ($nilaiAkhir >= 60 && $nilaiAkhir <=69) {
                    $nilaiAkhirHuruf = "C";
                }  else if ($nilaiAkhir >= 50 && $nilaiAkhir <=59) {
                    $nilaiAkhirHuruf = "D";
                } else if ($nilaiAkhir < 50 ) {
                    $nilaiAkhirHuruf = "E";
                }

                //Menambah Nilai Akhir Huruf ke kolom tabel
                echo "<td>". $data[$i]["Nilai Akhir"] = $nilaiAkhirHuruf. "</td>";
    
            echo "</tr>";

        }
    echo "</table>";
    ?>
</body>
</html>