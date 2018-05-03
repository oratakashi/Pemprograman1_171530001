<?php 
    function jurusan($progdi){
        if ($progdi == 'ti'){
            $jurusan = 'Teknik Informatika';
            return $jurusan;
        }
        if($progdi == 'tm'){
            $jurusan = 'Teknik Mesin';
            return $jurusan;
        }
        if($progdi == 'tkim'){
            $jurusan = 'Teknik Kimia';
            return $jurusan;
        }
    }
?>