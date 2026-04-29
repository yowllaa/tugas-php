<?php
function cToF($c) { return ($c * 9/5) + 32; }
function fToC($f) { return ($f - 32) * 5/9; }
function cToK($c) { return $c + 273.15; }

$hasil = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nilai = $_POST["nilai"];
    $tipe = $_POST["tipe"];

    if (is_numeric($nilai)) {
        switch ($tipe) {
            case "c_f": $hasil = cToF($nilai); break;
            case "f_c": $hasil = fToC($nilai); break;
            case "c_k": $hasil = cToK($nilai); break;
        }
    } else {
        $hasil = "Input harus angka!";
    }
}
?>

<link rel="stylesheet" href="../css/style.css">
<div class="container">
<h2>Konversi Suhu</h2>

<form method="POST">
    Nilai:
    <input type="text" name="nilai">

    Konversi:
    <select name="tipe">
        <option value="c_f">C → F</option>
        <option value="f_c">F → C</option>
        <option value="c_k">C → K</option>
    </select>

    <button type="submit">Hitung</button>
</form>

<h3>Hasil: <?= $hasil ?></h3>
</div>