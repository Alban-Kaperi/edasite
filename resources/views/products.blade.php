@extends('layouts.mdb')

@section('content')



<div class="container">

<div class="row">
<div class="row" style="margin:40px 0px;">
    <div class="col-md-12">
        <img style="width:100%; height:auto; padding:0px; " src="{{ asset('img/limitededition.jpg') }}" alt="Category">
    </div>
</div>
</div>

        <div class="row justify-content-center">
        @foreach($products as $product)
            <div class="col-md-3"  style="padding-bottom:30px;">

                <!-- Card -->
                <div class="card">
                  <!-- Card image -->
                  <div class="view overlay">
                    <img class="card-img-top" src="{{$product->imagePath}}" alt="Card image cap">
                    <a href="{{route('product', ['productID' => $product['id']])}}">
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>

                    <!-- Card content -->
                    <div class="card-body">

                    <!-- Title -->
                    <a href="{{route('product', ['productID' => $product['id']])}}">
                        <h5 class="card-title">{{$product->title}}</h5>
                    </a>
                    <!-- Text -->
                    <!-- <p class="card-text"></p> -->
                    <!-- Button -->
                    <div>
                        <i class="fa fa-cart-plus fa-lg lime-text" aria-hidden="true"></i>
                        <span class="float-right"><b>{{$product->price}}$</b></span>
                    </div>

                    </div>
                </div>
                <!-- Card -->

            </div>
        @endforeach
        </div> <!-- row --> 

        <div class="row">
             <div class="mx-auto">
              {{ $products->links() }}
             </div>             
        </div>
    
</div><!-- container end -->
@endsection



<!-- Full Height Modal Right -->
<div class="modal fade right" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

    <!-- Add class .modal-full-height and then add class .modal-right (or other classes from list above) to set a position to the modal -->
    <div class="modal-dialog modal-full-height modal-right" role="document">


      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title w-100" id="myModalLabel">Shopping Cart Items <i class="fa fa-cart-plus fa-lg" aria-hidden="true"></i></h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Prod. Title</th>
      <th scope="col">Quantity</th>
      <th scope="col">Price</th>
      <th scope="col">Total</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>2</td>
      <td>50$</td>
      <td>100$</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>1</td>
      <td>21$</td>
      <td>21$</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>5</td>
      <td>15$</td>      
      <td>75$</td>
    </tr>
  </tbody>
</table>

<br>
<h3>Total cost= 196$</h3>


        </div>
        <div class="modal-footer justify-content-center">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Chechkout <i class="fa fa-cart-plus fa-lg" aria-hidden="true"></i></button>
        </div>
      </div>
    </div>
  </div>
  <!-- Full Height Modal Right -->


