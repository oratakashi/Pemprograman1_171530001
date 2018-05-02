<?php 
    function pemprograman($prg){ //database
        if($prg >= 80 ){
            $grade = 'A';
            return $grade;
        }
        if($prg >= 80 && $prg < 80){
            $grade = 'AB';
            return $grade;
        }
        if($prg >= 75 && $prg < 80){
            $grade = 'B';
            return $grade;
        }
        if($prg >= 70 && $prg < 75){
            $grade = 'BC';
            return $grade;
        }
        if($prg >= 65 && $prg < 70){
            $grade = 'C';
            return $grade;
        }
        if($prg >= 60 && $prg < 65){
            $grade = 'CD';
            return $grade;
        }
        if($prg >= 55 && $prg < 60){
            $grade = 'D';
            return $grade;
        }
        if($prg >= 40 && $prg <= 55){
            $grade = 'DE';
            return $grade;
        }
        if($prg <= 40){
            $grade = 'E';
            return $grade;
        }
    }
?>