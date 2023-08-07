<?php

class SearchController extends MotorcycleModel{

    public function processData(){

        if(!empty($_REQUEST) && isset($_REQUEST["make"])){
            $make = guvenlik($_REQUEST["make"]);
            $datas = $this->getData("generalfeatures", $make);
            $datas["make"] = $make;
        }
        else{
            $datas = $this->getRandomData("generalfeatures");
        }

        return $datas;

    }

    public function processFilteredData(){
        
        if(!empty($_REQUEST) && isset($_REQUEST["features"])){

            $features = $_REQUEST["features"];

            $where = "";
            foreach($features as $key=>$value){
                if($value != "")
                    $where .= "$key='$value' AND ";
            }
            $where = rtrim($where, " AND ");

            $datas = $this->getFilteredData("generalfeatures", $where);

        }
        else if(!empty($_GET)){

            $features = $_GET;

            $where = "";
            foreach($features as $key=>$value){
                if($value != "" && $key != "sk" && $key != "sayfalama")
                    $where .= "$key='$value' AND ";
            }
            $where = rtrim($where, " AND ");
            
            $datas = $this->getFilteredData("generalfeatures", $where);
        }
        else{
            $datas = $this->getRandomData("generalfeatures");
        }

        return $datas;

    }

    public function processMotorDetail(){

        if(isset($_GET["id"])){
            return $this->getOneData("generalfeatures", guvenlik($_GET["id"]));
        }
        else{
            return header("Location: index.php");
        }
    }

}

?>