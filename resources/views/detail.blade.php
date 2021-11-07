@extends('master')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img class="detail-img" src="{{$product['gallery']}}" alt="">
        </div>
        <div class="col-sm-6">
            <a href="/">Go Back</a>
            <h2>Name: {{$product['name']}}</h2>
            <h2>Price: {{$product['price']}}</h2>
            <h2>Category: {{$product['category']}}</h2>
            <h2>Description: {{$product['description']}}</h2>
            <br><br>
            <form action="/add_to_card" method="post">
                <input type="hidden" name="product_id" value="{{$product['id']}}">
                @csrf
                <button class="btn btn-success">Add to Card</button>
            </form>
            <br><br>
            <button class="btn btn-primary">Buy Now</button>
        </div>
    </div>

@endsection
