<?php

    if(!empty($_GET))
        // Retrieve data
        array_push( $_SESSION['cities'], trim(strtolower($_GET['city'])) );