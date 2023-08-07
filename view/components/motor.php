<?php

include("../controller/SearchController.php");
include("../controller/IndexController.php");

$search = new SearchController();
$indexFunctions = new IndexController();

$datas = $search->processData();

$makes        = $indexFunctions->getMakes();
$models       = $indexFunctions->getModels();
$years        = $indexFunctions->getYears();
$types        = $indexFunctions->getTypes();
$tranmissions = $indexFunctions->getTransmissions();
$coolings     = $indexFunctions->getCoolings();
$starters     = $indexFunctions->getStarters();

?>
<!-- Breadcrumb End -->
<div class="breadcrumb-option set-bg" data-setbg="../images/breadcrumb-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Motorcycle Listing</h2>
                    <div class="breadcrumb__links">
                        <a href="./index.php"><i class="fa fa-home"></i> Home</a>
                        <span class="text-white">Motorcycle</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Begin -->

<!-- Car Section Begin -->
<section class="car spad">
    <div class="container">
        <div class="row">
            <?php include("includes/sideNav.php"); ?>
            <div class="col-lg-9">
                <div class="row">

                    <?php
                    $countDatas = isset($datas["make"]) ? count($datas) - 2 : count($datas) - 1;
                    for ($i = 0; $i < $countDatas; $i++) { ?>
                        <div class="col-lg-4 col-md-4">
                            <div class="car__item">
                                <img src="../images/motor-icon.svg" alt="">
                                <div class="car__item__text">
                                    <div class="car__item__text__inner">
                                        <div class="label-date"><?php echo donusumleriGeriDondur($datas[$i]["year"]); ?></div>
                                        <h5><a href="#"><?php echo donusumleriGeriDondur($datas[$i]["make"]) . " " . donusumleriGeriDondur($datas[$i]["model"]); ?></a></h5>
                                        <ul>
                                            <li><?php echo donusumleriGeriDondur($datas[$i]["type"]); ?></li>
                                        </ul>
                                    </div>
                                    <div class="car__item__price text-center">
                                        <a href="index.php?sk=2&id=<?php echo donusumleriGeriDondur($datas[$i]["id"]); ?>" class="primary-btn">Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>

            </div>

            <!-- <div class="pagination__option">
                            <a href="#" class="active">1</a>
                            <a href="#">2</a>
                            <a href="#">3</a>
                            <a href="#"><span class="arrow_carrot-2right"></span></a>
                        </div> -->


            <div class="pagination__option">
                <?php
                if (isset($datas["make"])) {
                    if ($datas["sayfalamaArray"]["gelenSayfalama"] > 1) {
                        echo "<a href='index.php?sk=1&sayfalama=1&make=" . $datas['make'] . "'><span class='arrow_carrot-2left'> </a>";
                        $sayfalamaIcinSayfaDegeriniBirGeriAl = $datas["sayfalamaArray"]["gelenSayfalama"] - 1;
                        echo "<a href='index.php?sk=1&sayfalama=" . $sayfalamaIcinSayfaDegeriniBirGeriAl . "&make=" . $datas['make'] . "'><span class='arrow_carrot-left'> </a>";
                    }

                    for (
                        $sayfalamaIcinSayfaIndexDegeri = $datas["sayfalamaArray"]["gelenSayfalama"] - $datas["sayfalamaArray"]["sayfalamaIcinSolVeSagButonSayisi"];
                        $sayfalamaIcinSayfaIndexDegeri <= $datas["sayfalamaArray"]["gelenSayfalama"] + $datas["sayfalamaArray"]["sayfalamaIcinSolVeSagButonSayisi"];
                        $sayfalamaIcinSayfaIndexDegeri++
                    ) {
                        if (($sayfalamaIcinSayfaIndexDegeri > 0) and ($sayfalamaIcinSayfaIndexDegeri <= $datas["sayfalamaArray"]["bulunanSayfaSayisi"])) {
                            if ($datas["sayfalamaArray"]["gelenSayfalama"] == $sayfalamaIcinSayfaIndexDegeri) {
                                echo " <a class='active'>" . $sayfalamaIcinSayfaIndexDegeri . "</a>";
                            } else {
                                echo " <a href='index.php?sk=1&sayfalama=" . $sayfalamaIcinSayfaIndexDegeri . "&make=" . $datas["make"] . "'>" . $sayfalamaIcinSayfaIndexDegeri . "</a> ";
                            }
                        }
                    }

                    if ($datas["sayfalamaArray"]["gelenSayfalama"] != $datas["sayfalamaArray"]["bulunanSayfaSayisi"]) {
                        $sayfalamaIcinSayfaDegeriniBirIleriAl = $datas["sayfalamaArray"]["gelenSayfalama"] + 1;
                        echo "<a href='index.php?sk=1&sayfalama=" . $sayfalamaIcinSayfaDegeriniBirIleriAl . "&make=" . $datas["make"] . "'><span class='arrow_carrot-right'></span> </a>";
                        echo "<a href='index.php?sk=1&sayfalama=" . $datas["sayfalamaArray"]["bulunanSayfaSayisi"] . "&make=" . $datas["make"] ."'><span class='arrow_carrot-2right'> </a>";
                    }
                } 
                else {
                    if ($datas["sayfalamaArray"]["gelenSayfalama"] > 1) {
                        echo "<a href='index.php?sk=1&sayfalama=1'><span class='arrow_carrot-2left'> </a>";
                        $sayfalamaIcinSayfaDegeriniBirGeriAl = $datas["sayfalamaArray"]["gelenSayfalama"] - 1;
                        echo "<a href='index.php?sk=1&sayfalama=" . $sayfalamaIcinSayfaDegeriniBirGeriAl . "'><span class='arrow_carrot-left'> </a>";
                    }

                    for (
                        $sayfalamaIcinSayfaIndexDegeri = $datas["sayfalamaArray"]["gelenSayfalama"] - $datas["sayfalamaArray"]["sayfalamaIcinSolVeSagButonSayisi"];
                        $sayfalamaIcinSayfaIndexDegeri <= $datas["sayfalamaArray"]["gelenSayfalama"] + $datas["sayfalamaArray"]["sayfalamaIcinSolVeSagButonSayisi"];
                        $sayfalamaIcinSayfaIndexDegeri++
                    ) {
                        if (($sayfalamaIcinSayfaIndexDegeri > 0) and ($sayfalamaIcinSayfaIndexDegeri <= $datas["sayfalamaArray"]["bulunanSayfaSayisi"])) {
                            if ($datas["sayfalamaArray"]["gelenSayfalama"] == $sayfalamaIcinSayfaIndexDegeri) {
                                echo " <a class='active'>" . $sayfalamaIcinSayfaIndexDegeri . "</a>";
                            } else {
                                echo " <a href='index.php?sk=1&sayfalama=" . $sayfalamaIcinSayfaIndexDegeri . "'>" . $sayfalamaIcinSayfaIndexDegeri . "</a> ";
                            }
                        }
                    }

                    if ($datas["sayfalamaArray"]["gelenSayfalama"] != $datas["sayfalamaArray"]["bulunanSayfaSayisi"]) {
                        $sayfalamaIcinSayfaDegeriniBirIleriAl = $datas["sayfalamaArray"]["gelenSayfalama"] + 1;
                        echo "<a href='index.php?sk=1&sayfalama=" . $sayfalamaIcinSayfaDegeriniBirIleriAl . "'><span class='arrow_carrot-right'></span> </a>";
                        echo "<a href='index.php?sk=1&sayfalama=" . $datas["sayfalamaArray"]["bulunanSayfaSayisi"] . "'><span class='arrow_carrot-2right'> </a>";
                    }
                }
                ?>

            </div>

        </div>
    </div>
    </div>
</section>
<!-- Car Section End -->