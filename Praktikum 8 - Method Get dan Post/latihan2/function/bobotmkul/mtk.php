<?php
    function bobot_mtk($grade_mtk){
        if($grade_mtk=='A'){
            $bobot = 4;
            return $bobot;
        }
        if($grade_mtk=='AB'){
            $bobot = 3.5;
            return $bobot;
        }
        if($grade_mtk=='B'){
            $bobot = 3;
            return $bobot;
        }
        if($grade_mtk=='BC'){
            $bobot = 2.5;
            return $bobot;
        }
        if($grade_mtk=='BC'){
            $bobot = 2.5;
            return $bobot;
        }
        if($grade_mtk=='C'){
            $bobot = 2;
            return $bobot;
        }
        if($grade_mtk=='CD'){
            $bobot = 1.5;
            return $bobot;
        }
        if($grade_mtk=='D'){
            $bobot = 1;
            return $bobot;
        }
        if($grade_mtk=='DE'){
            $bobot = 0;
            return $bobot;
        }
        if($grade_mtk=='E'){
            $bobot = 0;
            return $bobot;
        }
    }
?>