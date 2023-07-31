<?php

    include("../Curl/Curl.php");
    
    class MotorcycleModel extends Curl{

        public $db = "";

        public function __construct(){
            try{
                $this->db = new PDO("mysql:host=localhost;dbname=motorcycle;charset=UTF8", "root", "");
            }
            catch(PDOException $error){
                die();
            }
        }

        public function getData($table="", $make=""){

            $sorgu = $this->db->prepare("SELECT * FROM $table WHERE make='$make'");
            $sorgu->execute();
            $dataSayisi = $sorgu->rowCount();

            if($dataSayisi <= 0){

                $curlDatas = $this->getCurlData($make);

                foreach($curlDatas as $curlData){
                    $insert = $this->db->prepare("INSERT INTO $table (make, model, year, type, front_suspension, rear_suspension, front_brakes, rear_brakes, frame, dry_weight, seat_weight, total_height, total_length, total_width, ground_clearance, wheelbase, fuel_system, fuel_control, fuel_capacity, gearbox, transmission, clutch, displacement, engine, power, torque, compression, bore_stroke, valves_per_cylinder, ignition, lubrication, cooling, starter, front_wheel_travel, rear_wheel_travel, front_tire, rear_tire) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
                    $insert->execute([
                        isset($curlData["make"]) ? $curlData["make"] : "",
                        isset($curlData["model"]) ? $curlData["model"] : "",
                        isset($curlData["year"]) ? $curlData["year"] : "",
                        isset($curlData["type"]) ? $curlData["type"] : "",
                        isset($curlData["front_suspension"]) ? $curlData["front_suspension"] : "",
                        isset($curlData["rear_suspension"]) ? $curlData["rear_suspension"] : "",
                        isset($curlData["front_brakes"]) ? $curlData["front_brakes"] : "",
                        isset($curlData["rear_brakes"]) ? $curlData["rear_brakes"] : "",
                        isset($curlData["frame"]) ? $curlData["frame"] : "",
                        isset($curlData["dry_weight"]) ? $curlData["dry_weight"] : "",
                        isset($curlData["seat_weight"]) ? $curlData["seat_weight"] : "",
                        isset($curlData["total_height"]) ? $curlData["total_height"] : "",
                        isset($curlData["total_length"]) ? $curlData["total_length"] : "",
                        isset($curlData["total_width"]) ? $curlData["total_width"] : "",
                        isset($curlData["ground_clearance"]) ? $curlData["ground_clearance"] : "",
                        isset($curlData["wheelbase"]) ? $curlData["wheelbase"] : "",
                        isset($curlData["fuel_system"]) ? $curlData["fuel_system"] : "",
                        isset($curlData["fuel_control"]) ? $curlData["fuel_control"] : "",
                        isset($curlData["fuel_capacity"]) ? $curlData["fuel_capacity"] : "",
                        isset($curlData["gearbox"]) ? $curlData["gearbox"] : "",
                        isset($curlData["transmission"]) ? $curlData["transmission"] : "",
                        isset($curlData["clutch"]) ? $curlData["clutch"] : "",
                        isset($curlData["displacement"]) ? $curlData["displacement"] : "",
                        isset($curlData["engine"]) ? $curlData["engine"] : "",
                        isset($curlData["power"]) ? $curlData["power"] : "",
                        isset($curlData["torque"]) ? $curlData["torque"] : "",
                        isset($curlData["compression"]) ? $curlData["compression"] : "",
                        isset($curlData["bore_stroke"]) ? $curlData["bore_stroke"] : "",
                        isset($curlData["valves_per_cylinder"]) ? $curlData["valves_per_cylinder"] : "",
                        isset($curlData["ignition"]) ? $curlData["ignition"] : "",
                        isset($curlData["lubrication"]) ? $curlData["lubrication"] : "",
                        isset($curlData["cooling"]) ? $curlData["cooling"] : "",
                        isset($curlData["starter"]) ? $curlData["starter"] : "",
                        isset($curlData["front_wheel_travel"]) ? $curlData["front_wheel_travel"] : "",
                        isset($curlData["rear_wheel_travel"]) ? $curlData["rear_wheel_travel"] : "",
                        isset($curlData["front_tire"]) ? $curlData["front_tire"] : "",
                        isset($curlData["rear_tire"]) ? $curlData["rear_tire"] : ""
                    ]);

                    $datas = $sorgu->fetchAll(PDO::FETCH_ASSOC);

                }
              
            }

            $datas = $sorgu->fetchAll(PDO::FETCH_ASSOC);

            return $datas;

        }

        public function getAllData($table=""){

            $sorgu = $this->db->prepare("SELECT * FROM $table");
            $sorgu->execute();
            $dataSayisi = $sorgu->rowCount();
            $data = $sorgu->fetchAll(PDO::FETCH_ASSOC);

            if($dataSayisi > 0){
                return $data;
            }
            else{
                die();
            }

        }
        
        public function getYears($table=""){

            $sorgu = $this->db->prepare("SELECT DISTINCT year FROM $table LIMIT 5");
            $sorgu->execute();
            $dataSayisi = $sorgu->rowCount();
            $data = $sorgu->fetchAll(PDO::FETCH_ASSOC);

            if($dataSayisi > 0){
                return $data;
            }
            else{
                die();
            }

        }

        public function getMakes($table=""){

            $sorgu = $this->db->prepare("SELECT DISTINCT make FROM $table LIMIT 5");
            $sorgu->execute();
            $dataSayisi = $sorgu->rowCount();
            $data = $sorgu->fetchAll(PDO::FETCH_ASSOC);

            if($dataSayisi > 0){
                return $data;
            }
            else{
                die();
            }

        }

        public function getModels($table=""){

            $sorgu = $this->db->prepare("SELECT DISTINCT model FROM $table LIMIT 5");
            $sorgu->execute();
            $dataSayisi = $sorgu->rowCount();
            $data = $sorgu->fetchAll(PDO::FETCH_ASSOC);

            if($dataSayisi > 0){
                return $data;
            }
            else{
                die();
            }

        }

    }

?>