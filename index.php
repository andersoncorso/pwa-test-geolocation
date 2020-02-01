<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Geolocation - PWA Tests</title>

    <!-- PWA  -->
    <link rel='manifest' href='manifest.json'>
    <meta name="msapplication-TileColor" content="#317EFB">
    <meta name="msapplication-TileImage" content="/img/icons/ms-icon-144x144.png">
    <meta name="theme-color" content="#317EFB">

</head>
<body>

    <div>
        <a href="index.php">Home</a>
        <a href="static.php">Static Map</a>
    </div>

    <div>
        <h1>Geolocation - PWA Tests</h1>
        <p>
            This is only test with PWA Geolocation.
        </p>
        <p>
            <strong>Timestamp: <input type="text" id="timestamp"><br>
            <br>    
            <strong>Latitude: <input type="text" id="latitude"><br>
            <br>
            <strong>Longitude: <input type="text" id="longitude"><br>
            <br>
            <strong>Altitude: <input type="text" id="altitude"><br>    
            <br>
            <strong>Accuracy (meters): <input type="text" id="accuracy"><br>    
            <br>
            <strong>altitudeAccuracy: <input type="text" id="altitudeAccuracy"><br>    
            <br>
            <strong>Heading: <input type="text" id="heading"><br>    
            <br>
            <strong>Speed: <input type="text" id="speed"><br>   
        </p>
        <br>
        <div id="div-map">
            <!-- map here  -->
        </div>
    </div>
    
    <script src="main.js"></script>
    <script>
    </script>

</body>
</html>