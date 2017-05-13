<?php

    $cities = array();

    if(!empty($_GET))
        // Retrieve data
        array_push( $cities, trim(strtolower($_GET['city'])) );
    
    else 
        // No data send
        $_GET['city']      = '';