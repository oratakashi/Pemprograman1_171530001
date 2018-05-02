<?php
    function bobot_erp($grade_erp){
        if($grade_erp=='A'){
            $bobot = 4;
            return $bobot;
        }
        if($grade_erp=='AB'){
            $bobot = 3.5;
            return $bobot;
        }
        if($grade_erp=='B'){
            $bobot = 3;
            return $bobot;
        }
        if($grade_erp=='BC'){
            $bobot = 2.5;
            return $bobot;
        }
        if($grade_erp=='BC'){
            $bobot = 2.5;
            return $bobot;
        }
        if($grade_erp=='C'){
            $bobot = 2;
            return $bobot;
        }
        if($grade_erp=='CD'){
            $bobot = 1.5;
            return $bobot;
        }
        if($grade_erp=='D'){
            $bobot = 1;
            return $bobot;
        }
        if($grade_erp=='DE'){
            $bobot = 0;
            return $bobot;
        }
        if($grade_erp=='E'){
            $bobot = 0;
            return $bobot;
        }
    }
?>