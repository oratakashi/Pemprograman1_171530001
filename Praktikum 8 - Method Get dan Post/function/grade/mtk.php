<?php 

function matematika($mtk){ //mtk
    if($mtk >= 80 ){
        $grade = 'A';
        return $grade;
    }
    if($mtk >= 80 && $mtk < 80){
        $grade = 'AB';
        return $grade;
    }
    if($mtk >= 75 && $mtk < 80){
        $grade = 'B';
        return $grade;
    }
    if($mtk >= 70 && $mtk < 75){
        $grade = 'BC';
        return $grade;
    }
    if($mtk >= 65 && $mtk < 70){
        $grade = 'C';
        return $grade;
    }
    if($mtk >= 60 && $mtk < 65){
        $grade = 'CD';
        return $grade;
    }
    if($mtk >= 55 && $mtk < 60){
        $grade = 'D';
        return $grade;
    }
    if($mtk >= 40 && $mtk <= 55){
        $grade = 'DE';
        return $grade;
    }
    if($mtk <= 40){
        $grade = 'E';
        return $grade;
    }
}

 ?>