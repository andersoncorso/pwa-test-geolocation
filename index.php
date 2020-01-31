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
        </div>
    </div>
    
    <script src="main.js"></script>

    <script>

        var geoWatch;
        function startWatch() {
            if ( !geoWatch ) {
                if ( "geolocation" in navigator && "watchPosition" in navigator.geolocation ) {

                    geoWatch = navigator.geolocation.watchPosition( 
                        showPosition,
                        showError, {
                            enableHighAccuracy: true,
                            timeout: 15000,
                            maximumAge: 0
                        } );

                }
            }
        }
        startWatch();

        function stopWatch() {
            navigator.geolocation.clearWatch( geoWatch );
            geoWatch = undefined;
        }

        // //function that gets the location and returns it
        // function getLocation() {
        //     if(navigator.geolocation) {
        //         navigator.geolocation.watchPosition(
        //             showPosition,
        //             showError, {
        //                 enableHighAccuracy: false,
        //                 timeout: 15000,
        //                 maximumAge: 0
        //             }
        //         );
        //         // navigator.geolocation.getCurrentPosition(showPosition);
        //         // navigator.geolocation.watchPosition(showPosition);
        //         // navigator.geolocation.clearWatch(showPosition);
        //     }
        //     else {
        //         console.log("Geo Location not supported by browser");
        //     }
        // }

        //function that retrieves the position
        function showPosition(position) {
            console.log(position);
            document.getElementById("latitude").value = position.coords.longitude;
            document.getElementById("longitude").value = position.coords.latitude;
            document.getElementById("altitude").value = position.coords.altitude;
            document.getElementById("accuracy").value = position.coords.accuracy;
            document.getElementById("altitudeAccuracy").value = position.coords.altitudeAccuracy;
            document.getElementById("heading").value = position.coords.heading;
            document.getElementById("speed").value = position.coords.speed;
            document.getElementById("timestamp").value = position.timestamp;
            showInMap(position);
        }

        function showError(error) {
            switch (error.code) {
                case error.PERMISSION_DENIED:
                    console.error( "User denied the request for Geolocation." );
                    break;
                case error.POSITION_UNAVAILABLE:
                    console.error( "Location information is unavailable." );
                    break;
                case error.TIMEOUT:
                    console.error( "The request to get user location timed out." );
                    break;
                case error.UNKNOWN_ERROR:
                    console.error( "An unknown error occurred." );
                    break;
            }
        }

        function showInMap(position) {

            var latlon = position.coords.latitude + "," + position.coords.longitude;
            var img_url = "https://maps.googleapis.com/maps/api/staticmap?center="+latlon+"&markers=color:red%7Clabel:P%7C"+latlon+"&zoom=18&size=800x600&format=png&sensor=false&key=AIzaSyDoJ_JWEGgfXhvTKxBt5izfIoaguBuYxdg";
            var map = document.getElementById("div-map");
            console.log(img_url);
            map.innerHTML = "<img src='"+img_url+"'>";
        }

        //request for location
        // getLocation();   

    </script>

</body>
</html>