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
        <h1>Geolocation - PWA Tests</h1>
        <p>
            This is only test with PWA Geolocation.
        </p>
        <p>
            <strong>Latitude: <input type="text" id="span-lat" name="span-lat"><br>
            <br>
            <strong>Longitude: <input type="text" id="span-lon"><br>
            <br>
            <strong>Accuracy (meters): <input type="text" id="span-acc"><br>    
        </p>
    </div>
    
    <script src="main.js"></script>

    <script>

        //function that gets the location and returns it
        function getLocation() {
            if(navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition);
            }
            else {
                console.log("Geo Location not supported by browser");
            }
        }

        //function that retrieves the position
        function showPosition(position) {
            var location = {
                longitude: position.coords.longitude,
                latitude: position.coords.latitude,
                accuracy: position.coords.accuracy
            }
            console.log(location)

            document.getElementById("span-lat").value = location.longitude;
            document.getElementById("span-lon").value = location.latitude;
            document.getElementById("span-acc").value = location.accuracy;
        }

        //request for location
        getLocation();   

    </script>

</body>
</html>