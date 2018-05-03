<?php
    function bobot_db($grade_db){
        if($grade_db=='A'){
            $bobot = 4;
            return $bobot;
        }
        if($grade_db=='AB'){
            $bobot = 3.5;
            return $bobot;
        }
        if($grade_db=='B'){
            $bobot = 3;
            return $bobot;
        }
        if($grade_db=='BC'){
            $bobot = 2.5;
            return $bobot;
        }
        if($grade_db=='BC'){
            $bobot = 2.5;
            return $bobot;
        }
        if($grade_db=='C'){
            $bobot = 2;
            return $bobot;
        }
        if($grade_db=='CD'){
            $bobot = 1.5;
            return $bobot;
        }
        if($grade_db=='D'){
            $bobot = 1;
            return $bobot;
        }
        if($grade_db=='DE'){
            $bobot = 0;
            return $bobot;
        }
        if($grade_db=='E'){
            $bobot = 0;
            return $bobot;
        }
    }
?>