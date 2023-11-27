<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator and Grade Form</title>
</head>
<body>

    <h2>Kalkulator Penjumlahan</h2>
    <form action="" method="post">
        <label for="angka1">Angka pertama</label>
        <input type="text" name="angka1" id="angka1" required>
        
        <label for="angka2">Angka kedua</label>
        <input type="text" name="angka2" id="angka2" required>
        
        <input type="submit" value="Hitung">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] ==  "POST"){
            $angka1 = $_POST["angka1"];
            $angka2 = $_POST["angka2"];
            $hasil = $angka1 + $angka2 ;

            echo "<h3>Jadi hasil dari penjumlahan adalah $hasil</h3>";
        }

    ?>

<hr>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Proses formulir nilai jika form disubmit
    $nama = $_POST["nama"];
    $nim = $_POST["nim"];
    $nilai = $_POST["nilai"];
    $absen = $_POST["absen"];
    
    // Proses penentuan keterangan Lulus/Gagal
    $keterangan = ($nilai >= 60 && $absen >= 75) ? "Lulus" : "Gagal";

    // Menampilkan hasil formulir
    echo "<p>Nama: $nama</p>";
    echo "<p>NIM: $nim</p>";
    echo "<p>Nilai: $nilai</p>";
    echo "<p>Absen: $absen</p>";
    echo "<p>Keterangan: $keterangan</p>";
}
?>

<form action="" method="post">
    <label for="nama">Nama:</label>
    <input type="text" name="nama" id="nama" required>
    <br><br>
    <label for="nim">NIM:</label>
    <input type="text" name="nim" id="nim" required>
    <br><br>
    <label for="nilai">Nilai:</label>
    <input type="text" name="nilai" id="nilai" required>
    <br><br>
    <label for="absen">Absen:</label>
    <input type="text" name="absen" id="absen" required>
    <br><br>
    <input type="submit" value="Submit">
</form>

<h2>Kalkulator</h2>

    <form action="" method="post">
        <label for="num1">Angka 1:</label>
        <input type="text" name="num1" id="num1" required>
        
        <label for="operator">Operasi:</label>
        <select name="operator" id="operator">
            <option value="add">Penjumlahan</option>
            <option value="subtract">Pengurangan</option>
            <option value="multiply">Perkalian</option>
            <option value="divide">Pembagian</option>
        </select>

        <label for="num2">Angka 2:</label>
        <input type="text" name="num2" id="num2" required>

        <input type="submit" value="Hitung">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Ambil data dari formulir
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operator = $_POST["operator"];

        // Proses perhitungan
        switch ($operator) {
            case "add":
                $result = $num1 + $num2;
                break;
            case "subtract":
                $result = $num1 - $num2;
                break;
            case "multiply":
                $result = $num1 * $num2;
                break;
            case "divide":
                // Mencegah pembagian dengan 0
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    $result = "Error: Tidak bisa membagi dengan 0";
                }
                break;
            default:
                $result = "Error: Operasi tidak valid";
        }

        // Menampilkan hasil perhitungan
        echo "<p>Hasil: $result</p>";
    }
    ?>


</body>
</html>