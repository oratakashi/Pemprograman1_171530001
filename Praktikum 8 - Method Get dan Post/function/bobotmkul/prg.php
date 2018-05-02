<?php
    function bobot_prg($grade_prg){
        if($grade_prg=='A'){
            $bobot = 4;
            return $bobot;
        }
        if($grade_prg=='AB'){
            $bobot = 3.5;
            return $bobot;
        }
        if($grade_prg=='B'){
            $bobot = 3;
            return $bobot;
        }
        if($grade_prg=='BC'){
            $bobot = 2.5;
            return $bobot;
        }
        if($grade_prg=='BC'){
            $bobot = 2.5;
            return $bobot;
        }
        if($grade_prg=='C'){
            $bobot = 2;
            return $bobot;
        }
        if($grade_prg=='CD'){
            $bobot = 1.5;
            return $bobot;
        }
        if($grade_prg=='D'){
            $bobot = 1;
            return $bobot;
        }
        if($grade_prg=='DE'){
            $bobot = 0;
            return $bobot;
        }
        if($grade_prg=='E'){
            $bobot = 0;
            return $bobot;
        }
    }
?>