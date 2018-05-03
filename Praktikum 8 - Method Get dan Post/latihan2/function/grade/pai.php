<?php 
    function agama($pai){ //agama
        if($pai >= 80 ){
            $grade = 'A';
            return $grade;
        }
        if($pai >= 80 && $pai < 80){
            $grade = 'AB';
            return $grade;
        }
        if($pai >= 75 && $pai < 80){
            $grade = 'B';
            return $grade;
        }
        if($pai >= 70 && $pai < 75){
            $grade = 'BC';
            return $grade;
        }
        if($pai >= 65 && $pai < 70){
            $grade = 'C';
            return $grade;
        }
        if($pai >= 60 && $pai < 65){
            $grade = 'CD';
            return $grade;
        }
        if($pai >= 55 && $pai < 60){
            $grade = 'D';
            return $grade;
        }
        if($pai >= 40 && $pai <= 55){
            $grade = 'DE';
            return $grade;
        }
        if($pai <= 40){
            $grade = 'E';
            return $grade;
        }
    }
?>