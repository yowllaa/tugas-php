<link rel="stylesheet" href="../css/style.css">
<div class="container">
<h2>Hasil Biodata</h2>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    foreach ($_POST as $key => $value) {
        if (empty($value)) {
            echo "<p style='color:red;'>Semua field harus diisi!</p>";
            exit;
        }
    }

    $hobi = isset($_POST["hobi"]) ? implode(", ", $_POST["hobi"]) : "-";
?>

<table>
<tr><th>Field</th><th>Data</th></tr>

<?php
foreach ($_POST as $key => $value) {
    if ($key == "hobi") continue;
    echo "<tr><td>$key</td><td>$value</td></tr>";
}
?>

<tr><td>Hobi</td><td><?= $hobi ?></td></tr>
</table>

<?php } ?>
</div>