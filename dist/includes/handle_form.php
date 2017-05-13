<?php

    if(!empty($_GET))
    {
        if (!(in_array(trim(strtolower($_GET['city'])), $_SESSION['cities'])))
            // Retrieve data
            array_push( $_SESSION['cities'], trim(strtolower($_GET['city'])) );
    }
        
        
        