<?php
    $hari=date('l');
    $tgl=date('d-m-Y');
    function tanggal($hari, $tgl){
        if($hari == 'Wednesday'){
            $hari = 'Rabu';
        }
        if($hari == 'Thursday'){
            $hari = 'Kamis';
        }
        if($hari == 'Friday'){
            $hari = "Jum'at";
        }
        if($hari == 'Saturday'){
            $hari = 'Sabtu';
        }
        if($hari == 'Sunday'){
            $hari = 'Minggu';
        }
        if($hari == 'Monday'){
            $hari = 'Senin';
        }
        if($hari == 'Tuesday'){
            $hari = 'Selasa';
        }
        $sekarang = $hari.', '.$tgl;
        return $sekarang;
    }
?>