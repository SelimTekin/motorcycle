<?php 

    function guvenlik($data){
        $boslukSil = trim($data);
        $taglariTemizle = strip_tags($boslukSil);
        $etkisizTirnak = htmlspecialchars($taglariTemizle, ENT_QUOTES);
        $sonuc = $etkisizTirnak;

        return $sonuc;
    }

    function donusumleriGeriDondur($data){
        return htmlspecialchars_decode($data, ENT_QUOTES);
    }

?>