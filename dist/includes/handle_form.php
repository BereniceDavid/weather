<?php

    if(!empty($_POST))
    {   
        // Retrieve data
        $town = trim($_POST['town']);
        
        // Detect if empty
        if(!empty($town))
            header('location : weather.php'); 
    }
    // No data sent
    else
    {
        // Default values
        $_POST['town']      = '';
    }