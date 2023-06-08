<!DOCTYPE html>
<html>

<head>
    <title>Variabel</title>
    <link rel="stylesheet" href="css/a.css">
</head>

<body>
    <h1>Variabel</h1>
    <div class="container">
        <?php
        $nilai_1 = 10;
        $nilai_2 = 3;
        $nilai_3 = 2 * $nilai_1 + 8 * $nilai_2;
        echo "nilai = ", $nilai_3;
        echo "<br>";
        $jumlah = $nilai_1 + $nilai_2;
        echo "hasil dari $nilai_1 + $nilai_2 adalah : $jumlah";
        echo "<br><br>";
        echo "\"Nama : aing teh saha atuh\" <br>";
        echo "NIM : 210550154";
        ?>
        <div class="button-container">
            <a href="b.php">Lanjut</a>
        </div>
    </div>
</body>

</html>