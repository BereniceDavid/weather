<?php
    include 'includes/handle_form.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    <title>Weather</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans" rel="stylesheet">
    <link href="assets/css/app.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
   
   <div class="container-fluid weather">
      <div class="row">
            <div class="col-md-2 col-sm-3 col-xs-6 weather-card show">
                <div class="main-infos">
                    <div class="row">
                        <button type="button" class="pull-right close delete-card" aria-label="Close"><span>&times;</span></button>
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div class="town">Paris</div>
                            <div class="weather-state">Cloudy</div>
                            <div class="temperature">20°</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="pull-right col-md-12 more-infos btn btn-info">+ Plus d'informations</div>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-sm-3 col-xs-6 weather-card hidden">
                <div class="col-md-12 text-right">
                    <div><span>Humidity : </span><span class="humidity">20%</span></div>
                    <div><span>Wind : </span><span class="wind">20%</span></div>
                </div>
            </div>
      </div>
    </div>
   
    <script src="assets/js/main.min.js"></script>
</body>

</html>