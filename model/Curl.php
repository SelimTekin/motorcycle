<?php

class Curl{

    public function getCurlData($make=""){    
        
            $ch = curl_init();
        
            $options = array(
                CURLOPT_URL => "https://api.api-ninjas.com/v1/motorcycles?make=$make",
                CURLOPT_RETURNTRANSFER => 1,
                CURLOPT_FOLLOWLOCATION => 1,
                CURLOPT_HTTPHEADER => [
                    "X-Api-Key: xbpzoTnjVfFAE9GXU999ww==p8oh23yBZBxcmFlv"
                ],
                // CURLOPT_SSL_VERIFYHOST => 1,
                CURLOPT_SSLVERSION => 2,
                CURLOPT_SSL_VERIFYPEER => 0,
                CURLOPT_USERAGENT => "Mozilla/5.0 (Windows NT 5.1; rv:7.0.1) Gecko/20100101 Firefox/7.0.1", // hangi tarayıcıdan geldiğimizi gösterir
                CURLOPT_REFERER => "https://www.daklnö.com", // hangi adresten geldiğimizi gösterir
                CURLOPT_TIMEOUT => 90
            );
        
            curl_setopt_array($ch, $options);
            $result = curl_exec($ch);
        
            $error = curl_error($ch);
            echo $error;
        
            curl_close($ch);
        
            $decodeDatas = json_decode($result, true); // true ile dizi olarak kullanabiliyoruz. Yoksa std ObjectClass olur.
            $datas = $decodeDatas;
        
            // echo "Data count: " . count(json_decode($result));
            // echo "<pre>";
            // print_r(json_decode($result));
            // echo "</pre>";

            return $datas;
        
        }

}

$curl = new Curl;

?>