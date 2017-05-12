<?php

    if(!empty($_GET))
    {   
        // Retrieve data
        $city = trim($_GET['city']);
        
        // Detect if empty
        if(!empty($city))
            header('location : weather.php'); 
    }
    // No data sent
    else
    {
        // Default values
        $_GET['city']      = '';
    }