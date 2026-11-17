<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tinggi = $_POST['tinggi-segitiga'];

    if (is_array($tinggi)) {
        foreach ($tinggi as $t) {
            $t = intval($t);

            echo "<h3>1. Pola Segitiga</h3>";
            for ($baris = 1; $baris <= $t; $baris++) {
                for ($spasi = 1; $spasi <= ($t - $baris); $spasi++) {
                    echo "&nbsp;&nbsp;";
                }
                for ($kolom = 1; $kolom <= (2 * $baris - 1); $kolom++) {
                    echo "*";
                }
                echo "<br>";
            }

            echo "<hr>";

            echo "<h3>2. Pola Segitiga Terbalik</h3>";
            for ($baris = $t; $baris >= 1; $baris--) {
                for ($spasi = 1; $spasi <= ($t - $baris); $spasi++) {
                    echo "&nbsp;&nbsp;";
                }
                for ($kolom = 1; $kolom <= (2 * $baris - 1); $kolom++) {
                    echo "*";
                }
                echo "<br>";
            }

            echo "<hr>";

            echo "<h3>3. Pola Segitiga Terbalik</h3>";
            for ($baris = 1; $baris <= $t; $baris++) {
                for ($kolom = 1; $kolom <= $baris; $kolom++) {
                    echo "*";
                }
                echo "<br>";
            }
            for ($baris = $t - 1; $baris >= 1; $baris--) {
                for ($kolom = 1; $kolom <= $baris; $kolom++) {
                    echo "*";
                }
                echo "<br>";
            }
        }
    } else {
        echo "tidak ada data";
    }
}
?>