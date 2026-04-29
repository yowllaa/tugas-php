<link rel="stylesheet" href="../css/style.css">

<?php
class Mahasiswa {
    public $nama, $nim, $uts, $uas;

    function __construct($nama, $nim, $uts, $uas) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->uts = $uts;
        $this->uas = $uas;
    }

    function nilaiAkhir() {
        return ($this->uts * 0.4) + ($this->uas * 0.6);
    }

    function grade() {
        $na = $this->nilaiAkhir();
        if ($na >= 85) return "A";
        elseif ($na >= 70) return "B";
        elseif ($na >= 60) return "C";
        elseif ($na >= 50) return "D";
        else return "E";
    }
}

$data = [
    new Mahasiswa("Andi","001",80,90),
    new Mahasiswa("Budi","002",60,70),
    new Mahasiswa("Citra","003",50,40),
    new Mahasiswa("Dina","004",90,95),
    new Mahasiswa("Eka","005",70,75)
];

$total = 0;
?>

<div class="container">
<h2>Tabel Nilai</h2>

<table>
<tr>
<th>Nama</th><th>NIM</th><th>NA</th><th>Grade</th>
</tr>

<?php foreach ($data as $mhs): 
    $na = $mhs->nilaiAkhir();
    $total += $na;
    $class = ($na < 60) ? "merah" : "hijau";
?>

<tr class="<?= $class ?>">
<td><?= $mhs->nama ?></td>
<td><?= $mhs->nim ?></td>
<td><?= number_format($na,2) ?></td>
<td><?= $mhs->grade() ?></td>
</tr>

<?php endforeach; ?>

</table>

<h3>Rata-rata: <?= $total / count($data) ?></h3>
</div>