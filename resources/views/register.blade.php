<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Cloud</title>
<link rel="stylesheet" href="/css/app.css">
<link rel="stylesheet" href="{{asset('/css/style.css')}}">
</head>
<body>
<div class="card w-50">
    <div class="card-header">
        Register Account
      </div>
      <div class="card-body">
        <h5 class="card-title">Register to open online contact saver</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
{{-- Form  Started--}}

<form action="/registercontroller" method="POST">
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Username</label>
      <input type="text" name='user' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <span class="error">@error('user'){{$message}}@enderror</span>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" name="pass" class="form-control" id="exampleInputPassword1">
      <span class="error">@error('pass'){{$message}}@enderror</span>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Email Id</label>
        <input type="text" name="email" class="form-control" id="exampleInputPassword1">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        <span class="error">@error('email'){{$message}}@enderror</span>
    </div>
<center>
    <a href="/login"><input type="button" class="btn btn-primary" value="Login"></a>
    <input type="submit" value="Register" name="action" class="btn btn-primary"/>
  </form>

</center>

{{-- Form  End--}}

      </div>
</div>

<script src="/js/app.js"></script>
</body>
</html>
