<!DOCTYPE html>
<html lang="en">

<head>

    <!-- ==============================================
		Title and Meta Tags
		=============================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | BusinessEnsemble</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta property="og:title" content="" />
    <meta property="og:url" content="" />
    <meta property="og:description" content="" />

    <!-- ==============================================
		Favicons
		=============================================== -->
    <link rel="shortcut icon" href="/assets/imgs/logo-be.jpg">
    <link rel="apple-touch-icon" href="/assets/imgs/logo-be.jpg">
    <link rel="apple-touch-icon" sizes="72x72" href="/assets/imgs/logo-be.jpg">
    <link rel="apple-touch-icon" sizes="114x114" href="/assets/imgs/logo-be.jpg">

    <!-- ==============================================
		CSS
		=============================================== -->
    <link type="text/css" href="/assets/login/assets/css/demos/photo.css" rel="stylesheet" />

    <!-- ==============================================
		Feauture Detection
		=============================================== -->
    <script src="/assets/login/assets/js/modernizr-custom.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyD-PY0Gr0B-Z9zzr1oU3hnH17yLjfPvPpQ"></script>

        <script type="text/javascript">

        var searchInput = 'search_input';

    $(document).ready(function () {
        var autocomplete;
        autocomplete = new google.maps.places.Autocomplete((document.getElementById(searchInput)), {
            types: ['geocode'],
        });

        google.maps.event.addListener(autocomplete, 'place_changed', function () {
            var near_place = autocomplete.getPlace();
            document.getElementById('loc_lat').value = near_place.geometry.location.lat();
            document.getElementById('loc_long').value = near_place.geometry.location.lng();

        });
    });

    $(document).on('change', '#'+searchInput, function () {
        document.getElementById('loc_lat').value = '';
        document.getElementById('loc_long').value = '';

    });

        </script>

</head>

<body>

@yield('content')




    <!-- ==============================================
	 Scripts
	 =============================================== -->
    <script src="/assets/login/assets/js/jquery.min.js"></script>
    <script src="/assets/login/assets/js/bootstrap.min.js"></script>
    <script src="/assets/login/assets/js/base.js"></script>

</body>

</html>
