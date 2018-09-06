@extends('layouts.app')

@section('content')

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
@endsection


