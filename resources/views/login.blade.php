@extends('master')
@section('content')

<div class="container custom-login">
    <div class="row d-flex justify-content-center">
        <div class="col-sm-4 col-sm-offset-4">
            <form action="login" method="POST">
                <div class="row mb-3">
                  @csrf
                    <label for="exampleFormControlInput1" class="col-form-label">Email address</label>                 
                    <div class="col-sm-10">
                    <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Enter email">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputPassword3" class="col-form-label">Password</label>
                  <div class="col-sm-10">
                    <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Enter password">
                  </div>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
              </form>
        </div>
    </div>
</div>
@endsection