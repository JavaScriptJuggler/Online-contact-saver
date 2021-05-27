<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/app.css">
<link rel="stylesheet" href="{{asset('/css/style.css')}}">
</head>
<body>
    <div class="card w-50">
        <div class="card-header">
            Register Account
          </div>
    <div class="card-body">
        <h5 class="card-title">Login your contact directory</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
{{-- Form  Started--}}

<form action="/logincontroller" method="POST">
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
<center>
    <input type="submit" value="Login" name="action" class="btn btn-primary"/>
    <a href="/register"> <input type="button" value="Register" class="btn btn-primary"/></a>
</center>
  </form>

{{-- Form  End--}}

      </div>
    </div>
      <script src="/js/app.js"></script>
</body>
</html>
