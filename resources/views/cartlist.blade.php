@extends('master')
@section('content')

<div class="custom-product">
    <div class="col-sm-12">
        <div class="trending-wrapper">
        <h2>Cart List</h2>
        @foreach ($products as $item)
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
                    <h3>{{$item->description}}</h3>
                  </div> 
            </div>
            <div class="col-sm-3">
                <a href="/removeCart/{{$item->cart_id}}" class="btn btn-warning">Remove From Cart</a> 
            </div>
        </div>
        @endforeach
    </div>
    </div>
</div>

@endsection
