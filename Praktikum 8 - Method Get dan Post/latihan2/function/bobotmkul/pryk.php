<?php
    function bobot_pryk($grade_pryk){
        if($grade_pryk=='A'){
            $bobot = 4;
            return $bobot;
        }
        if($grade_pryk=='AB'){
            $bobot = 3.5;
            return $bobot;
        }
        if($grade_pryk=='B'){
            $bobot = 3;
            return $bobot;
        }
        if($grade_pryk=='BC'){
            $bobot = 2.5;
            return $bobot;
        }
        if($grade_pryk=='BC'){
            $bobot = 2.5;
            return $bobot;
        }
        if($grade_pryk=='C'){
            $bobot = 2;
            return $bobot;
        }
        if($grade_pryk=='CD'){
            $bobot = 1.5;
            return $bobot;
        }
        if($grade_pryk=='D'){
            $bobot = 1;
            return $bobot;
        }
        if($grade_pryk=='DE'){
            $bobot = 0;
            return $bobot;
        }
        if($grade_pryk=='E'){
            $bobot = 0;
            return $bobot;
        }
    }
?>