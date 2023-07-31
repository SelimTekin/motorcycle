<?php

include("../helpers/tools_helper.php");

class SearchController{

    public function processData(){

        include("../model/MotorcycleModel.php");

        $make = isset($_GET["make"]) ? guvenlik($_GET["make"]) : "";

        $motorcycleModel = new MotorcycleModel();
        $datas = $motorcycleModel->getData("generalfeatures", $make);
        
        include("../view/motorcycle.php");

    }

}

$search = new SearchController();

$search->processData();

?>