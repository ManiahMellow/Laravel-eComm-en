@extends('master')
@section('content')
<div class="row custom-login">
    <div class="col-sm-4 col-sm-offset-4">
        <form action="login" method="POST">
            @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">Email address :</label>
              <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Email">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password :</label>
              <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-default">Login</button>
          </form>
    </div>
</div>
@endsection