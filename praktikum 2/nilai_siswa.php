<?php
$proses = $_POST['proses'];
$nama_siswa = $_POST['nama'];
$mata_kuliah = $_POST['matkul'];
$uts = $_POST['uts'];
$uas = $_POST['uas'];
$tugas = $_POST['tugas'];




if(!empty($proses)){
    echo 'Nama : '.$nama_siswa;
    echo '<br/>Mata Kuliah : '.$mata_kuliah;
    echo '<br/>Nilai UTS : '.$uts;
    echo '<br/>Nilai UAS : '.$uas;
    echo '<br/>Nilai Tugas : '.$tugas;
    
  

}

?>
<?php

   
function grade ($_nilai){
    if  ($_nilai <= 35){
        echo 'E'.'Sangat Kurang';
    }elseif($_nilai >= 36){
        echo 'D'.'Kurang';
    }elseif($_nilai >= 56){
        echo 'C'.'Cukup';
    }elseif($_nilai >= 70){
        echo 'B'.'Memuaskan';
    }elseif($_nilai >= 85){
        echo 'A'. 'Sangat Memuaskan';
    } 
}

?>

