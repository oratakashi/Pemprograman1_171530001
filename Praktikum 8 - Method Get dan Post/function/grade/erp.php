<?php 
    function erp($erp){ //database
        if($erp >= 80 ){
            $grade = 'A';
            return $grade;
        }
        if($erp >= 80 && $erp < 80){
            $grade = 'AB';
            return $grade;
        }
        if($erp >= 75 && $erp < 80){
            $grade = 'B';
            return $grade;
        }
        if($erp >= 70 && $erp < 75){
            $grade = 'BC';
            return $grade;
        }
        if($erp >= 65 && $erp < 70){
            $grade = 'C';
            return $grade;
        }
        if($erp >= 60 && $erp < 65){
            $grade = 'CD';
            return $grade;
        }
        if($erp >= 55 && $erp < 60){
            $grade = 'D';
            return $grade;
        }
        if($erp >= 40 && $erp <= 55){
            $grade = 'DE';
            return $grade;
        }
        if($erp <= 40){
            $grade = 'E';
            return $grade;
        }
    }
?>