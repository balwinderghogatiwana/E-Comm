@extends('master')
@section('content')

<div class="custom-product">
    <div class="col-sm-4">
        <a href="#">Filter</a>
    </div>
    <div class="col-sm-4">
        <div class="trending-wrapper">
        <h2>Result for Products</h2>
    <div class="carousel-innder" style="display: flex">
        @foreach ($products as $item)
         <ul>
            <li >
                <div class="searched-item">
                  <a href="detail/{{$item['id']}}">

                    <img class="trending-img" src="{{$item['gallery']}}" alt=""> 
                    <div class="">
                     <h2>{{$item['name']}}</h2>
                     <h5>{{$item['description']}}</h5>
                    </div>  
                  </a> 
                </div> 
            </li>
         </ul>  
        @endforeach
    </div>
        </div>
    </div>
  
</div>

@endsection
