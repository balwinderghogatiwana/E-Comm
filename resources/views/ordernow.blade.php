@extends('master')
@section('content')

<div class="custom-product">
    <div class="col-sm-6">
        <table class="table table-striped">
            <tbody>
              <tr>
                <td>Price</td>
                <td>{{$total}} Rupees</td>
              </tr>
              <tr>
                <td>Tex</td>
                <td>0 Rupees</td>
              </tr>
              <tr>
                <td>Delivery</td>
                <td>100</td>
              </tr>
              <tr>
                <td>Total Amount</td>
                <td>{{$total+100}}</td>
              </tr>
            </tbody>
          </table>
          <form action="orderplace" method="POST">
            @csrf
            <div class="mb-3">
              <textarea class="form-control" placeholder="Enter you address" name="address"></textarea>
            </div>
            <div class="mb-3">
              <label for="" class="form-label">Payment Method</label>
              <p><input type="radio" value="cash" name="payment"><span>Online Payment</span></p>
              <p><input type="radio" value="cash" name="payment"><span>EMI Payment</span></p>
              <p><input type="radio" value="cash" name="payment"><span>Payment on Delivery</span></p>
            </div>
            
            <button type="submit" class="btn btn-primary">Order Now</button>
          </form>
    </div>
</div>

@endsection
