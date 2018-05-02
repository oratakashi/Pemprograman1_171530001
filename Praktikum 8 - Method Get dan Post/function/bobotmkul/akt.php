<?php
    function bobot_akt($grade_akt){
        if($grade_akt=='A'){
            $bobot = 4;
            return $bobot;
        }
        if($grade_akt=='AB'){
            $bobot = 3.5;
            return $bobot;
        }
        if($grade_akt=='B'){
            $bobot = 3;
            return $bobot;
        }
        if($grade_akt=='BC'){
            $bobot = 2.5;
            return $bobot;
        }
        if($grade_akt=='BC'){
            $bobot = 2.5;
            return $bobot;
        }
        if($grade_akt=='C'){
            $bobot = 2;
            return $bobot;
        }
        if($grade_akt=='CD'){
            $bobot = 1.5;
            return $bobot;
        }
        if($grade_akt=='D'){
            $bobot = 1;
            return $bobot;
        }
        if($grade_akt=='DE'){
            $bobot = 0;
            return $bobot;
        }
        if($grade_akt=='E'){
            $bobot = 0;
            return $bobot;
        }
    }
?>