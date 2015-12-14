

<!doctype html>
<html>
<head>
    <title>Learning Javascript</title>
    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <style type="text/css">

    </style>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <style>

        html, body {
            height: 100%;
        }
        .container {
            background-image: url("view.jpeg");
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            padding-top:150px;

        }

        .center {
            text-align: center;
        }
        .white {
            color:white;
        }

        p {
            padding-top: 30px;
            padding-bottom: 30px;
        }

        button {
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .alert {

            margin-top: 20px;
            display: none;

        }

        .weather01 {
            text-align: center;

        }


    </style>

    </head>
<body>

    <div class="container">

        <div class="row">

            <div class="col-md-6 col-md-offset-3 center">

                <h1 class="center">Weather Predictor</h1>

                <p class="lead center white">Enter your city below to get a forcast weather </p>
                <form>

                    <div class="form-group">

                        <input type="text" class="form-control" name="city" id="city" placeholder="Eg. Sydney, London"/>

                    </div>

                    <button id="findMyWeather" class="btn btn-success btn-lg">Find my Weather</button>

                </form>

                <div id="success" class="alert alert-success weather01">Success!</div>
                <div id="fail" class="alert alert-danger weather01">Could not find valid data for that ciry please try again</div>
                <div id="noCity" class="alert alert-danger">Please enter a city</div>
            </div>



        </div>



    </div>






<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<script>

    $("#findMyWeather").click(function(event) {
        event.preventDefault();
        $(".alert").hide();

        if ($("#city").val()!="") {
            $.get("scrapter.php?city="+$("#city").val(), function( data ) {


                if (data=="") {

                    $("#fail").fadeIn();
                } else {

                    $("#success").html(data).fadeIn();
                }
        });

        } else {
            $("#noCity").fadeIn();
        }
    });

</script>
</body>
</html>