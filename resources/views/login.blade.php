@extends('master')
@section('content')

<div class="container custom-login">
    <div class="row d-flex justify-content-center">
        <div class="col-sm-4 col-sm-offset-4">
            <form>
                <div class="row mb-3">
                    <label for="exampleFormControlInput1" class="col-form-label">Email address</label>                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="Enter email">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputPassword3" class="col-form-label">Password</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword3" placeholder="Enter Password">
                  </div>
                </div>
                <button type="submit" class="btn btn-primary">Sign in</button>
              </form>
        </div>
    </div>
</div>
@endsection