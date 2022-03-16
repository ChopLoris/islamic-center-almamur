<?php

    function getTimeSholat($city) {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://api.pray.zone/v2/times/day.json?city=$city&date=2022-03-15");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($ch);

        $response = json_decode($output, true);

        if($response['code'] == 200){
            $subuh = date("g:i A", strtotime($response['results']['datetime'][0]['times']['Fajr']));
            $dhuhr = date("g:i A", strtotime($response['results']['datetime'][0]['times']['Dhuhr']));
            $asr = date("g:i A", strtotime($response['results']['datetime'][0]['times']['Asr']));
            $maghrib = date("g:i A", strtotime($response['results']['datetime'][0]['times']['Maghrib']));
            $isha = date("g:i A", strtotime($response['results']['datetime'][0]['times']['Isha']));

            $listTime = [
                'subuh' => $subuh,
                'dhuhr' => $dhuhr,
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
