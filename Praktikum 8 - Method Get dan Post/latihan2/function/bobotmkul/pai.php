<?php
    function bobot_pai($grade_pai){
        if($grade_pai=='A'){
            $bobot = 4;
            return $bobot;
        }
        if($grade_pai=='AB'){
            $bobot = 3.5;
            return $bobot;
        }
        if($grade_pai=='B'){
            $bobot = 3;
            return $bobot;
        }
        if($grade_pai=='BC'){
            $bobot = 2.5;
            return $bobot;
        }
        if($grade_pai=='BC'){
            $bobot = 2.5;
            return $bobot;
        }
        if($grade_pai=='C'){
            $bobot = 2;
            return $bobot;
        }
        if($grade_pai=='CD'){
            $bobot = 1.5;
            return $bobot;
        }
        if($grade_pai=='D'){
            $bobot = 1;
            return $bobot;
        }
        if($grade_pai=='DE'){
            $bobot = 0;
            return $bobot;
        }
        if($grade_pai=='E'){
            $bobot = 0;
            return $bobot;
        }
    }
?>