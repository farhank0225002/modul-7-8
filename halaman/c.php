<!DOCTYPE html>
<html>

<head>
    <title>Koversi Tipe</title>
    <link rel="stylesheet" href="css/c.css">
</head>

<body>
    <h1>Konversi Tipe</h1>
    <div class="container">
        <?php
        $a = 300.4;
        echo $a;
        echo "<br>";
        echo "Tipe Double: ", doubleval($a), "<br>";
        echo "Tipe Integer: ", intval($a), "<br>";
        echo "Tipe String: ", strval($a);
        ?>
        <div class="button-container">
            <a href="d.php">Lanjut</a>
        </div>
    </div>
</body>

</html>