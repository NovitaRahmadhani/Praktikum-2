<!DOCTYPE html>
<html>
<head>
    <title>Form Nilai</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

    <h1>FORM NILAI SISWA</h1>
    <form class="form-horizontal" method="POST" action="nilai_siswa.php">
        Nama : <input type="text" name="nama" value="" size="30"/><br/>
        NIM : <input type="number" name="nim" value="" size="30"/><br/>
        Mata Kuliah :
    <select name="matkul">
    <option value="DDP">Dasar-Dasar Pemrograman</option>
    <option value="BDI">Basis Data I</option>
    <option value="WEB1">Pemrograman Web</option>
    </select><br/>
        Nilai UTS : <input type="number" value="" name="uts" size="6"/><br/>
        Nilai UAS : <input type="number" value="" name="uas"size="6"/><br/>
        Nilai Tugas/Praktikum : <input type="number" value="" name="tugas" size="6"/><br/>
        <input type="submit" value="Simpan" name="proses"/>
    </form>
</body>
</html>
<style>
body{
    background-color: grey;

}
h1{
    text-align: center;
    color: white;
}
form {
    color: white;
    display: grid;
    grid-template-columns: 180px 1fr;
    grid-gap: 50px;
    
}


</style>

