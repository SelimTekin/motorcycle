<?php

class SearchController{

    public function processData(){
        include("../helpers/tools_helper.php");

        include("../model/MotorcycleModel.php");

        $make = isset($_GET["make"]) ? guvenlik($_GET["make"]) : "";

        $datas = $motorcycleModel->getData("generalfeatures", $make);
        
        include("../view/motorcycle.php");

    }

}

$search = new SearchController();

$search->processData();

?>