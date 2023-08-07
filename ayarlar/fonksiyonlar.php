<?Php

$IPAdresi            = $_SERVER["REMOTE_ADDR"];
$zamanDamgasi        = time();
date_default_timezone_set("Asia/Istanbul");
$tarihSaat           = date("d.m.Y H:i:s", $zamanDamgasi);
$tarih               = date("d.m.Y", $zamanDamgasi);
$siteKokDizini       = $_SERVER["DOCUMENT_ROOT"];
// $resimKlasoruYolu    = "/SelimTekin/assets/";
// $verotIcinKlasorYolu = $siteKokDizini.$resimKlasoruYolu;
$sayfaAdi            = $_SERVER["REQUEST_URI"];

function tarihCevir($deger){
    return date("d.m.Y H:i:s", $deger);
}

function guvenlik($deger){
    $boslukSil      = trim($deger);
    $taglariTemizle = strip_tags($boslukSil);
    $etkisizTirnak  = htmlspecialchars($taglariTemizle, ENT_QUOTES);
    $sonuc          = $etkisizTirnak;

    return $sonuc;
}

function donusumleriGeriDondur($deger){
    return htmlspecialchars_decode($deger, ENT_QUOTES);
}

function rakamHaricTumKarakterleriSil($deger){
    return preg_replace("/[^0-9]/", "", $deger);
}

function rakamIcerenIcerikleriFiltrele($deger){

    $boslukSil      = trim($deger);
    $taglariTemizle = strip_tags($boslukSil);
    $etkisizTirnak  = htmlspecialchars($taglariTemizle, ENT_QUOTES);
    $temizle        = rakamHaricTumKarakterleriSil($etkisizTirnak);
    $sonuc          = $temizle;

    return $sonuc;
}

function resimAdiOlustur(){
    $sonuc = substr(md5(uniqid(time())), 0, 25); // md5 32 karakterden oluşturur. Biz ilk 25 karakteri aldık. Hiçbir zaman aynı değer gelmez.
    return $sonuc;
}

?>