<link rel="stylesheet" href="../css/style.css">
<div class="container">
<h2>Form Biodata</h2>

<form action="hasil.php" method="POST">
    Nama: <input type="text" name="nama">
    NIM: <input type="text" name="nim">
    Email: <input type="email" name="email">
    Telepon: <input type="text" name="telepon">
    Alamat: <input type="text" name="alamat">

    Jenis Kelamin:
    <select name="jk">
        <option value="Laki-laki">Laki-laki</option>
        <option value="Perempuan">Perempuan</option>
    </select>

    Hobi:<br>
    <input type="checkbox" name="hobi[]" value="Membaca"> Membaca
    <input type="checkbox" name="hobi[]" value="Gaming"> Gaming
    <input type="checkbox" name="hobi[]" value="Olahraga"> Olahraga
    <br><br>

    Jurusan:
    <select name="jurusan">
        <option>Informatika</option>
        <option>Sistem Informasi</option>
    </select>

    <button type="submit">Kirim</button>
</form>
</div>