@extends('layouts.mdb')

@section('content')


<div class="container">
<br><br>
<div class="row">
<div class="col-sm-6">
  <div class="view zoom">
	 <img class="img-fluid img-thumbnail" src="{{ $product->imagePath }}" alt="{{$product->title}}">
  </div>
  <div class="row justify-content-center">
    
      @for ($i =1; $i <= 4; $i++)
      <div class="col-sm-2">
        <img class="img-fluid img-thumbnail" src="{{ $product->imagePath }}" alt="{{$product->title}}">
      </div>
      @endfor  
    
  </div>
</div>
<div class="col-sm-6">
<table class="table">

  <tr>
    <td>Material:</td>
    <td>{{$product->material}}</td>
  </tr>
  
  <tr>
    <td>Color</td>
    <td>{{$product->color}}</td>
  </tr>

  <tr>
    <td>Description:</td>
    <td>{{$product->description}}</td>
  </tr>

  <tr>
    <td>Quantity:</td>
    <td>{{$product->quantity}}</td>
  </tr>

  <tr>
    <td>Price:</td>
    <td>{{$product->price}}$</td>
  </tr>
</table>

</div>
   
</div><!-- row -->  
</div><!-- container end -->

<br><br>
@endsection







