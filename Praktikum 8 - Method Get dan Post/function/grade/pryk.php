<?php 
    function proyek($pryk){ //database
        if($pryk >= 80 ){
            $grade = 'A';
            return $grade;
        }
        if($pryk >= 80 && $pryk < 80){
            $grade = 'AB';
            return $grade;
        }
        if($pryk >= 75 && $pryk < 80){
            $grade = 'B';
            return $grade;
        }
        if($pryk >= 70 && $pryk < 75){
            $grade = 'BC';
            return $grade;
        }
        if($pryk >= 65 && $pryk < 70){
            $grade = 'C';
            return $grade;
        }
        if($pryk >= 60 && $pryk < 65){
            $grade = 'CD';
            return $grade;
        }
        if($pryk >= 55 && $pryk < 60){
            $grade = 'D';
            return $grade;
        }
        if($pryk >= 40 && $pryk <= 55){
            $grade = 'DE';
            return $grade;
        }
        if($pryk <= 40){
            $grade = 'E';
            return $grade;
        }
    }
?>