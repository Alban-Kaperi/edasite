<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <!-- includes the Braintree JS client SDK -->
        <script src="https://js.braintreegateway.com/web/dropin/1.12.0/js/dropin.min.js"></script>

        <!-- includes jQuery -->
        <script src="http://code.jquery.com/jquery-3.2.1.min.js" crossorigin="anonymous"></script>
        <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <form id="checkout" method="post" action="/payment">
            {{csrf_field()}}
              <div id="payment-form"></div>
              <input type="submit" class="btn btn-default" value="Pay 50$">
            </form>

            <script src="https://js.braintreegateway.com/js/braintree-2.32.1.min.js"></script>
            <script>
            // We generated a client token for you so you can test out this code
            // immediately. In a production-ready integration, you will need to
            // generate a client token on your server (see section below).
            var clientToken = "{{$clientToken}}";

            braintree.setup(clientToken, "dropin", {
              container: "payment-form"
            });
            </script>
        </div>
    </body>
</html>
