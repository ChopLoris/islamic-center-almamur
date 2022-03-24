<?php

    function getTimeSholat($city) {
        $ch = curl_init();

        //https://api.aladhan.com/v1/calendar?latitude=-6.2434347&longitude=106.9399808&method=2&month=".date("m")."&year=date("Y")

        curl_setopt($ch, CURLOPT_URL, "https://api.aladhan.com/v1/calendar?latitude=-6.2434347&longitude=106.9399808&method=2&month=".date('m')."&year=".date('Y'));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($ch);

        $response = json_decode($output, true);

        if($response['code'] == 200){
            $subuh = $response['data'][0]['timings']['Fajr'];
            $dhuhr = $response['data'][0]['timings']['Dhuhr'];
            $terbit = $response['data'][0]['timings']['Sunrise'];
            $asr = $response['data'][0]['timings']['Asr'];
            $maghrib = $response['data'][0]['timings']['Maghrib'];
            $isha = $response['data'][0]['timings']['Isha'];

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
