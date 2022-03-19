<?php

    function getTimeSholat($city) {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://api.pray.zone/v2/times/day.json?city=$city&date=".date("Y-m-d"));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($ch);

        $response = json_decode($output, true);

        if($response['code'] == 200){
            $subuh = $response['results']['datetime'][0]['times']['Fajr'];
            $dhuhr = $response['results']['datetime'][0]['times']['Dhuhr'];
            $terbit = $response['results']['datetime'][0]['times']['Sunrise'];
            $asr = $response['results']['datetime'][0]['times']['Asr'];
            $maghrib = $response['results']['datetime'][0]['times']['Maghrib'];
            $isha = $response['results']['datetime'][0]['times']['Isha'];

            $listTime = [
                'subuh' => $subuh,
                'dhuhr' => $dhuhr,
                'terbit' => $terbit,
                'asr' => $asr,
                'maghrib' => $maghrib,
                'isha' => $isha,
            ];
        } else {
            $listTime = [];
        }

        return $listTime;
    }

?>
