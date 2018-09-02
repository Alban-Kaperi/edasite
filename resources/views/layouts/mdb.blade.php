<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Material Design Bootstrap</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('mdb/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="{{ asset('mdb/css/mdb.min.css') }}" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="{{ asset('mdb/css/style.css') }}" rel="stylesheet">
</head>

<body>

    <!--Main Navigation-->
    <header>

        <!--Navbar-->
        @include('partials.navbarmdb')
        <!--/.Navbar-->

		<!--Mask-->
		<div id="intro" class="view">

		    <div class="mask rgba-black-strong">

		        <div class="container-fluid d-flex align-items-center justify-content-center h-100">

		            <div class="row d-flex justify-content-center text-center">

		                <div class="col-md-10">

		                    <!-- Heading -->
		                    <!-- <h2 class="display-4 font-weight-bold white-text pt-5 mb-2">Travel</h2> -->
		                    <img src="{{ asset('img/logo_transparent.png') }}" style="width:200px; margin:auto">

		                    <!-- Divider -->
		                    <hr class="hr-light">
		                    <!-- Description -->
		                    <!-- <h4 class="white-text my-4">Eda, a simple yet magnificent woman!</h4> -->
		                    <button type="button" class="btn btn-outline-white">HALEEDA, Sports Hijab<i class="fa fa-heart ml-2 red-text"></i></button>

		                </div>

		            </div>

		        </div>

		    </div>

		</div>
		<!--/.Mask-->

    </header>
    <!--Main Navigation-->
    @yield('content')

	<!--/.Footer-->
	@include('partials.footer')
	<!--/.Footer-->


<script type="text/javascript" src="{{ asset('mdb/js/jquery-3.3.1.min.js') }}"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="{{ asset('mdb/js/popper.min.js') }}"></script>
<!-- SCRIPTS -->
<script type="text/javascript" src="{{ asset('mdb/js/bootstrap.min.js') }}"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="{{ asset('mdb/js/mdb.min.js') }}"></script><!--Google Maps-->

<script src="https://maps.google.com/maps/api/js"></script>


<!-- Google Maps settings -->
<script>
  // Regular map
  function regular_map() {
      var var_location = new google.maps.LatLng(40.725118, -73.997699);

      var var_mapoptions = {
          center: var_location,
          zoom: 14
      };

      var var_map = new google.maps.Map(document.getElementById("map-container"),
          var_mapoptions);

      var var_marker = new google.maps.Marker({
          position: var_location,
          map: var_map,
          title: "New York"
      });
  }

  // Initialize maps
  google.maps.event.addDomListener(window, 'load', regular_map);
</script>
</body>

</html>











