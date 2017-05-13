<?php    
    session_start();
    $_SESSION['cities'] = array();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    <title>Home</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/app.min.css" rel="stylesheet">
</head>

<body>
   
   <div class="container-fluid home">
      <div class="row">
            <pre class="col-md-offset-2 col-sm-8 col-sm-offset-2 col-md-8 col-xs-12">
                <form class="form-horizontal" action="weather.php" method="get">
                    <div class="form-group form-group-lg text-center">
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
            </pre>
      </div>
    </div>
</body>

</html>