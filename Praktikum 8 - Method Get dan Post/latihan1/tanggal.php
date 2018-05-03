<?php
    $tahun = date('Y');
    $hari = date('d-m');
    function tanggal($tahun,$hari,$tenggang){
        if($tenggang == 0){
            $aktif = 'Seumur Hidup';
            return $aktif;
        }
        else{
            $aktif = $tahun + 5;
            return $hari.'-'.$aktif;
        }
    }
?>