<?php
function periksaUmur($umur){
    if($umur <18){
        return "Miskin";//Keluar dari fungsi dengan hasil
    }
    return "Kaya";
    }
echo periksaUmur(15);
?>