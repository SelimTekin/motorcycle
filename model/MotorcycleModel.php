<?php

    include("../Curl/Curl.php");
    
    class MotorcycleModel extends Curl{

        public $db = "";

        public $gelenSayfalama = "";

        public $sayfalamaIcinSolVeSagButonSayisi   = 2; // 3. sayfadaysak yanlarında 1 2 ve 4 5 yazacak
        public $sayfaBasinaGosterilecekKayitSayisi = 6;
    
        public $sayfalamayaBaslanacakKayitSayisi   = 0;

        public $bulunanSayfaSayisi                 = 0;

        public function __construct(){
            try{
                $this->db = new PDO("mysql:host=localhost;dbname=motorcycle;charset=UTF8", "root", "");
            }
            catch(PDOException $error){
                die();
            }
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

        public function getOneData($table="", $id=-1){

            if($id != -1){
                $sorgu = $this->db->prepare("SELECT * FROM $table WHERE id=$id");
                $sorgu->execute();
                $dataSayisi = $sorgu->rowCount();
                $data = $sorgu->fetch(PDO::FETCH_ASSOC);

                if($dataSayisi > 0){
                    return $data;
                }
                else{
                    die("No information");
                }
            }
            else{
                die("No information");
            }

        }

        public function getData($table="", $make=""){

            $this->gelenSayfalama = isset($_REQUEST["sayfalama"]) ? guvenlik($_REQUEST["sayfalama"]) : 1;
            $this->sayfalamayaBaslanacakKayitSayisi   = ($this->gelenSayfalama * $this->sayfaBasinaGosterilecekKayitSayisi) - $this->sayfaBasinaGosterilecekKayitSayisi; // (1 * 5) - 5 -> yani Aşağıdaki sorguda LIMIT bu değişkenin değerinden başlayıp 5 tane kayıt getirecek
            $toplamKayitSayisiSorgu             = $this->db->prepare("SELECT * FROM generalfeatures WHERE make='$make'");
            $toplamKayitSayisiSorgu->execute();
            $toplamKayitSayisi = $toplamKayitSayisiSorgu->rowCount();
            $bulunanSayfaSayisi                 = ceil($toplamKayitSayisi / $this->sayfaBasinaGosterilecekKayitSayisi); // sonuç virgüllü çıkarsa yukarı yuvarlar

            $sayfalamaArray = array(
                "gelenSayfalama"                     => $this->gelenSayfalama,
                "sayfalamaIcinSolVeSagButonSayisi"   => $this->sayfalamaIcinSolVeSagButonSayisi,
                "sayfaBasinaGosterilecekKayitSayisi" => $this->sayfaBasinaGosterilecekKayitSayisi,
                "toplamKayitSayisiSorgu"             => $toplamKayitSayisiSorgu,
                "sayfalamayaBaslanacakKayitSayisi"   => $this->sayfalamayaBaslanacakKayitSayisi,
                "sayfaBasinaGosterilecekKayitSayisi" => $this->sayfaBasinaGosterilecekKayitSayisi,
                "bulunanSayfaSayisi"                 => $bulunanSayfaSayisi
            );

            $sql = "SELECT * FROM $table WHERE make='$make' LIMIT " .  $sayfalamaArray['sayfalamayaBaslanacakKayitSayisi'] . "," .  $sayfalamaArray['sayfaBasinaGosterilecekKayitSayisi'];

            // $sorgu = $this->db->prepare("SELECT * FROM $table WHERE make='$make'");
            $sorgu = $this->db->prepare($sql);
            $sorgu->execute();
            $dataSayisi = $sorgu->rowCount();

            if($dataSayisi <= 0){

                $curlDatas = $this->getCurlData($make);

                foreach($curlDatas as $curlData){
                    $insert = $this->db->prepare("INSERT INTO $table (make, model, year, type, front_suspension, rear_suspension, front_brakes, rear_brakes, frame, dry_weight, seat_weight, total_height, total_length, total_width, ground_clearance, wheelbase, fuel_system, fuel_control, fuel_capacity, gearbox, transmission, clutch, displacement, engine, power, torque, compression, bore_stroke, valves_per_cylinder, ignition, lubrication, cooling, starter, front_wheel_travel, rear_wheel_travel, front_tire, rear_tire) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
                    $insert->execute([
                        isset($curlData["make"]) ? guvenlik($curlData["make"]) : "",
                        isset($curlData["model"]) ? guvenlik($curlData["model"]) : "",
                        isset($curlData["year"]) ? guvenlik($curlData["year"]) : "",
                        isset($curlData["type"]) ? guvenlik($curlData["type"]) : "",
                        isset($curlData["front_suspension"]) ? guvenlik($curlData["front_suspension"]) : "",
                        isset($curlData["rear_suspension"]) ? guvenlik($curlData["rear_suspension"]) : "",
                        isset($curlData["front_brakes"]) ? guvenlik($curlData["front_brakes"]) : "",
                        isset($curlData["rear_brakes"]) ? guvenlik($curlData["rear_brakes"]) : "",
                        isset($curlData["frame"]) ? guvenlik($curlData["frame"]) : "",
                        isset($curlData["dry_weight"]) ? guvenlik($curlData["dry_weight"]) : "",
                        isset($curlData["seat_weight"]) ? guvenlik($curlData["seat_weight"]) : "",
                        isset($curlData["total_height"]) ? guvenlik($curlData["total_height"]) : "",
                        isset($curlData["total_length"]) ? guvenlik($curlData["total_length"]) : "",
                        isset($curlData["total_width"]) ? guvenlik($curlData["total_width"]) : "",
                        isset($curlData["ground_clearance"]) ? guvenlik($curlData["ground_clearance"]) : "",
                        isset($curlData["wheelbase"]) ? guvenlik($curlData["wheelbase"]) : "",
                        isset($curlData["fuel_system"]) ? guvenlik($curlData["fuel_system"]) : "",
                        isset($curlData["fuel_control"]) ? guvenlik($curlData["fuel_control"]) : "",
                        isset($curlData["fuel_capacity"]) ? guvenlik($curlData["fuel_capacity"]) : "",
                        isset($curlData["gearbox"]) ? guvenlik($curlData["gearbox"]) : "",
                        isset($curlData["transmission"]) ? guvenlik($curlData["transmission"]) : "",
                        isset($curlData["clutch"]) ? guvenlik($curlData["clutch"]) : "",
                        isset($curlData["displacement"]) ? guvenlik($curlData["displacement"]) : "",
                        isset($curlData["engine"]) ? guvenlik($curlData["engine"]) : "",
                        isset($curlData["power"]) ? guvenlik($curlData["power"]) : "",
                        isset($curlData["torque"]) ? guvenlik($curlData["torque"]) : "",
                        isset($curlData["compression"]) ? guvenlik($curlData["compression"]) : "",
                        isset($curlData["bore_stroke"]) ? guvenlik($curlData["bore_stroke"]) : "",
                        isset($curlData["valves_per_cylinder"]) ? guvenlik($curlData["valves_per_cylinder"]) : "",
                        isset($curlData["ignition"]) ? guvenlik($curlData["ignition"]) : "",
                        isset($curlData["lubrication"]) ? guvenlik($curlData["lubrication"]) : "",
                        isset($curlData["cooling"]) ? guvenlik($curlData["cooling"]) : "",
                        isset($curlData["starter"]) ? guvenlik($curlData["starter"]) : "",
                        isset($curlData["front_wheel_travel"]) ? guvenlik($curlData["front_wheel_travel"]) : "",
                        isset($curlData["rear_wheel_travel"]) ? guvenlik($curlData["rear_wheel_travel"]) : "",
                        isset($curlData["front_tire"]) ? guvenlik($curlData["front_tire"]) : "",
                        isset($curlData["rear_tire"]) ? guvenlik($curlData["rear_tire"]) : ""
                    ]);

                    $datas = $sorgu->fetchAll(PDO::FETCH_ASSOC);

                }
              
            }

            $datas = $sorgu->fetchAll(PDO::FETCH_ASSOC);
            $datas["sayfalamaArray"] = $sayfalamaArray;
    
            return $datas;

        }

        public function getRandomData($table=""){
            $this->sayfaBasinaGosterilecekKayitSayisi = isset($_POST["showOnPage"]) ? $_POST["showOnPage"] : 6;
            // $sorgu = $this->db->prepare("SELECT * FROM $table ORDER BY RAND() LIMIT 9");
            $this->gelenSayfalama = isset($_REQUEST["sayfalama"]) ? guvenlik($_REQUEST["sayfalama"]) : 1;
            $this->sayfalamayaBaslanacakKayitSayisi   = ($this->gelenSayfalama * $this->sayfaBasinaGosterilecekKayitSayisi) - $this->sayfaBasinaGosterilecekKayitSayisi;
            $toplamKayitSayisiSorgu             = $this->db->prepare("SELECT * FROM $table ORDER BY RAND()");
            $toplamKayitSayisiSorgu->execute();
            $toplamKayitSayisi = $toplamKayitSayisiSorgu->rowCount();
            $bulunanSayfaSayisi                 = ceil($toplamKayitSayisi / $this->sayfaBasinaGosterilecekKayitSayisi);

            $sayfalamaArray = array(
                "gelenSayfalama"                     => $this->gelenSayfalama,
                "sayfalamaIcinSolVeSagButonSayisi"   => $this->sayfalamaIcinSolVeSagButonSayisi,
                "sayfaBasinaGosterilecekKayitSayisi" => $this->sayfaBasinaGosterilecekKayitSayisi,
                "toplamKayitSayisiSorgu"             => $toplamKayitSayisiSorgu,
                "sayfalamayaBaslanacakKayitSayisi"   => $this->sayfalamayaBaslanacakKayitSayisi,
                "sayfaBasinaGosterilecekKayitSayisi" => $this->sayfaBasinaGosterilecekKayitSayisi,
                "bulunanSayfaSayisi"                 => $bulunanSayfaSayisi
            );

            $sql = "SELECT * FROM $table ORDER BY RAND() LIMIT " .  $sayfalamaArray['sayfalamayaBaslanacakKayitSayisi'] . "," .  $sayfalamaArray['sayfaBasinaGosterilecekKayitSayisi'];

            $sorgu = $this->db->prepare($sql);
            $sorgu->execute();
            $dataSayisi = $sorgu->rowCount();
            $data = $sorgu->fetchAll(PDO::FETCH_ASSOC);

            $data["sayfalamaArray"] = $sayfalamaArray;

            if($dataSayisi > 0){
                return $data;
            }
            else{
                die();
            }

        }

        public function getFilteredData($table="", $where=""){

            $this->gelenSayfalama = isset($_REQUEST["sayfalama"]) ? guvenlik($_REQUEST["sayfalama"]) : 1;
            $this->sayfalamayaBaslanacakKayitSayisi   = ($this->gelenSayfalama * $this->sayfaBasinaGosterilecekKayitSayisi) - $this->sayfaBasinaGosterilecekKayitSayisi; // (1 * 5) - 5 -> yani Aşağıdaki sorguda LIMIT bu değişkenin değerinden başlayıp 5 tane kayıt getirecek
            $toplamKayitSayisiSorgu             = $this->db->prepare("SELECT * FROM generalfeatures WHERE $where");
            $toplamKayitSayisiSorgu->execute();
            $toplamKayitSayisi = $toplamKayitSayisiSorgu->rowCount();
            $bulunanSayfaSayisi                 = ceil($toplamKayitSayisi / $this->sayfaBasinaGosterilecekKayitSayisi); // sonuç virgüllü çıkarsa yukarı yuvarlar

            $sayfalamaArray = array(
                "gelenSayfalama"                     => $this->gelenSayfalama,
                "sayfalamaIcinSolVeSagButonSayisi"   => $this->sayfalamaIcinSolVeSagButonSayisi,
                "sayfaBasinaGosterilecekKayitSayisi" => $this->sayfaBasinaGosterilecekKayitSayisi,
                "toplamKayitSayisiSorgu"             => $toplamKayitSayisiSorgu,
                "sayfalamayaBaslanacakKayitSayisi"   => $this->sayfalamayaBaslanacakKayitSayisi,
                "sayfaBasinaGosterilecekKayitSayisi" => $this->sayfaBasinaGosterilecekKayitSayisi,
                "bulunanSayfaSayisi"                 => $bulunanSayfaSayisi
            );

            $sql = "SELECT * FROM $table WHERE $where ORDER BY RAND() LIMIT " .  $sayfalamaArray['sayfalamayaBaslanacakKayitSayisi'] . "," .  $sayfalamaArray['sayfaBasinaGosterilecekKayitSayisi'];
            $sorgu = $this->db->prepare($sql);
            $sorgu->execute();
            $dataSayisi = $sorgu->rowCount();
            $datas = $sorgu->fetchAll(PDO::FETCH_ASSOC);
            $datas["sayfalamaArray"] = $sayfalamaArray;

            $datas["where"] = $where;

            return $datas;
        }

        public function getMakes(){

            $sorgu = $this->db->prepare("SELECT DISTINCT make FROM generalfeatures WHERE NOT make='' ");
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

        public function getModels(){

            $sorgu = $this->db->prepare("SELECT DISTINCT model FROM generalfeatures WHERE NOT model='' ");
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
        
        public function getYears(){

            $sorgu = $this->db->prepare("SELECT DISTINCT year FROM generalfeatures WHERE NOT year='' ");
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

        public function getTypes(){

            $sorgu = $this->db->prepare("SELECT DISTINCT type FROM generalfeatures WHERE NOT type='' ");
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

        public function getTransmissions(){

            $sorgu = $this->db->prepare("SELECT DISTINCT transmission FROM generalfeatures WHERE NOT transmission='' ");
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

        public function getCoolings(){

            $sorgu = $this->db->prepare("SELECT DISTINCT cooling FROM generalfeatures WHERE NOT cooling='' ");
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

        public function getStarters(){

            $sorgu = $this->db->prepare("SELECT DISTINCT starter FROM generalfeatures WHERE NOT starter='' ");
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

        public function getBrakeFeatures($id = -1){
            $sorgu = $this->db->prepare("SELECT DISTINCT starter FROM generalfeatures WHERE NOT starter='' ");
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