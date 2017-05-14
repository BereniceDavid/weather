<?php

    if(!empty($_GET))
    {
        // Add the city in Session array
        if (isset($_GET['city']))
        {
            if (!(in_array(trim(strtolower($_GET['city'])), $_SESSION['cities'])))
                // Retrieve data
                array_push( $_SESSION['cities'], trim(strtolower($_GET['city'])) );
        }
        
        // On click cross -> delete the weather card
        if (isset($_GET['delete_id']))
        {
            $key = array_search( $_GET['delete_id'], $_SESSION['cities']);
            unset($_SESSION['cities'][$key]);            
        }
    }