<html>
<head>
    <title>Pemprograman PHP dengan Array</title>
</head>
<body>
    <?php 
//penulisan array dapat dibuat seperti berikut
$nama [] = "Denny ";
$nama [] = "Ariyana";
$nama [] = "Arni";
    //menghitung jumlah elemen array
    $jum_array = count($nama);

    echo $nama[1] . $nama[2] . $nama[0];
    echo "<br>";
    echo "jumlah elemen array = ". $jum_array;
?>
</body>
</html>