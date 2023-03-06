@extends('master')

@section('content')
<div class="container">
    <form id="login_form" action="/login" method="POST">
      <div class="form-group">
        @csrf
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
      </div>
      <button type="submit" class="btn btn-primary" id="login_submit">Login</button>
    </form>
  </div>
@endsection

<style>
    body {
    background-color: #f5f5f5;
  }
  .container {
    margin-top: 50px;
  }
#login_form {
    background-color: #ffffff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0px 0px 10px #888888;
  }
  form label {
    font-weight: bold;
    color: #333333;
  }
  form .form-control {
    border-radius: 0px;
  }
  #login_submit {
    margin-top: 20px;
    border-radius: 0px;
  }
  
</style>
