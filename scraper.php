<?php

    $city = $_GET["city"];

    // $city = str_replace(" ", "-", $city);

    // $city = "londonsss";

    $apiKey = "ca4b877221e05b67a0953eb19c1660da";

    $contents = file_get_contents("http://api.openweathermap.org/data/2.5/forecast?q=".$city."&lang=zh_tw&appid=".$apiKey);

    $contents = json_decode($contents, true);

    $cityName = $contents["city"]["name"];

    $description = $contents["list"][7]["weather"][0]["description"];

    $temperature = $contents["list"][7]["main"]["temp"] - 273.15;

    $temperature = number_format($temperature, 1, '.', '');

    $result = "城市: ".$cityName.", 天氣狀況: ".$description.", 溫度: ".$temperature. "°C";

    // print_r($description);
    if($cityName != ""){
        echo $result;
    }
    

    // echo $contents;

    // preg_match("/\"phrase\">(.*?)<\/span>/i", $contents, $matches);

    // echo $matches[1];

    // Light rain (total 3mm), mostly falling on Sun night. Very mild (max 11&deg;C on Wed afternoon, min 5&deg;C on Tue night). Winds decreasing (strong winds from the W on Sun night, light winds from the WSW by Tue morning).


    //http://api.openweathermap.org/data/2.5/forecast?id=2643743&lang=zh_tw&appid=ca4b877221e05b67a0953eb19c1660da


    //"http://api.openweathermap.org/data/2.5/forecast?q=".$city."&lang=zh_tw&appid=".$apiKey
?>