<html>
    <head>
        <title>Fungsi Array</title>
    </head>
    <body>
        <?php
            $arrNilai = array ("Ani" => 80,
                                "Otim" => 90,
                                "Ana" => 75,
                                "Budi " => 85);
            echo "Menampilkan isi array dengan foreach : <br>";
            foreach($arrNilai as $nama => $nilai){
                echo "Nilai $nama = $nilai<br>";
            }
        ?>
    </body>
</html>