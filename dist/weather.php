<?php
    session_start();
    include "includes/handle_form.php";
    include "includes/openweather_connect.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    <title>Weather</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/app.min.css" rel="stylesheet">
</head>

<body>
   
    <div class="container-fluid weather">
        <div class="row">
           
            <?php if (!empty($_SESSION['cities'])): ?>
                <? foreach ($_SESSION['cities'] as $_city):
                    $data = get_data($_city);
                ?>
                    <div class="col-md-4 col-md-offset-1 col-sm-4 col-sm-offset-1 col-xs-8 col-xs-offset-2 weather-card show <?= $data->list[0]->weather[0]->main ?>">
                        <div class="main-infos">
                            <div class="row">
                                <button type="button" class="pull-right close delete-card" aria-label="Close"><span>&times;</span></button>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                    <div class="town bold"><?= ucwords($data->city->name) ?></div>
                                    <div class="weather-state light"><?= $data->list[0]->weather[0]->description ?></div>
                                    <div class="temperature light"><?= intval($data->list[0]->main->temp) ?>°</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="temperature-date">
                                    <span class="text-left col-md-6 col-sm-6 col-xs-6">
                                        <span class="date"><?= date('l', $data->list[0]->dt) ?></span>
                                        <span class="light grey">Today</span>
                                    </span>
                                    <span class="text-right col-md-6 col-sm-6 col-xs-6">
                                        <span><?= intval($data->list[0]->main->temp_max) ?></span>
                                        <span class="light grey"><?= intval($data->list[0]->main->temp_min) ?></span>
                                    </span>
                                </div>
                            </div>
<!--
                        <div class="row">
                            <div class="pull-right col-md-12 more-infos btn btn-info">+ Plus d'informations</div>
                        </div>
-->
                        </div>
                        <div class="today-weather">
                            <div class="row text-center">
                                <span class="col-md-2 col-sm-2 col-xs-2">Now</span>
                                <span class="col-md-2 col-sm-2 col-xs-2"><?= date('H', $data->list[1]->dt) ?>h</span>
                                <span class="col-md-2 col-sm-2 col-xs-2"><?= date('H', $data->list[2]->dt) ?>h</span>
                                <span class="col-md-2 col-sm-2 col-xs-2"><?= date('H', $data->list[3]->dt) ?>h</span>
                                <span class="col-md-2 col-sm-2 col-xs-2"><?= date('H', $data->list[4]->dt) ?>h</span>
                                <span class="col-md-2 col-sm-2 col-xs-2"><?= date('H', $data->list[5]->dt) ?>h</span>
                            </div>
                            <div class="row text-center icons">
                                <span class="col-md-2 col-sm-2 col-xs-2">
                                    <img src="http://openweathermap.org/img/w/<?= $data->list[0]->weather[0]->icon ?>.png" alt="<?= $data->list[0]->weather[0]->description ?>">
                                </span>
                                <span class="col-md-2 col-sm-2 col-xs-2">
                                    <img src="http://openweathermap.org/img/w/<?= $data->list[1]->weather[0]->icon ?>.png" alt="<?= $data->list[1]->weather[0]->description ?>">
                                </span>
                                <span class="col-md-2 col-sm-2 col-xs-2">
                                    <img src="http://openweathermap.org/img/w/<?= $data->list[2]->weather[0]->icon ?>.png" alt="<?= $data->list[2]->weather[0]->description ?>">
                                </span>
                                <span class="col-md-2 col-sm-2 col-xs-2">
                                    <img src="http://openweathermap.org/img/w/<?= $data->list[3]->weather[0]->icon ?>.png" alt="<?= $data->list[3]->weather[0]->description ?>">
                                </span>
                                <span class="col-md-2 col-sm-2 col-xs-2">
                                    <img src="http://openweathermap.org/img/w/<?= $data->list[4]->weather[0]->icon ?>.png" alt="<?= $data->list[4]->weather[0]->description ?>">
                                </span>
                                <span class="col-md-2 col-sm-2 col-xs-2">
                                    <img src="http://openweathermap.org/img/w/<?= $data->list[5]->weather[0]->icon ?>.png" alt="<?= $data->list[5]->weather[0]->description ?>">
                                </span>
                            </div>
                            <div class="row text-center">
                                <span class="col-md-2 col-sm-2 col-xs-2"><?= intval($data->list[0]->main->temp) ?>°</span>
                                <span class="col-md-2 col-sm-2 col-xs-2"><?= intval($data->list[1]->main->temp) ?>°</span>
                                <span class="col-md-2 col-sm-2 col-xs-2"><?= intval($data->list[2]->main->temp) ?>°</span>
                                <span class="col-md-2 col-sm-2 col-xs-2"><?= intval($data->list[3]->main->temp) ?>°</span>
                                <span class="col-md-2 col-sm-2 col-xs-2"><?= intval($data->list[4]->main->temp) ?>°</span>
                                <span class="col-md-2 col-sm-2 col-xs-2"><?= intval($data->list[5]->main->temp) ?>°</span>
                            </div>
                        </div>
                        <div class="col-md-3 col-md-offset-1 col-sm-4 col-sm-offset-1 col-xs-8 col-xs-offset-2 weather-card hidden">
                            <div class="col-md-12 text-right">
                                <div><span>Humidity : </span><span class="humidity">20%</span></div>
                                <div><span>Wind : </span><span class="wind">20%</span></div>
                            </div>
                        </div>
                    </div>
                <? endforeach; ?>
            <?php endif; ?>
            
            <div class="col-md-4 col-md-offset-1 col-sm-4 col-sm-offset-1 col-xs-8 col-xs-offset-2 weather-card show add-card">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                        <div class="add hidden">+</div>
                        <form class="form-horizontal show" action="#" method="get">
                            <div class="form-group form-group-small text-center">
                                <label class="col-md-12 col-sm-12 col-xs-12" for="city" class="control-label">Enter a city</label>
                                <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                                    <input type="text" class="form-control" id="city" placeholder="Paris" name="city" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div>
                                    <input type="submit" class="btn btn-default col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4 col-xs-4 col-xs-offset-4" value="Submit">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    
    <script src="assets/js/main.min.js"></script>
</body>

</html>