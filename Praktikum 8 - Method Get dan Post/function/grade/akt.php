<?php  
function akutansi($akt){ //akutansi
    if($akt >= 80 ){
        $grade = 'A';
        return $grade;
    }
    if($akt >= 80 && $akt < 80){
        $grade = 'AB';
        return $grade;
    }
    if($akt >= 75 && $akt < 80){
        $grade = 'B';
        return $grade;
    }
    if($akt >= 70 && $akt < 75){
        $grade = 'BC';
        return $grade;
    }
    if($akt >= 65 && $akt < 70){
        $grade = 'C';
        return $grade;
    }
    if($akt >= 60 && $akt < 65){
        $grade = 'CD';
        return $grade;
    }
    if($akt >= 55 && $akt < 60){
        $grade = 'D';
        return $grade;
    }
    if($akt >= 40 && $akt <= 55){
        $grade = 'DE';
        return $grade;
    }
    if($akt <= 40){
        $grade = 'E';
        return $grade;
    }
}
?>