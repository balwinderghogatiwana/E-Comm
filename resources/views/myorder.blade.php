@extends('master')
@section('content')

<div class="custom-product">
    <div class="col-sm-12">
        <div class="trending-wrapper">
        <h2>Order List</h2>
        @foreach ($orders as $item)
        <div class="row search-item cart-List-devider">
            <div class="col-sm-3">
                <div class="searched-item">
                    <a href="detail/{{$item->id}}">
                      <img class="trending-img" src="{{$item->gallery}}" alt="">  
                    </a> 
                  </div> 
            </div>
            <div class="col-sm-3">
                <div class="searched-item">
                    <h3>{{$item->name}}</h3>
                    <h5>Delivery Status: {{$item->status}}</h5>
                    <h5>Payment Status: {{$item->payment_status}}</h5>
                    <h5>Payment Method: {{$item->payment_method}}</h5>
                    <h5>Delivery Address: {{$item->address}}</h5>
                    <h5>Price: {{$item->price}}</h5>
                  </div> 
            </div>
            <div class="col-sm-3">
{{--                 <a href="/removeCart/{{$item->cart_id}}" class="btn btn-warning">Remove From Cart</a> 
 --}}            </div>
        </div>
        @endforeach
    </div>
    </div>
</div>

@endsection
