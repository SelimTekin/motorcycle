<?php
require_once("../ayarlar/siteSayfalari.php");
require_once("../ayarlar/fonksiyonlar.php");
include("../model/MotorcycleModel.php");

if (isset($_REQUEST["sk"])) {
    $sayfaKoduDegeri = rakamIcerenIcerikleriFiltrele($_REQUEST["sk"]);
} else {
    $sayfaKoduDegeri = 0;
}
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="HVAC Template">
    <meta name="keywords" content="HVAC, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Motor Specs</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link type="text/css" rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="../assets/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="../assets/css/elegant-icons.css">
    <link type="text/css" rel="stylesheet" href="../assets/css/nice-select.css">
    <link type="text/css" rel="stylesheet" href="../assets/css/magnific-popup.css">
    <link type="text/css" rel="stylesheet" href="../assets/css/jquery-ui.min.css">
    <link type="text/css" rel="stylesheet" href="../assets/css/owl.carousel.min.css">
    <link type="text/css" rel="stylesheet" href="../assets/css/slicknav.min.css">
    <link type="text/css" rel="stylesheet" href="../assets/css/style.css">

</head>

<body>

    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>


    <!-- Header Section Begin -->
    <?php include("includes/header.php"); ?>
    <!-- Header Section End -->


    <?php
    if ((!$sayfaKoduDegeri) or ($sayfaKoduDegeri == "") or ($sayfaKoduDegeri == 0)) {
        include($sayfa[0]);
    } else {
        include($sayfa[$sayfaKoduDegeri]);
    }
    ?>

    <!-- Footer Section Begin -->
    <?php include("includes/footer.php"); ?>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="../assets/js/jquery-3.3.1.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/jquery.nice-select.min.js"></script>
    <script src="../assets/js/jquery-ui.min.js"></script>
    <script src="../assets/js/jquery.magnific-popup.min.js"></script>
    <script src="../assets/js/mixitup.min.js"></script>
    <script src="../assets/js/jquery.slicknav.js"></script>
    <script src="../assets/js/owl.carousel.min.js"></script>
    <script src="../assets/js/main.js"></script>
</body>

</html>