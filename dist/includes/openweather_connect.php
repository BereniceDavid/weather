<?php

    if (!empty($_SESSION['cities']))
    {
        // Set up
        $url = 'http://api.openweathermap.org/data/2.5/forecast?q='.$_SESSION['cities'][0].'&units=metric&APPID=9e8150c9d6fbf87d678d2cf7f7a2c00a';
        $path = './cache/'.md5($url.date('Y-m-d H'));

        // From cache
        if(file_exists($path))
        $forecast = file_get_contents($path);

        // From API
        else
        {
            $forecast = file_get_contents($url);

            // Save in cache
            file_put_contents($path, $forecast);
        }


        // Json decode
        $forecast = json_decode($forecast);
    }