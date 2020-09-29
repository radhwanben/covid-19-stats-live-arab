<?php

require 'lib/vendor/autoload.php';

use Yandex\Translate\Translator;
use Yandex\Translate\Exception;
use Carbon\Carbon;


class cases {

    /**
     * this function will conect with the api and store all record in $array
     * @param url 
     */
    public function conectapi($url){
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, True);

        $json = curl_exec($ch);

        curl_close($ch);

        $array = json_decode($json);
        return $array;
    }

}



//$arabicnamecountry= array("Algeria","Egypt","Sudan","Iraq","Morocco","Saudi Arabia","Yemen","Syrian Arab Republic","Somalia","Tunisia","Jordan","UAE","Lebanon","Libyan Arab Jamahiriya","Palestinian Territory, Occupied","Oman","Kuwait","Mauritania","Qatar","Bahrain","Djibouti");


$translator = new Translator("trnsl.1.1.20200408T075418Z.e9f7d4ebf64b5f0b.42f76307bd873855ef493cc9d8a2e767dfcc17f1");

//$allcases=$json->conectapi("https://corona.lmao.ninja/all");

