<?php 
    function database($db){ //database
        if($db >= 80 ){
            $grade = 'A';
            return $grade;
        }
        if($db >= 80 && $db < 80){
            $grade = 'AB';
            return $grade;
        }
        if($db >= 75 && $db < 80){
            $grade = 'B';
            return $grade;
        }
        if($db >= 70 && $db < 75){
            $grade = 'BC';
            return $grade;
        }
        if($db >= 65 && $db < 70){
            $grade = 'C';
            return $grade;
        }
        if($db >= 60 && $db < 65){
            $grade = 'CD';
            return $grade;
        }
        if($db >= 55 && $db < 60){
            $grade = 'D';
            return $grade;
        }
        if($db >= 40 && $db <= 55){
            $grade = 'DE';
            return $grade;
        }
        if($db <= 40){
            $grade = 'E';
            return $grade;
        }
    }
?>