<?php

    include("../helpers/tools_helper.php");

    class IndexController{

        public function __construct()
        {
            include("../model/MotorcycleModel.php");
        }

        public function getMakes(){
            $motorcycle = new MotorcycleModel;
            $makes = $motorcycle->getMakes("generalfeatures");

            return $makes;
        }

        public function getModels(){
            $motorcycle = new MotorcycleModel;
            $models = $motorcycle->getModels("generalfeatures");

            return $models;
        }

        public function getYears(){
            $motorcycle = new MotorcycleModel;
            $years = $motorcycle->getYears("generalfeatures");

            return $years;
        }

    }

?>