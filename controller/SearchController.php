<?php

include("../helpers/tools_helper.php");

class SearchController{


    public function processData(){

        include("../model/MotorcycleModel.php");

        $motorcycleModel = new MotorcycleModel();


        if(!empty($_GET)){
            $make = guvenlik($_GET["make"]);

            $datas = $motorcycleModel->getData("generalfeatures", $make);
            
            include("../view/motor.php");
        }
        else{
            $datas = $motorcycleModel->getRandomData("generalfeatures");

            include("../view/motor.php");

        }


    }

}

$search = new SearchController();

$search->processData();

?>