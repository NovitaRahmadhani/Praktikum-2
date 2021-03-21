<?php
function kelulusan($_nilai){
    if ($_nilai >= 55){
        return 'LULUS';
    }else{
        return 'TIDAK LULUS';
    }
    

}
   
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
echo 'DINYATAKAN ' . $hasil_ujian;
?>
